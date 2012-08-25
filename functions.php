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

/* ------ Parsley & Sprouts widget -------- */

function parsley_sprouts_widget() {
	// Display whatever it is you want to show
	echo '<div class="rss-widget">';
       wp_widget_rss_output(array(
            'url' => 'http://scottdonaldson.net/feed',  //put your feed URL here
            'title' => 'News Feed', // Your feed title
            'items' => 3, //how many posts to show
            'show_summary' => 1, // 0 = false and 1 = true 
            'show_author' => 0,
            'show_date' => 1
       ));
       echo "</div><hr />",
	       		"<form id='parsley-sprouts-contact'>",
		   			"<label>Questions? Comments? Want to say hi? Send us a message:</label><br />",
		   			"<textarea rows='5' cols='40'></textarea><br />",
		   			"<input type='submit' value='Send'></input>",
	   			"</form>";
} 

// Create the function use in the action hook

function register_dashboard_widget() {
	wp_add_dashboard_widget('parsley_sprouts', 'Parsley &amp; Sprouts', 'parsley_sprouts_widget');	
} 

// Hook into the 'wp_dashboard_setup' action to register our other functions

add_action('wp_dashboard_setup', 'register_dashboard_widget' );


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
	
	
// For category lists on category archives: Returns other categories except the current one (redundant)
function cats_meow($glue) {
	$current_cat = single_cat_title( '', false );
	$separator = "\n";
	$cats = explode( $separator, get_the_category_list($separator) );
	foreach ( $cats as $i => $str ) {
		if ( strstr( $str, ">$current_cat<" ) ) {
			unset($cats[$i]);
			break;
		}
	}
	if ( empty($cats) )
		return false;

	return trim(join( $glue, $cats ));
}	


// Excerpt to display ellipsis only
function new_excerpt_more($more) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Add custom editor style
add_editor_style();


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


// Add custom post type for private journal entries
class entry {
	
	function entry() {
		add_action('init',array($this,'create_post_type'));
	}
	
	function create_post_type() {
		$labels = array(
		    'name' => 'Entries',
		    'singular_name' => 'Entry',
		    'add_new' => 'Add New Entry',
		    'all_items' => 'All Entries',
		    'add_new_item' => 'Add New Entry',
		    'edit_item' => 'Edit Entry',
		    'new_item' => 'New Entry',
		    'view_item' => 'View Entry',
		    'search_items' => 'Search Entries',
		    'not_found' =>  'No entries found',
		    'not_found_in_trash' => 'No entries found in trash',
		    'parent_item_colon' => '',
		    'menu_name' => 'Entries'
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => false,
			'show_ui' => true, 
			'show_in_nav_menus' => false, 
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 5,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title','editor'),
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'journal', 'with_front' => true ),
			'query_var' => true,
			'can_export' => true
		); 
		register_post_type('entry',$args);
	}
}
$entry = new entry();	
flush_rewrite_rules();				
				

// Add admin CSS
function scott_admin_css() {
	$template_url = get_bloginfo('template_url');
	echo '<link rel="stylesheet" href="'.$template_url.'/css/admin-style.css" />';
}
add_action('admin_head', 'scott_admin_css');

?>