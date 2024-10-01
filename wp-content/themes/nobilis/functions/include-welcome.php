<?php
	function wedo_dashboard() {
		global $wp_meta_boxes;
		wp_add_dashboard_widget('custom_help_widget', 'Welcome!', 'custom_dashboard_help');
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['wpseo-dashboard-overview']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);

		$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];

	 	// Backup and delete our new dashboard widget from the end of the array
	 	$example_widget_backup = array( 'custom_help_widget' => $normal_dashboard['custom_help_widget'] );
	 	unset( $normal_dashboard['custom_help_widget'] );

	 	// Merge the two arrays together so our widget is at the beginning
	 	$sorted_dashboard = array_merge( $example_widget_backup, $normal_dashboard );

	 	// Save the sorted array back into the original metaboxes
	 	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
	}
	function custom_dashboard_help() {
?>
    <div style="width: 92px; height: 92px; border: 2px solid #f83600; border-radius: 50%; float: right; margin: 0 0 20px 20px; padding: 20px; box-sizing: border-box;">
		  <a href="http://wedo.digital" target="_blank" style="display: block;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wedo-logo.png" alt="Built by wedo.digital" style="max-width: 100%; height: auto;"></a>
    </div>
		<p>Welcome to your new website, built by <a href="http://wedo.digital" style="color: #f83600; font-weight: bold;" target="_blank">wedo.digital.</a></p>
		<h4><strong>Your Wordpress Guide</strong></h4>
		<p>We've produced a handy guide to help you manage your website, including writing blog posts, editing pages, adding users and all manner of handy hints. It will have been emailed to you, but we've also included it here just in case you've misplaced it.
		<p><a href="https://guides.wedo.digital/nobilis-care" style="color: #f83600; font-weight: bold;" target="_blank">View your Wordpress guide.</a></p>
		<h4><strong>Need Help?</strong></h4>
		<p>We're here to help you at any time. If there's something you need that isn't covered in your guide, email the team:</p>
		<ul>
			<li><a href="mailto:ben@wedo.digital" style="color: #f83600; font-weight: bold;">Ben Hudson</a></li>
		</ul>
		<div style="clear: both;"></div>
<?php } ?>
