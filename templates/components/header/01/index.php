<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Header 01
 * 
 */ if (!defined('ABSPATH')) exit;
?>

<header class="main-header">

    <!-- Header TopBar -->
    <?php wptb__render_component("topbar/01") ?>

    <!-- Header NavBar -->
    <?php wptb__render_component("navbar/01", [
        'main_menu' => wptb__menu_getItems('main-menu')
    ]) ?>

</header>