<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Utilities\Brasil;

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

Route::prefix('brasil')->group(
    function () {
        Route::get(
            'states',
            function () {
                $result = Brasil::getStates()->toJson();
                return response($result)->withHeaders(cached_headers($result));
            }
        );

        Route::get(
            'cities/{uf}',
            function ($uf) {
                $result = Brasil::getCitiesByUf($uf)->toJson();
                return response($result)->withHeaders(cached_headers($result));
            }
        );

        # TODO: Create a separate package for this
        // Route::get(
        //     'cep/{cep}',
        //     function ($cep) {
        //         $result = cep_to_address($cep);
        //         return $result->getData();
        //     }
        // );
    }
);
