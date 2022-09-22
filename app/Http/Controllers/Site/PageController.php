<?php

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\View;

class PageController extends SiteController
{
    /**
     * Show the application home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('site/pages/home');
    }

    /**
     * Show the application about page.
     *
     * @return \Illuminate\View\View
     */
    public function empresa()
    {
        return view('site/pages/empresa');
    }
}
