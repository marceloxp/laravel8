<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\PageController;
use App\Http\Controllers\Admin\AdminAuthController;

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


Route::group
(
    [
        'middleware' => ['frontend'],
        'namespace'  => 'Site',
    ],
    function () {
        Route::group
            (
            [],
            function () {
                Route::get('', [PageController::class, 'index'])->name('site.home');
                Route::get('empresa', [PageController::class, 'empresa'])->name('site.empresa');
            }
        );
    }
);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::get('/logout', [AdminAuthController::class, 'getLogout'])->name('adminLogout');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('adminDashboard');

    });
});
