
<nav id="main-navbar" class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand brand" href="<?= get_home_url(); ?>">
            <img src="<?= get_image('logo.png') ?>" alt="<?= bloginfo('name') ?>">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <?= get_menu('main-menu', 'navbar-nav ml-auto', 'nav-item', 'nav-link', false) ?>
        </div>
    </div>
</nav>