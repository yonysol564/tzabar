<?php  
	$meet_title = get_field('meet_title');
	$meet_subtitle = get_field('meet_subtitle');
	$meet_dr_about = get_field('meet_dr_about');
	$meet_dr_link = get_field('meet_dr_link');
	$meet_dr_contact = get_field('meet_dr_contact');
	$meet_dr_contact_link = get_field('meet_dr_contact_link');
	$youtube_id = get_field('home_youtube_id'); 
	$more_media_text = get_field('more_media_text'); 
?>
<div class="meetdr">
	<div class="meetdr_video">
		<img class="video" src="<?php echo THEME_DIR . ''; ?>/images/video_img.jpg" width="757" height="497" alt="" />
		<div class="video_con">
			<a class="hpPlayVideo meet_doctor_modal" href="#" title=""></a>
			<div class="clear"></div>
			<?php $link = get_post_type_archive_link("care_media"); ?>
			<a href="<?php echo $link; ?>" class="more"><?php echo $more_media_text; ?></a>

		</div>
	</div>
	<div class="meetdr_advice">

		
		<img class="video" src="<?php echo THEME_DIR . ''; ?>/images/types_img.png" width="844" height="495" alt="" />

		<div class="medicine">
			<div class="tittle"><?php echo $meet_title; ?></div>
			<div class="sub_tittle"><?php echo $meet_subtitle; ?></div>
			<ul>
				<?php if( have_rows('meet_rep') ): ?>
				    <?php while ( have_rows('meet_rep') ) : the_row(); 
				        $title = get_sub_field('meet_rep_title');
				    ?>  
						<li>
							<div class="icon"><div class="icon_in"><img src="<?php echo THEME_DIR . ''; ?>/images/tick_mark.png" alt="" width="15" height="12" class="icon_inn" /></div></div>   
							<div class="list"><?php echo $title; ?></div>
							<div class="clear"></div>
						</li>       					      					   
				    <?php endwhile; ?>       
				<?php endif;?>
			</ul>
			<div class="appointment">
				<a href="<?php echo $meet_dr_link; ?>" class="doctor"><?php echo $meet_dr_about; ?></a>
				<a href="<?php echo $meet_dr_contact_link; ?>" class="make"><?php echo $meet_dr_contact; ?></a>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>

<div class="meet_doctor_popup modal fade">
	<a class="close_media" data-dismiss="modal" href="#" title=""><i class="fa fa-times-circle" aria-hidden="true"></i></a>
	<div class="youtube_media_open">
		
		<iframe class="youtube_iframe" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" width="471" height="270" frameborder="0" allowfullscreen>

        </iframe>
	</div>
</div>