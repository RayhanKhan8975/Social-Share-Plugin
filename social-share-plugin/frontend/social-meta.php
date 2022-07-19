<?php 

function add_social_meta(){

    if (is_single() ) {

        echo "<meta property='og:title' content='".get_the_title() ."'/>
        <meta property='og:image' content='".get_the_post_thumbnail_url() ."'/>
        <meta property='og:description' content='".get_the_excerpt()."'/>
        <meta property='og:url' content='".get_the_permalink()."' />
        <meta name='twitter:card' content='summary_large_image'/>
        <meta property='twitter:title' content='".get_the_title() ."'/>
        <meta property='twitter:image' content='".get_the_post_thumbnail_url() ."'/>
        <meta property='twitter:description' content='".get_the_excerpt()."'/>
        <meta property='twitter:url' content='".get_the_permalink()."' />";
    
    }

   
}