<?php

/**
 * wptb_route__get_home_url
 * --
 * @return string Home URL
 */

if (!function_exists('wptb_route__get_home_url')) 
{    
    function wptb_route__get_home_url( $path = null )
    {
        if (function_exists('pll_home_url'))
        {
            return pll_home_url( $path );
        }
        
        return home_url( $path );
    }
}