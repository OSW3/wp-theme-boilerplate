<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_parseMenu.php
// Function: wptb_parseMenu

// Check if file exists before include or include_once

// required: yes

/**
 * @usage wptb_parseMenu(string $name)
 * 
 * @example wptb_parseMenu("my-menu");
 * 
 * @param required $name of the menu
 * @param required $template of the menu item
 */

//======================================================================

// Prevent function declaration
if (function_exists('wptb_parseMenu')) return;

function wptb_parseMenu(string $name, string $template)
{
    $menu = wptb_getMenu($name);

    foreach ($menu as $item)
    {
        $item->classes = implode(" ", $item->classes);
        
        get_template_part( $template, null, [
            'item' => $item
        ]);
    }

    return $menu;
}
