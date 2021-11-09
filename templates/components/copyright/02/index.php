<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Copyright 02
 * 
 */ if (!defined('ABSPATH')) exit;
?>

<div class="wptb--copyright-02">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">

            <div class="me-auto">
                Copyright &copy <?= date('Y') ?> Company Name. All Rights Reserved.
            </div>

            <ul class="justify-content-end list-unstyled d-flex ms-auto">
                <?php wptb__menu_parse("social-menu", "list-item/01") ?>
            </ul>

        </div>
    </div>
</div>