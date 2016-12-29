<div class="media">
	<div class="container">
		<div class="mesia_rt">
			<h1 class="title">מדיה</h1>
			<div class="swiper-container homeBottomMedia" data-items="3" data-breakpoints-767="3" data-breakpoints-599="2" data-center-slides="true">
				<div class="swiper-wrapper">
					<?php 
						$args = array(
							'post_type' 	 => 'care_media',
							'posts_per_page' => -1,
							'post_status' 	 => 'published'
						);
						$media_query = new WP_Query( $args );
						$cnt = 1;  
						?>
						<?php while ( $media_query->have_posts() ) : $media_query->the_post(); 
							$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							$youtube_id = get_field('youtube_id'); 
						?>
							<div class="swiper-slide">
								<div class="media_pro1">
									<div class="img_main">
									<a href="#media_open<?php echo $cnt; ?>" data-youtube="<?php echo $youtube_id; ?>" class="open_media" >
										<img src="<?php echo $url; ?>" alt="" width="287" height="168" class="media_img1" />					
									</a>
									<div class="play_bt">
										<a href="#media_open<?php echo $cnt; ?>" data-youtube="<?php echo $youtube_id; ?>" class="open_media">
										<img src="<?php echo THEME_DIR; ?>/images/play_bt.png" alt="" width="32" height="32" />
										</a>
									</div>
									</div>
									<div class="cont_in">
										<div class="title1"><?php the_title(); ?></div>
										<div class="cont"> 
											<?php the_content(); ?>
										</div>
									</div>
								</div>
							</div>
						<?php
						$cnt++;
						endwhile; // End of the loop.
					?>
				</div>
			</div>
			<div class="clear"></div>
		</div>

		<div id="media_open" class="media_popup modal fade">
			<a class="close_media" data-dismiss="modal" href="#" title=""><i class="fa fa-times-circle" aria-hidden="true"></i></a>
			<div class="youtube_media_open">	
				<iframe class="youtube_iframe" src="" width="471" height="270" frameborder="0" allowfullscreen>
		        </iframe>
			</div>
		</div>


		<div class="media_lt">
			<div class="title">מאמרים אחרונים</div>
			<div class="swiper-container homeBottomLastArticles" data-items="1" data-breakpoints-767="3" data-breakpoints-599="2" data-center-slides="true">
				<div class="swiper-wrapper">
					
				<?php
				$wpb_all_query = new WP_Query(array(
					'post_type'=>'post', 
					'post_status'=>'publish', 
					'posts_per_page'=>-1)); ?>
				<?php if ( $wpb_all_query->have_posts() ) : ?>
				    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				    ?>
		    			<div class="swiper-slide">
							<div class="media_pro1">
								<div class="img_main img_main_last">
									<img src="<?php echo $url; ?>" alt="" width="287" height="168" class="media_img1" />
									<div class="img_overlay">
										<div class="name_pro">דר. צבר</div>
										<div class="date_pro"><?php the_date(); ?></div>
										<div class="clear"></div>
										<div class="read_more"><a href="<?php the_permalink(); ?>" class="read">קרא עוד</a></div>
									</div>
								</div>
								<div class="cont_in">
									<div class="cont_in2">
										<div class="title1"><?php the_title(); ?></div>
										<div class="cont"><?php dynamic_excerpt(183); ?></div>
									</div>
								</div>
							</div>
						</div>
				    <?php endwhile; ?>
				    <?php wp_reset_postdata(); ?>
				<?php else : ?>
				    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>	
					
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
