<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ConfigController extends BaseAdminController
{
    // add constructor
    public function __construct()
    {
        $this->model = \App\Models\Config::class;
        parent::__construct();
    }

    // create index method
    public function index()
    {
        // get all configs paginated
        $configs = \App\Models\Config::paginate(2);

        // return view with configs
        return view('admin.config.index', compact('configs'));
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
			return redirect(request()->headers->get('referer'));
		}
		else
		{
			return back()
				->withErrors('Ocorreu um erro na gravação do registro.')
				->withInput();
		}
    }
}
