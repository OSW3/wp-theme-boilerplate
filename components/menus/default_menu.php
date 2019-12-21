<?php
/**
 * WP Theme Boilerplate : components/menus/default_menu
 * 
 * Menu
 * --
 * (object) $menu
 * (object) $menu->items List of items
 * (string) $menu->class Class attribute of the menu container
 * 
 * Items
 * --
 * (string) $item->title The text of the item
 * (string) $item-url The url link
 * (string) $item-item_class Class attribute of the item
 * (string) $item-link_class Class attribute of the link
 * (boolean) $item->isActive TRUE if the item is the current link
 */
?>
<ul class="<?= $menu->class ?>">
    <?php foreach ($menu->items as $item): ?>
    <li class="<?= $item->item_class ?><?= $item->isActive ? " active" : ""; ?>">
        <a class="<?= $item->link_class ?>" href="<?= $item->url; ?>"><?= $item->title; ?></a>
    </li>
    <?php endforeach; ?>
</ul>