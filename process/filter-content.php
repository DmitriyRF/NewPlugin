<?php

function np_filter_item_content( $content){
	if(! is_singular('item')){
		return $content;
	}
	global $post;
	$item_data			=	get_post_meta( $post->ID, 'item_data', true);
	$item_html			=	file_get_contents( 'item-template.php', true);//true mean use as inlude function
	$item_html 			=	str_replace( 'NAME_PH', 		$item_data['np_name'], 				$item_html);
	$item_html 			=	str_replace( 'CHECK_INPUT1_PH', $item_data['np_checkbox_text_1'], 	$item_html);
	$item_html 			=	str_replace( 'CHECK_INPUT2_PH', $item_data['np_checkbox_text_2'], 	$item_html);
	$item_html 			=	str_replace( 'CHECK_INPUT3_PH', $item_data['np_checkbox_text_3'], 	$item_html);
	$item_html 			=	str_replace( 'RADIO_INPUT1_PH', $item_data['np_radiobox_text_1'], 	$item_html);
	$item_html 			=	str_replace( 'SELECT_PH', 		$item_data['np_number'], 			$item_html);

	return $item_html . $content;

}