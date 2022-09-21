<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Utilities\Cached;

class BaseAdminController extends Controller
{
	public $title = 'UMS Admin';
	public $user;
	public $model;

	private function setCommonData()
	{
		View::share([
			'model' => $this->model,
			'darkMode' => admin_get_darkmode(),
			'admin_title' => $this->title,
			'cached_count' => Cached::count(),
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
