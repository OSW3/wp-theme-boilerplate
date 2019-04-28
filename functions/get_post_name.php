<?php

/**
 * get_post_name
 * --
 * @param integer $post_id
 * @return string 
 */

if (!function_exists('get_post_name')) 
{    
    function get_post_name($post_id = false)
    {
        $language = "en";

        if (!is_integer($post_id)) {
            $post_id = get_the_ID();
        }

        if (function_exists('pll_get_post_translations')) {
            $post = pll_get_post_translations($post_id);

            if (isset($post[$language])) {
                $post = get_page($post[$language]);
            }

            if (isset($post->post_name)) {
                return $post->post_name;
            }
        }
        
        return null;
    }
}