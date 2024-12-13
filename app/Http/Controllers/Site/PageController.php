<?php

namespace App\Http\Controllers\Site;

use Illuminate\View\View;

class PageController extends SiteController
{
    public function index(): View
    {
        // MetaSocial::set('title', env('APP_NAME') . ' - Section');
        return view('site.pages.home');
    }

    public function empresa(): View
    {
        return view('site.pages.empresa');
    }

    public function docs(): View
    {
        return view('site.pages.docs');
    }
}
