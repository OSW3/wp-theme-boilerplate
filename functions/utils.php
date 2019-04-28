<?php


// Template / Layout Utils

function get__template( string $template, array $params=[] )
{
    $template = str_replace('.php', '', $template);
    $template = $template.'.php';

    $directory = get_template_directory() . DS;

    foreach ($params as $param => $value) {
        $$param = $value;
    }
    
    ob_start();
    include $directory.$template;
    return ob_get_clean();
}





// Posts Utils

/**
 * posts pagination
 * @param (integer) $items, total of items
 * @param (string) $base
 * @param (integer) $per_page, number of items per page
 * @param (integer) $offset, number of tiles befor and after the crrent page tile
 */
function pagination($items, $base=null, $per_page=10, $offset=3)
{
    // -- List of links
    $links = array();

    // -- uri page term
    $page_text = "page";
    $page_path = $page_text."/";

    // -- current page number
    // uri to array
    $uri_array = explode("/", $_SERVER["REQUEST_URI"]);
    // sanitize the uri array
    $uri_array = array_filter($uri_array, function($value) { return $value !== ""; });
    // count uri params
    $uri_count = count($uri_array);
    // retrieve page number
    $page_number = ($uri_array[$uri_count-1] === $page_text && ctype_digit($uri_array[$uri_count])) ? $uri_array[$uri_count] : 1;

    // -- Define the total number of page
    $pages_total = ceil($items / $per_page);


    $wp_offset = $per_page * ($page_number-1);
    $prev   = $page_number > 1 ? $base.$page_path.($page_number-1)  : false;
    $next   = $page_number < $pages_total ? $base.$page_path.($page_number+1) : false;

    $start  = $page_number-$offset;
    $start  = $start < 1 ? 1 : $start;

    $end    = $page_number+$offset;
    $end    = $end > $pages_total ? $pages_total : $end;

    if (($end-$start) < ($offset*2)) {
        $diff = ($offset*2)-($end-$start);
        if ($end == $pages_total) $start = $start-$diff;
        if ($start == 1) $end = $end+$diff;
    }

    $start  = $start < 1 ? 1 : $start;
    $end    = $end > $pages_total ? $pages_total : $end;

    if ($offset <= $start) {
        array_push($links, (object) array(
            "link" => false,
            "page" => "...",
            "current" => false
        ));
    }

    for ($i=$start;$i<=$end;$i++) {
        array_push($links, (object) array(
            "link" => $base.$page_path.$i,
            "page" => $i,
            "current" => $page_number == $i
        ));
    }

    if ($pages_total > $end) {
        array_push($links, (object) array(
            "link" => false,
            "page" => "...",
            "current" => false
        ));
    }

    return (object) array(
        "offset"=> $wp_offset,
        "prev"  => $prev,
        "next"  => $next,
        "links" => (object) $links
    );
}

function get_page_content()
{
    $post = get_post();

    if (isset($post->post_content)) {
        return $post->post_content;
    }

    return null;
}





function paragraph( string $string )
{
    $return = "";
    $string = explode(PHP_EOL, $string);

    foreach($string as $line) 
    {
        if (!empty(trim($line)))
        {
            $return.= "<p>".$line."</p>";
        }
    }

    return $return;
}

