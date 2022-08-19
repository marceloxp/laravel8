<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('brasil')->group
(
	function()
	{
		Route::get
		(
			'states',
			function()
			{
				$result = \App\Http\Utilities\Brasil::getStates();
				return response($result)->withHeaders(cached_headers($result));
			}
		);

		Route::get
		(
			'cities/{uf}',
			function($uf)
			{
				$result = \App\Http\Utilities\Brasil::getCitiesByUf($uf);
				return response($result)->withHeaders(cached_headers($result));
			}
		);

		Route::get
		(
			'cep/{cep}',
			function($cep)
			{
				$result = cep_to_address($cep);
				return $result['data'];
			}
		);
	}
);
