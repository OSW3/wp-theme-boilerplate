<?php

/**
 * get_partial
 * --
 */

if (!function_exists('get_partial')) 
{    
    function get_partial($path = null, bool $print_html = true)
    {
        $path = "partials/".$path;
        
        if ($print_html) {
            get_template_part( $path );
        }
        else {
            ob_start();
            get_template_part( $path );
            return ob_get_clean();
        }
        
    }
}
