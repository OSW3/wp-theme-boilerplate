<?php
/**
 * WP Theme Boilerplate : functions/wptb_post__get_name
 * 
 * @Description: xxxx
 * @Version: 1.0.0
 * @Usage: xxx
 * @Example: xxx
 * 
 * Return the post name
 * --
 * @param integer $post_id
 */

if (!function_exists('wptb_post__get_name')) 
{    
    function wptb_post__get_name(?int $post_id = null)
    {
        $language = "en";

        if (!is_integer($post_id)) 
        {
            $post_id = get_the_ID();
        }

        if (function_exists('pll_get_post_translations')) 
        {
            $post = pll_get_post_translations($post_id);

            if (isset($post[$language])) 
            {
                $post = get_post($post[$language]);
            }
        }
        else 
        {
            $post = get_post($post_id);
        }

        if (isset($post->post_name)) 
        {
            return $post->post_name;
        }
        
        return null;
    }
}