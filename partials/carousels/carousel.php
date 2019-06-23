<div id="<?= $id ?>" class="carousel slide carousel-fade" data-ride="carousel">
    
    <div class="carousel-inner">
        <?php foreach ($slides as $key => $slide): ?>
        <div class="carousel-item <?= $key === 0 ? "active" : null ?>" style="background-image: url(<?= get_image($slide['illustration']) ?>)">
            <?php if (isset($slide['link']) && $slide['link'] != null): ?>
            <a href="<?= trim($slide['link']) ?>" target="<?= isset($slide['target']) ? trim($slide['target']) : "_self" ?>"></a>
            <?php endif;?>
        </div>
        <?php endforeach; ?>
    </div>
    
    <?php if ($indicators): ?>
    <ol class="carousel-indicators">
        <?php foreach ($slides as $key => $slide): ?>
        <li data-target="#<?= $id ?>" data-slide-to="<?= $key ?>" class="<?= $key === 0 ? "active" : null ?>"></li>
        <?php endforeach; ?>
    </ol>
    <?php endif; ?>

    <?php if ($control): ?>
    <a class="carousel-control-prev" href="#<?= $id ?>" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#<?= $id ?>" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <?php endif; ?>
</div>