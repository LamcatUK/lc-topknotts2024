<?php
$l = get_field('link_1') ?? null;
$bg = get_field('background') ?? null;
$text = get_field('background') != 'white' 
        && get_field('background') != 'grey-100'
        && get_field('background') != 'grey-200'
        ? 'text-white' : 'text-black';
?>
<section class="cta_banner bg-<?=$bg?>">
    <div class="container-xl py-5 text-center <?=$text?>">
        <h2 class="text-green-400"><?=get_field('title')?></h2>
        <div class="mb-3"><?=get_field('content')?></div>
        <?php
        if ($l) {
            ?>
        <a href="<?=$l['url']?>" target="<?=$l['target']?>" class="button button-primary"><?=$l['title']?></a>
            <?php
        }
        ?>
    </div>
</section>