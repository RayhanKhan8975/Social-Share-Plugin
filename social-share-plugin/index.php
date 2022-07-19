<?php
/**
 * Plugin Name:       Social Share Plugin
 * Plugin URI:        https://git.toptal.com/screening/Aman-Khan
 * Description:       The goal of the plugin is to automatically display selected social network(s) sharing buttons in posts and/or on pages.
 * The following Social Networks are available: Facebook, Twitter, Pinterest, LinkedIn, Whatsapp.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Aman Khan
 * Author URI:        https://github.com/RayhanKhan8975
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       social-share
 * Domain Path:       /languages
 */

if ( ! function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
// Setup

define( 'SOCIAL_PATH', __FILE__ );

// Includes
require 'includes/activation.php';
require 'admin/social-share-html.php';
require 'admin/social-share-page.php';
require 'admin/enqueue.php';
require 'process/social_share_options.php';
require 'frontend/init.php';
require 'assets/get-buttons-nm.php';
require 'frontend/social-meta.php';
require 'shortcodes/social_share_display.php';
require 'assets/floating-buttons.php';
require 'process/restore-default.php';


// Hooks
register_activation_hook( __FILE__, 'social_plugin_activate' );
add_action( 'admin_menu', 'social_share_page' );
add_action( 'admin_enqueue_scripts', 'social_share_admin_enqueue', 100 );
add_action( 'admin_post_social_share_options', 'social_share_options' );
add_action( 'wp', 'show_social_icons' );
add_action( 'wp_head', 'add_social_meta' );
add_action( 'wp_enqueue_scripts', 'social_share_admin_enqueue', 100 );
add_action(
	'wp_footer',
	function () {
		update_option( 'social_title_count', 0 );
		update_option( 'social_content_count', 0 );
	}
);
add_action( 'wp_ajax_restore_default', 'restore_default' );

// Shortcode
add_shortcode( 'social_share_display', 'social_share_display' );
