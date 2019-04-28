<?php

/**
 * shortcode
 * --
 * @param mixed $data
 * @return string 
 */

if (!function_exists('shortcode')) 
{    
    function shortcode( string $tag, array $params = [] )
    {
        foreach ($params as $key => $value) {
    
            if (is_bool($value)) {
                $value = $value ? "true":"false";
            }
            elseif (is_string($value)) {
                $value = "'$value'";
            }
            elseif (is_array($value)) {
                $value = "'?".http_build_query($value)."'";
            }
    
            array_push($params, $key."=".$value);
            unset($params[$key]);
        }
    
        return do_shortcode("[".$tag." ".implode(" ", $params)."]");
    }
}