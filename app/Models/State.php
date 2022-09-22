<?php

namespace App\Models;

use App\Utilities\Cached;
use App\Utilities\Result;

class State extends BaseModel
{
    protected $dates    = ['created_at','updated_at','deleted_at'];
    protected $guarded  = ['created_at','updated_at','deleted_at'];
    protected $fillable = ['name', 'uf'];

    /**
     * Get the state by uf
     *
     * @param  String  $p_uf
     * @return \App\Utilities\Result|false
     */
    public static function getStateIdByUf($p_uf)
    {
        try {
            $result = Cached::get(
                'App\Models\State',
                ['getStateIdByUf', $p_uf],
                function () use ($p_uf) {
                    $state = State::select('id')->where('uf', $p_uf)->first();
                    return $state->id ?? false;
                }
            );

            return $result->getData() ?? false;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Get all states and cities.
     *
     * @return \App\Utilities\Result
     */
    public static function getAll()
    {
        try {
            return Cached::get(
                'App\Models\State',
                'getAll',
                function () {
                    return State::select('id', 'name')->pluck('name', 'id')->toArray();
                }
            );
        } catch (\Exception $e) {
            return Result::exception($e);
        }
    }
}
