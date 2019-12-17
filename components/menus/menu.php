<ul class="<?= $ul_class ?>">
    <?php foreach (get_menu_by_name( $menu ) as $item): ?>

    <li class="<?= $li_class ?><?= (get_the_ID() == $item->object_id) ? " active" : ""; ?>">
        <a class="<?= $a_class ?>" href="<?= $item->url; ?>"><?= $item->title; ?></a>
    </li>
    <?php endforeach; ?>
</ul>