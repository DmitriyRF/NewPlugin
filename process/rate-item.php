<?php

function np_rate_item(){
	// print_r($_POST);
	// die();
	
	global $wpdb;

	$response					=	array( 'status' => 1);
	$post_id					=	absint($_POST['rid']);
	$rating						=	round($_POST['rating'], 1);
	$user_ip					=	$_SERVER['REMOTE_ADDR'];

	//Just know set current user rating or now if no then set rating if yes then set status=1
	$rating_count				=	$wpdb->get_var("SELECT COUNT(*) FROM `" .$wpdb->prefix . "item_ratings` WHERE item_id = '" . $post_id . "' AND user_ip ='" . $user_ip . "'");

	if($rating_count > 0){
		wp_send_json( $response );
	}

	$wpdb->insert(
		$wpdb->prefix . 'item_ratings',
		array(
			'item_id'			=>	$post_id,
			'rating'			=>	$rating,
			'user_ip'			=>	$user_ip

		),
		array(
			'%d', '%f', '%s'
		)
	);

	$response['status']			=	2;
	wp_send_json( $response );


}