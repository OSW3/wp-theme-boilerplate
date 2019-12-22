<?php
/**
 * WP Theme Boilerplate : functions/wptb_component__get_i18n_switcher
 * 
 * @Description: Return a HTML carousel component
 * @Version: 1.0.0
 * @Usage: wptb_component__get_i18n_switcher(array $options);
 * @Example: wptb_component__get_i18n_switcher([...]);
 * --
 * @param string $name the slug of the menu
 * @param string $component file in components/i18n/ directory
 * @param string $class class for ul element
 * @param string $item_class class for li element
 * @param string $link_class class for a element
 */

if (!function_exists('wptb_component__get_i18n_switcher')) 
{    
    function wptb_component__get_i18n_switcher(array $options)
    {
        $options = array_merge([
            'component' => "default_switcher",
            // 'id'        => "main-carousel",
            'class'     => "dropdown dropup",
            'menu_class'=> "dropdown-menu dropdown-menu-right",
            // 'controls'  => true,
            // 'print_html'=> false,
            // 'items'     => array(),
        ], $options);

        // TODO: Get carousel by name/slug




        // Check Carousel HTML Component
        // -- 

        $template_part = "components/i18n/";
        $template_part.= $options['component'];
        $template_file = $template_part.".php";

        // Check data type
        if (!is_string($options['component']))
        {
            $type = gettype($options['component']);
            throw new Exception("I18n Switcher component : \"$type\" given, \"string\" expected.");
        }

        // Check component file
        if (!file_exists(__DIR__."/../".$template_file))
        {
            throw new Exception("I18n Switcher component file \"$template_file\" is not found.");
        }


        // Build Items list
        // --

        $current_language = wptb_i18n__get_current_language('name');

        // // Items array definition
        // $items = array();
        // $items = (object) $options['items'];


        // Set $menu variables to the global environement
        // --

        set_query_var( 'switcher', (object) array(
            'text'          => $current_language,
            'class'         => $options['class'],
            'menu_class'    => $options['menu_class'],
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