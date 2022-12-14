<?php

use Illuminate\Support\Facades\DB;
use App\Utilities\Cached;

if (!function_exists('state_city')) {
    function state_city()
    {
        $cities = Cached::get(
            'frontend',
            'get_statecity_json',
            function () {
                return DB::table('cities')
                    ->join('states', 'states.id', '=', 'cities.state_id')
                    ->select('states.name AS state_name', 'states.uf AS state_uf', 'cities.id AS city_id', 'cities.name AS city_name', 'cities.state_id')
                    ->get()
                    ->toJson()
                ;
            },
            60
        );
        $cities = $cities->getData();

        echo javascript_var('statecity', $cities, false);
        echo javascript('/js/statecity.js');
    }
}
