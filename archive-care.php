<?php get_header();
	$terms = get_terms('care_cat', array('hide_empty'=>false));
	$care_main_title = get_field('care_main_title', 'option');
	$sub_title_care = get_field('sub_title_care', 'option');
	$care_info = get_field('care_info', 'option');
	$choose_cares = get_field('choose_cares', 'option');
?>
<div class="wrapper">
	<div class="before_after_top">
		<div class="container">
			<div class="before_cont categoryPageHeadlineWrapper">
			<?php get_template_part('inc/breadcrumbs'); ?>
				<div class="btns">
					<h1 class="title"><?php echo $care_main_title; ?></h1>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="maincontent">
		<div class="before_after_pro">
			<div class="treatment status">
				<div class="container catPageContent">
					<h2 class="catPagesubtitle"><?php echo $sub_title_care; ?></h2>
					<?php echo $care_info; ?>
					<p class="selectCat"><?php echo $choose_cares; ?></p>
					<ul class="catPageTopBtns_ul">
						<?php
							$cnt = 1;
							$active = '';
							foreach ($terms as $term) :
								if($cnt == 1) $active = 'active';
							?>
								<li class="catPageTopBtns_li">
									<a href="#" class="catPageTopBtns_a <?php echo $active ?>" rel="nofollow">
										<span class="catPageTopBtns_span"><?php echo $term->name; ?></span>
									</a>
								</li>
							<?php
							$cnt++;
							endforeach;
						?>
					</ul>
					<?php foreach ($terms as $term): ?>
						<ul class="catPageCircles_ul">
							<?php
								$args = array(
									"post_type"=>"care",
									"posts_per_page"=>-1,
									"tax_query" => array(
										array("taxonomy"=>"care_cat","terms"=> $term->term_id,"field"=>"term_id")
									)
								);
								$posts = get_posts($args);
								foreach ($posts as $item):
										$url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
								?>
								<li class="catPageCircles_li">
									<a href="<?php echo get_permalink($item->ID); ?>" class="catPageCircles_a">
										<span class="catPageCircles_imgWrap">
											<span class="catPageCircles_imgWrap2">
												<img src="<?php echo $url; ?>" alt="" class="catPageCircles_img" />
											</span>
										</span>
										<h3 class="catPageCircles_h3"><?php echo get_the_title($item->ID); ?></h3>
									</a>
								</li>
						  <?php endforeach; ?>
						</ul>
					<?php endforeach; ?>

					<div class="clear"></div>
				</div>
			</div>
		</div>

		<?php get_template_part('inc/consult' ,'doctor'); ?>

	</div>
	<div class="clear"></div>
	<div class="push"></div>
</div>
<?php
	get_sidebar();
	get_footer();
?>
