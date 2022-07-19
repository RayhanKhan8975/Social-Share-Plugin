<?php

/**
 * Registers Initial Values
 *
 * @return void
 */
function social_plugin_activate() {
	if ( version_compare( get_bloginfo( 'version' ), '5.2.0', '<' ) ) {
		wp_die( 'Minimum WordPress version required is 5.2.0' );
	}

	if ( ! get_option( 'social_post' ) ) {
		add_option( 'social_post', array( 'post', 'page' ) );
	}

	if ( ! get_option( 'social_media' ) ) {
		add_option(
			'social_media',
			array(
				'WhatsApp'  => array(
					'STATUS' => 'ON',
					'color'  => 'green',
					'icon'   => 'fa fa-whatsapp',
					'href'   => 'whatsapp://send?text=',
				),
				'Facebook'  => array(
					'STATUS' => 'ON',
					'color'  => 'Blue',
					'icon'   => 'fa fa-facebook-square',
					'href'   => 'https://www.facebook.com/sharer/sharer.php?u=',
				),
				'Twitter'   => array(
					'STATUS' => 'ON',
					'color'  => 'Blue',
					'icon'   => 'fa fa-twitter-square',
					'href'   => 'https://twitter.com/share?url=',
				),
				'Pinterest' => array(
					'STATUS' => 'ON',
					'color'  => 'Red',
					'icon'   => 'fa fa-pinterest',
					'href'   => 'https://in.pinterest.com/pin-builder/?url=',
				),
				'Linkedin'  => array(
					'STATUS' => 'ON',
					'color'  => 'darkblue',
					'icon'   => 'fa fa-linkedin',
					'href'   => 'https://www.linkedin.com/sharing/share-offsite/?url=',
				),
			)
		);

	}

	if ( ! get_option( 'social_button_size' ) ) {
		add_option( 'social_button_size', 'fa-2x' );
	}

	if ( ! get_option( 'social_share_location' ) ) {
		add_option( 'social_share_location', array( array( 'below the post title', 'floating on the left area', 'after the post content', 'inside the featured image' ), array( 'below the post title', 'floating on the left area', 'after the post content', 'inside the featured image' ) ) );
	}

	if ( ! get_option( 'social_title_counter' ) ) {
		add_option( 'social_title_counter', 1 );
	}

	if ( ! get_option( 'social_title_count' ) ) {
		add_option( 'social_title_count', 0 );
	}
	if ( ! get_option( 'social_content_count' ) ) {
		add_option( 'social_content_count', 0 );
	}

}
