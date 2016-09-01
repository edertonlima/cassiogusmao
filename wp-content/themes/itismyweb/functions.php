<?php
/**
 * @package WordPress
 * @subpackage My Web
 * @since My web Site 1.0
 **
 */

// Enable featured images
add_theme_support( 'post-thumbnails' );

// Unable the admin bar
add_filter('show_admin_bar', '__return_false');

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	add_post_type_support( 'post', 'excerpt' );
}


add_action( 'init', 'my_custom_init' );
function my_custom_init() {
	remove_post_type_support( 'page', 'thumbnail' );
}

/* MENUS */
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'header' ) );
}

// Remove tags support from posts
function myprefix_unregister_tags() {
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'myprefix_unregister_tags');

/*
// Remove category support from posts
function myprefix_unregister_category() {
    unregister_taxonomy_for_object_type('category', 'post');
}
add_action('init', 'myprefix_unregister_category');
*/

/* AGENDA */
add_action( 'init', 'create_post_type_agendas' );
function create_post_type_agendas() {

	$labels = array(
	    'name' => _x('Agenda', 'post type general name'),
	    'singular_name' => _x('Agenda', 'post type singular name'),
	    'add_new' => _x('Adicionar Nova', 'Agenda'),
	    'add_new_item' => __('Add New Agenda'),
	    'edit_item' => __('Edit Agenda'),
	    'new_item' => __('New Agenda'),
	    'all_items' => __('Todas as Agenda'),
	    'view_item' => __('View Agenda'),
	    'search_items' => __('Search Agenda'),
	    'not_found' =>  __('No Agenda found'),
	    'not_found_in_trash' => __('No Agenda found in Trash'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Agenda'
	);
	$args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'rewrite' => true,
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => false,
	    'menu_position' => null,
		'menu_icon' => 'dashicons-calendar-alt',
		'supports' => array('title', 'excerpt')
	  );

    register_post_type( 'agendas', $args );
}


add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts() {
  echo '<style>
  	/* CATEGORIAS */
  	#menu-posts .wp-submenu li:nth-child(4),
  	#category-adder {
		display: none;
	}
	#menu-media, #menu-comments, #menu-appearance, #menu-plugins, #menu-tools, #menu-settings, #toplevel_page_edit-post_type-acf, #toplevel_page_edit-post_type-acf-field-group {
		display: none;
	}
  </style>';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Configurações Gerais',
		'menu_title'	=> 'Configurações Gerais',
		'menu_slug' 	=> 'configurações-gerais',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}