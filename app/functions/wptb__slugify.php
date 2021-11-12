<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Generate the slug of a string
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__slugify")) return;


/**
 * Undocumented function
 *
 * @param string $text
 * @return string
 */
function wptb__slugify(string $text): string
{
    // replace non letter or digits by -
    $text = preg_replace("~[^\pL\d]+~u", "-", $text);

    // transliterate
    $text = iconv("utf-8", "us-ascii//TRANSLIT", $text);

    // remove unwanted characters
    $text = preg_replace("~[^-\w]+~", "", $text);

    // trim
    $text = trim($text, "-");

    // remove duplicate -
    $text = preg_replace("~-+~", "-", $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return "n-a";
    }

    return $text;
}