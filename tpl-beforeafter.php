<?php
/* Template Name: Before After */
	global $terms,$isotop_classes;
	get_header();
	$terms = get_terms('care_cat', array('hide_empty'=>false));

	$face_posts_show = get_field('face_posts_show');
	$body_posts_show = get_field('body_posts_show');

	$post_show_before_after_body = get_field('post_show_before_after_body');
	$post_show_before_after_face = get_field('post_show_before_after_face');
?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="wrapper">
	<div class="before_after_top">
		<div class="container">
			<?php
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>
			<div class="before_cont beforeAfterManBG" style="background-image: url(<?php echo $url; ?>); ">
				<?php get_template_part('inc/breadcrumbs'); ?>
				<div class="btns beforeAfter_text">
					<div class="clear"></div>
					<h1 class="title"><?php the_title(); ?></h1>
					<div class="cont">
						<?php the_content(); ?>
						<div class="mob_img_show">
							<img src="<?php echo $url; ?>" title="" alt="">
						</div>
					</div>
				</div>
				<?php get_template_part('inc/filters/terms'); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="maincontent">
		<?php get_template_part("inc/filters/care");?>

		<div class="before_after_pro">
			<div class="treatment status">

				<div class="container">
					<div class="beforeAfter_wrap isotope">

						<?php
				            $args = array(
				                'post_type' 	 => 'care',
				                'posts_per_page' => -1
				            );
				            $beforafter = new WP_Query( $args ); ?>

						<?php
							while ($beforafter->have_posts()) : $beforafter->the_post();

							$before_after_to_show = get_category_before_after($post->ID);

							foreach ($before_after_to_show as $item_id) {
								//print_r($item);
								$item = get_post($item_id);
						   		$url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
								$img_before  = get_field('img_before',$item->ID);
								$img_after   = get_field('img_after',$item->ID);
								$text_before = get_field('text_before',$item->ID);
								$text_afer   = get_field('text_afer',$item->ID);

								$carecat = get_the_terms($post->ID, 'care_cat');
								$allcats = array();
								foreach($carecat as $cat){
									$allcats[] = 'carecat_'.$cat->term_id.'_btn_'.$post->ID;
								}
								$isotop_classes = join( " ", $allcats );

							?>

								<div class="beforeAfter_item element-item carecat_<?php echo reset($carecat)->term_id; ?> <?php echo $isotop_classes; ?>">
									<?php get_template_part("inc/before-after/loop","beforeafter"); ?>
								</div>


							<?php } ?>
		                <?php endwhile; wp_reset_query(); ?>

					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>

		<?php get_template_part('inc/consult' ,'doctor'); ?>

	</div>
	<div class="clear"></div>
	<div class="push"></div>
</div>

<?php endwhile; // End of the loop. ?>

<?php

get_sidebar();
get_footer();
