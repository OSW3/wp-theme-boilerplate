<?php
/**
 * WP Theme Boilerplate : functions/wptb_assets__get_favicon
 * 
 * @Description: Return the path of an image in the assets/ directory
 * @Version: 1.0.0
 * @Usage: wptb_assets__get_favicon(string $image[, bool $withTags=false[, array $attr_rel=["icon"][, ?array $type=null]]]);
 * @Example: wptb_assets__get_favicon("favicon.ico");
 * 
 * --
 * @param string $script 
 * @param string $withTags 
 * @param string $attr_rel 
 */

if (!function_exists('wptb_assets__get_favicon')) 
{
    // <link rel="icon" href="" type="image/x-icon" />

    function wptb_assets__get_favicon(string $image, bool $withTags=false, array $attr_rel=["icon"], ?array $type=null)
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
            $tag = "";

            foreach ($attr_rel as $key => $attr)
            {
                $tag.= "<link";
                $tag.= " rel=\"$attr\"";
                $tag.= " href=\"$image_uri\"";
                $tag.= $type != null ? " type=\"".(count($type) == count($attr_rel) ? $type[$key] : $type[0])."\"" : null;
                $tag.= ">";
            }
            
            return $tag;
        }

        // If $withTags is false, return the string of script file
        else 
        {
            return $image_uri;
        }
    }
}