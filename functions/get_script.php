<?php

/**
 * get_script
 * --
 * @param string $file the name of script without extentsion
 * @return string the uri of a image file
 */

if (!function_exists('get_script')) 
{    
    function get_script(string $file)
    {
        if (defined('URI_THEME')) 
        {
            $file = str_replace('.js', '', $file);
            $file = $file.".js";

            return THEME_URI."assets/js/".$file;
        }

        return null;
    }
}