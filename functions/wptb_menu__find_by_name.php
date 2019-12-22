<?php
/**
 * WP Theme Boilerplate : functions/wptb_menu__find_by_name
 * 
 * @Description: Retrieve a menu by his name
 * @Version: 1.0.0
 * @Usage: wptb_menu__find_by_name(string $name);
 * @Example: wptb_menu__find_by_name("main-menu");
 * --
 * @param string $name the name of a menu
 * @return array the array of items
 */

if (!function_exists('wptb_menu__find_by_name')) 
{    
    function wptb_menu__find_by_name(string $name): array
    {
        $locale = null;

        if (function_exists('wptb_i18n__get_current_language')) 
        {
            $locale = wptb_i18n__get_current_language();
        }

        if (null != $locale) 
        {
            $name.= "-".$locale;
        }

        $menu = wp_get_nav_menu_items($name);

        if (!$menu) 
        {
            return array();
        }
        
        return $menu;
    }
}