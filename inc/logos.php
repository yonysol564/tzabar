<div class="logos">
	<div class="logos_inn">
		<div class="swiper-container homeBottomLogos" data-items="6" data-center-slides="true" data-breakpoints-767="5" data-breakpoints-599="4">
			<div class="swiper-wrapper">
			<?php if( have_rows('home_unions') ): ?>
			    <?php while ( have_rows('home_unions') ) : the_row(); 
			        $home_unions_img = get_sub_field('home_unions_img');
			    ?>  		               
				<div class="swiper-slide logos_in">
					<img class="logo_icons" src="<?php echo $home_unions_img['url']; ?>" alt="" />
				</div>		   
			    <?php endwhile; ?>       
			<?php endif;?>			
			</div>
		</div>
	</div>
	<?php $home_unions_title = get_field('home_unions_title'); ?>
	<div class="union"><a href="#" class="union_a"><?php echo $home_unions_title; ?></a></div>
</div>