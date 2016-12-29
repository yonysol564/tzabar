<?php
	$home_before_after = get_field('home_slider_beforeafter', 'option');
	$full_list_cares_link = get_field('full_list_cares_link', 'option');
	global $full_list_cares;
?>
<div class="treatment status">
	<div class="container">
	<?php $home_slider_beforeafter_title = get_field('home_slider_beforeafter_title','option'); ?>
		<div class="tittle"><?php echo $home_slider_beforeafter_title; ?></div>
		<div class="homeSwiperBeforeAfterWrap">
			<div class="swiper-container homeSwiperBeforeAfter" data-items="2" data-pagination="true" data-center-slides="true" data-arrows="true" data-breakpoints-767="2" data-breakpoints-599="2">
				<div class="swiper-wrapper">
				<?php
					if ($home_before_after) {

						foreach ($home_before_after as $item_id) {
							$item = get_post($item_id);
							$img_before  = get_field('img_before',$item->ID);
							$img_after   = get_field('img_after',$item->ID);
							$text_before = get_field('text_before',$item->ID);
							$text_afer   = get_field('text_afer',$item->ID);
						?>
						<div class="swiper-slide">
							<a href="#beforeAfter_item_<?php echo $item->ID;?>" class="gallery-item sabar-in" data-effect="mfp-zoom-in"  title="פנים">
								<div class="after">
									<div class="sabar-in">
									<div class="sabar">
										<img class="effect effect1" src="<?php echo $img_before['url']; ?>" width="195" height="268" alt="" />
										<img class="sabar-logo" src="<?php echo THEME_DIR . ''; ?>/images/sabar_logo.png" width="75" height="29" alt="" />
										<div class="before"><?php echo $text_before; ?></div>
									</div>
									<div class="sabar">
										<img class="effect effect2" src="<?php echo $img_after['url']; ?>" width="195" height="268" alt="" />
										<div class="before"><?php echo $text_afer; ?></div>
									</div>
									<div class="clear"></div>
									<span href="#" class="btn"></span>
									<div class="shadow"></div>
									</div>
									<div class="name"><?php echo get_the_title($item->ID); ?></div>
								</div>
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
					<?php
						}
					}
				?>
				</div>
				<div class="pagination"></div>
			</div>
			<button type="button" class="next"></button>
			<button type="button" class="prev"></button>
		</div>
		<a href="<?php echo $full_list_cares_link; ?>" class="more"><?php echo $full_list_cares; ?></a>
	</div>
</div>
