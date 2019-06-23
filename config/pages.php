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

    // blog

    [
        'title' => 'Blog',
        'slug'  => 'blog',
        'template' => 'blog.php'
    ],

    [
        'title' => 'Store',
        'slug'  => 'store',
        'template' => 'store.php'
    ],

    // Supports

    [
        'title' => 'Contact',
        'slug'  => 'contact-us',
        'template' => 'contact.php'
    ],

    // Legal

    [
        'title' => "Terms of use",
        'slug'  => 'terms-of-use',
        'template' => 'legal.php'
    ],
    [
        'title' => "Privacy policy",
        'slug'  => 'privacy-policy',
        'template' => 'legal.php'
    ],
];