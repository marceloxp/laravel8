<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\ConfigPostRequest;
use App\Services\Admin\ConfigCrud;
use App\Models\Config;

class ConfigController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services\Admin\ConfigCrud  $configCrud
     * @return \Illuminate\View\View
     */
    public function index(Request $request, ConfigCrud $configCrud)
    {
        return $configCrud->index($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Services\Admin\ConfigCrud  $configCrud
     * @return \Illuminate\View\View
     */
    public function create(ConfigCrud $configCrud)
    {
        return $configCrud->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\ConfigPostRequest  $request
     * @param  \App\Services\Admin\ConfigCrud  $configCrud
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ConfigPostRequest $request, ConfigCrud $configCrud)
    {
        return $configCrud->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @param  \App\Services\Admin\ConfigCrud  $configCrud
     * @return \Illuminate\View\View
     */
    public function show(Config $config, ConfigCrud $configCrud)
    {
        return $configCrud->show($config);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @param  \App\Services\Admin\ConfigCrud  $configCrud
     * @return \Illuminate\View\View
     */
    public function edit(Config $config, ConfigCrud $configCrud)
    {
        return $configCrud->edit($config);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\ConfigPostRequest  $request
     * @param  \App\Models\Config  $config
     * @param  \App\Services\Admin\ConfigCrud  $configCrud
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ConfigPostRequest $request, Config $config, ConfigCrud $configCrud)
    {
        return $configCrud->update($request, $config);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Config  $config
     * @param  \App\Services\Admin\ConfigCrud  $configCrud
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Config $config, ConfigCrud $configCrud)
    {
        return $configCrud->destroy($config);
    }
}
