<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\UserPostRequest;
use App\Services\Admin\UserCrud;
use App\Models\User;
use \App\Models\Role;

class UserController extends BaseAdminController
{
    public $model = User::class;
    public $title = 'Usuários';
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        //db_admin_set_pagination_limit(2);
		$table = UserCrud::index($request);
        return view($this->model::getAdminViewPath('index'), compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::all();
        return view($this->model::getAdminViewPath('create'), compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\UserPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserPostRequest $request, User $user)
    {
        return UserCrud::store($request, $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\View\View
     */
    public function show(User $user, UserCrud $userCrud)
    {
        # TODO: Adjust register variable to model name variable as sent in the view
        return view($this->model::getAdminViewPath('show'), ['register' => $user, 'userCrud' => $userCrud]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view($this->model::getAdminViewPath('edit'), ['register' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\UserPostRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserPostRequest $request, User $user)
    {
        return UserCrud::update($request, $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return UserCrud::destroy($user);
    }

}
