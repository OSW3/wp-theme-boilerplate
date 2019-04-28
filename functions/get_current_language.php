<?php

/**
 * get_current_language
 * --
 * @param string $misc "slug" or "name"
 * @return string 
 */

if (!function_exists('get_current_language')) 
{    
    function get_current_language(string $misc = "slug")
    {
        if (function_exists('pll_current_language')) {
            return pll_current_language($misc);
        }

        return null;
    }
}