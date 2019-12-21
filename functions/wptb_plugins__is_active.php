<?php
/**
 * WP Theme Boilerplate : functions/wptb_plugins__get_active
 * 
 * @Description: Check if $plugin is actived
 * @Version: 1.0.0
 * @Usage: wptb_plugins__is_active(string $plugin);
 * @Example: wptb_plugins__is_active("hello");
 * 
 * Check if $plugin is actived
 * --
 * @param string $plugin the name of a plugin
 */

if (!function_exists('wptb_plugins__is_active')) 
{    
    function wptb_plugins__is_active(string $plugin)
    {
        if (!function_exists('wptb_plugins__get_active')) {
            return false;
        }

        return in_array($plugin, wptb_plugins__get_active(['identifier']));
    }
}