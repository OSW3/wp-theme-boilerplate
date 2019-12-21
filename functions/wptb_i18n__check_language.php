<?php
/**
 * WP Theme Boilerplate : functions/wptb_i18n__check_language
 * 
 * @Description: Check if $locale is available
 * @Version: 1.0.0
 * @Usage: wptb_i18n__check_language(string $locale);
 * @Example: wptb_i18n__check_language("fr");
 * --
 * @param string $locale
 * @return string
 */

if (!function_exists('wptb_i18n__check_language')) 
{    
    function wptb_i18n__check_language(string $locale)
    {
        if (!defined('WPTB_LOCALES'))
        {
            throw new Exception("I18n : contant WPTB_LOCALES is not defined.");
        }

        if (!is_array(WPTB_LOCALES))
        {
            $type = gettype(WPTB_LOCALES);
            throw new Exception("I18n : contant WPTB_LOCALES \"$type\" given, \"array\" expected.");
        }

        $defined_languages = wptb_i18n__get_available_languages();
        // print_r( isset( $defined_languages[$locale] ) );

        // return in_array($locale, WPTB_LOCALES);
    }
}