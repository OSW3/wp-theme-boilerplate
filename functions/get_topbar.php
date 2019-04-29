<?php

/**
 * get_topbar
 * --
 */

if (!function_exists('get_topbar')) 
{    
    function get_topbar(bool $print_html = true)
    {
        if ($print_html) {
            get_template_part( 'components/topbar/topbar' );
        }
        else {
            ob_start();
            get_template_part( 'components/topbar/topbar' );
            return ob_get_clean();
        }
        
    }
}
