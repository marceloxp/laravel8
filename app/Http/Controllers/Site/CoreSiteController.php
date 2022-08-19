<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class CoreSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware
            (
            function ($request, $next) {
                $is_ajax = $request->ajax();
                if ($is_ajax) {
                    return $next($request);
                }
                return $next($request);
            }
        );
    }
}
