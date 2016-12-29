<?php  
	$ask_quest_text = get_field('ask_quest_text','option');
	$ask_quest_title = get_field('ask_quest_title','option');
	$ask_quest_subtitle = get_field('ask_quest_subtitle','option');
?>
<div class="consult">
	<div class="consult_rt">
		<div class="title"><?php echo $ask_quest_title; ?></div>
		<div class="sub_tittle"><?php echo $ask_quest_subtitle; ?></div>
	</div>
	<div class="consult_lft">
		<a href="#" class="ask"><?php echo $ask_quest_text; ?></a>
	</div>
	<?php get_template_part('inc/faq', 'popup'); ?>
	<div class="clear"></div>
</div>