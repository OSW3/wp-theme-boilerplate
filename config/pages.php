<?php

/**
 * Pages
 * 
 * @param required title
 * @param optional slug
 * @param optional template
 * @param optional content
 */

$pages = [

    // Homepage

    [
        'title' => 'Homepage',
        'slug'  => 'homepage',
        'template' => 'index.php',
        'homepage' => true
    ],

    // Supports

    [
        'title' => 'Contact',
        'slug'  => 'contact-us',
        'template' => 'templates/contact.php'
    ],

    // Legal

    [
        'title' => "Terms of use",
        'slug'  => 'terms-of-use',
        'template' => 'templates/legal.php'
    ],
    [
        'title' => "Privacy policy",
        'slug'  => 'privacy-policy',
        'template' => 'templates/legal.php'
    ],
];