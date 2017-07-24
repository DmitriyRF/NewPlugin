<?php
/*
	Plugin name: newPlugin
	Description: Just test plugin from scratch cretor
	Version: 1.2
	Author: Dmitriy
	Author URI: https://vk.com/dmitriy_r_f
	Text Domain: newplugin

 */

//Setup

define( 'DIRECTORY_PLUGIN_PATH', 	plugin_dir_path( __FILE__ ) );
define( 'SITE_PLUGIN_URL', 			plugin_dir_url( __FILE__ )  );
//Includes
include( 'includes/activate.php' );


//Hooks

register_activation_hook( __FILE__, 'np_activate_plugin' );

//Shortcodes