<?php

	function np_activate_plugin(){
		if( version_compare(get_bloginfo('version'), '4.8', '<') ){
			wp_die( __('You must uptade Wordpress to use this plugin to 4.8 version.', 'newplugin') );
		}
	}