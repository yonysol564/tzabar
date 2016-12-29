<?php
/* Template Name: Homepage */ 
get_header(); 
	$full_list_cares = get_field('full_list_cares', 'option');
?>
<div class="wrapper">
	<div class="banner">
		<div class="swiper-container homeTopBannerSwiper" data-items="1" data-pagination="true" data-arrows="true">
			<div class="swiper-wrapper">
			<?php if( have_rows('main_slider') ): ?>
			    <?php while ( have_rows('main_slider') ) : the_row(); 
			        $slider_img = get_sub_field('slider_img');
			        $slider_link = get_sub_field('slider_link');
			        $slider_title = get_sub_field('slider_title');
			        $slider_content = get_sub_field('slider_content');
			        $read_more = get_sub_field('read_more');
			    ?>  		              
				<div class="swiper-slide">
					<img src="<?php echo $slider_img['url']; ?>" alt="" class="banner_img" />
					<div class="banner_in">
						<div class="banner_con">
							<div class="banner_conin">
								<div class="container">
									<div class="banner_con_in">
										<div class="tittle"><?php echo $slider_title; ?></div>
										<div class="cont"><?php echo $slider_content; ?></div>
										<a href="<?php echo $slider_link; ?>" class="more"><?php echo $read_more; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			    <?php endwhile; ?>       
			<?php endif;?>						
			</div>
			<div class="pagination"></div>
		</div>
		<button type="button" class="next"></button>
		<button type="button" class="prev"></button>
	</div>
	<div class="clear"></div>
	<div class="maincontent">

		<?php get_template_part('inc/treatment', 'after'); ?>

		<?php get_template_part('inc/before', 'after'); ?>

		<?php get_template_part('inc/meet', 'doctor'); ?>
		
		<?php get_template_part('inc/logos'); ?>

		<?php get_template_part('inc/home', 'media'); ?>

	</div>  <!-- end maincontent -->
	<div class="clear"></div>
	<div class="push"></div>
</div>

<?php
get_sidebar();
get_footer();
?>