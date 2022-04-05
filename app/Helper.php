<?php


if (!function_exists('isActive')) {

    function isActive($url, $active = 'activee')
    {
        return request()->is($url) ? $active : '';
    }

}

