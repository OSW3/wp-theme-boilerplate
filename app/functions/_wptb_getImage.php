<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_getImage.php
// Function: wptb_getImage

// Check if file exists before include or include_once

// required: yes

/**
 * @usage wptb_getImage(string $src)
 * 
 * @example wptb_getImage("image.png");
 * 
 * @param required $src of the menu
 */

//======================================================================

// Prevent function declaration
if (function_exists('wptb_getImage')) return;

function wptb_getImage(string $src, array $attr = [])
{
    $attr = array_merge($attr, [
        'src' => do_shortcode("[images src=$src]")
    ]);

    $attr = implode(' ', array_map(
        function ($v, $k) {
            if(is_array($v)){
                return $k.'[]='.implode('&'.$k.'[]=', $v);
            }else{
                return $k.'="'.$v.'"';
            }
        }, 
        $attr, 
        array_keys($attr)
    ));

    echo "<img $attr>";
}
