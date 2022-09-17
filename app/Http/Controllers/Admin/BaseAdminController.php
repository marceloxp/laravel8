<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\DefaultCrud;
use App\Utilities\Datasite;
use App\Utilities\Cached;

class BaseAdminController extends Controller
{
	public $title = 'UMS Admin';
	public $pagination_limit = 10;
	public $user;
	public $route_name;
	public $fields_captions;
	public $model;

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
				$darkMode = Cookie::get('dark-mode');
				$darkMode = (!empty($darkMode)) ? 'dark-mode' : '';
				View::share('darkMode', $darkMode);

				$is_ajax = $request->ajax();
				if ($is_ajax)
				{
					return $next($request);
				}

				View::share(['admin_title' => $this->title]);

				// get count of cached
				$cached_count = Cached::count();
				View::share('cached_count', $cached_count);

				$this->user = $user;
				$this->route_name = $route_name;

				// get all field captions
				if (isset($this->model))
				{
					$this->fields_captions = $this->model::getFieldsCaptions();
					View::share('fields_captions', $this->fields_captions);
					View::share('model', $this->model);
				}

				// add view share data with compact function
                View::share(compact('user','route_name'));

                return $next($request);
			}
		);
    }

	public function defaultIndex(Request $request)
    {
		$table = DefaultCrud::index($request, $this->model);
        return view($this->model::getAdminViewPath('index'), compact('table'));
    }

    // add create or edit method
    public function defaultCreateOrEdit(Request $request, $id = null)
    {
		$register = DefaultCrud::defaultCreateOrEdit($request, $this->model, $id);
        return view($this->model::getAdminViewPath('create_edit'), compact('register'));
    }

    // add store method
    public function defaultStore(Request $request)
    {
		return DefaultCrud::defaultStore($request, $this->model);
    }

    // add delete method
    public function defaultDelete(Request $request, $id)
    {
		return DefaultCrud::defaultDelete($request, $this->model, $id);
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
