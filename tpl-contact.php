<?php
/* Template Name: Contact */ 
	get_header(); 
	$c_potions = get_fields();
	$locations = get_field('contact_map');
?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="wrapper contact_wrapper">
		<div class="before_after_top way">
			<div class="container">
				<div class="before_cont">
					<?php get_template_part('inc/breadcrumbs'); ?>
					<div class="btns">
						<div class="clear"></div>
						<h1 class="title"><?php echo the_title(); ?></h1>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="maincontent contact_maincontent">
			<div class="contact_us">
				<div class="container">
					<div class="contact_us_lft">
						<div class="title"><?php echo $c_potions['contact_us_title']; ?></div>
						<div class="phone">
							<div class="icon">
								<div class="icon_in">
									<img src="<?php echo $c_potions['contact_phone_img']['url']; ?>" alt="" width="23" height="23" class="icon_inn" />
								</div>
							</div>
							<div class="cont">
								<?php echo $c_potions['contact_phone_text']; ?>
								<a href="tel:<?php echo $c_potions['contact_phone_number']; ?>" title="">
									<?php echo $c_potions['contact_phone_number']; ?>	
								</a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="phone">
							<div class="icon">
								<div class="icon_in">
									<img src="<?php echo $c_potions['contact_email_img']['url']; ?>" alt="" width="24" height="19" class="icon_inn" />
								</div>
							</div>
							<div class="cont mail">
								<?php echo $c_potions['contact_email_text']; ?>
								<a class="clinic" href="mailto:<?php echo $c_potions['contact_email']; ?>"><?php echo $c_potions['contact_email']; ?></a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="phone">
							<div class="icon">
								<div class="icon_in">
									<img src="<?php echo $c_potions['contact_img']['url']; ?>" alt="" width="19" height="25" class="icon_inn" />
								</div>
							</div>
							<div class="cont mail"><?php echo $c_potions['contact_address_text']; ?></div>
							<div class="clear"></div>
						</div>

						<div class="phone waze_div">
							<div class="icon">
								<div class="icon_in">
									<a href="waze://?q=<?php echo $c_potions['contact_waze_link']; ?>">
										<img src="<?php echo $c_potions['contact_waze_img']['url']; ?>" alt="" width="23" height="21" class="icon_inn" />
									</a>
								</div>
							</div>
							<div class="cont"><?php echo $c_potions['contact_waze_text']; ?></div>
							<div class="clear"></div>
						</div>

					</div>
					<?php echo do_shortcode($c_potions['contact_form']); ?>
					<div class="clear"></div>
				</div>
				<div class="g_map">
                	<script>
						var locations = [ "<?php echo $locations['address']; ?>", <?php echo $locations['lat']; ?> , <?php echo $locations['lng']; ?> ];
					</script>
					<div class="contact_map_div" id="contact_page_map">
					</div> 
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="push"></div>
	</div>
<?php endwhile; // End of the loop. ?>

<?php

get_sidebar();
get_footer();
