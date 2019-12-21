<?php
/**
 * WP Theme Boilerplate : functions/wptb_component__copyright
 * 
 * @Description: Generate the copyright string
 * @Version: 1.0.0
 * @Usage: wptb_component__copyright([$since = null])
 * @Example: wptb_component__copyright(2009);
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