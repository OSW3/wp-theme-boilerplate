
<div class="<?= $switcher->class ?>">
    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= $switcher->text ; ?>
    </a>
    <div class="<?= $switcher->menu_class ?>" aria-labelledby="dropdownMenuButton">
        <?php foreach (wptb_i18n__get_available_languages() as $code => $language): ?>
        <a class="dropdown-item" href="<?= is_home() ? pll_home_url($code) : get_route(get_the_ID(), $code); ?>"><?= $language; ?></a>
        <?php endforeach; ?>
    </div>
</div>