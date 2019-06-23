<?php

$menus = [

    /**
     * Main Menu
     */
    [
        "title" => "Main Menu",
        "items" => [
            [
                'title' => "Home",
                'classes' => null,
                'url'   => "/",
            ],
            ["object" => "blog"],
            ["object" => "store"],
            ["object" => "contact-us"]
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
    [
        "title" => "Copyright Menu",
        "items" => [
            ["object" => "terms-of-use"],
            ["object" => "privacy-policy"],
            ["object" => "contact-us"]
        ]
    ],
];