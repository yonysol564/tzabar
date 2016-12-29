<?php  
	$consult_main_img 	 = get_field('consult_main_img', 'option');
	$consult_first_con 	 = get_field('consult_first_con', 'option');
	$consult_sec_con 	 = get_field('consult_sec_con', 'option');
	$consult_doctor 	 = get_field('consult_doctor', 'option');
	$consult_doctor_sub  = get_field('consult_doctor_sub', 'option');
	$form_consult_doctor = get_field('form_consult_doctor', 'option');
?>

<div class="dr_cont">
	<div class="container">
		<div class="dr_details">
			<div class="drDetailsText">
				<div class="cont">
					<?php echo $consult_first_con; ?>
				</div>
				<div class="sub_cont">
					<?php echo $consult_sec_con; ?>
				</div>
			</div>
			<div class="title1">
				<div class="triangle_left"></div>
				<?php echo $consult_doctor; ?>
				<div class="sub"><?php echo $consult_doctor_sub; ?></div>
			</div>
			<div class="dr_img1"><img src="<?php echo $consult_main_img['url']; ?>" alt="" width="286" height="431" class="dr_img_in" /></div>
		</div>
		<div class="fill_details">
			<?php echo do_shortcode($form_consult_doctor); ?>
		</div>
		<div class="clear"></div>
	</div>
</div>
