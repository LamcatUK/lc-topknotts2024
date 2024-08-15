<?php
$class = $block['className'] ?? 'py-5';
?>
<section class="nav_cards">
    <div class="container-xl <?=$class?>">
        <div class="row justify-content-center g-4">
        <?php
        while (have_rows('cards')) {
            the_row();
            $l = get_sub_field('link');
            ?>
            <div class="col-md-4">
                <a class="nav_cards__card" href="<?=$l['url']?>" target="<?=$l['target']?>">
                    <?=wp_get_attachment_image( get_sub_field('card_bg'), 'large', false, array('class' => 'nav_cards__bg', 'alt' => $l['title']) )?>
                    <h3 class="nav_cards__title">
                        <?=$l['title']?>
                    </h3>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</section>