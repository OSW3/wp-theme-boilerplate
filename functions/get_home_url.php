<?php

/**
 * get_home_url
 * --
 * @return string Home URL
 */

if (!function_exists('get_home_url')) 
{    
    function get_home_url( $path = null )
    {
        // if pll is define
        // -> return pll_home_url
        // else
        return home_url( $path );
    }
}