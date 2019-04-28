<?php

/**
 * get_languages
 * --
 * @param string $misc "slug" or "name"
 * @return string 
 */

if (!function_exists('get_languages')) 
{    
    function get_languages()
    {
        if (function_exists('pll_languages_list')) {
            return array_combine(
                pll_languages_list(array('fields' => 'slug')),
                pll_languages_list(array('fields' => 'name'))
            );
        }

        return [];
    }
}