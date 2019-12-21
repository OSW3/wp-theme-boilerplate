<?php
/**
 * WP Theme Boilerplate : functions/wptb_i18n__is_available_language
 * 
 * @Description: Check if a language is available in polylang plugin
 * @Version: 1.0.0
 * @Usage: wptb_i18n__is_available_language(string $language);
 * @Example: wptb_i18n__is_available_language("fr");
 */

if (!function_exists('wptb_i18n__is_available_language')) 
{    
    function wptb_i18n__is_available_language(string $language)
    {
        if (function_exists('pll_languages_list')) 
        {
            return in_array($language, pll_languages_list(array('fields' => 'slug')));
        }

        return false;
    }
}