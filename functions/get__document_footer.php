<?php

/**
 * get__document_footer
 * --
 * @param array $params 
 * @return string 
 */

if (!function_exists('get__document_footer')) 
{    
    function get__document_footer(array $params = [])
    {
        ob_start();
        get_footer();
        $footer = ob_get_clean();

        echo $footer;
    }
}