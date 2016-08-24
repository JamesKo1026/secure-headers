<?php

if (! function_exists('config')) {
    /**
     * Get / set the specified configuration value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     *
     * @return mixed
     */
    function config($key = null, $default = null)
    {
        $path = __DIR__."/config/{$key}.php";

        if (! file_exists($path)) {
            return $default;
        }

        return require $path;
    }
}