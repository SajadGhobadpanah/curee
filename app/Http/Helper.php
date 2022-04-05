<?php


use Illuminate\Support\Facades\Route;

if (!function_exists('isActive')) {

    function isActive($url, $active = 'active')
    {
        if (is_array($url)) {
            return in_array(Route::currentRouteName(), $url) ? $active : '';
        }
        return Route::currentRouteName() == $url ? $active : '';
    }
}


if (!function_exists('isUrl')) {


    function isUrl($url, $active = 'active')
    {
        return request()->fullUrlIs($url) ? $active : '';
    }
}
