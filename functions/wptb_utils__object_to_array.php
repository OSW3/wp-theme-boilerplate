<?php
/**
 * WP Theme Boilerplate : functions/wptb_utils__object_to_array
 * 
 * @Description: Convert a stdClass to an array
 * @Version: 1.0.0
 * @Usage: wptb_utils__object_to_array(array $array);
 * @Example: wptb_utils__object_to_array([...]);
 * --
 * @param object $object the slug of the menu
 */

if (!function_exists('wptb_utils__object_to_array')) 
{    
    function wptb_utils__object_to_array(object $object)
    {
        return json_encode(json_decode($object, true));
    }
}