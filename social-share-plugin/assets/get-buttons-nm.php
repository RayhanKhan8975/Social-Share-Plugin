<?php
/**
 * Returns Buttons HTML
 *
 * @return void
 */
function get_buttons_nm()
{
    global $post;
    $social_platforms = get_option('social_media');
    $size             = get_option('social_button_size');
    $image            = get_the_post_thumbnail_url($post);
    $url              = get_the_permalink($post);

    $content = '';

    $content .= '<div style="margin-top:20px;" class="d-flex flex-column align-items-center">
    <ul class="social-list">';

            foreach ($social_platforms as $key => $value) {
                $extra = '';
                if($key == 'Pinterest')
                {
                    $extra = '&media='.$image.'&method=button';
                }


                if (isset($value['STATUS'])) {
                    if($_GET['page'] == 'social-share-options')
                    {
                        $style = 'display:flex';
                    }
          
            
              $content .='<li><a href="';
              $content .= $value["href"];
              $content .= $url;
              $content .= $extra;
              $content .= '"style="text-decoration: none;"><span  class="social-icon social-'.$key.'"  style="'.$style.';background:';
              $content .= $value['color'].'"><i class="'.$value['icon'] .' '. $size.'"></i></span></a></li>';
                }
            }
$content .= '</ul></div>';

return $content;

}
?>