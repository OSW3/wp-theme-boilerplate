<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Navbar 01
 * 
 */ if (!defined('ABSPATH')) exit;
?>

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="<?= home_url() ?>">Navbar</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Main Menu -->
            <?php wptb__render_component("navbar-nav/default", [
                'items' => wptb__menu_getItems("main-menu"),
                'attr_class' => "ms-auto me-auto",
            ]) ?>

            <!-- Social Menu -->
            <?php /* wptb__render_component("navbar-nav/default", [
                'items' => wptb__menu_getItems("social-menu"),
                'attr_class' => "ms-auto",
            ]) */ ?>

            <!-- Search form -->
            <?php get_search_form() ?>

        </div>
    </div>
</nav>