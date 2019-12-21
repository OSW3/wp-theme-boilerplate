<?php
/**
 * WP Theme Boilerplate : bootstrap/install
 * 
 * Execute on theme activation
 */

add_action('after_switch_theme', function () {
    
    /**
     * Create pages on theme activation
     */

    $pages = array();

    // Include pages configuration
    if (file_exists(THEME_DIR."/config/pages.php")) 
    {
        include_once THEME_DIR."/config/pages.php";
    }

    // For each pages defined on $pages array
    foreach ($pages as $page) 
    {
        // Retrieve page settings
        $page_title     = isset($page['title'])     ? __($page['title'])    : null;
        $page_slug      = isset($page['slug'])      ? __($page['slug'])     : null;
        $page_content   = isset($page['content'])   ? __($page['content'])  : '';
        $page_template  = isset($page['template'])  ? $page['template']     : null;
        $is_homepage    = isset($page['homepage'])  ? $page['homepage']     : false;

        // Check if page exists
        $page_exists    = get_page_by_title($page_title);
        $page_id        = isset($page_exists->ID)   ? $page_exists->ID      : null;

        // Reset page settings
        $page = [
            'post_type'     => 'page',
            'post_title'    => $page_title,
            'post_name'     => $page_slug,
            'post_content'  => $page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
        ];

        // If page don't exists
        if($page_id === null)
        {
            // Add new page
            $page_id = wp_insert_post($page);

            // Add page template
            if(!empty($page_template))
            {
                update_post_meta($page_id, '_wp_page_template', $page_template);
            }

            $page_exists = get_page_by_title($page_title);
        }

        // Define page as Homepage
        if ($page_id != null && $is_homepage)
        {
            update_option( 'page_on_front', $page_id );
            update_option( 'show_on_front', 'page' );
        }

        // Free memory
        unset($page);
    }


    /**
     * Create menus on theme activation
     */

    $menus = array();

    // Include menus configuration
    if (file_exists(THEME_DIR."/config/menus.php")) 
    {
        include_once THEME_DIR."/config/menus.php";
    }

    // For each menus defined on $menus array
    foreach ($menus as $menu) 
    {
        // Retrieve menu settings
        $menu_title     = isset($menu['title']) ? $menu['title'] : null;
        $menu_items     = isset($menu['items']) ? $menu['items'] : [];

        // Check if menu exists
        $menu_exists    = wp_get_nav_menu_object($menu_title);

        // If menu don't exists
        if (!$menu_exists)
        {
            // Create the menu
            $menu_id = wp_create_nav_menu($menu_title);

            // Add menu items
            foreach ($menu_items as $index => $item) 
            {
                // Retrieve item settings
                $item_parent        = isset($item['parent']) ? $item['parent'] : 0;
                $item_position      = isset($item['position']) ? $item['position'] : $index;
                $item_title         = isset($item['title']) ? __($item['title']) : 'xxx';
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
                    $object = get_page_by_slug($item['object']);
                    
                    if (isset($object->ID))
                    {
                        $item_title     = $object->post_title;
                        $item_object    = $object->post_type;
                        $item_object_id = $object->ID;
                        $item_type      = 'post_type';
                    }
                }

                else 
                {
                    if (!preg_match("/^http(s)?/", $item_url))
                    {
                        $item_url       = get_home_url($item_url);
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

        // Free memory
        unset($menu);
    }


    /**
     * Change the permalink structure
     */
    if (defined("WPTB_PERMALINK_STRUCTURE") && WPTB_PERMALINK_STRUCTURE != null) 
    {
        add_action('init', function() {
            global $wp_rewrite;
            $wp_rewrite->set_permalink_structure( WPTB_PERMALINK_STRUCTURE );
        });
    }
});
// add_action('after_switch_theme', 'wptb__install');

// if (
//     isset($_GET['activated']) &&    // activated parameter
//     is_admin()                      // On admin page
// ){
// }

// 'menu-item-db-id'       => $menu_item_db_id, // menu item ID, If exist.
// 'menu-item-object-id'   => 0, // menu item to add.
// 'menu-item-object'      => '', // post type, taxonomy - post or term belong to.
// 'menu-item-parent-id'   => 0, // parent menu id.
// 'menu-item-position'    => 0, // item position in menu.
// 'menu-item-type'        => 'custom',// post_type, post_type_archive, taxonomy, custom.
// 'menu-item-title'       => '', // custom title of the menu item.
// 'menu-item-url'         => '', // custom url of menu item.
// 'menu-item-description' => '', // menu item description.
// 'menu-item-attr-title'  => '', // menu item attribute title.
// 'menu-item-target'      => '', // _blank, to open link on new tab.
// 'menu-item-classes'     => '', // menu item extra custom class.
// 'menu-item-xfn'         => 'friend', // to set XHTML Friends Network. it will set rel attribute to your link, ex. rel=`friend` to set that link is your friends blog or so.
// 'menu-item-status'      => '', // draft, publish.