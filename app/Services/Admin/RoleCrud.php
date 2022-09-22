<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\View;
use App\Models\Role;

/**
 * Class RoleCrud.
 */
class RoleCrud extends BaseCrud
{
    public $model = Role::class;
    public $title = 'Permissões';

    /**
     * Get table fields on index screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $this->setOption('index.search', false);
        $captions = Role::getFieldsCaptions();
        $table = $this->getIndexTable($request);
        View::share(compact('captions', 'table'));
        return view($this->indexViewPath);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
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
        return $this->defaultStore($request);
    }

    /**
     * Show a data of the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\View\View
     */
    public function show(Role $role)
    {
        return view($this->showViewPath, compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\View\View
     */
    public function edit(Role $role)
    {
        return view($this->editViewPath, compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FormRequest $request, Role $role)
    {
        return $this->defaultUpdate($request, $role);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Role $role)
    {
        return $this->defaultDestroy($role);
    }
}
