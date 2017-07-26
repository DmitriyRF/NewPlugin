<?php

function newplugin_init(){

	$labels = array(
			'name'               => __( 'Items', 'newplugin' ),
			'singular_name'      => __( 'Item', 'newplugin' ),
			'menu_name'          => __( 'Items', 'newplugin' ),
			'name_admin_bar'     => __( 'Item', 'newplugin' ),
			'add_new'            => __( 'Add New','newplugin' ),
			'add_new_item'       => __( 'Add New Item', 'newplugin' ),
			'new_item'           => __( 'New Item', 'newplugin' ),
			'edit_item'          => __( 'Edit Item', 'newplugin' ),
			'view_item'          => __( 'View Item', 'newplugin' ),
			'all_items'          => __( 'All Items', 'newplugin' ),
			'search_items'       => __( 'Search Items', 'newplugin' ),
			'parent_item_colon'  => __( 'Parent Items:', 'newplugin' ),
			'not_found'          => __( 'No items found.', 'newplugin' ),
			'not_found_in_trash' => __( 'No items found in Trash.', 'newplugin' )
		);

		$args = array(
			'labels'             => $labels,
	        'description'        => __( 'Description.', 'newplugin' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'item' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
			'taxonomies'		 => array( 'category', 'post_tag')
		);

		register_post_type( 'item', $args );
}
