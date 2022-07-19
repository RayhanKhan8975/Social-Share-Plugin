<?php

$count = 0;

$id_url;

function show_social_icons()
{

    global $post;

    global $id_url;

    $id_url   = url_to_postid(full_url($_SERVER));

    $allowed_post_types = get_option('social_post');

    $allowed_locations  = get_option('social_share_location')[1];

    $posttype = get_post_type($post->ID);

    if (!is_singular()) {
        return;
    }

    if (!in_array($posttype, $allowed_post_types)) {
        return;
    }

    if (in_array('below the post title', $allowed_locations)) {
        add_filter('the_title', 'social_filter_the_title', 10, 2);
    }

    if (in_array('floating on the left area', $allowed_locations)) {

        add_action('wp_body_open', 'add_floating_icons');
    }
    if (in_array('after the post content', $allowed_locations)) {
        add_filter('the_content', 'social_filter_the_content');
    }
    if (in_array('inside the featured image', $allowed_locations)) {

        add_filter('post_thumbnail_html', 'add_icons_to_thumbnail');
    }
}

/**
 * Filters the post title.
 *
 * @param string $title The post title.
 * @param int    $id    The post ID.
 * @return string The post title.
 */
function social_filter_the_title(string $title, int $id): string
{

    global $id_url;

    $count = get_option('social_title_count');
    $max   = get_option('social_title_counter');

    if (in_the_loop() && get_the_ID() === $id_url && $count < $max) {


        $icons =  get_buttons_nm();
        $count++;
        update_option('social_title_count', $count);


        return $title . $icons;
    }

    return $title;
}
// Function found here: http://stackoverflow.com/a/8891890/358906
function full_url($s)
{
    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true : false;
    $sp = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $s['SERVER_PORT'];
    $port = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
    $host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : $s['SERVER_NAME'];
    return $protocol . '://' . $host . $port . $s['REQUEST_URI'];
}
/**
 * Filters the post title.
 *
 * @param string $title The post title.
 * @param int    $id    The post ID.
 * @return string The post title.
 */
function social_filter_the_content($content)
{

    // ob_start();

    global $id_url;

    $count = get_option('social_content_count');

    if (in_the_loop() && get_the_ID() === $id_url && $count < 1) {


        $icons =  get_buttons_nm();

        update_option('social_content_count', 1);
        return $content . $icons;
    }

    //$icons = ob_end_clean();
    return  $content;
}


function add_icons_to_thumbnail($html)
{
    global $id_url;

    if (in_the_loop() && get_the_ID() === $id_url) {


        $icons =  '<div class="post-thumbnail-social-icons" >';
        $icons .=  get_buttons_nm();
        $icons .= '</div>';

        return $html . $icons;
    }
}
