<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\ConfigPostRequest;
use App\Services\Admin\DefaultCrud;
use App\Models\Config;

class ConfigController extends BaseAdminController
{
    public $model = Config::class;
    public $title = 'Configurações';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //db_admin_set_pagination_limit(2);
		$table = DefaultCrud::index($request, $this->model);
        return view($this->model::getAdminViewPath('index'), compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->model::getAdminViewPath('create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfigPostRequest $request)
    {
        return DefaultCrud::store($request, $this->model);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        return view($this->model::getAdminViewPath('edit'), ['register' => $config]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(ConfigPostRequest $request, Config $config)
    {
        return DefaultCrud::update($request, $config);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Config $config)
    {
        return DefaultCrud::destroy($request, $config);
    }
}
