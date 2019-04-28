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
        if (defined('THEME_IMAGES_URI')) 
        {
            return THEME_IMAGES_URI.$file;
        }

        return null;
    }
}