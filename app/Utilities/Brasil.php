<?php

namespace App\Utilities;

class Brasil
{
    /**
     * Get all states.
     *
     * @return \App\Utilities\Result
     */
    public static function getStates()
    {
        return \App\Models\State::getAll();
    }

    /**
     * Get the cities by UF.
     *
     * @param  String  $p_uf
     * @return \App\Utilities\Result
     */
    public static function getCitiesByUf($p_uf)
    {
        return \App\Models\City::getByUf($p_uf);
    }
}
