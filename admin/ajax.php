<?php
function enqueue_ajax(){
	wp_enqueue_script( 'my-ajax-request', THEME_DIR . '/admin/ajax.js', array( 'jquery' ) );
	wp_localize_script( 'my-ajax-request', 'ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

	wp_localize_script( 'my-ajax-request', 'ajaxurl', admin_url( 'admin-ajax.php' ));
}
add_action( 'wp_enqueue_scripts', 'enqueue_ajax' );


add_action( 'wp_ajax_faq_insert', 'faq_insert' );
add_action( 'wp_ajax_nopriv_faq_insert', 'faq_insert' );



// Create Post   -  F A Q
function faq_insert() {

	if(!function_exists('wp_handle_upload')){
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );
    }

	$fullname 	= isset($_POST['fullname'])   ? sanitize_text_field($_POST['fullname']) : '';
	$phone 		= isset($_POST['phone']) 	  ? sanitize_text_field($_POST['phone']) : '';
	$email 		= isset($_POST['email']) 	  ? sanitize_email($_POST['email']) : '';
	$question 	= isset($_POST['question'])   ? sanitize_text_field($_POST['question']) : '';
	$cat_choose = isset($_POST['cat_choose']) ? sanitize_text_field($_POST['cat_choose']) : '';
	$subject 	= isset($_POST['subject']) 	  ? sanitize_text_field($_POST['subject']) : '';

	$faq_post = array(
	  'post_title'    => $subject,
	  'post_content'  => $question,
	  'post_status'   => 'pending',
	  'post_type'	  => 'faq',
	  'post_author'   => ''
	);

	$post_ID = wp_insert_post($faq_post);

	//upload the file to the server
	$attachment_id = media_handle_upload( 'file_upload', $post_ID );

	set_post_thumbnail( $post_ID, $attachment_id );
	update_field('field_57cc35ed4eaf1', $fullname, $post_ID);
	update_field('field_57cc36104eaf2', $email, $post_ID);
	update_field('field_57cc36264eaf3', $phone, $post_ID);

	echo json_encode("ok");
	die();
}
