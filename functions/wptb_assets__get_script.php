<?php
/**
 * WP Theme Boilerplate : functions/wptb_assets__get_script
 * 
 * @Description: Return the path of the script in the assets/ directory
 * @Version: 1.0.0
 * @Usage: wptb_assets__get_script(string $script, [bool $withTags=false[, ?string $condition=null]]);
 * @Example: wptb_assets__get_script("app");
 * 
 * --
 * @param string $script 
 * @param string $withTags 
 * @param string $condition 
 */

if (!function_exists('wptb_assets__get_script')) 
{    
    function wptb_assets__get_script(string $script, bool $withTags=false, ?string $condition=null)
    {
        if (!defined('THEME_SCRIPTS_URI'))
        {
            throw new Exception("The constant THEME_SCRIPTS_URI is not defined.");
        }

        // Replace the extension .js if its defined
        $file = str_replace(".js", null, $script);
        $file = $file.".js";

        $script_file = SCRIPTS_DIR.$file;
        $script_uri = THEME_SCRIPTS_URI.$file;

        // Check if script file exists
        if (!file_exists($script_file))
        {
            throw new Exception("Script file \"$file\" is not found.");
        }


        // If $withTags is true, return the string of <script> tag
        if ($withTags)
        {
            $tag = "<script src=\"$script_uri\">";

            return (null === $condition) ? $tag : "<!--[if $condition]>$tag<![endif]-->";
        }

        // If $withTags is false, return the string of script file
        else 
        {
            return $script_uri;
        }
    }
}