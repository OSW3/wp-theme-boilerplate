<?php

$menus = [

    /**
     * Main Menu
     */
    [
        "title" => "Main Menu",
        "items" => [
            [
                'title' => "Accueil",
                'classes' => null,
                'url'   => "/",
            ],
            [
                "object" => "example-page"
            ]
        ]
    ],

    /**
     * Social Menu
     */
    [
        "title" => "Social Menu",
        "items" => [
            [
                'title'     => "Facebook",
                'classes'   => "facebook",
                'url'       => "http://facebook.com/",
                'target'    => "_blank"
            ],
            [
                'title'     => "Twitter",
                'classes'   => "twitter",
                'url'       => "http://twitter.com/",
                'target'    => "_blank"
            ],
        ]
    ],

    /**
     * Copyright Menu
     */
    // [
    //     "title" => "Copyright Menu",
    //     "items" => [
    //         ["object" => "mentions-legales"],
    //         ["object" => "conditions-generales-dutilisation"],
    //         ["object" => "politique-de-confidentialite"],
    //         ["object" => "contactez-nous"]
    //     ]
    // ],
];