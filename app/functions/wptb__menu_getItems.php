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
 * @param bool $nested if true, rebuild the menu 
 * 
 * @return array
 */
function wptb__menu_getItems(string $name, bool $nested=true): array
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

    $items = wp_get_nav_menu_items($name);

    if ($nested) 
    {
        $items = makeRecursive($items, "menu_item_parent", "ID", "children");
    }
    
    return $items ? $items : [];
}