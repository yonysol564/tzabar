<?php 
	$home_cares = get_field('home_care_slider');	
	$full_list_of_cares = get_field('full_list_of_cares');	

	
	global $full_list_cares;
?>
<div class="treatment">
	<div class="container homeSwiperUnderBanner_container">
	<?php  
		$home_care_slider_title = get_field('home_care_slider_title');
	?>
		<div class="tittle"><?php echo $home_care_slider_title; ?></div>
		<div class="swiperContainerWrapper">
			<div class="swiper-container homeSwiperUnderBanner" data-items="5" data-center-slides="true" data-pagination="true" data-arrows="true" data-breakpoints-767="4" data-breakpoints-599="2">
				<div class="swiper-wrapper">
					<?php
						if ($home_cares) {
							foreach ($home_cares as $item) {
								$url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
						?>
						<div class="swiper-slide">
							<a href="<?php echo get_permalink($item->ID); ?>" class="patient">
								<span class="catPageCircles_imgWrap">
									<span class="catPageCircles_imgWrap2">
										<img src="<?php echo $url; ?>" alt="" class="catPageCircles_img" />
									</span>
								</span>
								<h3 class="name"><?php echo get_the_title($item->ID); ?></h3>
							</a>
						</div>

						<?php
							}
						}
					?>	
				</div>
				<div class="pagination"></div>
			</div>
			<button type="button" class="swiperNext next"></button>
			<button type="button" class="swiperPrev prev"></button>
		</div>
	   <a href="<?php echo get_post_type_archive_link('care'); ?>" class="more"><?php echo $full_list_of_cares; ?></a>
	</div>
</div>