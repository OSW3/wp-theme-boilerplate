<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb__slugify.php
// Function: wptb__slugify

// Generate the slug of a string

// required: yes

/**
 * @usage wptb__slugify(string $text)
 * 
 * @example wptb__slugify("Hello world");
 * 
 * @param required $file to inclue
 */

//======================================================================

// Prevent function declaration
if (function_exists('wptb__slugify')) return;

function wptb__slugify(string $text)
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