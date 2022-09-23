<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Log;

/**
 * Class Result.
 */
class Result
{
    public $name;
    public $result;
    public $success;
    public $message;
    public $cached;
    public $data;

    /**
     * Result constructor.
     *
     * @param $success
     * @param $message
     * @param $data
     * @param $cached
     * @param $log
     */
    public function __construct($success, $message = '', $data = [], $cached = false, $log = '')
    {
        $this->name    = 'Result';
        $this->result  = true;
        $this->success = (!empty($success));
        $this->message = $message;
        $this->cached  = $cached;
        $this->data    = $data;

        $this->log($log);
    }

    /**
     * Retrieve the data property.
     * 
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Retrieve de value inside a data property.
     * 
     * @param  string $key
     * 
     * @return mixed
     */
    public function get($key)
    {
        return data_get($this->data, $key);
    }

    /**
     * Set a message property.
     * 
     * @param  string $message
     * 
     * @return self
     */
    public function message($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Set a data property.
     * 
     * @param  mixed $data
     * 
     * @return self
     */
    public function data($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Set a name property.
     * 
     * @param  string $name
     * 
     * @return self
     */
    public function name($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set a cached property.
     * 
     * @param bool  $cached
     * 
     * @return self
     */
    public function cached($cached = true)
    {
        $this->cached = $cached;
        return $this;
    }

    /**
     * Returns self as json.
     * 
     * @return string
     */
    public function toJson()
    {
        return collect($this)->toJson();
    }

    /**
     * Returns self as Collection.
     * 
     * @return \Illuminate\Support\Collection
     */
    public function toCollect()
    {
        return collect($this);
    }

    /**
     * Log a property log.
     * 
     * @param  string $log
     * 
     * @return self
     */
    public function log($log)
    {
        if (!empty($log)) {
            if ($this->success) {
                Log::info($log);
            } else {
                Log::error($log);
            }
        }
        return $this;
    }

    /**
     * Create a new Result instance.
     * 
     * @param  string  $message
     * @param  mixed   $data
     * @param  boolean $cached
     * @param  string  $log
     * 
     * @return self
     */
    public static function success($message = '', $data = [], $cached = false, $log = '')
    {
        return new Result(true, $message, $data, $cached, $log);
    }

    /**
     * Create a new Result instance.
     * 
     * @param  string  $message
     * @param  mixed   $data
     * @param  string  $log
     * 
     * @return self
     */
    public static function error($message = '', $data = [], $log = '')
    {
        return new Result(false, $message, $data, false, $log);
    }

    /**
     * Create a new Result instance.
     * 
     * @param  bool    $boolean_value
     * @param  string  $success_message
     * @param  string  $error_message
     * 
     * @return self
     */
    public static function ifthen($boolean_value, $success_message = 'Solicitação realizada com sucesso.', $error_message = 'Ocorreu um erro na solicitação.')
    {
        return ($boolean_value) ? self::success($success_message) : self::error($error_message);
    }

    /**
     * Create a new Result instance.
     * 
     * @param  string  $message
     * @param  mixed   $data
     * @param  string  $log
     * 
     * @return self
     */
    public static function invalid($message = 'Dados inválidos.', $data = [], $log = '')
    {
        return new Result(false, $message, $data, false, $log);
    }

    /**
     * Create a new Result instance.
     * 
     * @param  \Exception $exception
     * @param  string  $message
     * 
     * @return self
     */
    public static function exception($exception, $message = 'Ocorreu um erro na solicitação.')
    {
        return new Result(false, $message, ['exception' => $exception], false, $exception->getMessage());
    }

    /**
     * Create a new Result instance.
     * 
     * @param  string  $message
     * @param  mixed   $data
     * @param  string  $log
     * 
     * @return self
     */
    public static function undefined($message = 'Ocorreu um erro na solicitação.', $data = [], $log = '')
    {
        return new Result(false, $message, $data, false, $log);
    }

    /**
     * Create a new Result instance.
     * 
     * @param  string  $prefix
     * @param  string  $cache_name
     * @param  string  $message
     * @param  mixed   $data
     * @param  boolean $cached
     * @param  string  $log
     * 
     * @return self
     */
    public static function cache($prefix, $cache_name, $message = '', $data = [], $cached, $log = '')
    {
        $cache_name = cached_mount_name($prefix, $cache_name);
        $result     = new Result(true, $message, $data, $cached, $log);
        $result->name($cache_name);
        return $result;
    }
}
