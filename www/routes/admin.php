<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ConfigController;

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

        // add grouped config all routes
        Route::group(['prefix' => 'config'], function () {
            Route::get('/', [ConfigController::class, 'index'])->name('adminConfig');
            Route::get('/create', [ConfigController::class, 'createOrEdit'])->name('adminConfigCreate');
            Route::post('/store', [ConfigController::class, 'store'])->name('adminConfigStore');
            Route::get('/edit/{id}', [ConfigController::class, 'createOrEdit'])->name('adminConfigEdit');
            Route::post('/update/{id}', [ConfigController::class, 'update'])->name('adminConfigUpdate');
            Route::delete('/delete/{id}', [ConfigController::class, 'delete'])->name('adminConfigDelete');
        });
    });
});
