<?php
/**
 * The template for displaying the header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
<script src="<?= get_script('html5') ?>"></script>
<![endif]-->
<?php wp_head(); ?>

    <meta name="description" content="<?= date("j M Y") ?> - <?= bloginfo('description') ?>">
    <link rel="shortcut" href="<?= get_image("favicon.ico") ?>" type="image/x-icon" />
    <link rel="icon" href="<?= get_image("favicon.ico") ?>" type="image/x-icon" />
</head>
<body <?php body_class(); ?>>

    <header id="main-header">

        <?= get__bar_top(true) ?>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand brand" href="<?= get_home_url(); ?>">
                    <img src="<?= get_image('logo.png') ?>" alt="<?= bloginfo('name') ?>">Brand
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                <?= get_menu('main-menu', 'navbar-nav ml-auto', 'nav-item', 'nav-link', false) ?>
                </div>
            </div>
        </nav>

    </header>

    <div id="main-content">