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
    public function index()
    {
        // get all configs paginated order by id desc
        $configs = $this->model::orderBy('id', 'desc')->paginate(2);

        // return view with configs
        return view('admin.config.index', compact('configs'));
    }

    // add serach method
    public function search(Request $request)
    {
        // get search value
        $search = trim($request->get('search'));

        // remove all special characters and preserve space from search value
        $search = trim(preg_replace('/[^A-Za-z0-9\-]/', ' ', $search));

        if (empty($search))
        {
            return redirect()->route('adminConfig');
        }

        $fmt_search = str_replace(' ', '%', $search);

        // get posts by search
        $configs = $this->model::where('name', 'like', '%' . $fmt_search . '%')
            ->orWhere('value', 'like', '%' . $fmt_search . '%')
            ->orderBy('id', 'desc')
            ->paginate(2);
        return view('admin.config.index', compact('configs','search'));
    }

    // add create or edit method
    public function createOrEdit(Request $request, $id = null)
    {
        // get config or create new config
        $config = \App\Models\Config::find($id);
        if(!$config)
        {
            $config = new \App\Models\Config();
        }
        // return view with config
        return view('admin.config.create_edit', compact('config'));
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
                return redirect()->route('adminConfigEdit', ['id' => $id]);
            }
            else
            {
                return redirect()->route('adminConfig');
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
        $config = $this->model::find($id);
        if($config)
        {
            $config->delete();
            $request->session()->flash('messages', ['Registro excluído com sucesso.']);
        }
        else
        {
            $request->session()->flash('messages', ['Registro não encontrado.']);
        }
        return redirect()->route('adminConfig');
    }
}
