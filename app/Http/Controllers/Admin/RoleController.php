<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\RolePostRequest;
use App\Services\Admin\RoleCrud;
use App\Models\Role;

class RoleController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services\Admin\RoleCrud  $roleCrud
     * @return \Illuminate\View\View
     */
    public function index(Request $request, RoleCrud $roleCrud)
    {
        return $roleCrud->index($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Services\Admin\RoleCrud  $roleCrud
     * @return \Illuminate\View\View
     */
    public function create(RoleCrud $roleCrud)
    {
        return $roleCrud->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\RolePostRequest  $request
     * @param  \App\Services\Admin\RoleCrud  $roleCrud
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RolePostRequest $request, RoleCrud $roleCrud)
    {
        return $roleCrud->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @param  \App\Services\Admin\RoleCrud  $roleCrud
     * @return \Illuminate\View\View
     */
    public function show(Role $role, RoleCrud $roleCrud)
    {
        return $roleCrud->show($role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @param  \App\Services\Admin\RoleCrud  $roleCrud
     * @return \Illuminate\View\View
     */
    public function edit(Role $role, RoleCrud $roleCrud)
    {
        return $roleCrud->edit($role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\RolePostRequest  $request
     * @param  \App\Models\Role  $role
     * @param  \App\Services\Admin\RoleCrud  $roleCrud
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RolePostRequest $request, Role $role, RoleCrud $roleCrud)
    {
        return $roleCrud->update($request, $role);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @param  \App\Services\Admin\RoleCrud  $roleCrud
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Role $role, RoleCrud $roleCrud)
    {
        return $roleCrud->destroy($role);
    }
}
