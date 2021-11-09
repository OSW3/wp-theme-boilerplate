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
    <div class="container-fluid">

        <a class="navbar-brand" href="<?= home_url() ?>">Navbar</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Main Menu -->
            <ul class="navbar-nav me-auto">
                <?php wptb__menu_parse("main-menu", "nav-item/01") ?>
            </ul>
            
            <!-- Social Menu -->
            <ul class="navbar-nav ms-auto">
                <?php wptb__menu_parse("social-menu", "nav-item/01") ?>
            </ul>

            <!-- Search form -->
            <?php get_search_form() ?>

        </div>
    </div>
</nav>