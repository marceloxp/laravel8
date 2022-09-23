<?php

if (!function_exists('cached_headers')) {
    /**
     * Return the headers for a cached response.
     *
     * @param  Result $result
     *
     * @return array
     */
    function cached_headers($result)
    {
        return ['cached' => ($result->cached ?? false) ? 'true' : 'false'];
    }

    /**
     * Mount the cache name.
     *
     * @param string  $prefix
     * @param string  $key
     * 
     * @return string
     */
    function cached_mount_name($prefix, $key)
    {
        $result = sprintf('%s_%s', $prefix, $key);
        $result = Str::of(strtolower(str_slugify($result)))->snake();
        $result = str_replace('-', '_', $result);
        return $result;
    }
}
