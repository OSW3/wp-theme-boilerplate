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
 */ if (function_exists("wptb__menu_items__create")) return;


/**
 * @param int $menu_id
 * @param array $items
 * @param int $parent
 */
function wptb__menu_items__create(int $menu_id, array $items = [], int $parent = 0)
{
    $existing_items = wp_get_nav_menu_items( $menu_id );

    // Define Item ID if item already exists
    foreach ($items as $key => $item)
    {
        $item['ID'] = 0;

        if (!isset($item['parent']))
        {
            $item['parent'] = $parent;
        }

        if (isset($item['object']))
        {
            $object = wptb__page__getBySlug($item['object']);
    
            if ( isset($object->ID) )
            {
                foreach ($existing_items as $existing_item)
                {
                    if ($existing_item->object_id == $object->ID)
                    {
                        $item['ID'] = $existing_item->ID;
                    }
                }
            }
        }
        else if (isset($item['url']))
        {
            foreach ($existing_items as $existing_item)
            {
                if ($existing_item->url == $item['url'])
                {
                    $item['ID'] = $existing_item->ID;
                }
            }
        }
        else
        {
            $item['url'] = "#". wptb__slugify($item['title']);

            foreach ($existing_items as $existing_item)
            {
                if ($existing_item->url == $item['url'])
                {
                    $item['ID'] = $existing_item->ID;
                }
            }
        }

        $items[$key] = $item;
    }

    foreach ($items as $item) 
    {
        $item_id = wptb__menu_item__create($menu_id, $item);

        if (isset($item['children']) && is_array($item['children']))
            wptb__menu_items__create($menu_id, $item['children'], $item_id);
    }

}