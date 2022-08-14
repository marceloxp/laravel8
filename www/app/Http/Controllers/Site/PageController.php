<?php

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\View;

class PageController extends SiteController
{
    public function index()
    {
        return view('site/pages/home');
    }

    public function empresa()
    {
        return view('site/pages/empresa');
    }
}
