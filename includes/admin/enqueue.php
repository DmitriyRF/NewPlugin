<?php

function np_admin_enqueue(){

	global $typenow;

	if( $typenow !== 'item'){
		return;
	}

	// wp_register_style( string $handle, string $src, array $deps = array(), string|bool|null $ver = false, string $media = 'all' )
	wp_register_style( 'np_bootstrap', plugins_url( '/assets/bootstrap/css/bootstrap.css', NEWPLUGIN_URL ) );

	wp_enqueue_style( 'np_bootstrap' );

	// wp_register_script( string $handle, string $src, array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
	wp_register_script( 'np_bootstrap',  plugins_url( '/assets/bootstrap/js/bootstrap.js', NEWPLUGIN_URL ), array( 'jquery'), false, true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'np_bootstrap' );
}