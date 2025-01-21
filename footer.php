<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cb-peoplesafe
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<footer>
    <div class="container-xl">
        <div class="footer__grid py-5">
            <div id="footer_logo" class="text-center">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/topknotts--wo.png" width=205 height=40 alt="TopKnotts Crawley" class="mb-3 mx-auto">
                <?= do_shortcode('[social_icons]') ?>
                <a class="button button-primary justify-self-center" href="#">Book Now</a>
            </div>
            <div id="footer_hair" class="text-center text-sm-start">
                <div class="footer__title">Hair</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu_1')); ?>
            </div>
            <div id="footer_beauty" class="text-center text-sm-start">
                <div class="footer__title">Beauty</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu_2')); ?>
            </div>
            <div id="footer_botox" class="text-center text-sm-start">
                <div class="footer__title">Botox</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu_3')); ?>
            </div>
            <div id="footer_links" class="text-center text-sm-start">
                <div class="footer__title">Useful Links</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu_4')); ?>
            </div>
        </div>
    </div>
    <div class="colophon">
        <div class="container-xl">
            <div class="row g-2">
                <div class="col-lg-8 text-center text-lg-start">
                    &copy; <?= date('Y') ?> TopKnotts
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <a href="/terms/">Terms &amp; Conditions</a> |
                    <a href="/privacy-policy/">Privacy</a> &amp; <a href="/cookie-policy/">Cookie</a> Policies |
                    Site by <a href="https://www.lamcat.co.uk/" target="_blank">Lamcat</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>