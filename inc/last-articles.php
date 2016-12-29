<?php  
	$last_articles_text = get_field('last_articles_text' ,'option');
	$all_articles_text = get_field('all_articles_text' ,'option');
	$category_id = get_field('category_id' ,'option');
	$cat_lnk = get_category_link($category_id);
	global $posts_cares_show; 
?>
<div class="media">
	<div class="container">
		<div class="media_lt">
			<div class="category_links">
				<p class="link1"><?php echo $last_articles_text; ?></p>
				<a href="<?php echo $cat_lnk; ?>" class="link2"><?php echo $all_articles_text; ?></a>
				<div class="clear"></div>
			</div>
			<div class="swiper-container subCatPage_lastArticles" data-items="4" data-breakpoints-767="3" data-breakpoints-599="2" data-center-slides="true">
				<div class="swiper-wrapper">	
					<?php
						if ($posts_cares_show) {
							foreach ($posts_cares_show as $item) {
								$url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
						?>
						<div class="swiper-slide">
							<div class="media_pro1">
								<div class="img_main img_main_last">
									<img src="<?php echo $url; ?>" alt="" width="287" height="168" class="media_img1" />
									<div class="img_overlay">
										<div class="name_pro">דר. צבר</div>
										<div class="date_pro"><?php the_date(); ?></div>
										<div class="clear"></div>
										<div class="read_more"><a href="<?php echo get_permalink($item->ID); ?>" class="read">קרא עוד</a></div>
									</div>
								</div>
								<div class="cont_in">
									<div class="cont_in2">
										<div class="title1"><?php echo get_the_title($item->ID); ?></div>
										<div class="cont"><?php dynamic_excerpt(183); ?></div>
									</div>
								</div>
							</div>
						</div>

						<?php
							}
						}
					?>								
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
