<?php

function np_filter_item_content( $content){
	if(! is_singular('item')){
		return $content;
	}
	global $post, $wpdb;
	$item_data			=	get_post_meta( $post->ID, 'item_data', true);
	$item_html			=	file_get_contents( 'item-template.php', true);//true mean use as inlude function
	$item_html 			=	str_replace( 'NAME_PH', 		$item_data['np_name'], 				$item_html);
	$item_html 			=	str_replace( 'CHECK_INPUT1_PH', $item_data['np_checkbox_text_1'], 	$item_html);
	$item_html 			=	str_replace( 'CHECK_INPUT2_PH', $item_data['np_checkbox_text_2'], 	$item_html);
	$item_html 			=	str_replace( 'CHECK_INPUT3_PH', $item_data['np_checkbox_text_3'], 	$item_html);
	$item_html 			=	str_replace( 'RADIO_INPUT1_PH', $item_data['np_radiobox_text_1'], 	$item_html);
	$item_html 			=	str_replace( 'SELECT_PH', 		$item_data['np_number'], 			$item_html);

	$item_html 			=	str_replace( 'NAME_I18N', 			__( 'Name', 'newplugin'), 			$item_html);
	$item_html 			=	str_replace( 'CHECK_INPUT1_I18N', 	__( 'Check input 1', 'newplugin'), 	$item_html);
	$item_html 			=	str_replace( 'CHECK_INPUT2_I18N', 	__( 'Check input 2', 'newplugin'), 	$item_html);
	$item_html 			=	str_replace( 'CHECK_INPUT3_I18N', 	__( 'Check input 3', 'newplugin'), 	$item_html);
	$item_html 			=	str_replace( 'RADIO_INPUT1_I18N', 	__( 'Radio input 1', 'newplugin'), 	$item_html);
	$item_html 			=	str_replace( 'CHECK_I18N', 			__( 'Select value', 'newplugin'), 	$item_html);
	$item_html 			=	str_replace( 'RATE_I18N', 			__( 'Rate', 'newplugin'), 			$item_html);
	$item_html 			=	str_replace( 'ITEM_ID', 			$post->ID, 			$item_html);
	$item_data['np_rating']		=	round( $wpdb->get_var("SELECT AVG(rating) FROM " . $wpdb->prefix . "item_ratings WHERE item_id = '" . $post->ID . "'"), 1);
	$item_html 			=	str_replace( 'ITEM_RATING', 		$item_data['np_rating'], 			$item_html);
	
	$user_ip			=	$_SERVER['REMOTE_ADDR'];

	//Just know set current user rating or now if no then set rating if yes then set status=1
	$rating_count		=	$wpdb->get_var("SELECT COUNT(*) FROM `" .$wpdb->prefix . "item_ratings` WHERE item_id = '" . $post->ID . "' AND user_ip ='" . $user_ip . "'");

	if($rating_count > 0){
		$item_html 			=	str_replace( 'READONLY_PLACEHOLDER', 	'data-rateit-readonly="true"', 			$item_html);
	}else{
		$item_html 			=	str_replace( 'READONLY_PLACEHOLDER', 	'', 									$item_html);
	}
	return $item_html . $content;

}