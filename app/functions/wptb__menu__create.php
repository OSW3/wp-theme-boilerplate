<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Add new menu in database
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__menu__create")) return;


/**
 * @param string $name of the menu
 * @param array $items of the menu
 * @param array $options of the menu
 */
function wptb__menu__create(string $name, array $items = [], array $options = [])
{
    $options = array_merge([
        'reset' => false,
    ], $options);

    $menu_id = null;

    // Retrieve the menu
    $menu = wp_get_nav_menu_object( $name );

    // Override the menu id
    if (isset($menu->term_id)) 
    $menu_id = $menu->term_id;

    // Delete menu if exists
    if ($options['reset'] && null != $menu_id) 
    wp_delete_nav_menu($menu_id);

    // Create the menu if don't exist
    if (null == $menu_id) 
    $menu_id = wp_create_nav_menu( $name );

    // foreach ($items as $item)
    if (null != $menu_id)
    wptb__menu_items__create($menu_id, $items);
}