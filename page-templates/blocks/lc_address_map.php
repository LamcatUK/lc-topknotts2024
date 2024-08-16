<?php
?>
<section class="address_map">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6 py-5">
                <h2>Find Us</h2>
                <div class="address_map__grid mb-4">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fa-solid fa-scissors"></i></span> <?=get_field('contact_address','options')?></li>
                        <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt"></i></span> <a href="<?=get_field('directions_url','options')?>" target="_blank">Get Directions</a></li>
                    </ul>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span> <?=contact_phone(null)?></li>
                        <li><span class="fa-li"><i class="fa-solid fa-paper-plane"></i></span> <?=contact_email(null)?></li>
                    </ul>
                </div>
                <div class="d-flex gap-4 align-items-center flex-wrap">
                    <div class="h3 mb-0">Connect</div>
                    <?=social_icons()?>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <iframe src="<?=get_field('google_maps_url','options')?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>