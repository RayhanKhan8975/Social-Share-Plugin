<div class="col-sm-6" class="social_post_type">
                        <h3>Available Post Types</h3>
                        <p>Please select on which post types the social icons be displayed</p>
                        <?php foreach ($posts as $post) {
                            $checked =  in_array($post, $post_types) ? 'checked' : '';
                            echo '<h5><label for="' . $post . '-post" >' . $post . '</label> <input id="' . $post . '-post" type="checkbox" name="social_post[' . $post . ']"' . $checked . ' ><h5>';
                        } ?>
                    </div>