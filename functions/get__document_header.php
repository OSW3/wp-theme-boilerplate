<?php

/**
 * get__document_header
 * --
 * @param array $params
 * @return string 
 */

if (!function_exists('get__document_header')) 
{    
    function get__document_header(array $params = [])
    {
        ob_start();
        get_header();
        $header = ob_get_clean();

        if (isset($params['class'])) {

            $header = preg_replace(
                "/<body>/", 
                "<body class=\"".$params['class']."\">", 
                $header
            );

        }

        echo $header;
    }
}