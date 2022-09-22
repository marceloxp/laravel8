<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\UserPostRequest;
use App\Services\Admin\UserCrud;
use App\Models\User;
use App\Models\Role;

class UserController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services\Admin\UserCrud  $userCrud
     * @return \Illuminate\View\View
     */
    public function index(Request $request, UserCrud $userCrud)
    {
        return $userCrud->index($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Services\Admin\UserCrud  $userCrud
     * @return \Illuminate\View\View
     */
    public function create(UserCrud $userCrud)
    {
        return $userCrud->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\UserPostRequest  $request
     * @param  \App\Services\Admin\UserCrud  $userCrud
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserPostRequest $request, UserCrud $userCrud)
    {
        return $userCrud->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Services\Admin\UserCrud  $userCrud
     * @return \Illuminate\View\View
     */
    public function show(User $user, UserCrud $userCrud)
    {
        return $userCrud->show($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Services\Admin\UserCrud  $userCrud
     * @return \Illuminate\View\View
     */
    public function edit(User $user, UserCrud $userCrud)
    {
        $roles = Role::all();
        return view($userCrud->editViewPath, compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\UserPostRequest  $request
     * @param  \App\Models\User  $user
     * @param  \App\Services\Admin\UserCrud  $userCrud
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserPostRequest $request, User $user, UserCrud $userCrud)
    {
        return $userCrud->update($request, $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Services\Admin\UserCrud  $userCrud
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user, UserCrud $userCrud)
    {
        return $userCrud->destroy($user);
    }
}
