<section class="three_images">
    <div class="container-xl py-5">
        <div class="row">
            <div class="col-md-3">
                <div class="row g-1">
                    <div class="col-4 col-md-12"><?=wp_get_attachment_image( get_field('image_1'), 'large', false, null )?></div>
                    <div class="col-4 col-md-12"><?=wp_get_attachment_image( get_field('image_2'), 'large', false, null )?></div>
                    <div class="col-4 col-md-12"><?=wp_get_attachment_image( get_field('image_3'), 'large', false, null )?></div>
                </div>
            </div>
            <div class="col-md-9">
                <?=get_field('content')?>
            </div>
        </div>
    </div>
</section>