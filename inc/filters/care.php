<?php global $terms; ?>

<div class="container filters">
	<?php foreach ($terms as $term) {
		$cnt = 1;
        $args = array(
            'post_type' 	 => 'care',
            'posts_per_page' => -1,
            'tax_query' 	 => array(
                array(
                    'taxonomy' => 'care_cat',
                    'field'    => 'term_id',
                    'terms'    => $term->term_id,
                ),
            ),
        );
        $cares = new WP_Query( $args ); ?>
        <ul class="tabs">
            <?php while ($cares->have_posts()) : $cares->the_post(); ?>
            <?php
            	$care_cat = get_the_terms($post->ID, 'care_cat');
            	if($care_cat){
            		$care_cat = reset($care_cat);
            	}
            ?>
			<li>
				<button type="button" class="list1" data-filter=".carecat_<?php echo $care_cat->term_id;?>_btn_<?php echo $post->ID; ?>">
					<?php the_title(); ?>
				</button>
			</li>

            <?php endwhile; wp_reset_query(); ?>
       	</ul>
    <?php } ?>
</div>
