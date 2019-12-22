<?php
/**
 * WP Theme Boilerplate : functions/wptb_utils__array_to_object
 * 
 * @Description: Convert an array to a stdClass
 * @Version: 1.0.0
 * @Usage: wptb_utils__array_to_object(array $array);
 * @Example: wptb_utils__array_to_object([...]);
 * --
 * @param array $array the slug of the menu
 */

if (!function_exists('wptb_utils__array_to_object')) 
{    
    function wptb_utils__array_to_object(array $array)
    {
        return json_decode(json_encode($array));
    }
}