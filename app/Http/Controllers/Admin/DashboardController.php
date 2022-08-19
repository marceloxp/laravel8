<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class DashboardController extends BaseAdminController
{
    // create index method
    public function index()
    {
        return view('admin.dashboard');
    }
}
