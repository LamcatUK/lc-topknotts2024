<?php 
$class = $block['className'] ?? 'pb-5';
$l1 = get_field('link_1') ?? null;
$l2 = get_field('link_2') ?? null;
$l3 = get_field('link_3') ?? null;
$l4 = get_field('link_4') ?? null;
?>
<section class="hair_cards bg-grey-100">
    <div class="container-xl <?=$class?>">
        <div class="hair_cards__grid">
            <a href="<?=$l1['url']?>" class="hair_cards__card">
                <?=wp_get_attachment_image( get_field('image_1'), 'large', false, array('alt' => '', 'class' => 'hair_cards__image') )?>
                <div class="hair_cards__content">
                    <h3><?=get_field('title_1')?></h3>
                    <div><?=get_field('content_1')?></div>
                </div>
            </a>
            <a href="<?=$l2['url']?>" class="hair_cards__card">
                <?=wp_get_attachment_image( get_field('image_2'), 'large', false, array('alt' => '', 'class' => 'hair_cards__image') )?>
                <div class="hair_cards__content">
                    <h3><?=get_field('title_2')?></h3>
                    <div><?=get_field('content_2')?></div>
                </div>
            </a>
            <a href="<?=$l3['url']?>" class="hair_cards__card">
                <?=wp_get_attachment_image( get_field('image_3'), 'large', false, array('alt' => '', 'class' => 'hair_cards__image') )?>
                <div class="hair_cards__content">
                    <h3><?=get_field('title_3')?></h3>
                    <div><?=get_field('content_3')?></div>
                </div>
            </a>
            <a href="<?=$l4['url']?>" class="hair_cards__card">
                <?=wp_get_attachment_image( get_field('image_4'), 'large', false, array('alt' => '', 'class' => 'hair_cards__image') )?>
                <div class="hair_cards__content">
                    <h3><?=get_field('title_4')?></h3>
                    <div><?=get_field('content_4')?></div>
                </div>
            </a>
        </div>
    </div>
</section>