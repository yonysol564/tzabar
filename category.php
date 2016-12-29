<?php get_header();  ?>
<?php $object = get_queried_object(); 
	$category_title = get_cat_name( $object->term_id );	  
	$category_desc = category_description( $object->term_id  );
	$category = get_the_category();
?>
<div class="wrapper">
	<div class="before_after_top way">
		<div class="container">
			<div class="before_cont">
			<?php get_template_part('inc/breadcrumbs'); ?>

				<div class="btns">
					<div class="clear"></div>
					<h1 class="title faqTitle"><?php echo $category_title; ?></h1>
					<div class="questions_search_rt faqPageSearchWrap">

					<form role="search" method="get" id="category_search" class="search searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					    <div class="inner_wrap">
					        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
					        <input type="text" value="<?php echo get_search_query(); ?>" placeholder="חיפוש מאמר" name="s" id="autocomplete" />
					        <input type="submit" class="button2" value="" />
					        <input type="hidden" name="cat" value="<?php echo $category[0]->cat_ID; ?>" />
					        <div class="clear"></div>
					        <?php echo get_all_posts(); ?>
					    </div>
					</form>

					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="maincontent">
		<div class="media_video">
			<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="media_main">
					<a href="<?php the_permalink(); ?>" class="media_video_lft">
						<?php 
							$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						?>
						<img src="<?php echo $url; ?>" alt="" class="life" />
						<div class="articleImgDate">
						<?php echo date_i18n( get_option( 'date_format' ), strtotime( $post->post_date) ); ?>
						</div>
					</a>
					<div class="media_video_rt">
						<h3 class="title"><a href="#" class="title_a"><?php the_title(); ?></a></h3>
						<div class="cont">
							<?php the_content(); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="more">קרא עוד</a>
					</div>
					<div class="clear"></div>
				</div>
			<?php endwhile; // End of the loop.	?>
				<div class="media_pagers">
					<div class="media_icons1">
					<?php my_pagination(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="push"></div>
</div>

<?php
get_sidebar();
get_footer();
?>