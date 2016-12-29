<?php
	global $float;
	define("THEME_DIR",get_template_directory_uri());
	//define("LANG", ICL_LANGUAGE_CODE);
	define("CURRENT_YEAR",date('Y'));
	$lang = TEMPLATEPATH . '/lang';
	load_theme_textdomain('title', $lang);

	if( is_rtl() ) {
		$float = 'right';
	} else {
		$float = 'left';
	}

	get_template_part("admin/ajax");
	get_template_part("admin/types");

	// Add body classes
	if ( ! function_exists( 'add_body_class' ) ){
	    function add_body_class( $classes ) {
	        global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
	        if( $is_lynx ) $classes[] = 'lynx';
	        elseif( $is_gecko ) $classes[] = 'gecko';
	        elseif( $is_opera ) $classes[] = 'opera';
	        elseif( $is_NS4 ) $classes[] = 'ns4';
	        elseif( $is_safari ) $classes[] = 'safari';
	        elseif( $is_chrome ) $classes[] = 'chrome';
	        elseif( $is_IE ) {
	            $classes[] = 'ie';
	            if( preg_match( '/MSIE ( [0-11]+ )( [a-zA-Z0-9.]+ )/', $_SERVER['HTTP_USER_AGENT'], $browser_version ) )
	            $classes[] = 'ie' . $browser_version[1];
	        } else $classes[] = 'unknown';
	        if( $is_iphone ) $classes[] = 'iphone';

	        if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
	                 $classes[] = 'osx';
	        } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
	                 $classes[] = 'linux';
	        } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
	                 $classes[] = 'windows';
	        }

	        return $classes;
	    }
	    add_filter( 'body_class','add_body_class' );
	}

	// function lang_class($output) {
	//     return $output . ' class="no-js '.LANG.'"';
	// }
	// add_filter('language_attributes', 'lang_class');

	remove_action('wp_head', 'wp_generator');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails' );

/******************************************************************************************
							A D D    I M A G E    S I Z E S
******************************************************************************************/

add_image_size( 'project_image', 465, 360, true );
add_image_size( 'gallery_small_cube', 115, 80, true );



/******************************************************************************************
							S T Y L E S    R E G I S T E R
******************************************************************************************/

	function enqueue_my_styles() {
		$normalize 			= THEME_DIR . '/css/normalize.css';
	    $foundation         = THEME_DIR . '/css/foundation.min.css';
	    $foundation_rtl     = THEME_DIR . '/css/foundation-rtl.css';
	    // foundation-rtl.css 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.0/foundation-rtl.min.css';
	    //$font_awesome       = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css';

	    // $slick				= '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css';
	    // $slickTheme			= '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css';
	    $slick				= THEME_DIR . '/css/slick.css';
	    $slickTheme			= THEME_DIR . '/css/slick-theme.css';
	    $magnific           = THEME_DIR . '/css/magnific-popup.css';
	    $animate           	= THEME_DIR . '/css/animate.css';

	    $queryStyle         = THEME_DIR . '/css/media-quires.css';
	    $rtlres         	= THEME_DIR . '/css/rtl-responsive.css';
	    $rtl 				= THEME_DIR . '/css/rtl.css';
	    $fonts 				= THEME_DIR . '/fonts/stylesheet.css';

	    $font_awesome       = THEME_DIR . '/css/font-awesome.min.css';
	    $swiper         	= THEME_DIR . '/css/swiper.min.css';
	    $mainStyle          = THEME_DIR . '/css/style.css';
	    $responsive 		= THEME_DIR . '/css/responsive.css';

	    wp_enqueue_style( 'font_awesome', $font_awesome, array(), 'v1', 'all' );
	    wp_enqueue_style( 'swiper', $swiper, array(), 'v1', 'all' );
	    wp_enqueue_style( 'magnifics', $magnific, array(), 'v1', 'all' );
	    wp_register_style('jmodal', THEME_DIR . '/css/jquery.modal.css', array(), NULL, 'all'); wp_enqueue_style('jmodal');
	   // wp_enqueue_style( 'foundation', $foundation, array(), 'v1', 'all' );
	   // wp_enqueue_style( 'foundation_rtl', $foundation_rtl, array(), 'v1', 'all' );
	    wp_enqueue_style( 'mainStyle', $mainStyle, array(), 'v1', 'all' );
	    wp_enqueue_style( 'queryStyle', $responsive, array(), 'v1', 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_my_styles' );



/******************************************************************************************
						S C R I P T S 	 R E G I S T E R
******************************************************************************************/

	function register_my_jscripts() {

	   wp_register_script( 'modernizr', THEME_DIR .'/js/modernizr.min.js', array( 'jquery' ), '1', true ); wp_enqueue_script( 'modernizr' );
	   wp_register_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'slick' );
	   wp_register_script( 'magnific', THEME_DIR .'/js/jquery.magnific-popup.min.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'magnific' );
	   wp_register_script( 'foundation', THEME_DIR .'/js/foundation.min.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'foundation' );
	   wp_register_script( 'notify', THEME_DIR .'/js/notify.js', array( 'jquery' ), '1', true ); wp_enqueue_script( 'notify' );
	   wp_register_script( 'modal', THEME_DIR . '/js/jquery.modal.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'modal' );
   	   wp_register_script( 'googleapi', 'https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyA21ZwPY6xqz4gvkdil2wGGBRWSGEayq78', array( 'jquery' ), NULL, false );wp_enqueue_script( 'googleapi' );

	   wp_register_script( 'scrollSpeed', THEME_DIR .'/js/jQuery.scrollSpeed.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'scrollSpeed' );
	   wp_register_script( 'isotope', THEME_DIR .'/js/isotope3.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'isotope' );

	   //wp_register_script( 'scripts', THEME_DIR .'/js/scripts.js', array( 'jquery' ), '1', true ); wp_enqueue_script( 'scripts' );
	   wp_register_script( 'hoverintent', THEME_DIR .'/js/hoverIntent.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'hoverintent' );
	   wp_register_script( 'autocomplete', THEME_DIR .'/js/autocomplete.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'autocomplete' );
	   wp_register_script( 'swiper', THEME_DIR .'/js/swiper.min.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'swiper' );
	   wp_register_script( 'functions', THEME_DIR .'/js/functions.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'functions' );
	}
	add_action('wp_enqueue_scripts', 'register_my_jscripts');


/******************************************************************************************
						N A V I G A T I O N S  -  M E N U
******************************************************************************************/

// Menu
function register_my_menu() {
    register_nav_menus(array(
    	'top_menu' 	  		=>  'Top Menu',
    	'service_menu' 	  	=>  'Services Menu',
    	'about_menu' 	  	=>  'About Menu',
    	'top_menu_mobile'   =>  'Top Menu Mobile',
    	'footer_menu_one'   =>  'Footer Menu 1',
		'footer_menu_tow'   =>  'Footer Menu 2'
    ));
}
add_action( 'init', 'register_my_menu' );

/******************************************************************************************
								S  I  D  E  B  A  R  S
******************************************************************************************/
	// register_sidebar(array(
	//     'name' => __('Home Sidebar', 'sagive'),
	//     'id' => 'home-sidebar',
	//     'description' => __('Main Home Sidebar', 'sagive')
	// ));



	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));

	}


/******************************************************************************************
								F 	 U 	 N 	C   T 	I 	O 	N 	S
******************************************************************************************/

	// Language
	function icl_post_languages(){
	$languages = icl_get_languages('skip_missing=0');
	  if(1 < count($languages)){
		  	$langs[] = '<ul>';
		    foreach($languages as $l){
		    	$class= '';
		    	//print_r($l);
		    	if($l['active'] == 1) {
		    		$class = 'active';
		    	}
		      $langs[] = '<li class="li_lang ' . $class . '"><a class="lang" href="'.$l['url'].'">'.  ucfirst($l['code']) .'</a></li>';
		    }
		    $langs[] = '</ul>';
	    echo join('', $langs);
	  }
	}

	// Language  mobile
	function icl_post_languages_m(){
	$languages = icl_get_languages('skip_missing=0');
	  if(1 < count($languages)){
		  	$langs[] = '<div>';
		    foreach($languages as $l){
		    	$class= '';
		    	//print_r($l);
		    	if($l['active'] == 1) {
		    		$class = 'active';
		    	}
		      $langs[] = '<div class="div_lang ' . $class . '"><a class="lang" href="'.$l['url'].'">'.  ucfirst($l['code']) .'</a></div>';
		    }
		    $langs[] = '</div>';
	    echo join('', $langs);
	  }
	}


	// Toutube
	function getYoutubeThumbUrl($id , $size="0") {
	    $data = "http://img.youtube.com/vi/".$id."/".$size.".jpg";
	    return $data;
	}

	// Background color
	function hex2rgba($color, $opacity = false) {

		$default = 'rgb(0,0,0)';

		//Return default if no color provided
		if(empty($color))
	          return $default;

		//Sanitize $color if "#" is provided
	        if ($color[0] == '#' ) {
	        	$color = substr( $color, 1 );
	        }

	        //Check if color has 6 or 3 characters and get values
	        if (strlen($color) == 6) {
	                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
	        } elseif ( strlen( $color ) == 3 ) {
	                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
	        } else {
	                return $default;
	        }

	        //Convert hexadec to rgb
	        $rgb =  array_map('hexdec', $hex);

	        //Check if opacity is set(rgba or rgb)
	        if($opacity){
	        	if(abs($opacity) > 1)
	        		$opacity = 1.0;
	        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
	        } else {
	        	$output = 'rgb('.implode(",",$rgb).')';
	        }

	        //Return rgb(a) color string
	        return $output;
	}

	//D Y N A M I C    E X C E R P T
	function dynamic_excerpt($length) { // Variable excerpt length. Length is set in characters
	    global $post;
	    $text = $post->post_excerpt;
	    if ( '' == $text ) {
	    $text = get_the_content('');
	    $text = apply_filters('the_content', $text);
	    $text = str_replace(']]>', ']]>', $text);
	    }
	    $text = strip_shortcodes($text); // optional, recommended
	    $text = strip_tags($text); // use ' $text = strip_tags($text,'<p><a>'); ' if you want to keep some tags
	    $text = mb_substr($text,0,$length).'';
	    echo $text;
	}

	// Pagination
	function my_pagination($query = ""){
	    global $wp_query;
		if(!$query){
			$query = $wp_query;
		}
	    $big = 999999999;
	    echo paginate_links(array(
	        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
	        'format' => '?paged=%#%',
	        'current' => max(1, get_query_var('paged')),
	        'total' => $query->max_num_pages,
	        'prev_text'          => __(''),
			'next_text'          => __('')
	    ));
	}
	add_action('init', 'my_pagination'); // Add our Pagination


	function custom_excerpt_length( $length ) {
	return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function new_excerpt_more( $more ) {
			return '';
	}
	add_filter('excerpt_more', 'new_excerpt_more');



	// change breadcrumb navxt homepage name to page name
	add_filter('bcn_breadcrumb_title', function($title, $type, $id) {
	    if ($type[0] === 'home') {
	        $title = get_the_title(get_option('page_on_front'));
	    }
	    return $title;
	},  42, 3);




	function send_mail_to_user(  $post_id, $post ,$force = false ) {
		if ( $force || ('trash' != get_post_status( $post_id ) && 'draft' != get_post_status( $post_id ))) {
		    if ( 'faq' != $post->post_type ) {
		        return;
		    }
			// If this is just a revision, don't send the email.
			if ( wp_is_post_revision( $post_id ) )
				return;

			$subject  = get_field("answered_faq_subject","option");
			$message = get_field("answered_faq_message","option");

			$values["post_title"] = get_the_title( $post_id );
			$values["question"]   = get_post_field('post_content', $post_id);
			$values["answer"]     = isset($_POST["acf"]["field_57ce7485cd81c"]) ? $_POST["acf"]["field_57ce7485cd81c"] : get_field("field_57ce7485cd81c",$post_id);
			$values["user_name"]  = get_field('user_fullname' , $post_id);
			$values["post_url"]   = get_permalink($post_id);
			$admin_approve_send   = get_field('send_mail_touser', $post_id );
			$user_email 		  = get_field('user_email', $post_id );

			foreach($values as $key=>$value){
				$message = str_replace("%{$key}%",$value,$message);
			}

			if(is_rtl()){
				$message = "<div style='direction:rtl;'>{$message}</div>";
			}
			//send email to user
			if($admin_approve_send){
				add_filter( 'wp_mail_from', 'custom_wp_mail_from' );
				add_filter( 'wp_mail_from_name', 'custom_wp_mail_from_name' );
				wp_mail( $user_email , $subject, $message );
			}
		}
	}
	add_action( 'save_post', 'send_mail_to_user', 10, 2 );

function custom_wp_mail_from(){
	return get_field("custom_wp_mail_from","options");
}

function custom_wp_mail_from_name( $original_email_from ) {
	return get_field("custom_wp_mail_from_name","options");
}

function get_all_posts(){

	global $post;

	if( is_category() ) {

		$pargs = array(
			'post_type' => 'post',
			'posts_per_page' => -1
		);
		$pquery = new WP_Query($pargs);
		ob_start();
		?>

		<script id="allPostsObject">
		var allPostsObject = [
		<?php while($pquery->have_posts()): $pquery->the_post(); ?>
			{ "value": "<?php the_title(); ?>", "data": "<?php the_permalink (); ?>" },
		<?php endwhile; wp_reset_query(); ?>
		];
		</script>

		<?php
		$result = ob_get_clean();

		return $result;
	}

}

function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyA21ZwPY6xqz4gvkdil2wGGBRWSGEayq78');
}

add_action('acf/init', 'my_acf_init');


add_filter( 'wp_mail_content_type', 'set_content_type' );

function set_content_type( $content_type ) {
	return 'text/html';
}

add_action('pre_get_posts', 'filter_press_tax');

 function filter_press_tax( $query ){
	 if($query->is_main_query() && is_search()):
		 $query->set('posts_per_page', 10);
	 endif;
 }

 function load_custom_wp_admin_style() {
        wp_register_script( 'admin_script', THEME_DIR .'/admin/admin.js', array( 'jquery' ), '1', true ); wp_enqueue_script( 'admin_script' );
 }
 add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

function get_category_before_after($treatment_id){
	global $wpdb;
	$post__id = array();
	$sql = "SELECT post_id FROM $wpdb->postmeta WHERE meta_key ='belongs_to_treatment' AND meta_value ='$treatment_id'";

	$results = $wpdb->get_results($sql);

	if($results){
		foreach($results as $result){
			$post__id[] = $result->post_id;
		}
	}

	return $post__id;

}
