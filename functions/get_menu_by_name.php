<?php

/**
 * get_menu_by_name
 * --
 * @param string $name the name of a menu
 * @return array the array of items
 */

if (!function_exists('get_menu_by_name')) 
{    
    function get_menu_by_name(string $name)
    {
        $lang = null;

        if (function_exists('get_current_language')) {
            $lang = get_current_language();
        }

        if (null != $lang) {
            $name.= "-".$lang;
        }

        $menu = wp_get_nav_menu_items($name);
        if (!$menu) {
            return array();
        }
        
        return $menu;
    }
}