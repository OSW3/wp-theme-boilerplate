<?php
/**
 * The template for displaying the header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <?= wptp_assets__get_script('html5shiv', true, "lt IE 5") ?>

    <?php wp_head(); ?>

    <meta name="description" content="<?= date("j M Y") ?> - <?= bloginfo('description') ?>">
    
    <?= wptp_assets__get_favicon(
        "favicon.ico", true, 
        ["shortcut","icon"], 
        ["image/x-icon"]) ?>

</head>
<body <?php body_class(); ?>>

    <div class="wrapper">
        
        <?= wptb_component__get_topbar([
    
        ]) ?>
    
        <header id="main-header">
    
            <nav class="navbar navbar-expand-lg">
                <div class="container">
    
                    <a class="navbar-brand brand" href="<?= get_home_url(); ?>">
                        <?= wptp_assets__get_image("logo.png", true, get_bloginfo('name')) ?>
                    </a>
    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
    
                    <?= wptb_component__get_menu([
                        'name'      => "main-menu",
                        'component' => "default_menu",
                        'class'     => "navbar-nav ml-auto",
                        'item_class'=> "nav-item",
                        'link_class'=> "nav-link",
                    ]) ?>
    
                    </div>
                </div>
            </nav>
    
        </header>
    
        <div id="main-content">
            <div class="container">