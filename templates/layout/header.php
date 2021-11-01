<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * More info at https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#header-php
 * 
 * Template Type: Partial
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined( 'ABSPATH' )) exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?= get_bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>

<body>
    
    <!-- <div class="wrapper"> -->

    <header class="main-header">

        <!-- Header TopBar -->
        <?php wptb_component("topbar/topbar-01.php") ?>

        <!-- Header NavBar -->
        <?php wptb_component("navbar/navbar-01.php", [
            'main_menu' => wptb_getMenu('main-menu')
        ]) ?>

    </header>

        <div class="main-content">