<?php

/**
 * get_card
 * --
 */

if (!function_exists('get_card')) 
{    
    function get_card(array $options = [], bool $print_html = false)
    {
        $card = [];
        $options = array_merge([
            "file" => "card",
            "link" => null,
            "cover" => null,
            "title" => null,
            "inner" => null,
            "footer" => null
        ], $options);

        $file = isset($options['file']) ? $options['file'] : "card";

        $card['link'] = isset($options['link']) ? $options['link'] : null;
        $card['cover'] = isset($options['cover']) ? $options['cover'] : null;
        $card['title'] = isset($options['title']) ? $options['title'] : null;
        $card['inner'] = isset($options['inner']) ? $options['inner'] : null;
        $card['footer'] = isset($options['footer']) ? $options['footer'] : null;

        // echo "<pre>";
        // print_r($card);
        // echo "</pre>";

        $path = THEME_DIR."partials/cards/".$file.".php";
        include $path;

        unset($options);
        unset($card);
    }
}
