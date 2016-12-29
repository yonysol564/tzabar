<?php 	

//--------------------------  C A R E   P O S T   -----------------------------

	function care_post_type() {

		$labels = array(
			'name'                  => _x( 'טיפולים', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'טיפול', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'טיפולים', 'text_domain' ),
			'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'כל הטיפולים', 'text_domain' ),
			'add_new_item'          => __( 'טיפול חדש', 'text_domain' ),
			'add_new'               => __( 'טיפול חדש', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Service', 'text_domain' ),
			'description'           => __( 'Post Type Description', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array('care_cat'),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'care', $args );

	}
	add_action( 'init', 'care_post_type', 0 );


//--------------------------  C A R E   M E D I A    P O S T   -----------------------------

	function care_media_post_type() {

		$labels = array(
			'name'                  => _x( 'תקשורת', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'תקשורת', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'תקשורת', 'text_domain' ),
			'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'כל תקשורת', 'text_domain' ),
			'add_new_item'          => __( 'תקשורת חדש', 'text_domain' ),
			'add_new'               => __( 'תקשורת חדש', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'תקשורת', 'text_domain' ),
			'description'           => __( 'Post Type Description', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array(''),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'care_media', $args );

	}
	add_action( 'init', 'care_media_post_type', 0 );



//-------------------  B E F O R E A F T E R    P O S T   ----------------------

	function beforeafter_post_type() {

		$labels = array(
			'name'                  => _x( 'לפני ואחרי', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'לפני ואחרי', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'לפני ואחרי', 'text_domain' ),
			'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'כל לפני ואחרי', 'text_domain' ),
			'add_new_item'          => __( 'לפני ואחרי חדש', 'text_domain' ),
			'add_new'               => __( 'לפני ואחרי חדש', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'BeforeAfter', 'text_domain' ),
			'description'           => __( 'Post Type Description', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array(''),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'beforeafter', $args );

	}
	add_action( 'init', 'beforeafter_post_type', 0 );


//--------------------------  F A Q  -  P O S T   -----------------------------

	function faq_post_type() {

		$labels = array(
			'name'                  => _x( 'שאלות ותשובות', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'שאלות ותשובות', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'שאלות ותשובות', 'text_domain' ),
			'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'כל השאלות ותשובות', 'text_domain' ),
			'add_new_item'          => __( 'שאלה ותשובה חדש', 'text_domain' ),
			'add_new'               => __( 'שאלה ותשובה חדש', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'שאלות ותשובות', 'text_domain' ),
			'description'           => __( 'Post Type Description', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array(''),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'faq', $args );

	}
	add_action( 'init', 'faq_post_type', 0 );







//----------------------  N E W  T A X O N O M Y   ---------------------------
		function care_taxonomies() {

		$labels = array(
			'name'                       => _x( 'קטגורית טיפולים', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'קטגורית טיפולים', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'קטגורית טיפולים', 'text_domain' ),
			'all_items'                  => __( 'קטגורית טיפולים', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Item Name', 'text_domain' ),
			'add_new_item'               => __( 'Add New Item', 'text_domain' ),
			'edit_item'                  => __( 'Edit Item', 'text_domain' ),
			'update_item'                => __( 'Update Item', 'text_domain' ),
			'view_item'                  => __( 'View Item', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Items', 'text_domain' ),
			'search_items'               => __( 'Search Items', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
			'items_list'                 => __( 'Items list', 'text_domain' ),
			'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'care_cat', array( 'care' ), $args );

	}
	add_action( 'init', 'care_taxonomies', 0 );	
 

?>
