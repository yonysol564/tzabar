<?php
	get_header(); 
	$media_title = get_field('media_title_archove' , 'option');
?>
<div class="wrapper">
		<div class="before_after_top way">
			<div class="container">
				<div class="before_cont">
					<?php get_template_part('inc/breadcrumbs'); ?>
					<div class="btns">
						<h1 class="title"><?php echo $media_title; ?></h1>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="maincontent">
			<div class="media_video">
				<div class="container">
				<?php 
				$args = array(
					'post_type' 	 => 'care_media',
					'posts_per_page' => 5,
					'post_status' 	 => 'published'
				);
				$media_query = new WP_Query( $args );
				$cnt = 1;  
				?>
				<?php while ( $media_query->have_posts() ) : $media_query->the_post(); 
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					$youtube_id = get_field('youtube_id'); 
				?>
					<div class="media_main">
						<a href="#media_open<?php echo $cnt; ?>" data-youtube="<?php echo $youtube_id; ?>" class="media_video_lft open_media" >
							<img class="life" src="<?php echo $url; ?>" alt="" />
							<span class="play_bt1"><img src="<?php echo THEME_DIR; ?>/images/play_bt3.png" width="17" height="19" alt="" /></span>
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
				<?php
				$cnt++;
				endwhile; // End of the loop.
				?>
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

<div id="media_open" class="media_popup modal fade">
	<a class="close_media" data-dismiss="modal" href="#" title=""><i class="fa fa-times-circle" aria-hidden="true"></i></a>
	<div class="youtube_media_open">
		<iframe class="youtube_iframe" src="" width="471" height="270" frameborder="0" allowfullscreen>
        </iframe>
	</div>
</div>

<?php
get_sidebar();
get_footer();
