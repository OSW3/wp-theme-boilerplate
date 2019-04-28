<?php

/**
 * debug
 * --
 * @param mixed $data
 * @return string 
 */

if (!function_exists('debug')) 
{    
    function debug($data = null, $print = true)
    {
        switch ($data) 
        {
            // List of shortcodes
            case 'shortcodes':
                global $shortcode_tags;
                $output = array();
                foreach ($shortcode_tags as $tag => $func) {
                    array_push($output, $tag);
                }
                // $output = $shortcode_tags;
                break;

            // List of Post Types
            case 'posttypes':
                $output = get_post_types();
                break;
            
            default:
                # code...
                break;
        }

        if ($print)
        {
            print_r($output);
        }
        else
        {
            return $output;
        }
    }
}