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
define( 'NEWPLUGIN_URL', __FILE__ );
define( 'DIRECTORY_PLUGIN_PATH', 	plugin_dir_path( __FILE__ ) );
define( 'SITE_PLUGIN_URL', 			plugin_dir_url( __FILE__ )  );
//Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'includes/admin/init.php' );
include( 'process/save-post.php' );
include( 'process/filter-content.php');
include( 'includes/front/enqueue.php');
include( 'process/rate-item.php');



//Hooks
register_activation_hook( __FILE__, 'np_activate_plugin' );
add_action( 'init', 'newplugin_init');
add_action( 'admin_init', 'newplugin_admin_init');
//As of WP 3.7, an alternative action has been introduced, which is called for specific post types: save_post_{post_type}. Hooking to this action you wouldn't have to check on the post type (ie: if ( $slug != $_POST['post_type'] ) in the sample above).
add_action( 'save_post_item', 'np_save_post_admin', 10, 3);// 10 is priority, 3 is number of np_save_post_admin() arguments
add_filter( 'the_content', 'np_filter_item_content');
add_action( 'wp_enqueue_scripts', 'np_plugin_enqueue_scripts', 9999 );
//This hook allows you to create custom handlers for your own custom AJAX requests. The wp_ajax_ hook follows the format "wp_ajax_$youraction", where $youraction is your AJAX request's 'action' property.
add_action( 'wp_ajax_np_rate_item', 'np_rate_item');
add_action( 'wp_ajax_nopriv_np_rate_item', 'np_rate_item');//for users how not login

//Shortcodes