<?php get_header(); ?>

<div class="wrapper">
	<div class="before_after_top way">
		<section class="search_sec">
			<div class="container">
				<div class="top_div">
					<h1><?php _e('תוצאות חיפוש');?></h1>
				</div>
			</div>

			<form role="search" method="get" action="<?php echo home_url(); ?>">  
				<div class="container">

						<div class="input_div">
					      <input class="form-control input_search" type="search" name="s" id="search" placeholder="<?php _e('הקלד כאן לחיפוש');?>">
					    </div>

			
					    <div class="input_button">
					      <button class="search-submit" type="submit" role="button"><?php _e('חפש','insightec');?></button>
					    </div>
					    <div class="clear"></div>
	 
				</div>
			</form>
		</section>
	</div>	
		<section class="search_results">	
			<div role="main" class="container">
				<div class="">
					<h4>
					<?php 
						echo sprintf( __( '%s תוצאות עבור ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>
					</h4>
				</div>
				<div class="">
					<div class="border_con">
						
					</div>
				</div>
				<div class="results_div">
				  <ul>
					<?php while(have_posts()): the_post(); ?>
						    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>	
					<?php endwhile; ?>
				  </ul>
				</div>	  
				<?php get_template_part('pagination'); ?>

				<div class="">	
					<div class="pagination_div media_icons1">
						<?php 
						if ($wp_query->found_posts <= 10) 
						{ 
						?> 
							<div class="pagination">
						     	<span class="current">1</span>
						    </div>	
						<?php 
						}else{
							my_pagination();
						}
						?>
					</div>


				</div>
			</div>

		</section>
	
</div>	

<?php 
get_sidebar();
get_footer(); ?>