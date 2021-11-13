<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Nav-Item 02
 * 
 */ if (!defined('ABSPATH')) exit;

$id = isset($id) ? $id : null;
$class = isset($class) ? $class : null;
$submenu = isset($submenu) && $submenu == true;
?>

<li class="<?= $class ?>">
    <a class="nav-link dropdown-toggle" href="#" id="<?= $id ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $item->title ?></a>

    <ul class="dropdown-menu <?= is($submenu, "submenu") ?>" aria-labelledby="<?= $id ?>">
    <?php 
    foreach ($item->children as $item)

        if (!empty($item->children))
            wptb__render_component("dropdown/menu", [
                'item' => $item,
                'submenu' => true,
                'id' => "submenu-". $item->ID,
            ]);

        else
            wptb__render_component("dropdown/item", [
                'item' => $item
            ]);
    ?>
    </ul>
</li>