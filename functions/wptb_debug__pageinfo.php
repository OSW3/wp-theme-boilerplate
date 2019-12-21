<?php
/**
 * WP Theme Boilerplate : functions/wptb_debug__pageinfo
 * 
 * @Description: Return a HTML topbar component
 * @Version: 1.0.0
 * @Usage: wptb_debug__pageinfo($_DIR, $_FILE);
 * @Example: wptb_debug__pageinfo(__DIR__,__FILE__);
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

