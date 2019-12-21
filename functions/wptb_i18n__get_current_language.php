<?php
/**
 * WP Theme Boilerplate : functions/wptb_i18n__get_current_language
 * 
 * @Description: Return the current language Code or Name
 * @Version: 1.0.0
 * @Usage: wptb_i18n__get_current_language(string $key = "slug");
 * @Example: wptb_i18n__get_current_language("name");
 * --
 * @param string $key "slug" or "name"
 * @return string
 */

if (!function_exists('wptb_i18n__get_current_language')) 
{    
    function wptb_i18n__get_current_language(string $key = "slug")
    {
        if (function_exists('pll_current_language')) 
        {
            return pll_current_language($key);
        }

        return null;
    }
}