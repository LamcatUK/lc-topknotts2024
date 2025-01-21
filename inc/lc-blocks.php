<?php
defined('ABSPATH') || exit;

function acf_blocks()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'                => 'lc_hero',
            'title'                => __('LC Hero'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_hero.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_nav_cards',
            'title'                => __('LC Nav Cards'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_nav_cards.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_cta_banner',
            'title'                => __('LC CTA Banner'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_cta_banner.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_hair_cards',
            'title'                => __('LC Hair Cards'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_hair_cards.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_text_image',
            'title'                => __('LC Text Image'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_text_image.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_avala',
            'title'                => __('LC Avala'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_avala.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_insta_banner',
            'title'                => __('LC Insta Banner'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_insta_banner.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_review_slider',
            'title'                => __('LC Review Slider'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_review_slider.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_address_map',
            'title'                => __('LC Address and Map'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_address_map.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_child_cards',
            'title'                => __('LC Child Cards'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_child_cards.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_breadcrumbs',
            'title'                => __('LC Breadcrumbs'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_breadcrumbs.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));

        acf_register_block_type(array(
            'name'                => 'lc_prices',
            'title'                => __('LC Prices'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_prices.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_price_list',
            'title'                => __('LC Price List'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_price_list.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));

        acf_register_block_type(array(
            'name'                => 'lc_three_images',
            'title'                => __('LC Three Images'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_three_images.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));

        acf_register_block_type(array(
            'name'                => 'lc_gallery',
            'title'                => __('LC Gallery'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_gallery.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));

        acf_register_block_type(array(
            'name'                => 'lc_faqs',
            'title'                => __('LC FAQs'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_faqs.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'                => 'lc_brands',
            'title'                => __('LC Brands'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_brands.php',
            'mode'    => 'edit',
            'supports' => array('mode' => false),
        ));

        //     acf_register_block_type(array(
        //         'name'				=> 'lc_service_nav',
        //         'title'				=> __('LC Service Nav Cards'),
        //         'category'			=> 'layout',
        //         'icon'				=> 'cover-image',
        //         'render_template'	=> 'page-templates/blocks/lc_service_nav.php',
        //         'mode'	=> 'edit',
        //         'supports' => array('mode' => false),
        //     ));

        //     acf_register_block_type(array(
        //         'name'				=> 'lc_latest_blogs',
        //         'title'				=> __('LC Latest Blogs'),
        //         'category'			=> 'layout',
        //         'icon'				=> 'cover-image',
        //         'render_template'	=> 'page-templates/blocks/lc_latest_blogs.php',
        //         'mode'	=> 'edit',
        //         'supports' => array('mode' => false),
        //     ));



        //     acf_register_block_type(array(
        //         'name'				=> 'lc_contact_page',
        //         'title'				=> __('LC Contact Details and Form Block'),
        //         'category'			=> 'layout',
        //         'icon'				=> 'cover-image',
        //         'render_template'	=> 'page-templates/blocks/lc_contact_page.php',
        //         'mode'	=> 'edit',
        //         'supports' => array('mode' => false),
        //     ));
        //     acf_register_block_type(array(
        //         'name'				=> 'lc_form_cta',
        //         'title'				=> __('LC CTA and Form Block'),
        //         'category'			=> 'layout',
        //         'icon'				=> 'cover-image',
        //         'render_template'	=> 'page-templates/blocks/lc_form_cta.php',
        //         'mode'	=> 'edit',
        //         'supports' => array('mode' => false),
        //     ));
    }
}

add_action('acf/init', 'acf_blocks');

// Gutenburg core modifications
add_filter('register_block_type_args', 'core_image_block_type_args', 10, 3);
function core_image_block_type_args($args, $name)
{
    if ($name == 'core/paragraph') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/heading') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/list') {
        $args['render_callback'] = 'modify_core_add_container';
    }

    return $args;
}

function modify_core_add_container($attributes, $content)
{
    ob_start();
    // $class = $block['className'];
?>
    <div class="container-xl">
        <?= $content ?>
    </div>
<?php
    $content = ob_get_clean();
    return $content;
}
?>