<section class="insta_banner">
    <?php
    foreach (get_field('insta_banner_bg', 'options') as $i) {
        echo wp_get_attachment_image($i, 'large', false, array('alt' => ''));
    }

    ?>
    <div class="insta_banner__button">
        <a href="/gallery/" class="button button-primary" aria-label="Gallery">View Gallery</a>
    </div>
</section>