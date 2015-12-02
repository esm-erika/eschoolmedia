<?php
/**
 * Custom Post Types
 *
 */

/*===================================================================================
 * Logos
 * =================================================================================*/

add_action('init', 'logos_register');
 
function logos_register() {
 
	$labels = array(
		'name' => _x('Logos', 'post type general name'),
		'singular_name' => _x('Logo', 'post type singular name'),
		'add_new' => _x('Add New', 'logo item'),
		'add_new_item' => __('Add New Logo'),
		'edit_item' => __('Edit Logo'),
		'new_item' => __('New Logo'),
		'view_item' => __('View Logo'),
		'search_items' => __('Search Logos'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-media-default',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'has_archive' => true,
		'taxonomies' => array('post_tag'),
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'logos' , $args );
}

/*===================================================================================
 * Sections
 * =================================================================================*/

add_action('init', 'sections_register');
 
function sections_register() {
 
	$labels = array(
		'name' => _x('Sections', 'post type general name'),
		'singular_name' => _x('Section', 'post type singular name'),
		'add_new' => _x('Add New', 'Section item'),
		'add_new_item' => __('Add New Section'),
		'edit_item' => __('Edit Section'),
		'new_item' => __('New Section'),
		'view_item' => __('View Section'),
		'search_items' => __('Search Sections'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-media-default',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'has_archive' => true,
		'taxonomies' => array('post_tag'),
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'sections' , $args );

}  ?>