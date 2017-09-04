<?php

	// Load stylesheets and scripts
	function enqueue_wdz_assets() {

		// Enqueue Theme Scripts
 		wp_deregister_script( 'jquery' );

		// Enqueue Theme Scripts
		wp_enqueue_script( 'Scripts', get_template_directory_uri() . '/app/assets/prod/scripts/script.min.js', array(), '1.0.1', true );

		// Enqueue Theme Styles
		wp_enqueue_style( 'Style', get_template_directory_uri() . '/app/assets/prod/styles/style.min.css', null, '1.0.0' );

	}

	// Hooks stylesheets and scripts into header and footer
	add_action( 'wp_enqueue_scripts', 'enqueue_wdz_assets' );

	function register_theme_support() {


		// Add featured image to new posts and pages in wp-admin
		add_theme_support( 'post-thumbnails' );

		// Add menu functionality within wp-admin
		add_theme_support( 'menus' );

		// Adds title tag without header.php code
		add_theme_support( 'title-tag' );

	}

	add_action( 'after_setup_theme', 'register_theme_support' );

	// Disable XML RPC
	add_filter('xmlrpc_enabled', '__return_false');

	// Add Favicon to site head section
	function favicon_add() {
		echo "<link rel='Shortcut Icon' type='image/x-icon' href='/wp-content/uploads/favicon.png' />";
	}
	add_action('wp_head', 'favicon_add');

	// Removes Wordpress version number in view source
	add_filter( 'the_generator', '__return_null' );

	// Removes WP Emoji
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove Unused WP scripts
	function remove_wp_scripts() {
		if (!is_admin()) {
			wp_deregister_script('wp-embed');
			wp_deregister_script( 'comment-reply' );
		}
	}
	add_action('init', 'remove_wp_scripts');

	function add_taxonomies_to_pages() {
		register_taxonomy_for_object_type( 'post_tag', 'page' );
		register_taxonomy_for_object_type( 'category', 'page' );
	}
	add_action( 'init', 'add_taxonomies_to_pages' );


?>