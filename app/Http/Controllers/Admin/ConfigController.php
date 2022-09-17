<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Config;

class ConfigController extends BaseAdminController
{
    public $model = Config::class;
    public $title = 'Configurações';

    // create index method
    public function index(Request $request)
    {
        return $this->defaultIndex($request);
    }

    // add create or edit method
    public function createOrEdit(Request $request, $id = null)
    {
        return $this->defaultCreateOrEdit($request, $id);
    }

    // add store method
    public function store(Request $request)
    {
        return $this->defaultStore($request);
    }

    // add delete method
    public function delete(Request $request, $id)
    {
        return $this->defaultDelete($request, $id);
    }
}
