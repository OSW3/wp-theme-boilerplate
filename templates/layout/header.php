<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * @see https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#header-php
 * 
 * @author URI: http://osw3.net
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<!-- TODO: Change the language ATTR -->
<html lang="en">
<head>
    <meta charset="<?= get_bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Livvic&display=swap" rel="stylesheet">
    
</head>
<body>
        
    <!-- Notice -->
    <?php wptb__render_component("notice/default") ?>
    
    <!-- TopBar -->
    <?php wptb__render_component("topbar/default") ?>

    <!-- Main Header -->
    <?php wptb__render_component("header/default") ?>

    <div class="main-content">