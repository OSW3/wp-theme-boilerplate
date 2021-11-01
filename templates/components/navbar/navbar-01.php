<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

        <a class="navbar-brand" href="<?= home_url() ?>">Navbar</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php foreach ($main_menu as $item): ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= $item->url ?>"><?= $item->post_title ?></a>
                </li>
                <?php endforeach; ?>
            </ul>


            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php  wptb_parseMenu("main-menu", "components/nav-item"); ?>
            </ul>

            <ul class="navbar-nav ms-auto">
                <?php  wptb_parseMenu("social-menu", "components/nav-item"); ?>
            </ul>

            <!-- Search form -->
            <?php get_search_form() ?>

        </div>
    </div>
</nav>