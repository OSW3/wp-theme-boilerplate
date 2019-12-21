<?php
/**
 * WP Theme Boilerplate : functions/wptb_component__get_topbar
 * 
 * @Description: Return a HTML topbar component
 * @Version: 1.0.0
 * @Usage: wptb_component__get_topbar(array $options);
 * @Example: wptb_component__get_topbar([...]);
 */

if (!function_exists('wptb_component__get_topbar')) 
{    
    function wptb_component__get_topbar(array $options)
    {
        $options = array_merge([
            'name'      => null,
            'component' => "default_topbar",
            'class'     => null,
            'print_html'=> false,
        ], $options);


        // TODO: Get topbar by name/slug


        // Check Topbar HTML Component
        // -- 

        $template_part = "components/topbars/";
        $template_part.= $options['component'];
        $template_file = $template_part.".php";

        // Check data type
        if (!is_string($options['component']))
        {
            $type = gettype($options['component']);
            throw new Exception("Topbar component : \"$type\" given, \"string\" expected.");
        }

        // Check component file
        if (!file_exists(__DIR__."/../".$template_file))
        {
            throw new Exception("Topbar component file \"$template_file\" is not found.");
        }


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
