<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Nav-Item 01
 * 
 * Simple nav item with a link
 * 
 */ if (!defined('ABSPATH')) exit;

$item_url    = $item->url;
$item_label  = $item->title;
$item_target = empty($item->target) ? "_self" : $item->target;
?>

<li class="nav-item">
    <a class="nav-link" href="<?= $item_url ?>" target="<?= $item_target ?>">
        <?= $item_label ?>
    </a>
</li>