<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Use this file to define the menus that will be created when installing the
 * theme.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


/**
 * 
 */
return [
    [
        'name'      => "Main Menu",
        'options'   => [
            'reset' => false, // Delete the menu if already exist
        ],
        'items'     => [
            [
                'title'     => "Accueil",  // Override the title of the page
                'object'    => "homepage",
                'update'    => true, // Force to update items
            ], 
            [
                'title'     => "Multi Levels",
                'children'  => [
                    [
                        'object'    => "example-with-static-content",
                    ], 
                    [
                        'object'    => "example-with-dynamic-content",
                    ], 
                    [
                        'title'     => "Menu A"
                    ],
                    [
                        'title'     => "Menu B",
                        'children'  => [
                            [
                                'title'     => "Menu B-1"
                            ],
                            [
                                'title'     => "Menu B-2"
                            ],
                            [
                                'object'    => "ui-elements",
                            ], 
                        ]
                    ],
                    [
                        'title'     => "Menu C"
                    ],
                ]
            ],
            [
                'title'     => "All Posts",
                'object'    => "blog",
                // 'position'  => 55,
            ], 
        ],
    ],

    [
        'name'      => "Social Menu",
        'options'   => [
            'reset' => false,
        ],
        'items'     => [
            [
                'title'     => "FB",
                'classes'   => "social social-facebook",
                'url'       => "http://facebook.com/",
                'target'    => "_blank",
                'update'    => true,
            ], 
            [
                'title'     => "TW",
                'classes'   => "social social-twitter",
                'url'       => "http://twitter.com/",
                'target'    => "_blank"
            ], 
            [
                'title'     => "IG",
                'classes'   => "social social-instagram",
                'url'       => "http://instagram.com/",
                'target'    => "_blank"
            ]
        ],
    ],
];