<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Middleware\AdminEnsureUserIsMasterDeveloper;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('admin.login.post');
    Route::get('/logout', [AdminAuthController::class, 'getLogout'])->name('admin.logout');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });
        // add dashboard route
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        // add route group with middleware to ensure user is master or developer
        Route::group(['middleware' => AdminEnsureUserIsMasterDeveloper::class], function () {
            // add config resource route
            Route::resource('/config', ConfigController::class, ['as' => 'admin']);
            Route::resource('/user', UserController::class, ['as' => 'admin']);
            Route::resource('/role', RoleController::class, ['as' => 'admin']);

            Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('admin.logs');

            // add route to simple folder telescope (https://laravel.com/docs/8.x/telescope)
            Route::get('telescope', function () {
                return redirect()->to('/telescope');
            })->name('admin.telescope');
        });

        // add clear cache route
        Route::get('/clear-cache', function () {
            Artisan::call('cache:clear');
            Artisan::call('view:clear');
            Artisan::call('config:clear');
            Artisan::call('route:clear');
            Artisan::call('makex:cached --clear');
            session()->flash('messages', ['Cache limpo com sucesso']);
            return redirect()->route('admin.dashboard');
        })->name('admin.cache.clear');
    });
});
