<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Cache;
use App\Utilities\Result;

class Cached
{
    public static function get($p_prefix, $p_key, $value, $minutes = 10)
    {
        $prefix = mb_strtolower($p_prefix);
        $key    = (is_array($p_key)) ? implode('-', $p_key) : $p_key;
        $key    = mb_strtolower($key);

        $cache_name = cached_mount_name($prefix, $key);
        if (Cache::has($cache_name)) {
            return Result::cache($prefix, $cache_name, '', Cache::get($cache_name), true);
        } else {
            $data = (is_callable($value)) ? $value() : $value;
            if (($data !== false) && ($data !== null)) {
                $use_cache = config('cache.use', 's');
                if ($use_cache === 's') {
                    Cache::put($cache_name, $data, ($minutes * 60));

                    $caches = Cache::get('gcache-prefixes') ?? collect([]);
                    if (!$caches->has($prefix)) {
                        $caches->put($prefix, collect([]));
                    }

                    $caches[$prefix]->put($key, $data);

                    Cache::forever('gcache-prefixes', $caches);
                }
            }

            return Result::cache($prefix, $cache_name, '', $data, false);
        }
    }

    public static function list()
    {
        $caches = Cache::get('gcache-prefixes') ?? collect([]);
        return $caches->toArray();
    }

    public static function count()
    {
        $caches = Cache::get('gcache-prefixes') ?? collect([]);
        return $caches->count();
    }

    public static function forget($p_prefix, $p_key = null)
    {
        try {
            $prefix = mb_strtolower($p_prefix);
            $caches = Cache::get('gcache-prefixes') ?? collect([]);

            if ($p_key !== null) {
                $key = (is_array($p_key)) ? implode('-', $p_key) : $p_key;
                $key = mb_strtolower($key);
                $cache_name = sprintf('%s-%s', $prefix, $key);
                Cache::forget($cache_name);

                if ($caches->has($prefix)) {
                    if ($caches->get($prefix)->has($key)) {
                        $caches[$prefix] = $caches[$prefix]->except([$key]);
                        Cache::forever('gcache-prefixes', $caches);
                    }
                }

                return true;
            }

            if ($caches->has($prefix)) {
                $caches->get($prefix)->each(
                    function ($item, $key) use ($prefix) {
                        $cache_name = sprintf('%s-%s', $prefix, $key);
                        Cache::forget($cache_name);
                    }
                );

                unset($caches[$prefix]);
                Cache::forever('gcache-prefixes', $caches);
            }

            return true;
        } catch (\Exception $e) {
            return false;
            // report($e);
        }
    }

    public static function flush()
    {
        return Cache::flush();
    }
}
