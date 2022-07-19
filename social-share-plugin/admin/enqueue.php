<?php

/**
 * Enqueues scripts and Styles
 *
 * @return void
 */
function social_share_admin_enqueue() {
	if ( $_GET['page'] == 'social-share-options' || is_singular() ) {

		wp_register_style( 'social_jquery_ui_css', 'https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css' );
		wp_register_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_register_style( 'social_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
		wp_register_style( 'social_custom_css', plugins_url( 'assets/style.css', SOCIAL_PATH ) );

		// wp_enqueue_style('social_jquery_ui_css');
		wp_enqueue_style( 'social_bootstrap' );
		wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'social_custom_css' );
		wp_enqueue_style( 'wp-color-picker' );

		wp_register_script( 'font-awesome', 'https://kit.fontawesome.com/a076d05399.js' );
		wp_register_script( 'jquery_ui_droppable', 'https://code.jquery.com/ui/1.13.0/jquery-ui.js', array( 'jquery' ) );
		wp_register_script( 'social_custom_js', plugins_url( 'assets/custom.js', SOCIAL_PATH ), array( 'wp-color-picker' ), false, true );
		wp_enqueue_script( 'jquery_ui_droppable' );

		wp_enqueue_script( 'social_custom_js' );
		// wp_enqueue_script('social_custom_js');

		wp_localize_script( 'social_custom_js', 'social_obj', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
	}
}
