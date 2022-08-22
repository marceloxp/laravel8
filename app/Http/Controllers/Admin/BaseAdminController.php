<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseAdminController extends Controller
{
	public $admin_title = 'UMS Admin';
	public $pagination_limit = 10;

    // create constructor method
    public function __construct()
    {
		$this->middleware
		(
			function($request, $next)
			{
                $user = auth()->guard('admin')->user();
				$route_name = Route::currentRouteName();
				$this->setPaginationLimit(intval(env('ADMIN_PAGINATION_LIMIT')));

				// get config from browser cookie
				$darkMode = \Cookie::get('dark-mode');
				$darkMode = (!empty($darkMode)) ? 'dark-mode' : '';
				View::share('darkMode', $darkMode);

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

	// add set pagination limit method
	public function setPaginationLimit($pagination_limit)
	{
		$this->pagination_limit = $pagination_limit;
	}

	// add function get pagination limit
	public function getPaginationLimit()
	{
		return $this->pagination_limit;
	}
    
}
