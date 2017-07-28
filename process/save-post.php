<?php

//Since this function is triggered right after the post has been created, saved or updated, you can easily access this post object by using get_post($post_id) or in function parametrs.
function np_save_post_admin( $post_id, $post, $update ){
	if( ! $update ){
		return;
	}
	//For test as post save in database
	// echo '<pre>';
	// print_r($_POST);
	// die();


	$item_data							=	array();

	$item_data['np_name']				=	sanitize_text_field( $_POST['np_input_name'] );

	$item_data['np_checkbox_1'] 		=	isset( $_POST['np_checkbox_check_1'] ) ? $_POST['np_checkbox_check_1'] : '';
	$item_data['np_checkbox_text_1']	=	isset($item_data['np_checkbox_1']) && $item_data['np_checkbox_1'] == 'on' ? sanitize_text_field( $_POST['np_input_checkbox_1'] )	:	'';

	$item_data['np_checkbox_2'] 		=	isset( $_POST['np_checkbox_check_2'] ) ? $_POST['np_checkbox_check_2'] : '';
	$item_data['np_checkbox_text_2']	=	isset($item_data['np_checkbox_2']) && $item_data['np_checkbox_2'] == 'on' ? sanitize_text_field( $_POST['np_input_checkbox_2'] )	:	'';

	$item_data['np_checkbox_3'] 		=	isset( $_POST['np_checkbox_check_3'] ) ? $_POST['np_checkbox_check_3'] : '';									
	$item_data['np_checkbox_text_3']	=	isset($item_data['np_checkbox_3']) && $item_data['np_checkbox_3'] == 'on' ? sanitize_text_field( $_POST['np_input_checkbox_3'] )	:	'';

	$item_data['np_radiobox_1']			=	isset( $_POST['np_radio_check'] ) ? $_POST['np_radio_check'] : '';								
	$item_data['np_radiobox_text_1']	=	isset($item_data['np_radiobox_1']) && $item_data['np_radiobox_1'] == 'on' ? sanitize_text_field( $_POST['np_input_one_value'] )	:	'';

	$item_data['np_number']				=	$_POST['np_select_number'];
	$item_data['np_rating']				=	0;
	$item_data['np_rating_count']		=	0;

 // update_post_meta( $post_id, $meta_key, $meta_value, $prev_value );
	update_post_meta( $post_id, 'item_data', $item_data);
}