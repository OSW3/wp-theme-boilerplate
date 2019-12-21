<?php
/**
 * WP Theme Boilerplate : functions/wptb_component__get_carousel
 * 
 * @Description: xxxx
 * @Version: 1.0.0
 * @Usage: xxx
 * @Example: xxx
 * 
 * Return a HTML carousel component
 * --
 * @param string $name the slug of the menu
 * @param string $component file in components/menus/ directory
 * @param string $class class for ul element
 * @param string $item_class class for li element
 * @param string $link_class class for a element
 */

if (!function_exists('wptb_component__get_carousel')) 
{    
    function wptb_component__get_carousel(array $options)
    {
        $options = array_merge([
            'name'      => null,
            'component' => "default_carousel",
            'id'        => "main-carousel",
            'class'     => "carousel slide",
            'indicators'=> true,
            'controls'  => true,
            'print_html'=> false,
            'items'     => array(),
        ], $options);

        // TODO: Get carousel by name/slug




        // Check Carousel HTML Component
        // -- 

        $template_part = "components/carousels/";
        $template_part.= $options['component'];
        $template_file = $template_part.".php";

        // Check data type
        if (!is_string($options['component']))
        {
            $type = gettype($options['component']);
            throw new Exception("Carousel component : \"$type\" given, \"string\" expected.");
        }

        // Check component file
        if (!file_exists(__DIR__."/../".$template_file))
        {
            throw new Exception("Carousel component file \"$template_file\" is not found.");
        }


        // Build Items list
        // --

        // Items array definition
        $items = array();
        $items = (object) $options['items'];


        // Set $menu variables to the global environement
        // --

        set_query_var( 'carousel', (object) array(
            'items'         => $items,
            'id'            => $options['id'],
            'class'         => $options['class'],
            'indicators'    => $options['indicators'],
            'controls'      => $options['controls'],
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