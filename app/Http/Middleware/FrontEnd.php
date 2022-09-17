<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Utilities\Datasite;
use Closure;

class FrontEnd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if (!$request->ajax())
		{
			$env = env('APP_ENV');
			$routename = Route::currentRouteName();
			$url = 
			[
				'name'    => $routename,
				'base'    => env('APP_URL'),
				'admin'   => sprintf('%s/admin', env('APP_URL')),
				'current' => $request->url()
			];

			Datasite::add('csrf_token', csrf_token());
			Datasite::add(compact('url', 'env'));
		}
		
		return $next($request);
    }
}