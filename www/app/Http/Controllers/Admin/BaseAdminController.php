<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseAdminController extends Controller
{
	public $admin_title = 'UMS Admin';

    // create constructor method
    public function __construct()
    {
		$this->middleware
		(
			function($request, $next)
			{
                $user = auth()->guard('admin')->user();
				$route_name = Route::currentRouteName();

				$is_ajax = $request->ajax();
				if ($is_ajax)
				{
					return $next($request);
				}

				$this->setAdminTitle($this->admin_title);
				$this->user = $user;
				$this->route_name = $route_name;

				// get all field captions
				if (isset($this->model))
				{
					$fields_captions = $this->model::getFieldsCaptions();
					View::share('fields_captions', $fields_captions);
				}

				// add view share data with compact function
                View::share(compact('user','route_name'));

                return $next($request);
			}
		);
    }

	// add function set admin title
	public function setAdminTitle($admin_title)
	{
		$this->admin_title = $admin_title;
		View::share(['admin_title' => $this->admin_title]);
	}
    
}
