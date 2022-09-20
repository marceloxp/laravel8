<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Utilities\AdminCrud;
use App\Models\Config;

/**
 * Class ConfigCrud.
 */
class ConfigCrud
{
    /**
     * Get display fields on show screen.
     *
     * @return \Illuminate\Support\Collection
     */
    public function showFields()
    {
        return Config::getFieldsCaptions()->except(['deleted_at']);
    }

    /**
     * Get table fields on index screen.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config::class  $modelClass
     * @return array
     */
    public static function index(Request $request)
    {
        return AdminCrud::index($request, Config::class);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @param  \App\Models\Config  $model
     * @return \Illuminate\Http\Response
     */
    public static function store(FormRequest $request, Config $config)
    {
        return AdminCrud::store($request, $config);
    }
    
    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @param  \App\Models\Config  $model
     * @return \Illuminate\Http\Response
     */
    public static function update(FormRequest $request, Config $config)
    {
        return AdminCrud::update($request, $config);
    }
    
    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Config  $model
     * @return \Illuminate\Http\Response
     */
    public static function destroy(Config $config)
    {
        return AdminCrud::destroy($config);
    }
}
