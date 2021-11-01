<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_slugify.php
// Function: wptb_slugify

// Generate the slug of a string

// required: yes

/**
 * @usage wptb_slugify(string $text)
 * 
 * @example wptb_slugify("Hello world");
 * 
 * @param required $file to inclue
 */

//======================================================================

// Prevent function declaration
if (function_exists('wptb_slugify')) return;

function wptb_slugify(string $text)
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