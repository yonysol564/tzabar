<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<div class="container">				
					<h1 class="page-title"><?php _e( 'עמוד זה לא נמצא.', 'ampa' ); ?></h1>
					<div class="back_404">
						<a href="<?php echo home_url(); ?>">חזור לדף הבית</a>
					</div>
				</div>
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>