<?php

	function newplugin_admin_init(){
		include ( 'create-metaboxes.php' );
		include ( 'item-options.php');
		include ( 'enqueue.php');

		// Best practice is to use add_meta_boxes_{post-type} to create less unnecessary hooks for other post types.
		add_action( 'add_meta_boxes_item', 'np_create_metaboxes');
		add_action( 'admin_enqueue_scripts', 'np_admin_enqueue');
	}