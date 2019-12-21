<?php
/**
 * WP Theme Boilerplate : functions/wptb_assets__get_image
 * 
 * @Description: Return the path of an image in the assets/ directory
 * @Version: 1.0.0
 * @Usage: wptb_assets__get_image(string $image[, bool $withTags=false[, ?string $attr_alt=null]]);
 * @Example: wptb_assets__get_image("logo.png");
 * 
 * --
 * @param string $script 
 * @param string $withTags 
 * @param string $attr_alt 
 */

if (!function_exists('wptb_assets__get_image')) 
{
    function wptb_assets__get_image(string $image, bool $withTags=false, ?string $attr_alt=null)
    {
        if (!defined('THEME_IMAGES_URI'))
        {
            throw new Exception("The constant THEME_IMAGES_URI is not defined.");
        }

        $image_file = IMAGES_DIR.$image;
        $image_uri = THEME_IMAGES_URI.$image;


        // If $withTags is true, return the string of <img> tag
        if ($withTags)
        {
            $tag = "<img";
            $tag.= " src=\"$image_uri\"";
            $tag.= $attr_alt != null ? " alt=\"$attr_alt\"" : null;
            $tag.= ">";
            
            return $tag;
        }

        // If $withTags is false, return the string of script file
        else 
        {
            return $image_uri;
        }
    }
}