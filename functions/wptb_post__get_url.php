<?php
/**
 * WP Theme Boilerplate : functions/wptb_post__get_path
 * 
 * @Description: xxxx
 * @Version: 1.0.0
 * @Usage: xxx
 * @Example: xxx
 * 
 * Return the path for a route
 * --
 * @param integer $post_id
 */

if (!function_exists('wptb_post__get_url'))
{
    function wptb_post__get_url(int $post_id)
    {
        return wptb_post__get_path($post_id, true);
    }
}