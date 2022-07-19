
                    <div class="col-sm-6">
                        <h2>Order to display</h2>
                        <br>
                        <ul style="padding: 0;text-align:center" id="sortable">
                            <?php
                            foreach ($social_platforms as $name => $data) {
                                echo '<li data-value="' . $name . '" class="ui-state-default"><i class="	fas fa-cat"></i><div><i class="' . $data['icon'] . ' fa-3x" aria-hidden="true"></i></div><div><h5 >' . $name . '</h5></div></li>';
                            }

                            ?>
                        </ul>
                        <script>
                            jQuery(function() {
                                jQuery("#sortable").sortable();
                            });
                        </script>
                    </div>