<?php

namespace App\Http\Controllers\Admin;

use App\Services\Admin\DashboardAdmin;

class DashboardController extends BaseAdminController
{
    /**
     * Show the application dashboard.
     *
     * @param  \App\Services\Admin\DashboardAdmin  $dashboardAdmin
     * @return \Illuminate\View\View
     */
    public function index(DashboardAdmin $dashboardAdmin)
    {
        return view('admin.dashboard', compact('dashboardAdmin'));
    }
}
