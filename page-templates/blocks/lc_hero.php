<?php
$class = $block['className'] ?? 'mb-5';
?>
<section class="hero <?=$class?>">
    <div class="container-xl h-100 d-flex justify-content-end overflow-hidden">
        <div class="row">
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
            <div class="col-md-6 d-flex justify-content-center align-items-end">
                <?=wp_get_attachment_image( get_field('image'), 'large', false, array('alt' => '', 'class' => 'hero__image') )?>
            </div>
        </div>
    </div>
</section>