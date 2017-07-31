<?php

function np_plugin_enqueue_scripts(){

	// wp_register_style( string $handle, string $src, array $deps = array(), string|bool|null $ver = false, string $media = 'all' );
	// wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' );
	wp_register_style( 'rateit', plugins_url('/assets/rateit/rateit.css', NEWPLUGIN_URL ), false, 'all');
	wp_enqueue_style( 'rateit' );

	// wp_register_script( string $handle, string $src, array $deps = array(), string|bool|null $ver = false, bool $in_footer = false );
	// wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false );
	wp_register_script( 'rateitjs', plugins_url('/assets/rateit/jquery.rateit.min.js', NEWPLUGIN_URL ), array(), false, true );
	wp_register_script( 'mainjs', SITE_PLUGIN_URL . 'assets/item/np.main.scripts.js', array(), false, true );
	wp_enqueue_script( 'rateitjs');
	wp_enqueue_script( 'mainjs');
	

}