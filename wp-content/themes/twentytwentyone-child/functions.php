<?php
/*
 * Reviews CPT
 */
function crimson_review_init() {

    $singleLabel = 'Picture';
    $pluralLabel = 'Pictures';

	// register the type
	register_post_type(
		'reviews',
		array(
			'labels'              => array(
				'name'                => _x($pluralLabel, 'Post Type General Name'),
				'singular_name'       => _x($singleLabel, 'Post Type Singular Name'),
				'menu_name'           => __($pluralLabel),
				'parent_item_colon'   => __('Parent ' . $singleLabel),
				'all_items'           => __('All ' . $pluralLabel),
				'view_item'           => __('View ' . $singleLabel),
				'add_new_item'        => __('Add New ' . $singleLabel),
				'add_new'             => __('Add New'),
				'edit_item'           => __('Edit ' . $singleLabel),
				'update_item'         => __('Update ' . $singleLabel),
				'search_items'        => __('Search ' . $pluralLabel),
				'not_found'           => __('Not Found'),
				'not_found_in_trash'  => __('Not found in Trash'),
			),
			'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-camera', // https://developer.wordpress.org/resource/dashicons/
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'rewrite'             => array('with_front' => false,'slug' => ''),
			// 'taxonomies'          => array('team_member_category'),
			'show_in_rest'        => true // Set to false to disable Gutenberg-style editor
		)
	);
	
	// register the taxonomies for the type
	// register_taxonomy(
	// 	'review-category',
	// 	'review',
	// 	array(
	// 		'hierarchical' => true,
	// 		'label' => $singleLabel . ' Categories'
	// 	)
	// );

}

add_action('init', 'crimson_review_init');