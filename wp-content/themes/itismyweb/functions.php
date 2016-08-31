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

/* AGENDA */
add_action('init', 'type_post_agenda');
function type_post_agenda() {
	$labels = array(
		'name' => _x('Agenda', 'post type general name'),
		'singular_name' => _x('Agenda', 'post type singular name'),
		'add_new' => _x('Adicionar Novo', 'Novo item'),
		'add_new_item' => __('Novo Item'),
		'edit_item' => __('Editar Item'),
		'new_item' => __('Novo Item'),
		'view_item' => __('Ver Item'),
		'search_items' => __('Procurar Itens'),
		'not_found' => __('Nenhum registro encontrado'),
		'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Agenda'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-calendar-alt',
		'supports' => array('title', 'excerpt')
	);

	register_post_type( 'agenda' , $args );
	flush_rewrite_rules();
}


add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts() {
  echo '<style>
	#menu-media, #menu-comments, #menu-appearance, #menu-plugins, #menu-tools, #menu-settings, #toplevel_page_edit-post_type-acf {
		/*display: none;*/
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