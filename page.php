<?php
	get_header(); 
	$full_list_cares = get_field('full_list_cares', 'option');
	$show_before_after = get_field('show_before_after');
	$show_faq_per_page = get_field('show_faq_per_page');
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
		<div class="media_video">
			<div class="container">
				<div class="row">
					<div class="col_9 column">
						<?php the_content(); ?>
					</div>
					<div class="col_3 column">
						<?php echo the_post_thumbnail(); ?>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php if($show_before_after){
			get_template_part('inc/before', 'after'); 
		} ?>

		<?php if($show_faq_per_page){ ?>
			<div class="container">
				<?php get_template_part('inc/faq', 'consult'); ?>
			</div>
		<?php } ?>
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
?>
