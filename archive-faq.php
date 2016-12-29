<?php
	get_header(); 
?>
<?php $post_obj = get_post_type_object( $post_type ); ?>

<div class="wrapper">
	<div class="before_after_top">
		<div class="container">
			<div class="before_cont categoryPageHeadlineWrapper">
				<?php get_template_part('inc/breadcrumbs'); ?>
				<div class="btns">
					<div class="clear"></div>
					<h1 class="title faqTitle"><?php echo $post_obj->label; ?></h1>
					<div class="questions_search_rt faqPageSearchWrap">

					<form role="search" method="get" id="searchform" class="search searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					    <div class="inner_wrap">
					        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
					        <input type="text" value="<?php echo get_search_query(); ?>" placeholder="חיפוש שאלות" name="s" id="s" />
					        <input type="submit" class="button2" value="" />
					        <input type="hidden" name="post_type" value="faq" />
					        <div class="clear"></div>
					    </div>
					</form>

					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="maincontent">
		<div class="before_after_pro">
			<div class="container faqPageContent">	
				<?php 
					 $args = array(
			                'post_type' => 'faq',
			                'orderby'   => 'title',
			                'order'     => 'ASC',
			                'posts_per_page' => -1,
			              );

					  $faq_list = new WP_Query($args);				
					?>
					<?php while ($faq_list->have_posts()) : $faq_list->the_post(); ?>
			           	<div class="answers">
							<div class="post">
								<div class="post_date"><?php the_date(); ?> | <?php the_title(); ?></div>
								<div class="title"><?php the_title(); ?></div>
								<div class="cont">
									<?php the_content(); ?>
								</div>
							</div>
							<div class="doc_reply">
								<div class="doc_reply_rt">
									<img class="reply_doc" src="<?php echo THEME_DIR; ?>/images/doctor.png" width="100" height="100" alt="" />
								</div>
								<div class="doc_reply_lft">
									<div class="cont"> 
										<?php echo get_field('doctor_answer'); ?>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
			        <?php endwhile; ?>
				<div class="media_pagers">
					<div class="media_icons1">
					<?php my_pagination(); ?>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="push"></div>
</div>

<?php
get_sidebar();
get_footer();
