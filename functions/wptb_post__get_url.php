<?php
/**
 * WP Theme Boilerplate : functions/wptb_post__get_url
 * 
 * @Description: Return the absolute url for a route
 * @Version: 1.0.0
 * @Usage: wptb_post__get_url(int $post_id);
 * @Example: wptb_post__get_url(42);
 * 
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