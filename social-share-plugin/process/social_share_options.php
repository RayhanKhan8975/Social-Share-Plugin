<?php

/**
 * Processes and Saves data from admin page
 *
 * @return void
 */
function social_share_options() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( __( 'You are not allowed to be on this page', 'social_share' ) );
	}
	check_admin_referer( 'social_options_verify' );

	$data         = $_POST['data'];
	$social_media = array();
	$post         = array();

	if ( ! empty( $_POST['locations'][0] ) ) {
		$locations = $_POST['locations'][0];

		$locations = explode( ',', $locations );

		foreach ( $locations as $location ) {
			$social_media[ $location ] = $data[ $location ];
		}
		update_option( 'social_media', $social_media );
	} else {
		update_option( 'social_media', $data );
	}

	$social_posts = $_POST['social_post'];
	foreach ( $social_posts as $key => $value ) {
		$post[] = $key;
	}

	$social_share_location_2 = array();
	foreach ( $_POST['social_share_location'] as $key => $value ) {
		$social_share_location_2[] = $key;
	}

	$social_share_location = get_option( 'social_share_location' );

	$social_share_location[1] = $social_share_location_2;

	update_option( 'social_share_location', $social_share_location );

	update_option( 'social_button_size', $_POST['size'] );

	update_option( 'social_post', $post );

	update_option( 'social_title_counter', absint( $_POST['count_title'] ) );

	wp_redirect( admin_url( 'admin.php?page=social-share-options' ) );
}
