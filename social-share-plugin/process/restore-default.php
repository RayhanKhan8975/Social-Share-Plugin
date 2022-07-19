<?php

/**
 * Restores the Default settings of social share plugin
 *
 * @return void
 */
function restore_default()
{


    if (get_option('social_post', 1)) {
        delete_option('social_post');
    }

    if (get_option('social_media', 1)) {
        delete_option(
            'social_media'
        );;
    }

    if (get_option('social_button_size', 1)) {
        delete_option('social_button_size');
    }

    if (get_option('social_share_location', 1)) {
        delete_option('social_share_location');
    }

    if (get_option('social_title_counter', 1)) {
        delete_option('social_title_counter');
    }

    if (get_option('social_title_count', 1)) {
        delete_option('social_title_count');
    }
    if (get_option('social_content_count', 1)) {
        delete_option('social_content_count');
    }

    social_plugin_activate();

    $output = ['status' => 1];

    wp_send_json($output['status']);
}
