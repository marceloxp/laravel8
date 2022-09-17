<?php

namespace App\Http\Controllers\Admin;

class DashboardController extends BaseAdminController
{
    public $title = 'Dashboard';

    // create index method
    public function index()
    {
        return view('admin.dashboard');
    }
}
