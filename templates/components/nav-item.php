<?php 
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// Directory: ./components/
// This directory is used to store HTML components parts

// required: recomended

//======================================================================
?>
<li class="nav-item">
    <a class="nav-link" href="<?= $args['item']->url ?>" target="<?= $args['item']->target ?>">
        <?= $args['item']->title ?>
    </a>
</li>