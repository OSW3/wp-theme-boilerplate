<?php

/**
 * get_image
 * --
 * @param string $file the name of image file
 * @return string the uri of an image file
 */

if (!function_exists('get_image')) 
{    
    function get_image(string $file)
    {
        if (defined('URI_THEME')) 
        {
            return THEME_URI."assets/images/".$file;
        }

        return null;
    }
}