<?php
/**
 * WP Theme Boilerplate : components/topbars/default_topbar
 * 
 * Carousel
 * --
 * (object) $carousel
 * (object) $carousel->items List of items
 * (string) $carousel->id Id attribute of the carousel container
 * (string) $carousel->class Class attribute of the carousel container
 * 
 * Items
 * --
 */
?>
<!-- Bootstrap Carousel -->
<div id="<?= $carousel->id ?>" class="<?= $carousel->class ?>" data-ride="carousel">

    <!-- Main carousel slides -->
    <div class="carousel-inner">
        <?php foreach ($carousel->items as $item): ?>
        <div class="carousel-item<?= ($item['active'] ? " active": null) ?>">
            <?php if ($item['link']): ?><a href="<?= $item['link'] ?>"<?= ($item['link_target'] ? "target=\"".$item['link_target']."\"": null) ?>><?php endif; ?>
            <img class="d-block w-100" src="<?= $item['image'] ?>" alt="<?= $item['image_alt'] ?>">
            <?php if ($item['link']): ?></a><?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>

    <?php if ($carousel->indicators): ?>
    <!-- Main carousel indicators -->
    <ol class="carousel-indicators">
        <?php foreach ($carousel->items as $key => $item): ?>
        <li data-target="#<?= $carousel->id ?>" data-slide-to="<?= $key ?>"<?= ($item['active'] ? " class=\"active\"": null) ?>></li>
        <?php endforeach; ?>
    </ol>
    <?php endif; ?>

    <?php if ($carousel->controls): ?>
    <!-- Main carousel Controls -->
    <a class="carousel-control-prev" href="#<?= $carousel->id ?>" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#<?= $carousel->id ?>" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <?php endif; ?>
</div>