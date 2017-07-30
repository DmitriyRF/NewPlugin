<?php

	function np_activate_plugin(){
		if( version_compare(get_bloginfo('version'), '4.8', '<') ){
			wp_die( __('You must uptade Wordpress to use this plugin to 4.8 version.', 'newplugin') );
		}

		global $wpdb;
		$createSQL					=	"
		CREATE TABLE " . $wpdb->get_blog_prefix() . "item_ratings ( 
			id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, 
			item_id BIGINT(20) UNSIGNED NOT NULL, 
			rating FLOAT(3,1) UNSIGNED NOT NULL, 
			user_ip VARCHAR(32) NOT NULL, 
			PRIMARY KEY  (id)
		)" .  $wpdb->get_charset_collate() . ";";

		require_once ( ABSPATH . '/wp-admin/includes/upgrade.php');
		dbDelta( $createSQL );
	}