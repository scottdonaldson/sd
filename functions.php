<?php

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

// Sidebars

if ( function_exists('register_sidebar') )
    register_sidebar(array(
  	'name' => 'Categories',
  	'id' => 'categories',
  	'description' => 'Links to specified category pages. See sidebar-cats.php',
	'before_title' => '<h3>',
 	'after_title' => '</h3>'
));
	register_sidebar(array(
  	'name' => 'Other projects',
  	'id' => 'projects',
  	'description' => 'External links to other projects. See sidebar-projects.php',
	'before_title' => '<h3>',
 	'after_title' => '</h3>'
));
	register_sidebar(array(
  	'name' => 'Recent dispatches',
  	'id' => 'recent',
  	'description' => 'Displays in place of Categories on single posts.',
	'before_title' => '<h3 style="display:none">',
 	'after_title' => '</h3>'
));	

// Excerpt to display ellipsis only
function new_excerpt_more($more) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Add custom editor style
add_editor_style();

// Custom post type for images
add_action( 'init', 'register_cpt_image' );

function register_cpt_image() {

    $labels = array( 
        'name' => _x( 'Images', 'image' ),
        'singular_name' => _x( 'Image', 'image' ),
        'add_new' => _x( 'Add New', 'image' ),
        'add_new_item' => _x( 'Add New Image', 'image' ),
        'edit_item' => _x( 'Edit Image', 'image' ),
        'new_item' => _x( 'New Image', 'image' ),
        'view_item' => _x( 'View Image', 'image' ),
        'search_items' => _x( 'Search Images', 'image' ),
        'not_found' => _x( 'No images found', 'image' ),
        'not_found_in_trash' => _x( 'No images found in Trash', 'image' ),
        'parent_item_colon' => _x( 'Parent Image:', 'image' ),
        'menu_name' => _x( 'Images', 'image' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'excerpt' ),
        
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

    register_post_type( 'image', $args );
  }


// Call descendant posts within ancestor categories
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
	function post_is_in_descendant_category( $cats, $_post = null ) {
		foreach ( (array) $cats as $cat ) {
			// get_term_children() accepts integer ID only
			$descendants = get_term_children( (int) $cat, 'category' );
			if ( $descendants && in_category( $descendants, $_post ) )
				return true;
		}
		return false;
	}
}

// Remove comments feed
remove_action( 'wp_head', 'feed_links_extra', 3 );

// Add admin CSS
function scott_admin_css() {
	$template_url = get_bloginfo('template_url');
	echo '<link rel="stylesheet" href="'.$template_url.'/css/admin-style.css" />';
}
add_action('admin_head', 'scott_admin_css');

?>