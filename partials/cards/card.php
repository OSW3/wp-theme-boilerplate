<div class="card">

    <?php if( isset($card['cover']) && $card['cover'] != null ): ?>
    <div class="card-cover">
        <?php if( isset($card['link']) && $card['link'] != null ): ?>
        <!-- Cover + Link -->
        <a href="<?= $card['link'] ?>">
            <img src="<?= $options['cover'] ?>" 
                <?php if( isset($card['title']) && $card['title'] != null ): ?>
                    alt="<?= $options['title'] ?>"
                <?php endif; ?>
                >
        </a>
        <?php else: ?>
        <!-- Cover -->
        <img src="<?= $options['cover'] ?>" 
            <?php if( isset($card['title']) && $card['title'] != null ): ?>
                alt="<?= $options['title'] ?>"
            <?php endif; ?>
            >
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <div class="card-body">

        <?php if( isset($card['title']) && $card['title'] != null ): ?>
        <div class="card-title">

            <!-- title -->
            <?php if( isset($card['link']) && $card['link'] != null ): ?>
            <a href="<?= $card['link'] ?>"><?= $card['title'] ?></a>
            <?php else: ?>
            <?= $card['title'] ?>
            <?php endif; ?>

        </div>
        <?php endif; ?>

        <?php if( isset($card['inner']) && $card['inner'] != null ): ?>
        <div class="card-inner">
            <?= $card['inner'] ?>
        </div>
        <?php endif; ?>
    </div>

    <?php if( isset($card['footer']) && $card['footer'] != null ): ?>
    <div class="card-footer">
        <?= $card['footer'] ?>
    </div>
    <?php endif; ?>

</div>