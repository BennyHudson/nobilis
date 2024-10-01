<?php
	function wedo_posts() {
		register_post_type(
			'locations',
			array(
				'labels'		=> array (
					'name'					=> _x('Locations', 'post type general name'),
					'singular_name'			=> _x('Location', 'post type singular name'),
					'add_new'				=> _x('Add new location', 'book'),
					'add_new_item'			=> ('Add New Location'),
					'edit_item'				=> ('Edit Location'),
					'new_item'				=> ('New Location'),
					'all_items'				=> ('All Locations'),
					'view_item'				=> ('View Locations'),
					'search_items'			=> ('Search Locations'),
					'not_found'				=> ('No Locations found'),
					'not_found_in_trash'	=> ('No Locations found in trash'),
					'parent_item_colon'		=> '',
					'menu_name'				=> 'Locations'
				),
				'description'	=> 'Holds all the Locations',
				'public'		=> true,
				'menu_position'	=> 19,
				'menu_icon'		=> 'dashicons-location',
				'supports'		=> array('title', 'editor', 'excerpt', 'revisions', 'thumbnail'),
				'has_archive'	=> true,
        'show_in_rest' => true,
			)
		);

    register_post_type(
			'testimonials',
			array(
				'labels' => array (
					'name'					=> _x('Testimonials', 'post type general name'),
					'singular_name'			=> _x('Testimonial', 'post type singular name'),
					'add_new'				=> _x('Add new testimonial', 'book'),
					'add_new_item'			=> ('Add New Testimonial'),
					'edit_item'				=> ('Edit Testimonial'),
					'new_item'				=> ('New Testimonial'),
					'all_items'				=> ('All Testimonials'),
					'view_item'				=> ('View Testimonials'),
					'search_items'			=> ('Search Testimonials'),
					'not_found'				=> ('No Testimonials found'),
					'not_found_in_trash'	=> ('No Testimonials found in trash'),
					'parent_item_colon'		=> '',
					'menu_name'				=> 'Testimonials'
				),
				'description'			=> 'Holds all the Testimonials',
				'public'				=> true,
				'menu_position'			=> 19,
				'menu_icon'				=> 'dashicons-format-status',
				'supports'				=> array('title', 'editor', 'excerpt', 'revisions', 'thumbnail'),
				'has_archive'			=> true,
				'exclude_from_search' 	=> true
			)
		);
	}
	function wedo_taxonomies() {
		register_taxonomy(
			'area',
			'locations',
			array(
        'labels' 		=> array(
          'name'              => _x( 'Area', 'taxonomy general name' ),
          'singular_name'     => _x( 'Area', 'taxonomy singular name' ),
          'search_items'      => __( 'Search Areas' ),
          'all_items'         => __( 'All Areas' ),
          'parent_item'       => __( 'Parent Area' ),
          'parent_item_colon' => __( 'Parent Area:' ),
          'edit_item'         => __( 'Edit Area' ),
          'update_item'       => __( 'Update Area' ),
          'add_new_item'      => __( 'Add New Area' ),
          'new_item_name'     => __( 'New Area' ),
          'menu_name'         => __( 'Areas' ),
        ),
        'hierarchical' => false,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rest_base' => 'area'
      )
		);
  }
?>
