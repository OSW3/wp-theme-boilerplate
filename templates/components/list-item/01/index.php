<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Item-List 01
 * 
 */ if (!defined('ABSPATH')) exit;
?>

<li class="list-inline-item">
    <a class="list-link" href="<?= $item->url ?>" target="<?= $item->target ?>">
        <?= $item->title ?>
    </a>
</li>