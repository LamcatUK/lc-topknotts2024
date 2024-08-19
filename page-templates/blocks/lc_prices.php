<?php
$services = get_field('services', 'option');

$background = get_field('background');
$bg = is_array($background) && isset($background[0]) && $background[0] == 'Yes' ? 'bg-grey-100' : '';

$stripes = get_field('stripes') == 'Grey/White' ? 'stripes' : 'flip';

foreach ($services as $service) {
    if ($service['associated_page'] == get_the_permalink()) {
        // var_dump($service);
        $cols = $service['layout'] == 'Standard' ? '' : 'three_cols';
        ?>
<section class="prices <?=$bg?> <?=$stripes?>">
    <div class="container-xl">
        <div class="service pb-5 <?=$cols?>">
            <div class="service_info">
                <h3><?=esc_html($service['service_name'])?></h3>
                <?php
                if ($service['service_short_description'] ?? null) {
                    ?>
                <div class="mb-4"><?=$service['service_short_description']?></div>
                    <?php
                }
                if ($service['image'] ?? null) {
                    ?>
                <?=wp_get_attachment_image( $service['image'], 'large', false, array('class' => 'has-shadow--lg'))?>
                    <?php
                }
                ?>
            </div>
            <?php
            if ($service['layout'] == 'Compact') {
                ?>
            <div class="service_description">
                <?=$service['long_description']?>
            </div>
                <?php
            }
            if ($service['layout'] == 'Wide') {
                ?>
            <div class="service_description">
                <?=$service['long_description']?>
            </div>
                <?php
            }
            ?>
            <div class="service_list">
            <?php
            if ($service['options'] ?? null) {
                foreach ($service['options'] as $option) {
                    ?>
                    <div class="service_option">
                        <div class="fw-bold text-uppercase"><?=$option['option_name']?></div>
                        <?php
                    if (isset($option['option_variant']) && is_array($option['option_variant'])) {
                        foreach ($option['option_variant'] as $variant) {
                        ?>
                        <div class="option_variant">
                            <span><?=$variant['variant_name']?></span>
                            <span>&pound;<?=number_format($variant['variant_price'],2)?></span>
                        </div>
                        <?php
                        }
                    }
                        ?>
                    </div>
                    <?php
                }
            }
            ?>
            </div>
        </div>
    </div>
</section>
        <?php
    }
}