<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
 
get_header();

$content = get_the_content();

$blocks = parse_blocks($content);

$main = $hero = '';

foreach ($blocks as $block) {
    if ($block['blockName'] === 'acf/lc-hero') {
        $hero .= render_block($block);
    }
    else {
        $main .= render_block($block);
    }
}

if (!empty($hero)) {
    echo $hero;
}

?>
<main id="main" class="pt-5">
    <?php
    if (!empty($main)) {
        // echo apply_filters('the_content',$main);
        echo do_shortcode($main);
    }
?>
</main>
<?php
get_footer();
