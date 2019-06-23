<?php

/**
 * get_menu
 * --
 * @param string $menu the slug of the menu
 * @param string $ul_class class for ul element
 * @param string $li_class class for li element
 * @param string $a_class class for a element
 */

if (!function_exists('get_menu')) 
{    
    function get_menu(string $menu, string $ul_class = '', string $li_class = '', string $a_class = '', bool $print_html = true)
    {
        set_query_var( 'menu', $menu );
        set_query_var( 'ul_class', $ul_class );
        set_query_var( 'li_class', $li_class );
        set_query_var( 'a_class', $a_class );

        if ($print_html) {
            get_template_part( 'partials/menus/menu' );
        }
        else {
            ob_start();
            get_template_part( 'partials/menus/menu' );
            return ob_get_clean();
        }
        
    }
}
