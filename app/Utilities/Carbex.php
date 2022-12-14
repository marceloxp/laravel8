<?php

namespace App\Utilities;

class Carbex extends \Carbon\Carbon
{
    public $_data;

    public function noTime()
    {
        return $this->resetTime();
    }

    public function resetTime()
    {
        $this->setTime(0, 0, 0);
        return $this;
    }

    public static function currentDate()
    {
        return self::now()->noTime();
    }

    public static function currentDateTime()
    {
        return self::now();
    }

    public function toBrDate()
    {
        return $this->format('d/m/Y');
    }

    public function toBrDateTime()
    {
        return $this->format('d/m/Y H:i:s');
    }

    public function toJdateTime()
    {
        return $this->format('YmdHisu');
    }

    public function toSqlDate()
    {
        return $this->format('Y-m-d');
    }

    public function toSqlDateTime()
    {
        return $this->format('Y-m-d H:i:s');
    }

    public static function fromString($p_str)
    {
        return self::parse($p_str);
    }

    public function hms($p_hour = 0, $p_minute = 0, $p_second = 0)
    {
        return self::hour($p_hour)->minute($p_minute)->second($p_second);
    }

    public function gtNow()
    {
        return self::gt(Carbex::now());
    }

    public function ltNow()
    {
        return self::lt(Carbex::now());
    }

    public function gtCurrentDate()
    {
        return self::gt(Carbex::currentDate());
    }

    public function gtCurrentDateTime()
    {
        return self::gt(Carbex::currentDateTime());
    }

    public function ltCurrentDate()
    {
        return self::lt(Carbex::currentDate());
    }

    public function ltCurrentDateTime()
    {
        return self::lt(Carbex::currentDateTime());
    }

    public static function tryParse($p_str)
    {
        try {
            self::parse($p_str);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function data($p_data = null)
    {
        if (!empty($p_data)) {
            $this->_data = \Illuminate\Support\Collection::wrap($p_data);
            return $this->_data;
        } else {
            if (!$this->_data) {
                $this->_data = collect([]);
            }
            return $this->_data;
        }
    }
}
