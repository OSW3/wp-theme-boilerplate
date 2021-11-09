<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_addMenu.php
// Function: wptb_addMenu

// Add new menu in database

// required: yes

/**
 * @usage wptb_addMenu(string $name, array $items = [])
 * 
 * @example wptb_addMenu("My Menu", []);
 * 
 * @param required $name of the menu
 * @param required $items of the menu
 */

//======================================================================

// Prevent function declaration
if (function_exists('wptb_addMenu')) return;

function wptb_addMenu(string $name, array $items = [])
{
    wp_delete_nav_menu($name);

    // Exit if menu exists
    if (wp_get_nav_menu_object( $name )) return;

    // Create the menu
    $menu_id = wp_create_nav_menu( $name );

    // Create menu items
    foreach ($items as $index => $item) 
    {
        // Retrieve item settings
        $item_parent        = isset($item['parent']) ? $item['parent'] : 0;
        $item_position      = isset($item['position']) ? $item['position'] : $index;
        $item_title         = isset($item['title']) ? __($item['title']) : '';
        $item_url           = isset($item['url']) ? $item['url'] : '';
        $item_description   = isset($item['description']) ? __($item['description']) : '';
        $item_attr_title    = isset($item['attr_title']) ? __($item['attr_title']) : '';
        $item_target        = isset($item['target']) ? $item['target'] : '';
        $item_classes       = isset($item['classes']) ? $item['classes'] : '';
        $item_xfn           = isset($item['xfn']) ? $item['xfn'] : '';
        
        $item_type          = 'custom';
        $item_object        = '';
        $item_object_id     = 0;

        // If link is a WP Object
        if (isset($item['object']))
        {
            $object = wptb_getPageBySlug($item['object']);

            if ( isset($object->ID) )
            {
                $item_title     = !empty($item_title) ? $item_title : $object->post_title;
                $item_object    = $object->post_type;
                $item_object_id = $object->ID;
                $item_type      = 'post_type';
            }
        }
        else 
        {
            if (!preg_match("/^http(s)?/", $item_url))
            {
                $item_url = get_home_url($item_url);
            }
        }

        // Add item 
        wp_update_nav_menu_item($menu_id, 0, [
            'menu-item-object-id'   => $item_object_id,
            'menu-item-object'      => $item_object,
            'menu-item-parent-id'   => $item_parent,
            'menu-item-position'    => $item_position,
            'menu-item-type'        => $item_type,
            'menu-item-title'       => $item_title,
            'menu-item-url'         => $item_url,
            'menu-item-description' => $item_description,
            'menu-item-attr-title'  => $item_attr_title,
            'menu-item-target'      => $item_target,
            'menu-item-classes'     => $item_classes,
            'menu-item-xfn'         => $item_xfn,
            'menu-item-status'      => 'publish',
        ]);
    }
}