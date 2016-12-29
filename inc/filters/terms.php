<?php global $terms; ?>
<ul class="beforeAfter_tabs_ul filters">
	<?php  
		$cnt = 1;
		$active = '';
		foreach ($terms as $term) 
		{
			if($cnt == 1) $active = 'active';
		?>
			<li class="beforeAfter_tabs_li">
				<button type="button" class="beforeAfter_tabs_btn <?php echo $active; ?>" 
				data-filter=".<?php echo $term->name; ?>"><?php echo $term->name; ?></button>
			</li>
		<?php 
		$cnt++;
		}
	?>
</ul>
<div class="clear"></div>