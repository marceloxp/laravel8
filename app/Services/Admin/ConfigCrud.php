<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\View;
use App\Models\Config;

/**
 * Class ConfigCrud.
 */
class ConfigCrud extends BaseCrud
{
    public $model = Config::class;
    public $title = 'Configurações';

    /**
     * Set display fields on index screen.
     * return void
     */
    public function setIndexFields()
    {
        $captions = $this->model::getFieldsCaptions();
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
        //db_admin_set_pagination_limit(2);
        $this->setIndexFields();
        $table = $this->getIndexTable($request);
        View::share(compact('table'));
        return view($this->indexViewPath, compact('table'));
    }

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

    public function show(Config $config)
    {
        return view($this->showViewPath, compact('config'));
    }

    public function edit(Config $config)
    {
        return view($this->editViewPath, compact('config'));
    }
    
    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Foundation\Http\FormRequest  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FormRequest $request, Config $config)
    {
        return $this->defaultUpdate($request, $config);
    }
    
    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Config $config)
    {
        return $this->defaultDestroy($config);
    }
}
