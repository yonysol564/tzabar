<?php
	get_header(); 
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
						<div class="inner_content">
							<?php the_content(); ?>	
						</div>
					</div>
					<div class="col_3 column img_wrap">
						<?php echo the_post_thumbnail(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="push"></div>
</div>

<?php
endwhile; // End of the loop.
get_sidebar();
get_footer();
?>
