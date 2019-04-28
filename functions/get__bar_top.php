<?php

/**
 * get__bar_top
 * --
 */

if (!function_exists('get__bar_top')) 
{    
    function get__bar_top(bool $print_html = true)
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
