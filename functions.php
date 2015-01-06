<?php

// CONFIG.

// custom post types to register
$custom_post_types = array(
	'image' => array(
		'single' => 'image',
		'plural' => 'images'
	)
);

// ----- Include Advanced Custom Fields
include_once('functions/advanced-custom-fields/acf.php');
include_once('functions/acf-options-page/acf-options-page.php');
include_once('functions/acf-repeater/acf-repeater.php');

// Template routing
add_action('init', 'add_templates_endpoint');
function add_templates_endpoint() {
	add_rewrite_rule('^templates/([^/]*)/?', 'wp-content/themes/sd/templates/$matches[1].php', 'top');
}

// Register top navigation menu
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu( 'primary-menu', 'Primary Menu' );
}

// Add support for featured images
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 400, 400, true ); // default Post Thumbnail dimensions (cropped)

	// additional image sizes
	add_image_size( 'art', 800, 800, true );
	add_image_size( 'square', 400, 400, true );
}

// No inline height and width output on images
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 ); add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 ); function remove_thumbnail_dimensions( $html ) { $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html ); return $html; }

// Excerpt to display ellipsis only
function new_excerpt_more($more) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Custom post type for images
add_action( 'init', 'register_custom_post_types' );

function register_custom_post_types() {

	global $custom_post_types;

	foreach ($custom_post_types as $slug => $type) {

		$single = $type['single'];
		$plural = $type['plural'];

		$labels = array(
			'name' => _x( ucfirst($plural), $slug ),
			'singular_name' => _x( ucfirst($single), $slug ),
			'add_new' => _x( 'Add New', $slug ),
			'add_new_item' => _x( 'Add New ' . ucfirst($single), $slug ),
			'edit_item' => _x( 'Edit ' . ucfirst($single), $slug ),
			'new_item' => _x( 'New ' . ucfirst($single), $slug ),
			'view_item' => _x( 'View ' . ucfirst($single), $slug ),
			'search_items' => _x( 'Search ' . ucfirst($plural), $slug ),
			'not_found' => _x( 'No ' . $plural . ' found', $slug ),
			'not_found_in_trash' => _x( 'No ' . $plural . ' found in Trash', $slug ),
			'parent_item_colon' => _x( 'Parent ' . ucfirst($single) . ':', $slug ),
			'menu_name' => _x( ucfirst($plural), $slug ),
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => false,

			'supports' => array( 'title', 'editor', 'author', 'excerpt', 'custom-fields' ),

			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 20,

			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'has_archive' => false,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post'
		);

		register_post_type( $slug, $args );
	}
}

// Remove comments feed
remove_action( 'wp_head', 'feed_links_extra', 3 );

?>
