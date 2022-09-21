<?php

namespace App\Http\Controllers\Admin;

use App\Services\Admin\DashboardAdmin;

class DashboardController extends BaseAdminController
{
    // create index method
    public function index(DashboardAdmin $dashboardAdmin)
    {
        return view('admin.dashboard', compact('dashboardAdmin'));
    }
}
