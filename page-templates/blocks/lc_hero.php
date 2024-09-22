<?php
$c = is_front_page() == 1 ? 'home_hero' : '';

$avala = strpos(get_permalink(), '/avala/') !== false ? 'avala' : '';

?>
<section class="hero <?=$c?>">
    <!-- Background Image -->
    <img src="<?=get_stylesheet_directory_uri()?>/img/hero-pattern.png" alt="" class="hero__bg">

    <!-- Content Section with Bootstrap's container-xl -->
    <div class="container-xl h-100 hero__content">
        <div class="hero__text">
            <div class="pre-title"><?=get_field('pre_title')?></div>
            <h1><?=get_field('title')?></h1>
            <?php if (get_field('content') ?? null) { ?>
                <div class="content"><?=get_field('content')?></div>
            <?php } ?>
            <?php if (get_field('cta') ?? null) {
                $l = get_field('cta'); ?>
                <a href="<?=$l['url']?>" target="<?=$l['target']?>" class="button button-primary"><?=$l['title']?></a>
            <?php } ?>
        </div>

        <div class="hero__image-container <?=$avala?>">
            <?php
                if ($avala ?? null) {
                    ?>
                <img src="<?=get_stylesheet_directory_uri()?>/img/avala-logo.svg" alt="avala." class="hero__image--avala">
                    <?php
                }
                else {
                    echo wp_get_attachment_image( get_field('image'), 'large', false, array('alt' => '', 'class' => 'hero__image') );
                }
            ?>
        </div>
    </div>
</section>

<?php
/*
<section class="hero <?=$c?>">
    <img src="<?=get_stylesheet_directory_uri()?>/img/hero-pattern.png" alt="" class="hero__bg">
    <div class="hero__words container-xl h-100 d-flex align-items-center">
        <div class="row w-100">
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
        </div>
    </div>
    <div class="hero__img container-xl">
        <div class="row h-100">
            <div class="col-md-6 offset-md-6 position-relative d-grid">
            <?php
                if ($avala ?? null) {
                    ?>
                <img src="<?=get_stylesheet_directory_uri()?>/img/avala-logo.svg" alt="avala." class="hero__image--avala">
                    <?php
                }
                else {
                    echo wp_get_attachment_image( get_field('image'), 'large', false, array('alt' => '', 'class' => 'hero__image') );
                }
                ?>
            </div>
        </div>
    </div>
</section>
*/
?>
<script>
    document.addEventListener("scroll", function() {
        const scrollPosition = window.scrollY;
        const heroSection = document.querySelector('.hero');
        const heroHeight = heroSection.offsetHeight;

        // Adjust this multiplier for more noticeable effect
        const scrollMultiplier = 0.5; // Increased from 0.3 to 0.5 for more dramatic movement

        // Calculate how much the user has scrolled relative to the hero section
        const scrolledPercentage = Math.min(scrollPosition / heroHeight, 1);

        // Move the background image slower
        const heroBg = document.querySelector('.hero__bg');
        heroBg.style.transform = `translateY(${scrolledPercentage * scrollMultiplier * 200}px)`; // Background moves slower

        // Move the heading up slightly faster
        const heroHeading = document.querySelector('.hero__text h1');
        heroHeading.style.transform = `translateY(${scrolledPercentage * scrollMultiplier * -100}px)`; // Heading moves faster

        // Move the image slower than the scroll speed but increase movement
        const heroImage = document.querySelector('.hero__image');
        heroImage.style.transform = `translateY(${scrolledPercentage * scrollMultiplier * 300}px)`; // Increased movement for the image
    });
</script>
