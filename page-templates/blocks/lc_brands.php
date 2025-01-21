<section class="brands py-5">
    <div class="container-xl">
        <?php
        if (get_field('title') ?? null) {
        ?>
            <h3 class="text-center mb-4"><?= get_field('title') ?></h3>
        <?php
        }
        if (get_field('logos') ?? null) {
        ?>
            <div class="brands__logos">
                <?php
                foreach (get_field('logos') as $l) {
                    echo wp_get_attachment_image($l, 'full', false);
                }
                ?>
            </div>
        <?php
        }
        ?>
    </div>
</section>