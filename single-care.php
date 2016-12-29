<?php get_header();
	$full_list_cares = get_field('full_list_cares', 'option');
	$posts_cares_show = get_field('posts_cares_show');
	$base_url = get_permalink($post->ID);
	$post_title = get_the_title();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="wrapper">
		<div class="before_after_top way">
			<div class="container">
				<div class="before_cont">
					<?php get_template_part('inc/breadcrumbs'); ?>
					<div class="btns">
						<div class="clear"></div>
						<h1 class="title"><?php the_title(); ?></h1>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="maincontent">
			<div class="category">
				<div class="face_treat">
					<div class="container">
						<div class="faceImgBgWrap">
							<div class="face_img_bg">
								<div class="swiper-container" data-items="1" data-pagination="true">
									<div class="swiper-wrapper">
										<?php if( have_rows('care_main_slider') ): ?>
										    <?php while ( have_rows('care_main_slider') ) : the_row();
										        $slider_img = get_sub_field('slider_img');
										    ?>
											<div class="swiper-slide">
												<div class="faceImgWrap">
													<img src="<?php echo $slider_img['url']; ?>" alt="" class="face_img" />
												</div>
											</div>
										    <?php endwhile; ?>
										<?php endif;?>
									</div>
									<div class="pagination pagers"></div>
								</div>
							</div>
						</div>
						<?php the_content(); ?>
						<div class="clear"></div>
						<?php get_template_part('inc/faq', 'consult'); ?>
					</div>
				</div>

				<?php get_template_part('inc/before', 'after'); ?>

				<?php get_template_part('inc/consult' ,'doctor'); ?>

				<?php get_template_part('inc/last' ,'articles'); ?>

				<?php
					wp_reset_query();
					$fpaged = isset($_GET["fpaged"]) ? sanitize_text_field($_GET["fpaged"]) : 1;

					$args = array(
						'post_type' => 'faq',
						'orderby'   => 'title',
						'order'     => 'ASC',
						'paged'		=> $fpaged,
						'meta_query' => array(
							array(
								'key' => 'belongs_to_treatment',
								'value'   => $post->ID
							)
						)
					);

					$faq_list = new WP_Query($args);
				?>

				<div class="questions">
					<div class="container">
						<div class="category_links questions_links">
							<a href="#" class="link1">שאלות תשובות</a>
							<a href="#" class="link2"><?php echo $faq_list->found_posts;?> שאלות ותשובות בנושא <?php echo $post_title;?></a>
							<div class="clear"></div>
						</div>
						<div class="questions_search">
							<div class="questions_search_rt">
								<form role="search" method="get" id="searchform"
								    class="search searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								    <div class="inner_wrap">
								        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
								        <input type="text" value="<?php echo get_search_query(); ?>" placeholder="חפש" name="s" id="s" />
								        <input type="submit" class="button2" value="" />
								        <input type="hidden" name="post_type" value="faq" />
								            <div class="clear"></div>
								    </div>
								</form>
							</div>
								<div class="questions_search_lft">
									<a href="#" class="ask">שאל שאלה</a>
								</div>
							<div class="clear"></div>
						</div>

					<?php while ($faq_list->have_posts()) : $faq_list->the_post(); ?>
			           	<?php get_template_part("inc/answer-row"); ?>
			        <?php endwhile; ?>

					</div>
				</div>
				<div class="media_pagers">
					<div class="media_icons1">
						<?php
							$total_faq_available = $faq_list->found_posts;
							$posts_per_page = $faq_list->query_vars["posts_per_page"];
							$total_pages = ceil($total_faq_available/$posts_per_page);
							if($total_pages > 1):
								?>
								<div class="prev"></div>
									<?php for($i = 1;$i<=$total_pages;$i++):?>
										<?php $active =  selected($i,$fpaged,false) ? "active" : ""; ?>
										<div class="icon <?php echo $active;?>">
											<a href="<?php echo add_query_arg("fpaged",$i,$base_url);?>" class="icon_in <?php echo $active;?>"><?php echo $i;?></a>
										</div>
									<?php endfor;?>
								<div class="next"></div>
							<?php endif;?>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="push"></div>
	</div>
<?php
endwhile; // End of the loop.
?>


<?php
get_sidebar();
get_footer();
