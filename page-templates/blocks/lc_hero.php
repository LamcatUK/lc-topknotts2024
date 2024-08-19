<?php
$c = is_front_page() == 1 ? 'home_hero' : '';
?>
<section class="hero <?=$c?>">
    <img src="<?=get_stylesheet_directory_uri()?>/img/hero-pattern.png" alt="" class="hero__bg">
    <div class="hero__words container-xl h-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-md-6 d-flex flex-column align-items-start justify-content-center">
                <div class="fs-300 fw-600"><?=get_field('pre_title')?></div>
                <h1><?=get_field('title')?></h1>
                <?php
                if (get_field('content') ?? null) {
                    ?>
                <div class="fs-500 mb-4"><?=get_field('content')?></div>
                    <?php
                }
                if (get_field('cta') ?? null) {
                    $l = get_field('cta');
                    ?>
                <a href="<?=$l['url']?>" target="<?=$l['target']?>" class="button button-primary"><?=$l['title']?></a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="hero__img container-xl">
        <div class="row h-100">
            <div class="col-md-6 offset-md-6 position-relative">
                <?=wp_get_attachment_image( get_field('image'), 'large', false, array('alt' => '', 'class' => 'hero__image') )?>
            </div>
        </div>
    </div>
</section>
