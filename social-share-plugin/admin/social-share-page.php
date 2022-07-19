<?php
/**
 * Registers Menu Page
 *
 * @return void
 */
function social_share_page() {
	add_menu_page(
		'Social Share Options',
		'Social Share',
		'edit_theme_options',
		'social-share-options',
		'display_social_share_html'
	);
}
