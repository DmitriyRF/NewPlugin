<?php

	function newplugin_admin_init(){
		include ( 'create-metaboxes.php' );
		include ( 'item-options.php');

		add_action( 'add_meta_boxes_item', 'np_create_metaboxes');
	}