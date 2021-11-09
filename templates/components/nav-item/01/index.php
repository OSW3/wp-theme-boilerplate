<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Nav-Item 01
 * 
 */ if (!defined('ABSPATH')) exit;
?>

<li class="nav-item">
    <a class="nav-link" href="<?= $item->url ?>" target="<?= $item->target ?>">
        <?= $item->title ?>
    </a>
</li>