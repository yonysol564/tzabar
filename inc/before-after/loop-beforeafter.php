<?php
global $item,$isotop_classes;

$url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
$img_before  = get_field('img_before',$item->ID);
$img_after   = get_field('img_after',$item->ID);
$text_before = get_field('text_before',$item->ID);
$text_afer   = get_field('text_afer',$item->ID);
?>
<div class="beforeAfter_item_wrap">
    <a href="#beforeAfter_item_<?php echo $item->ID;?>" class="gallery-item sabar-in" data-effect="mfp-zoom-in"  title="פנים">
        <img class="sabar-logo" src="<?php echo THEME_DIR . ''; ?>/images/sabar_logo.png" width="75" height="29" alt="" />
        <div class="sabar">
            <img src="<?php echo $img_before['sizes']['medium']; ?>" alt="" class="beforeAfter_img" />
            <div class="before"><?php echo $text_before; ?></div>
        </div>
        <div class="sabar">
            <img src="<?php echo $img_after['sizes']['medium']; ?>" alt="" class="beforeAfter_img" />
            <div class="before"><?php echo $text_afer; ?></div>
        </div>
        <span class="btn"></span>
        <div class="shadow"></div>
    </a>
    <div id="beforeAfter_item_<?php echo $item->ID;?>" class="beforeAfterPop mfp-hide">
        <div class="beforeAfter_item">
            <img class="sabar-logo" src="<?php echo THEME_DIR . ''; ?>/images/sabar_logo.png" width="75" height="29" alt="" />
            <div class="sabar">
                <img src="<?php echo $img_before['url']; ?>" alt="" class="beforeAfter_img" />
                <div class="before"><?php echo $text_before; ?></div>
            </div>
            <div class="sabar">
                <img src="<?php echo $img_after['url']; ?>" alt="" class="beforeAfter_img" />
                <div class="before"><?php echo $text_afer; ?></div>
            </div>
            <div class="shadow"></div>
        </div>
    </div>
</div>
