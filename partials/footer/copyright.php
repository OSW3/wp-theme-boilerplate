<div class="footer-copyright">
    <div class="container">
        &copy; <?= date("Y") ?> <?= bloginfo("name") ?>
        
        <?php foreach( get_menu_by_name("copyright-menu") as $item ): ?>
            - <a href="<?= $item->url; ?>"><?= $item->title; ?></a>
        <? endforeach; ?>

    </div>
</div>