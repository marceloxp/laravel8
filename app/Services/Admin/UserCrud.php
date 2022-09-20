<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\UserPostRequest;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Utilities\AdminCrud;

/**
 * Class User.
 */
class UserCrud
{
    /**
     * Get display fields on show screen.
     *
     * @return array
     */
    public function showFields()
    {
        return User::getFieldsCaptions()->except(['password', 'remember_token', 'email_verified_at', 'deleted_at'])->toArray();
    }

    public static function index(Request $request)
    {
        return AdminCrud::index($request, User::class);
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
        return AdminCrud::destroy($user);
    }

}
