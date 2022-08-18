<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class UserController extends BaseAdminController
{
    // add constructor
    public function __construct()
    {
        $this->model = \App\Models\User::class;
        $this->setAdminTitle('Usuários');
        parent::__construct();
    }

    // create index method
    public function index()
    {
        // get all users and roles paginated order by id desc
        $table = $this->model::orderBy('id', 'desc')->paginate(2);

        // return view with users
        return view('admin.user.index', compact('table'));
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
            return redirect()->route('adminUser');
        }
        $fmt_search = str_replace(' ', '%', $search);
        // get users by search
        $table = $this->model::where('name', 'like', '%' . $fmt_search . '%')
            ->orWhere('email', 'like', '%' . $fmt_search . '%')
            ->orderBy('id', 'desc')
            ->paginate(2);
        return view('admin.user.index', compact('table','search'));
    }

    // add create or edit method
    public function createOrEdit(Request $request, $id = null)
    {
        // get all roles
        $roles = \App\Models\Role::all();

        // get user or create new user
        $register = \App\Models\User::find($id);
        if(!$register)
        {
            $register = new \App\Models\User();
        }
        // return view with user
        return view('admin.user.create_edit', compact('register','roles'));
    }

    public function store(Request $request)
    {
        $id = $request->get('id');

        // get request except _token
        $form = $request->except('_token');
        // remove password if empty
        if(empty($form['password']))
        {
            unset($form['password']);
        }

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
            // if isset form roles
            $roles = isset($form['roles']) ? $form['roles'] : [];
            // sync user roles
            $register->roles()->sync($roles);

			$message = ($id) ? 'Registro atualizado com sucesso.' : 'Registro criado com sucesso.';
			$request->session()->flash('messages', [$message]);

            if ($id)
            {
                return redirect()->route('adminUserEdit', ['id' => $id]);
            }
            else
            {
                return redirect()->route('adminUser');
            }
		}
		else
		{
			return back()
				->withErrors('Ocorreu um erro na gravação do registro.')
				->withInput();
		}
    }

    // create store method
    public function storeOld(Request $request)
    {
        $id = $request->get('id');

        // validate request
        $valid = $this->model::validate($form, $id);
		if (!$valid['success'])
		{
			return back()
				->withErrors($valid['single'])
				->withInput()
			;
		}

        // get request data
        $data = $request->all();
        // create new user
        $user = \App\Models\User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => \Hash::make($data['password']),
        ]);
        // get user roles
        $roles = $data['roles'];
        // if user has roles
        if(!empty($roles))
        {
            // sync user roles
            $user->roles()->sync($roles);
        }
        // return to index with success message
        return redirect()->route('adminUser')->with('success','Usuário criado com sucesso.');
    }

    // create delete method
    public function delete(Request $request, $id)
    {
        // get user by id
        $register = $this->model::find($id);
        // delete user
        $deleted = $register->delete();
        // if user deleted
        if($deleted)
        {
            // return to index with success message
            return redirect()->route('adminUser')->with('messages','Usuário excluído com sucesso.');
        }
        else
        {
            // return to index with error message
            return redirect()->route('adminUser')->withErrors('Ocorreu um erro ao excluir o usuário.');
        }
    }

}
