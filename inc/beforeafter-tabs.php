<?php 
	global $post_show_before_after_body,
			$post_show_before_after_face,
			$terms;
?>
<div class="before_after_pro">
	<div class="treatment status">
		<div class="container">

			<div class="beforeAfter_wrap">
				<div class="gallery">	
					<?php
						if ($post_show_before_after_body) {
							foreach ($post_show_before_after_body as $item) {
							$url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
							$img_before  = get_field('img_before',$item->ID);
							$img_after   = get_field('img_after',$item->ID);
							$text_before = get_field('text_before',$item->ID);
							$text_afer   = get_field('text_afer',$item->ID);					
						?>
							<div class="beforeAfter_item">
								<a href="<?php echo $img_after['url']; ?>" class="gallery-item sabar-in" data-effect="mfp-zoom-in"  title="גוף">
									<img class="sabar-logo" src="<?php echo THEME_DIR . ''; ?>/images/sabar_logo.png" width="75" height="29" alt="" />
									<div class="sabar">
										<img src="<?php echo $img_before['url']; ?>" alt="" class="beforeAfter_img" />
										<div class="before"><?php echo $text_before; ?></div>
									</div>
									<div class="sabar">
										<img src="<?php echo $img_after['url']; ?>" alt="" class="beforeAfter_img" />
										<div class="before"><?php echo $text_afer; ?></div>
									</div>
									<span class="btn"></span>
									<div class="shadow"></div>
								</a>
							</div>
						<?php
							}
						}
					?>
				</div>
				<div class="clear"></div>
			</div>

			<div class="beforeAfter_wrap">
				<div class="gallery">					
					<?php
						if ($post_show_before_after_face) {
							foreach ($post_show_before_after_face as $item) {
							$url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
							$img_before  = get_field('img_before',$item->ID);
							$img_after   = get_field('img_after',$item->ID);
							$text_before = get_field('text_before',$item->ID);
							$text_afer   = get_field('text_afer',$item->ID);
						?>
							<div class="beforeAfter_item">
								<a href="<?php echo $img_after['url']; ?>" class="gallery-item sabar-in" data-effect="mfp-zoom-in"  title="פנים">
									<img class="sabar-logo" src="<?php echo THEME_DIR . ''; ?>/images/sabar_logo.png" width="75" height="29" alt="" />
									<div class="sabar">
										<img src="<?php echo $img_before['url']; ?>" alt="" class="beforeAfter_img" />
										<div class="before"><?php echo $text_before; ?></div>
									</div>
									<div class="sabar">
										<img src="<?php echo $img_after['url']; ?>" alt="" class="beforeAfter_img" />
										<div class="before"><?php echo $text_afer; ?></div>
									</div>
									<span class="btn"></span>
									<div class="shadow"></div>
								</a>
							</div>
						<?php
							}
						}
					?>	
				</div>
				<div class="clear"></div>
			</div>

		</div>
	</div>
</div>