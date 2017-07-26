<?php
/*
	Plugin name: newPlugin
	Description: Just test plugin from scratch cretor
	Version: 1.2
	Author: Dmitriy
	Author URI: https://vk.com/dmitriy_r_f
	Text Domain: newplugin

 */

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

//Setup

define( 'DIRECTORY_PLUGIN_PATH', 	plugin_dir_path( __FILE__ ) );
define( 'SITE_PLUGIN_URL', 			plugin_dir_url( __FILE__ )  );
//Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'includes/admin/init.php' );


//Hooks
register_activation_hook( __FILE__, 'np_activate_plugin' );
add_action( 'init', 'newplugin_init');
add_action( 'admin_init', 'newplugin_admin_init');

//Shortcodes