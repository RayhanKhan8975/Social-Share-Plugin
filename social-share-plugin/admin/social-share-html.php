<?php

/**
 * Displays Admin Page HTML
 *
 * @return void
 */
function display_social_share_html() {
	$args = array(
		'public'   => true,
		'_builtin' => false,
	);

	$posts            = get_post_types( $args, 'names' );
	$posts[]          = 'post';
	$posts[]          = 'page';
	$post_types       = get_option( 'social_post' );
	$social_platforms = get_option( 'social_media' );
	$positions        = get_option( 'social_share_location' );
	$size             = get_option( 'social_button_size' );
	?>
	<!-- Default switch -->
	<div class="jumbotron" style="text-align:center;padding:2% 0%;">
		<h1 class="display-4">Social Share Settings</h1>
		<p class="lead">Here you can configure various settings related to Social Share.Eg:- Color, Order, etc</p>
		<hr class="my-4">

	</div>
	<div class="wrap">
		<div class="container-fluid align-items-center" style="padding:0% 5%;align-items:center;text-align:center">
			<form action="admin-post.php" method="POST">
				<input type="hidden" name="action" value="social_share_options">
				<?php wp_nonce_field( 'social_options_verify' ); ?>
				<div class="row social_share_row">

					<?php include 'parts/social-main-settings.php'; ?>
					<?php include 'parts/social-order-display.php'; ?>
					<?php include 'parts/available-post-types.php'; ?>
					<?php include 'parts/social-locations.php'; ?>
					<?php include 'parts/social-size.php'; ?>
					<?php include 'parts/display-shortcode.php'; ?>

					<br>

					<br>
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary btn-lg">Submit</button>
						<button type="button" id="restore_default" class="btn btn-warning btn-lg">Restore Default</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php
}
