<?php
$child_query = new WP_Query(array(
    'post_parent'    => get_the_ID(),
    'post_type'      => 'page',
    'posts_per_page' => -1, // Retrieve all child pages
    'post_status'    => 'publish',
    'order'          => 'ASC'
));

if ($child_query->have_posts()) {
?>
    <section class="child_cards py-5">
        <div class="container-xl">
            <div class="row">
                <?php
                while ($child_query->have_posts()) {
                    $child_query->the_post();
                ?>
                    <div class="col-md-6 col-lg-3 child_cards__card">
                        <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                    </div>
                <?php
                }
                wp_reset_postdata(); // Reset the post data after the query
                ?>
            </div>
        </div>
    </section>
<?php
} else {
    echo '<!-- No child pages found. -->';
}
