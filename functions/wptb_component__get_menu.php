<?php
/**
 * WP Theme Boilerplate : functions/wptb_component__get_menu
 * 
 * Return a HTML menu component
 * --
 * @param string $name the slug of the menu
 * @param string $component file in components/menus/ directory
 * @param string $class class for ul element
 * @param string $item_class class for li element
 * @param string $link_class class for a element
 */

if (!function_exists('wptb_component__get_menu')) 
{    
    function wptb_component__get_menu(array $options)
    {
        $options = array_merge([
            'name'      => null,
            'component' => "default_menu",
            'class'     => null,
            'item_class'=> null,
            'link_class'=> null,
            'print_html'=> false,
        ], $options);


        // Check Menu Name
        // -- 

        // Check data type
        if (!is_string($options['name']))
        {
            $type = gettype($options['name']);
            throw new Exception("Menu name : \"$type\" given, \"string\" expected.");
        }

        // Get menu items
        $_items = wptb_menu__find_by_name($options['name']);

        // Check if is defened
        if (empty($_items))
        {
            throw new Exception("Menu name : \"".$options['name']."\" is not defined in WordPress menus.");
        }


        // Check Menu HTML Component
        // -- 

        $template_part = "components/menus/";
        $template_part.= $options['component'];
        $template_file = $template_part.".php";

        // Check data type
        if (!is_string($options['component']))
        {
            $type = gettype($options['component']);
            throw new Exception("Menu component : \"$type\" given, \"string\" expected.");
        }

        // Check component file
        if (!file_exists(__DIR__."/../".$template_file))
        {
            throw new Exception("Menu component file \"$template_file\" is not found.");
        }


        // Build Items list
        // --

        // Items array definition
        $items = array();

        // Loop on menu items
        foreach ($_items as $_item)
        {
            $item = (object) array(
                'title' => $_item->title,
                'url' => $_item->url,
                'isActive' => get_the_ID() == $_item->object_id,
                'item_class' => $options['item_class'],
                'link_class' => $options['link_class'],
            );

            array_push($items, $item);
        }


        // Set $menu variables to the global environement
        // --

        set_query_var( 'menu', (object) array(
            'items' => $items,
            'class' => $options['class'],
        ));


        // Output
        // --

        // Check $print_html type
        $print_html = is_bool($options['print_html']) ? $options['print_html'] : false;

        // output with echo 
        if ($print_html) 
        {
            get_template_part( $template_part );
        }

        // Output as string
        else 
        {
            ob_start();
            get_template_part( $template_part );
            return ob_get_clean();
        }
    }
}
