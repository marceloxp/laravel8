<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Role;

/**
 * Class User.
 */
class UserCrud
{
    public static function index(Request $request)
    {
        // get search value
        $search = trim($request->get('search'));

        // remove all special characters and preserve space from search value
        $search = trim(preg_replace('/[^A-Za-z0-9\-]/', ' ', $search));

        // share $search to view
        View::share(compact('search'));

        if (!empty($search)) {
            // get all users and roles order by id desc
            $table = User::where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orderBy('id', 'desc')
                ->paginate($request->get('limit', 10));
        } else {
            // get all users and roles order by id desc
            $table = User::orderBy('id', 'desc')->paginate($request->get('limit', 10));
        }

        // return view with users
        return $table;
    }

    public static function createOrEdit(Request $request, $id = null)
    {
        // get all roles
        $roles = Role::all();
        View::share(compact('roles'));

        // get user or create new user
        $register = User::find($id);
        if(!$register)
        {
            $register = new User();
        }

        return $register;
    }

    public static function store(Request $request)
    {
        try
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
            $valid = User::validate($form, $id);
            if (!$valid['success'])
            {
                throw new \Exception($valid['single']);
            }
    
            $form = AdminProcessUploads::handle($request, $form);
    
            if (!empty($id))
            {
                $register = User::firstOrNew(['id' => $id]);
                $register->fill($form);
            }
            else
            {
                $register = User::create($form);
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
                throw new \Exception('Ocorreu um erro ao salvar o usuário.');
            }
        }
        catch (\Exception $e)
        {
            return back()
                ->withErrors($e->getMessage())
                ->withInput()
            ;
        }
    }

    public static function delete(Request $request, $id)
    {
        // get user by id
        $register = User::find($id);
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
