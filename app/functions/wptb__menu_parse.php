<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Get menu items and generate the HTML menu
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__menu_parse")) return;

/**
 * Get menu items and generate the HTML menu
 * 
 * @param string $name of the menu
 * @param string $component of the menu item
 * 
 * @return void
 */
function wptb__menu_parse(string $name, string $component)
{
    $items = wptb__menu_getItems($name);

    foreach ($items as $item)
    {
        // Convert the Classes array to a string
        $item->classes = implode(" ", $item->classes);

        wptb__render_component($component, [
            'item' => $item
        ]);
    }
}