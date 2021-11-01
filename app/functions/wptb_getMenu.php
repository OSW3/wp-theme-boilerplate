<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_getMenu.php
// Function: wptb_getMenu

// Check if file exists before include or include_once

// required: yes

/**
 * @usage wptb_getMenu(string $name)
 * 
 * @example wptb_getMenu("my-menu");
 * 
 * @param required $name of the menu
 */

//======================================================================

// Prevent function declaration
if (function_exists('wptb_getMenu')) return;

function wptb_getMenu(string $name)
{
    $locale = null;

    if (function_exists('wptb_getCurrentLocale')) 
        $locale = wptb_getCurrentLocale();

    if (null != $locale) 
        $name.= "-".$locale;

    $menu = wp_get_nav_menu_items($name);

    return $menu ? $menu : array();
}
