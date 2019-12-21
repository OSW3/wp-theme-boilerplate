<?php
/**
 * WP Theme Boilerplate : functions/wptb_debug__pageinfo
 * 
 * @Description: xxxx
 * @Version: 1.0.0
 * @Usage: xxx
 * @Example: xxx
 * 
 * Return a HTML topbar component
 * --
 * @param string $name the slug of the menu
 * @param string $component file in components/menus/ directory
 * @param string $class class for ul element
 * @param string $item_class class for li element
 * @param string $link_class class for a element
 */

if (!function_exists('wptb_debug__pageinfo')) 
{    
    function wptb_debug__pageinfo($_DIR, $_FILE)
    {
    ?>

    <hr>
    
    <code><?= get_page_template() ?></code><br>
    <strong>Theme</strong> : <code><?= str_replace(THEMES_DIR, null, THEME_DIR) ?></code><br>
    <strong>Filename</strong> : <code><?= $_FILE ?></code><br>
    <strong>File</strong> : <code><?= str_replace(THEMES_DIR, null, $_FILE) ?></code><br>

    <hr>

    <?php 
    }
}

