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
 */ if (function_exists("wptb__menu_item__create")) return;


/**
 * @param int $menu_id
 * @param array $item
 */
function wptb__menu_item__create(int $menu_id, array $item = [])
{
    // Retrieve item settings
    $item_update        = isset($item['update']) && $item['update'] == true;
    $item_id            = isset($item['ID']) ? $item['ID'] : 0;
    $item_children      = isset($item['children']) ? $item['children'] : false;

    $item_parent        = isset($item['parent']) ? $item['parent'] : 0;
    $item_position      = isset($item['position']) ? $item['position'] : 0;
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
        $object = wptb__page__getBySlug($item['object']);

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
        if (!preg_match("/^(http(s)?|#)/", $item_url))
        {
            $item_url = get_home_url($item_url);
        }
    }

    // Add or update item 
    if ($item_id == 0 || ($item_id && $item_update))
    $item_id = wp_update_nav_menu_item($menu_id, $item_id, [
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

    return $item_id;
}