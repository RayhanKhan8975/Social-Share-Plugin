<div class="col-sm-6">
						<h3>Please Configure the Size</h3>

						<br>
						<div class="social_share_sizes" style="display: inline;">
							<div class="d-flex flex-column align-items-center">
								<ul class="social-list">

									<li><span class="social-icon social-facebook" style="background: <?php echo $social_platforms['Facebook']['color']; ?>;"><i class="
																												<?php
																												echo $social_platforms['Facebook']['icon'] . ' fa ';
																												?>
																																										"></i></span><input type="radio" value="fa" name="size" <?php echo $size == 'fa' ? 'checked' : ''; ?> /></li>
									<li><span class="social-icon social-facebook" style="background: <?php echo $social_platforms['Facebook']['color']; ?>;"><i class="
																												<?php
																												echo $social_platforms['Facebook']['icon'] . ' fa-lg';
																												?>
																																										"></i></span><input type="radio" value="fa-lg" name="size" <?php echo $size == 'fa-lg' ? 'checked' : ''; ?> /></li>
									<li><span class="social-icon social-facebook" style="background: <?php echo $social_platforms['Facebook']['color']; ?>;"><i class="
																												<?php
																												echo $social_platforms['Facebook']['icon'] . ' fa-2x';
																												?>
																																										"></i></span> <input type="radio" value="fa-2x" name="size" <?php echo $size == 'fa-2x' ? 'checked' : ''; ?> /></li>
								</ul>
							</div>

						</div>

					</div>
