<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Add new custom post wp resgistery
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__post__create")) return;


/**
 * @param string $title of the page
 * @param array $porperties array
 */
function wptb__post__create(string $type, array $porperties = [])
{
    register_post_type($type, $porperties);

}