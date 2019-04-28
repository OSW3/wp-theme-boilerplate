<?php

/**
 * get__map
 * --
 * @param array $params 
 * @return string 
 */

if (!function_exists('get__map')) 
{    
    function get__map(int $version = 1, array $data = [], bool $print_html = true)
    {
        set_query_var( 'data', $data );

        if ($print_html) {
            get_template_part( 'components/map/version', $version );
        }
        else {
            ob_start();
            get_template_part( 'components/map/version', $version );
            return ob_get_clean();
        }
    }
}