<?php
$services = get_field('services', 'option');

$service_classes = get_field('service_class');

?>
<div class="container-xl bg-grey-100 p-5">
    <ul class="cols-lg-3 mb-0 price-list">
        <?php
        foreach ($service as $s) {
            if (is_array($service_classes) && in_array(get_field('service_classes'), $service_classes)) {
                echo '<li><a href="#' . acf_slugify($s) . '">' . $s . '</a></li>';
            }
        }
        ?>
    </ul>
</div>
<?php


foreach ($services as $service) {
    $cols = $service['layout'] == 'Standard' ? '' : 'three_cols';
    $id = acf_slugify($service['service_name']);
?>
    <section class="prices" id="<?= $id ?>">
        <div class="container-xl">
            <div class="service pb-5 <?= $cols ?>">
                <div class="service_info">
                    <h3><?= esc_html($service['service_name']) ?></h3>
                    <?php
                    if ($service['service_short_description'] ?? null) {
                    ?>
                        <div class="mb-4"><?= $service['service_short_description'] ?></div>
                    <?php
                    }
                    if ($service['image'] ?? null) {
                    ?>
                        <?= wp_get_attachment_image($service['image'], 'large', false, null) ?>
                    <?php
                    }
                    ?>
                </div>
                <?php
                if ($service['layout'] == 'Compact') {
                ?>
                    <div class="service_description">
                        <?= $service['long_description'] ?>
                    </div>
                <?php
                }
                if ($service['layout'] == 'Wide') {
                ?>
                    <div class="service_description">
                        <?= $service['long_description'] ?>
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
                                <div class="fw-bold text-uppercase"><?= $option['option_name'] ?></div>
                                <?php
                                if (isset($option['option_variant']) && is_array($option['option_variant'])) {
                                    foreach ($option['option_variant'] as $variant) {
                                ?>
                                        <div class="option_variant">
                                            <span><?= $variant['variant_name'] ?></span>
                                            <span>&pound;<?= number_format($variant['variant_price'], 2) ?></span>
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
            <div class="text-center pt-2 pb-5">
                <a href="<?= $service['associated_page'] ?>" class="button button-primary">Find Out More</a>
            </div>
        </div>
    </section>
<?php
}
