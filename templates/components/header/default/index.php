<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Header Default
 * 
 */ if (!defined('ABSPATH')) exit;
?>

<header class="main-header">

    <!-- Header NavBar -->
    <?php wptb__render_component("navbar/default", [
        'main_menu' => wptb__menu_getItems('main-menu')
    ]) ?>

</header>