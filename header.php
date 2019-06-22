<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="<?= get_script('html5') ?>"></script>
    <![endif]-->
    <?php wp_head(); ?>

    <?= get_partial("meta/opengraph") ?>
    <?= get_partial("meta/twittercard") ?>

    <meta name="description" content="<?= date("j M Y") ?> - <?= bloginfo('description') ?>">
    <link rel="shortcut" href="<?= get_image("favicon.ico") ?>" type="image/x-icon" />
    <link rel="icon" href="<?= get_image("favicon.ico") ?>" type="image/x-icon" />
</head>
<body <?php body_class(); ?>>

    <header id="main-header">

        <?= get_partial("topbar/topbar") ?>
        <?= get_partial("navbar/navbar") ?>

    </header>

    <div id="main-content">