<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Log;

/**
 * Class ResultObject.
 */
class ResultObject
{
    public $name;
    public $result;
    public $success;
    public $cached;
    public $message;
    public $data;

    public function __construct($success, $message = '', $data = [], $cached = false, $message_log = '')
    {
        $this->name    = 'Result';
        $this->result  = true;
        $this->success = (!empty($success));
        $this->cached  = $cached;
        $this->message = $message;
        $this->data    = $data;

        if (!empty($message_log))
        {
            if ($success)
            {
                Log::info($message_log);
            }
            else
            {
                Log::error($message_log);
            }
        }
    }

    public function getData()
    {
        return $this->data;
    }

    public function get($data_index)
    {
        return data_get($this->data, $data_index);
    }

    public function message($message)
    {
        $this->message = $message;
        return $this;
    }

    public function data($data)
    {
        $this->data = $data;
        return $this;
    }

    public function name($name)
    {
        $this->name = $name;
        return $this;
    }

    public function cached($cached = true)
    {
        $this->cached = $cached;
        return $this;
    }

    public function log($message_log)
    {
        if (!empty($message_log))
        {
            if ($this->success)
            {
                Log::info($message_log);
            }
            else
            {
                Log::error($message_log);
            }
        }
        return $this;
    }
}

/**
 * Class Result.
 */
class Result
{
    public static function success($message = '', $data = [], $cached = false, $message_log = '')
    {
        return new ResultObject(true, $message, $data, $cached, $message_log);
    }

    public static function data($data = [], $message_log = '')
    {
        return new ResultObject(true, '', $data, false, $message_log);
    }

    public static function cached($p_prefix, $p_cache_name, $message = '', $data = [], $cached, $message_log = '')
    {
        $cache_name   = sprintf('%s-%s', $p_prefix, $p_cache_name);
        $result       = new ResultObject(true, $message, $data, $cached, $message_log);
        $result->name($cache_name);
        return $result;
    }

    public static function error($message = '', $data = [], $message_log = '')
    {
        return new ResultObject(false, $message, $data, false, $message_log);
    }

    public static function ifthen($boolean_value, $success_message = 'Solicitação realizada com sucesso.', $error_message = 'Ocorreu um erro na solicitação.')
    {
        return ($boolean_value) ? self::success($success_message) : self::error($error_message);
    }

    public static function invalid($message = 'Dados inválidos.', $data = [], $message_log = '')
    {
        return new ResultObject(false, $message, $data, false, $message_log);
    }

    public static function exception($exception, $message = 'Ocorreu um erro na solicitação.')
    {
        return new ResultObject(false, $message, ['exception' => $exception], false, $exception->getMessage());
    }

    public static function undefined($message = 'Ocorreu um erro na solicitação.', $data = [], $message_log = '')
    {
        return new ResultObject(false, $message, $data, false, $message_log);
    }
}
