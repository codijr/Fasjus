<?php
// Register Custom Post Type parceiro
function create_membros_cpt() {

	$labels = array(
		'name' => _x( 'membros', 'Post Type General Name', 'ceara-finance' ),
		'singular_name' => _x( 'membro', 'Post Type Singular Name', 'ceara-finance' ),
		'menu_name' => _x( 'Membros', 'Admin Menu text', 'ceara-finance' ),
		'name_admin_bar' => _x( 'membro', 'Add New on Toolbar', 'ceara-finance' ),
		'archives' => __( 'parceiro Archives', 'ceara-finance' ),
		'attributes' => __( 'parceiro Attributes', 'ceara-finance' ),
		'parent_item_colon' => __( 'Parent parceiro:', 'ceara-finance' ),
		'all_items' => __( 'All membros', 'ceara-finance' ),
		'add_new_item' => __( 'Add New membro', 'ceara-finance' ),
		'add_new' => __( 'Add New', 'ceara-finance' ),
		'new_item' => __( 'New membro', 'ceara-finance' ),
		'edit_item' => __( 'Edit membro', 'ceara-finance' ),
		'update_item' => __( 'Update membro', 'ceara-finance' ),
		'view_item' => __( 'View membro', 'ceara-finance' ),
		'view_items' => __( 'View membros', 'ceara-finance' ),
		'search_items' => __( 'Search membro', 'ceara-finance' ),
		'not_found' => __( 'Not found', 'ceara-finance' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'ceara-finance' ),
		'featured_image' => __( 'Featured Image', 'ceara-finance' ),
		'set_featured_image' => __( 'Set featured image', 'ceara-finance' ),
		'remove_featured_image' => __( 'Remove featured image', 'ceara-finance' ),
		'use_featured_image' => __( 'Use as featured image', 'ceara-finance' ),
		'insert_into_item' => __( 'Insert into membro', 'ceara-finance' ),
		'uploaded_to_this_item' => __( 'Uploaded to this membro', 'ceara-finance' ),
		'items_list' => __( 'membros list', 'ceara-finance' ),
		'items_list_navigation' => __( 'membros list navigation', 'ceara-finance' ),
		'filter_items_list' => __( 'Filter membros list', 'ceara-finance' ),
	);
	$args = array(
		'label' => __( 'membro', 'ceara-finance' ),
		'description' => __( '', 'ceara-finance' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessperson',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'membro', $args );

}
add_action( 'init', 'create_membros_cpt', 0 );

?>
