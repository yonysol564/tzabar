<?php
	$footer_potions = get_fields('option');
	$locations  	= get_field('footer_map','option');
?>
<footer class="footer_main">
	<div class="footer_top">
    	<div class="container">
			<div class="address_map">
				<div class="icon">
					<div class="icon_in">
						<img src="<?php echo $footer_potions['footer_adderss_img']['url']; ?>" alt="" width="19" height="25" class="icon_inn" />
					</div>
				</div>
				<div class="cont">
					<div class="head1"><?php echo $footer_potions['footer_adderss_title']; ?></div>
					<?php echo $footer_potions['footer_adderss_info']; ?>
				</div>
			</div>
			<div class="address_map phone_no">
				<div class="icon">
					<div class="icon_in">
						<img src="<?php echo $footer_potions['footer_phone_img']['url']; ?>" alt="" width="23" height="23" class="icon_inn" />
					</div>
				</div>
				<div class="cont tel">
					<div class="head1"><?php echo $footer_potions['footer_phone_title']; ?></div>
					<a href="tel:<?php echo $footer_potions['footer_phone_number']; ?> " title="">
						<?php echo $footer_potions['footer_phone_number']; ?>
					</a>
				</div>
			</div>
			<div class="address_map mail_id">
				<div class="icon">
					<div class="icon_in">
						<img src="<?php echo $footer_potions['footer_email_img']['url']; ?>" alt="" width="24" height="19" class="icon_inn" />
					</div>
				</div>
				<div class="cont">
					<div class="head1"><?php echo $footer_potions['footer_email_title']; ?></div>
					<a href="mailto:<?php echo $footer_potions['footer_email_address']; ?>" class="cont_id">
						<?php echo $footer_potions['footer_email_address']; ?>
					</a>
				</div>
			</div>
			<div class="media_icons">
				<div class="icon">
					<a href="<?php echo $footer_potions['footer_facebook_link']; ?>" target="_blank" class="icon_in">
						<img src="<?php echo $footer_potions['footer_facebook_img']['url']; ?>" alt="facebook" width="12" height="24" class="icon_inn" />
					</a>
				</div>
				<div class="icon">
					<a href="<?php echo $footer_potions['footer_youtube_link']; ?>" target="_blank" class="icon_in">
						<img src="<?php echo $footer_potions['footer_youtube_img']['url']; ?>" alt="youtube" width="25" height="25" class="icon_inn" />
					</a>
				</div>
				<div class="icon no_mar">
					<a href="<?php echo $footer_potions['footer_gplus_link']; ?>" target="_blank" class="icon_in">
						<img src="<?php echo $footer_potions['footer_gplus_img']['url']; ?>" alt="google+" width="24" height="25" class="icon_inn" />
					</a>
				</div>
			</div>
			<div class="clear"></div>
        </div>
    </div>
    <div class="footer">
    	<div class="container">
        	<div class="about_clinic">
            	<div class="title1 hideInMobile"><?php echo $footer_potions['about_clicnic_title']; ?></div>
            	<button type="button" class="title1 showInMobile"><?php echo $footer_potions['about_clicnic_title']; ?></button>
                <div class="cont js_openCloseDIV footerTextMobileDesign">
					<?php echo $footer_potions['about_clicnic_content']; ?>
				</div>
                <div class="cont_no hideInMobile">
					<span class="num">
						<div class="advisery"><?php echo $footer_potions['consult_text']; ?></div>
						<a href="tel:<?php echo $footer_potions['consult_number']; ?>" title="">
							<?php echo $footer_potions['consult_number']; ?>
						</a>
					</span>
				</div>
            </div>
            <div class="footer_nav">
            	<div class="title1 hideInMobile"><?php echo $footer_potions['care_text']; ?></div>
            	<button type="button" class="title1 showInMobile"><?php echo $footer_potions['care_text']; ?></button>
                <div class="js_openCloseDIV">
                	<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_one', 'menu_class' => 'footer_menu_one' ) ); ?>
                	<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_tow', 'menu_class' => 'footer_menu_tow' ) ); ?>
                </div>
                <div class="clear"></div>
            </div>
            <div class="map_sec">

            	<div class="title1 hideInMobile"><?php echo $footer_potions['map_text']; ?></div>
            	<button type="button" class="title1 showInMobile">מפה</button>

                <div class="map_sec_img js_openCloseDIV">

                	<script>
						var locations = [ "<?php echo $locations['address']; ?>", <?php echo $locations['lat']; ?> , <?php echo $locations['lng']; ?> ];
					</script>

					<div class="map_div" id="contact_map">
					</div>
				</div>
            </div>
            <div class="timings">
            	<div class="title1 no_border hideInMobile"><?php echo $footer_potions['schedule_text']; ?></div>
            	<button type="button" class="title1 no_border showInMobile">שעות פעילות</button>
                <div class="js_openCloseDIV footerTextMobileDesign">
					<?php if( have_rows('schedule_rep','option') ): ?>
					    <?php while ( have_rows('schedule_rep','option') ) : the_row();
					        $schedule_day = get_sub_field('schedule_day');
					        $schedule_hours = get_sub_field('schedule_hours');
					    ?>
					       <div class="time">
						       <div class="time_title"><?php echo $schedule_day; ?></div>
					       		<?php echo $schedule_hours; ?>
					       </div>

					    <?php endwhile; ?>
					<?php endif;?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="copy">
    	<div class="container">
        	<div class="cont1"><?php echo $footer_potions['footer_copy']; ?></div>
            <a href="#" class="cont2"><?php echo $footer_potions['footer_copy_2']; ?></a>
            <div class="clear"></div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57cd82a5030aae3b"></script>
<style>
#at4-share, #at4-soc {
    top: 50% !important;
    margin-top: -145px !important;
}
</style>
</body>
</html>
