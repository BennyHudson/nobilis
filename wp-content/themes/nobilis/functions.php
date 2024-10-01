<?php

	add_action( 'after_setup_theme', 'wedo_theme_setup' );
	function wedo_theme_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_action( 'widgets_init', 'wedo_register_sidebars' );
		add_filter('wp_mail_from_name', 'new_mail_from_name');
		add_action( 'init', 'register_my_menus' );
		add_action( 'login_enqueue_scripts', 'my_login_logo' );
		add_action('login_head', 'add_favicon');
		add_action('admin_head', 'add_favicon');
		add_action('init', 'wedo_posts');
		add_action('init', 'wedo_taxonomies');
		add_action('init', 'flush_rewrite_rules');
    add_filter('admin_footer_text', 'wedo_footer');
    add_action('wp_dashboard_setup', 'wedo_dashboard');
		add_action( 'wp_enqueue_scripts', 'wedo_scripts' );
		add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);
		add_filter( 'wpseo_metabox_prio', function() { return 'low';});
		add_image_size( 'post-feature', 2000, 800, true );
    add_image_size( 'splash', 2400, 1600, true );
    add_image_size( 'icon', 300, 300, false );
    add_image_size( 'map', 500, 500, false );
    add_image_size( 'blog-card', 400, 260, true );
	}

	get_template_part('functions/include', 'favicons');
	get_template_part('functions/include', 'postnav');
	get_template_part('functions/include', 'menus');
	get_template_part('functions/include', 'scripts');
	get_template_part('functions/include', 'sidebar');
	get_template_part('functions/include', 'cpts');
	get_template_part('functions/include', 'users');
	get_template_part('functions/include', 'email');
	get_template_part('functions/include', 'footer');
  get_template_part('functions/include', 'welcome');
	get_template_part('functions/include', 'gallery');

	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

  add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );

  function post_link_attributes($output) {
    $code = 'class="button small primary"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
  }

  add_filter('next_post_link', 'post_link_attributes');
  add_filter('previous_post_link', 'post_link_attributes');

  // Remove <p> and <br/> from Contact Form 7
  add_filter('wpcf7_autop_or_not', '__return_false');

?>
