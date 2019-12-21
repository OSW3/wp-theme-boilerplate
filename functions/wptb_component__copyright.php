<?php
/**
 * WP Theme Boilerplate : functions/wptb_component__copyright
 * 
 * Generate the copyright sting
 * --
 * @param string $since
 */

if (!function_exists('wptb_component__copyright')) 
{    
    function wptb_component__copyright($since = null): string
    {
        $copyright = "&copy; ";
        $now = date('Y');

        if (null == $since) $since = $now;
        $copyright.= $since;

        if ($since < $now) $copyright.= "-".$now;
        $copyright.= " ".get_bloginfo('name');

        return $copyright;
    }
}