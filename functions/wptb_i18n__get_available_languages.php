<?php
/**
 * WP Theme Boilerplate : functions/wptb_i18n__get_available_languages
 * 
 * @Description: Return the list of available languages
 * @Version: 1.0.0
 * @Usage: wptb_i18n__get_available_languages();
 * @Example: wptb_i18n__get_available_languages();
 */

if (!function_exists('wptb_i18n__get_available_languages')) 
{    
    function wptb_i18n__get_available_languages()
    {
        if (function_exists('pll_languages_list')) 
        {
            return array_combine(
                pll_languages_list(array('fields' => 'slug')),
                pll_languages_list(array('fields' => 'name'))
            );
        }

        return [];
    }
}