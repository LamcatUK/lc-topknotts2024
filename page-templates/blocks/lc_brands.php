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
            <div class="swiper-container brands__slider">
                <div class="swiper-wrapper">
                    <?php
                    foreach (get_field('logos') as $l) {
                        echo '<div class="swiper-slide text-center">' . wp_get_attachment_image($l, 'full', false) . '</div>';
                    }
                    ?>
                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var swiper = new Swiper(".brands__slider", {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        breakpoints: {
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 20
                            }, // Tablet
                            1024: {
                                slidesPerView: 5,
                                spaceBetween: 30
                            } // Desktop
                        },
                        loop: true,
                        autoplay: {
                            delay: 3000,
                            disableOnInteraction: false,
                        }
                    });
                });
            </script>

        <?php
        }
        ?>
    </div>
</section>