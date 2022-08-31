<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\UserController;
// add use AdminEnsureUserIsMasterDeveloper
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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::get('/logout', [AdminAuthController::class, 'getLogout'])->name('adminLogout');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return redirect()->route('adminDashboard');
        });
        // add dashboard route
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('adminDashboard');

        // add route group with middleware to ensure user is master or developer
        Route::group(['middleware' => AdminEnsureUserIsMasterDeveloper::class], function () {
            // add grouped config all routes
            Route::group(['prefix' => 'config'], function () {
                Route::get('/', [ConfigController::class, 'index'])->name('adminConfig');
                Route::get('/create', [ConfigController::class, 'createOrEdit'])->name('adminConfigCreate');
                Route::post('/store', [ConfigController::class, 'store'])->name('adminConfigStore');
                Route::get('/edit/{id}', [ConfigController::class, 'createOrEdit'])->name('adminConfigEdit');
                Route::post('/update/{id}', [ConfigController::class, 'update'])->name('adminConfigUpdate');
                Route::delete('/delete/{id}', [ConfigController::class, 'delete'])->name('adminConfigDelete');
                Route::get('/search', [ConfigController::class, 'index'])->name('adminConfigSearch');
            });

            // add grouped user all routes
            Route::group(['prefix' => 'user'], function () {
                Route::get('/', [UserController::class, 'index'])->name('adminUser');
                Route::get('/create', [UserController::class, 'createOrEdit'])->name('adminUserCreate');
                Route::post('/store', [UserController::class, 'store'])->name('adminUserStore');
                Route::get('/edit/{id}', [UserController::class, 'createOrEdit'])->name('adminUserEdit');
                Route::post('/update/{id}', [UserController::class, 'update'])->name('adminUserUpdate');
                Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('adminUserDelete');
                Route::get('/search', [UserController::class, 'index'])->name('adminUserSearch');
            });

            Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('adminLogs');
        });

        // add clear cache route
        Route::get('/clear-cache', function () {
            $exitCode = Artisan::call('cache:clear');
            $exitCode = Artisan::call('view:clear');
            $exitCode = Artisan::call('config:clear');
            $exitCode = Artisan::call('route:clear');
            $exitCode = Artisan::call('makex:cached --clear');
            session()->flash('messages', ['Cache limpo com sucesso']);
            return redirect()->route('adminDashboard');
        })->name('adminClearCache');
    });
});
