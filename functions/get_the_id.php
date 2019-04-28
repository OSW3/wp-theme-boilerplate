<?php

/**
 * get_the_id
 * --
 * @return integer the current post ID
 */

if (!function_exists('get_the_id')) 
{    
    function get_the_id()
    {
        global $post;
        return $post->ID;
    }
}