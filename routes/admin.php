<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Middleware\AdminEnsureUserIsMasterDeveloper;
use App\Http\Controllers\Admin\{
    AdminAuthController,
    DashboardController,
    ConfigController,
    UserController,
    RoleController,
};

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

Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('admin.login');
Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('admin.login.post');
Route::get('/logout', [AdminAuthController::class, 'getLogout'])->name('admin.logout');

Route::group(['middleware' => 'adminauth'], function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::group(['middleware' => AdminEnsureUserIsMasterDeveloper::class], function () {
        Route::as('admin.')->group(function () {
            Route::resource('/config', ConfigController::class);
            Route::resource('/user', UserController::class);
            Route::resource('/role', RoleController::class);
        });

        Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('admin.logs');

        Route::get('telescope', function () {
            return redirect()->to('/telescope');
        })->name('admin.telescope');
    });

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
