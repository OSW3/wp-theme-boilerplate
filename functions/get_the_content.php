<?php

/**
 * get__page_content
 * --
 * @param integer $post_id 
 * @return string 
 */

if (!function_exists('get__page_content')) 
{    
    function get__page_content(int $post_id)
    {
        $post = get_post($post_id); 
        $content = apply_filters('the_content', $post->post_content); 
        return $content;
    }
}