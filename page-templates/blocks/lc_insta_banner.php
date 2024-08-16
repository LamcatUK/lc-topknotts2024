<section class="insta_banner">
    <?php
    foreach (get_field('insta_banner_bg','options') as $i) {
        echo wp_get_attachment_image( $i, 'large', false, array('alt' => '') );
    }

    $s = get_field('socials','options') ?? null;
    if ($s['instagram_url'] ?? null) {
        ?>
    <div class="insta_banner__button">
        <a href="<?=$s['instagram_url']?>" class="button button-primary" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i> Follow Us</a>
    </div>
        <?php
    }
    ?>
</section>