<div class="col-sm-6">
                        <h2>Location</h2>
                        <p>The widget can be displayed in these default following locations</p>
                        <input type="hidden" name="locations[]" id="locations" value="" />
                        <div>

                            <?php foreach ($positions[0] as $position) {
                                $checked =  in_array($position, $positions[1]) ? 'checked' : '';
                                echo '<h5><label for="' . $position . '">' . $position . '</label> <input id="' . $position . '"  type="checkbox" name="social_share_location[' . $position . ']"' . $checked . ' ></h5>';
                                echo '<br>';
                            } ?>
                        </div>
                        <label for="post-title-settings">
                            <h5>Post Title Settings</h5>
                            <p> As all themes are different.The Post title might not work as expected. Please increase the value if you don't see the icons below Title. Decrease if appearing more than once.</p>
                        </label>

                        <input value="<?php echo get_option('social_title_counter') ?>" type="number" id="post-title-settings" name="count_title" min="0" max="100">
                    </div>