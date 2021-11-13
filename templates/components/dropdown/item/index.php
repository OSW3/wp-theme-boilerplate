<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Dropdown Item
 * 
 */ if (!defined('ABSPATH')) exit;

$item_url    = $item->url;
$item_label  = $item->title;
$item_target = empty($item->target) ? "_self" : $item->target;
?>

<?php if ($item_url == "#divider"): ?>
    <?php wptb__render_component("dropdown/divider"); ?>
<?php else: ?>
<li>
    <a class="dropdown-item" href="<?= $item_url ?>" target="<?= $item_target ?>">
        <?= $item_label ?>
    </a>
</li>
<?php endif; ?>