<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends BaseAdminController
{
    public $model = User::class;
    public $title = 'Usuários';
    
    // create index method with search and pagination limit
    public function index(Request $request)
    {
        // get search value
        $search = trim($request->get('search'));

        // remove all special characters and preserve space from search value
        $search = trim(preg_replace('/[^A-Za-z0-9\-]/', ' ', $search));
        
        if (!empty($search)) {
            // get all users and roles order by id desc
            $table = $this->model::where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orderBy('id', 'desc')
                ->paginate($this->getpaginationLimit());
        } else {
            // get all users and roles order by id desc
            $table = $this->model::orderBy('id', 'desc')->paginate($this->getpaginationLimit());
        }

        // return view with users
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

        $form = $this->processUploads($request, $form);

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

			$message = ($id) ? 'Usuário atualizado com sucesso.' : 'Usuário criado com sucesso.';
			$request->session()->flash('messages', $message);

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
				->withErrors('Ocorreu um erro na gravação do usuário.')
				->withInput();
		}
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
