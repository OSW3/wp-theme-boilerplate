<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Retrieve a menu in database and return the array of menu items
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__menu_getItems")) return;


/**
 * Retrieve a menu in database and return the array of menu items
 * 
 * @param string $name of the menu
 * 
 * @return array
 */
function wptb__menu_getItems(string $name): array
{
    $locale = null;

    if (function_exists('wptb_getCurrentLocale'))
    {
        $locale = wptb_getCurrentLocale();
    }

    if (null != $locale)
    {
        $name.= "-".$locale;
    }

    $menu = wp_get_nav_menu_items($name);

    return $menu ? $menu : [];
}
