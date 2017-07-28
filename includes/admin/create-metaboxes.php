<?php

function np_create_metaboxes(){
	
	add_meta_box(
		'np_recipe_options_md', //used in the 'id' attribute for the meta box
		__( 'Item options', 'newplugin'), // Title of the meta box.
		'np_recipe_options_callback', // Function that fills the box with the desired content. 
		//This will only receive 1 parameter - $post. post_type NOT NEED
		'item', // The screen or screens on which to show the box
		'normal', //  The context within the screen where the boxes should display. 
		'high' // The priority within the context where the boxes should show 
	);
}