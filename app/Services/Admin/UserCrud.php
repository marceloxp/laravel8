<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\UserPostRequest;
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
            $table = User::search($search)
                ->orderBy('id', 'desc')
                ->paginate(db_admin_get_pagination_limit())
            ;
        } else {
            // get all users and roles order by id desc
            $table = User::orderBy('id', 'desc')->paginate(db_admin_get_pagination_limit());
        }

        // return view with users
        return $table;
    }

    public static function store(UserPostRequest $request, $model)
    {
        try
        {
            $form = $request->validated();
            $form = AdminProcessUploads::handle($request, $form);
            $register = $model::create($form);
            if ($register)
            {
                $roles = isset($form['roles']) ? $form['roles'] : [];
                $register->roles()->sync($roles);
                return redirect()
                    ->route($model::getAdminPathByDotNotation('index'))
                    ->withMessages('Usuário criado com sucesso.')
                ;
            }
            throw new \Exception('Ocorreu um erro ao salvar o usuário.');
        }
        catch (\Exception $e)
        {
            return back()
                ->withErrors($e->getMessage())
                ->withInput()
            ;
        }
    }

    public static function update(UserPostRequest $request, $model)
    {
        try
        {
            $form = $request->validated();
            if (empty($form['password']))
            {
                unset($form['password']);
            }
            $form = AdminProcessUploads::handle($request, $form);
            $saved = $model->update($form);
            if ($saved)
            {
                $roles = isset($form['roles']) ? $form['roles'] : [];
                $model->roles()->sync($roles);
                return redirect()
                    ->route($model::getAdminPathByDotNotation('index'))
                    ->withMessages('Usuário atualizado com sucesso.')
                ;
            }
            throw new \Exception('Ocorreu um erro ao salvar o usuário.');
        }
        catch (\Exception $e)
        {
            return back()
                ->withErrors($e->getMessage())
                ->withInput()
            ;
        }
    }

    public static function destroy(User $user)
    {
        try
        {
            $user->delete();
            return redirect()
                ->route($user::getAdminPathByDotNotation('index'))
                ->withMessages('Registro excluído com sucesso.')
            ;
        }
        catch (\Exception $e)
        {
            return back()->withErrors($e->getMessage());
        }
    }

}
