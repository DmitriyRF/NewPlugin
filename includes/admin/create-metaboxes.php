<?php

function np_create_metaboxes(){
	add_meta_box(
		'np_recipe_options_md',
		__( 'Item options', 'newplugin'),
		'np_recipe_options_callback',
		'item',
		'normal',
		'high'
	);
}