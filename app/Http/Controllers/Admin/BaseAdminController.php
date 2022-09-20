<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\Controller;
use App\Utilities\Cached;

class BaseAdminController extends Controller
{
	public $title = 'UMS Admin';
	public $user;
	public $route_name;
	public $model;

	private function setCommonData()
	{
		$darkMode = Cookie::get('dark-mode');
		$darkMode = (!empty($darkMode)) ? 'dark-mode' : '';
		$fields_captions = ($this->model) ? $this->model::getFieldsCaptions() : [];
		$fields_show = collect($fields_captions)->except('deleted_at')->toArray();

		View::share([
			'model' => $this->model,
			'darkMode' => $darkMode,
			'admin_title' => $this->title,
			'cached_count' => Cached::count(),
			'route_name' => Route::currentRouteName(),
			'fields_captions' => $fields_captions,
			'fields_show' => $fields_show,
		]);
	}

    public function __construct()
    {
		$this->middleware(function ($request, $next) {
			$this->setCommonData();
			$this->user = auth()->guard('admin')->user();
			View::share(['user' => $this->user]);
			return $next($request);
		});
    }
   
}
