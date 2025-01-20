<?php
$background = get_field('bg_colour') ?: 'white';
$class = $block['className'] ?? 'py-5';

$shadow = get_field('shadow') == 'Yes' ? 'has-shadow--lg' : '';

switch (get_field('split')) {
    case 4060:
        $colText = 'col-md-4';
        $colImage = 'col-md-8';
        break;
    case 6040:
        $colText = 'col-md-8';
        $colImage = 'col-md-4';
        break;
    case 7030:
        $colText = 'col-md-9';
        $colImage = 'col-md-3';
        break;
    default:
        $colText = 'col-md-6';
        $colImage = 'col-md-6';
}

$orderText = get_field('order') == 'text image' ? 'order-md-1' : 'order-md-2';
$orderImage = get_field('order') == 'text image' ? 'order-md-2' : 'order-md-1';

if (isset($block['anchor'])) {
    echo '<a id="' . esc_attr($block['anchor']) . '" class="anchor"></a>';
}

?>
<section
    class="text_image bg-<?= $background ?> <?= $class ?>">
    <div class="container-xl">
        <div class="row g-5">
            <div
                class="<?= $colText ?> <?= $orderText ?> d-flex flex-column justify-content-center">
                <?php
                if (get_field('pre_title') ?? null) {
                ?>
                    <div class="fs-300 fw-600"><?= get_field('pre_title') ?></div>
                <?php
                }
                ?>
                <h2 class="mb-4">
                    <?= get_field('title') ?>
                </h2>
                <div>
                    <?= get_field('content') ?>
                </div>
            </div>
            <div
                class="<?= $colImage ?> <?= $orderImage ?> d-flex justify-content-center align-items-center">
                <img src="<?= wp_get_attachment_image_url(get_field('image'), 'large') ?>" class="rounded--lg <?= $shadow ?>"
                    alt="">
            </div>
        </div>
    </div>
</section>