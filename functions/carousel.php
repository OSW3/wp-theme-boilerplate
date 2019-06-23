<?php

/**
 * carousel
 * --
 */

if (!function_exists('carousel')) 
{    
    function carousel(string $view, array $slides = [], string $id = null, bool $indicators = true, bool $control = true)
    {
        // $card = [];
        // $options = array_merge([
        //     "file" => "card",
        //     "link" => null,
        //     "cover" => null,
        //     "title" => null,
        //     "inner" => null,
        //     "footer" => null
        // ], $options);

        $view = $view != null ? trim($view) : "carousel";
        $id = $id != null ? trim($id) : "carousel_".uniqid();

        // $card['link'] = isset($options['link']) ? $options['link'] : null;
        // $card['cover'] = isset($options['cover']) ? $options['cover'] : null;
        // $card['title'] = isset($options['title']) ? $options['title'] : null;
        // $card['inner'] = isset($options['inner']) ? $options['inner'] : null;
        // $card['footer'] = isset($options['footer']) ? $options['footer'] : null;

        // echo "<pre>";
        // print_r($card);
        // echo "</pre>";

        $path = THEME_DIR."partials/carousels/".$view.".php";
        include $path;

        unset($view);
        unset($slides);
        unset($id);
        unset($indactors);
        unset($control);
    }
}
