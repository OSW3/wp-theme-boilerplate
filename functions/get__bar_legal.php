<?php

/**
 * get__bar_legal
 * --
 * @param bool $print_html
 */

if (!function_exists('get__bar_legal')) 
{    
    function get__bar_legal(int $version = 1, array $data = [], bool $print_html = true)
    {
        set_query_var( 'data', $data );

        if ($print_html) {
            get_template_part( 'components/footer/legal/version', $version );
        }
        else {
            ob_start();
            get_template_part( 'components/footer/legal/version', $version );
            return ob_get_clean();
        }
        
    }
}