<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Role;

/**
 * Class User.
 */
class UserCrud extends BaseCrud
{
    public $model = User::class;
    public $title = 'Usuários';

    /**
     * Set display fields on index screen.
     * return void
     */
    public function setIndexFields()
    {
        $captions = User::getFieldsCaptions();
        View::share(compact('captions'));
    }

    /**
     * Get table fields on index screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $this->setIndexFields();
        $table = $this->getIndexTable($request);
        View::share(compact('table'));
        return view($this->indexViewPath, compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::all();
        View::share(compact('roles'));
        return view($this->createViewPath);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FormRequest $request)
    {
        try {
            $form = $request->validated();
            $form = AdminProcessUploads::handle($request, $form);
            $register = User::create($form);

            $roles = isset($form['roles']) ? $form['roles'] : [];
            $register->roles()->sync($roles);
            return redirect()
                ->route(admin_crud_route('user', 'index'))
                ->withMessages('Usuário criado com sucesso.')
            ;
        } catch (\Exception $e) {
            return back()
                ->withErrors($e->getMessage())
                ->withInput()
            ;
        }
    }

    /**
     * Show a data of the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\View\View
     */
    public function show(User $user)
    {
        return view($this->showViewPath, compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FormRequest $request, User $user)
    {
        try {
            $form = $request->validated();
            if (empty($form['password'])) {
                unset($form['password']);
            }
            $form = AdminProcessUploads::handle($request, $form);
            $saved = $user->update($form);
            if ($saved) {
                $roles = isset($form['roles']) ? $form['roles'] : [];
                $user->roles()->sync($roles);
                return redirect()
                    ->route(admin_crud_route('user', 'show'))
                    ->withMessages('Usuário atualizado com sucesso.')
                ;
            }
            throw new \Exception('Ocorreu um erro ao salvar o usuário.');
        } catch (\Exception $e) {
            return back()
                ->withErrors($e->getMessage())
                ->withInput()
            ;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        return $this->defaultDestroy($user);
    }
}
