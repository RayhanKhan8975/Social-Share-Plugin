<?php 
/**
 * Adds floating buttons to the left side of the page
 *
 * @return void
 */
function add_floating_icons()
{
    global $post;
    $social_platforms = get_option('social_media');
    $size             = get_option('social_button_size');
    $image            = get_the_post_thumbnail_url($post);
    $url              = get_the_permalink($post);

    $content = '';
    $style = '';
    $content .= '<div style="display:block" class="floating d-flex flex-column align-items-center d-none d-lg-block ">
    <ul class="social-list"  style="display:block;padding-left:50%;margin:0px">';

            foreach ($social_platforms as $key => $value) {
                $extra = '';
                if($key == 'Pinterest')
                {
                    $extra = '&media='.$image.'&method=button';
                }
                if($_GET['page'] == 'social-share-options')
                {
                    $style = 'style="display:flex"';
                }


                if (isset($value['STATUS'])) {
            
              $content .='<li style="margin-top:0px;" ><a href="';
              $content .= $value["href"];
              $content .= $url;
              $content .= $extra;
              $content .= '"style="text-decoration: none;"><span  class="social-icon social-'.$key.'" style="background:';
              $content .= $value['color'].'"><i class="'.$value['icon'] .' '. $size.'"></i></span></a></li>';
                }
            }
$content .= '</ul></div>';

echo $content;

}