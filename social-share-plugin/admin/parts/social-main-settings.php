<div class="col-sm-6" style="text-align:center" style="position:relative">
						<h2>Social Media Settings</h2>
						<br>
						<div class="main_setting">
							<?php
							foreach ( $social_platforms as $name => $data ) {
								$checked = isset( $data['STATUS'] ) ? 'checked' : '';
								echo '<div class="toggle" style="" >';
								echo '<div><i class="' . $data['icon'] . ' fa-3x" aria-hidden="true"></i></div>';
								echo '<div><h5>' . $name . '</h5></div>';
								echo '<div><label class="switch">';
								echo '<input name="data[' . $name . '][STATUS]" type="checkbox" ' . $checked . ' >';
								echo '<span class="slider"></span></label></div>';
								echo '<input style="display:inline;min-width:40px;" type="text" class="social-color-picker" name="data[' . $name . '][color]" value="' . $data['color'] . '" class="cpa-color-picker" >';
								echo '<input type="hidden" name="data[' . $name . '][icon]" value="' . $data['icon'] . '" />';
								echo '<input type="hidden" name="data[' . $name . '][href]" value="' . $data['href'] . '" />';
								echo '</div>';
							}
							?>
						</div>
					</div>
