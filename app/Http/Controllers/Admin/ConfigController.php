<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ConfigController extends BaseAdminController
{
    // add constructor
    public function __construct()
    {
        $this->model = \App\Models\Config::class;
        $this->setAdminTitle('Configurações');
        parent::__construct();
    }

    // create index method
    public function index(Request $request)
    {
        // get search value
        $search = trim($request->get('search'));

        // remove all special characters and preserve space from search value
        $search = trim(preg_replace('/[^A-Za-z0-9\-]/', ' ', $search));

        if (!empty($search)) {
            // get all table order by id desc
            $table = $this->model::where('name', 'like', '%' . $search . '%')
                ->orWhere('value', 'like', '%' . $search . '%')
                ->orderBy('id', 'desc')
                ->paginate($this->getpaginationLimit());
        } else {
            // get all table order by id desc
            $table = $this->model::orderBy('id', 'desc')->paginate($this->getpaginationLimit());
        }

        // return view with table
        return view($this->model::getAdminViewPath('index'), compact('table','search'));
    }

    // add create or edit method
    public function createOrEdit(Request $request, $id = null)
    {
        // get table or create new table
        $register = $this->model::find($id);
        if(!$register)
        {
            $register = new $this->model();
        }
        // return view with table
        return view($this->model::getAdminViewPath('create_edit'), compact('register'));
    }

    // add store method
    public function store(Request $request)
    {
        $id = $request->get('id');

        // get request except _token
        $form = $request->except('_token');

        // validate request
		$valid = $this->model::validate($form, $id);
		if (!$valid['success'])
		{
			return back()
				->withErrors($valid['single'])
				->withInput()
			;
		}

		if (!empty($id))
		{
			$register = $this->model::firstOrNew(['id' => $id]);
			$register->fill($form);
		}
		else
		{
			$register = $this->model::create($form);
		}
        $saved = (empty($id)) ? ($register->save()) : ($register->update());

		if ($saved)
		{
			$message = ($id) ? 'Registro atualizado com sucesso.' : 'Registro criado com sucesso.';
			$request->session()->flash('messages', [$message]);

            if ($id)
            {
                return redirect()->route($this->model::getAdminRouteName('edit'), ['id' => $id]);
            }
            else
            {
                return redirect()->route($this->model::getAdminRouteName('index'));
            }
		}
		else
		{
			return back()
				->withErrors('Ocorreu um erro na gravação do registro.')
				->withInput();
		}
    }

    // add delete method
    public function delete(Request $request, $id)
    {
        $register = $this->model::find($id);
        if($register)
        {
            $register->delete();
            $request->session()->flash('messages', ['Registro excluído com sucesso.']);
        }
        else
        {
            $request->session()->flash('messages', ['Registro não encontrado.']);
        }
        return redirect()->route($this->model::getAdminRouteName('index'));
    }
}
