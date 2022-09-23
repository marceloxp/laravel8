<?php

namespace App\Models;

use App\Utilities\Cached;
use App\Utilities\Result;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends BaseModel
{
    use SoftDeletes;
    protected $guarded  = ['created_at','updated_at','deleted_at'];

    /**
     * Get the state that owns the city.
     *
     * @param  String  $p_uf
     * @return \App\Utilities\Result
     */
    public static function getByUf($p_uf)
    {
        $uf_id = State::getStateIdByUf($p_uf);
        if (empty($uf_id)) {
            return Result::undefined();
        }

        return Cached::get(
            'App\Models\City',
            ['getByUf', $p_uf],
            function () use ($uf_id) {
                return City::select('id', 'name')->where('state_id', $uf_id)->pluck('name', 'id')->toArray();
            }
        );
    }

    /**
     * Define a relationship with the state model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function state()
    {
        return $this->hasOne(State::class, 'id', 'state_id');
    }
}
