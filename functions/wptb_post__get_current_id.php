<?php
/**
 * WP Theme Boilerplate : functions/wptb_post__get_current_id
 * 
 * @Description: Return the current post ID
 * @Version: 1.0.0
 * @Usage: wptb_post__get_current_id();
 * @Example: wptb_post__get_current_id();
 */

if (!function_exists('wptb_post__get_current_id')) 
{    
    function wptb_post__get_current_id()
    {
        global $post;
        return $post->ID;
    }
}