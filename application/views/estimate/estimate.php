			<!-- MAIN SECTION -->
			<section class="main-section">
				<!-- CONTENT SECTION -->
				<section class="full-width">
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
							<h2>Request an Estimate</h2>
							<p class="lead">Please fill out the form below and you will be contacted as soon as possible.</p>
							<div class="row">
								<?php $attributes = array(
									'data-abide' => 'data-abide'
									); ?>
									<?php echo form_open_multipart('estimate/submit', $attributes);?>
									<div class="small-6 medium-6 large-6 columns">
										<input type="hidden" name="current" value="<?php print $current; ?>"/>
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row">
													<div class="small-3 medium-3 large-3 columns">
														<label for="fnamelabel" class="right inline">First Name:</label>
													</div>
													<div class="small-9 medium-9 large-9 columns">
														<input id="fnamelabel" name="fname" placeholder="John" required type="text">
														<small class="error">Your first name is required.</small>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row">
													<div class="small-3 medium-3 large-3 columns">
														<label for="lnamelabel" class="right inline">Last Name:</label>
													</div>
													<div class="small-9 medium-9 large-9 columns">
														<input id="lnamelabel" name="lname" required placeholder="Smith" type="text">
														<small class="error">Your last name is required.</small>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row">
													<div class="small-3 medium-3 large-3 columns">
														<label for="emaillabel" class="right inline">Email:</label>
													</div>
													<div class="small-9 medium-9 large-9 columns">
														<input id="emaillabel" name="email" required placeholder="name@example.net" type="text">
														<small class="error">Your email address is required.</small>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row">
													<div class="small-3 medium-3 large-3 columns">
														<label for="streetlabel" class="right inline">Address:</label>
													</div>
													<div class="small-9 medium-9 large-9 columns">
														<input id="streetlabel" name="address" required placeholder="1234 Main St" type="text">
														<small class="error">Your address is required.</small>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row">
													<div class="small-3 medium-3 large-3 columns">
														<label for="citylabel" class="right inline">City:</label>
													</div>
													<div class="small-5 medium-5 large-5 columns">
														<input id="citylabel" name="city" required placeholder="Overland Park" type="text">
														<small class="error">Your city is required.</small>
													</div>
													<div class="small-4 medium-4 large-4 columns">
														<div class="row">
															<div class="small-12 medium-12 large-12 columns">
																<div class="row">
																	<div class="small-4 medium-4 large-4 columns">
																		<label for="statelabel" class="right inline">State:</label>
																	</div>
																	<div class="small-8 medium-8 large-8 columns">
																		<select name="state" required id="statelabel">
																			<option value="">Select:</option>
																			<option value="Kansas">Kansas</option>
																			<option value="Missouri">Missouri</option>
																		</select>
																		<small class="error">Your state is required.</small>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row">
													<div class="small-3 medium-3 large-3 columns">
														<label for="ziplabel" class="right inline">Zip Code:</label>
													</div>
													<div class="small-3 medium-3 large-3 columns">
														<input id="ziplabel" name="zip" required class="zip" placeholder="66085" type="text">
														<small class="error">Your zip code is required.</small>
													</div>
													<div class="small-6 medium-6 large-6 columns">
														<div class="row">
															<div class="small-12 medium-12 large-12 columns">
																<div class="row">
																	<div class="small-3 medium-3 large-3 columns">
																		<label for="phonelabel" class="right inline">Phone:</label>
																	</div>
																	<div class="small-9 medium-9 large-9 columns">
																		<input id="phonelabel" class="phone" name="phone" required placeholder="(555) 555-5555" type="text">
																		<small class="error">Your phone number is required.</small>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="small-6 medium-6 large-6 columns">
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row">
													<div class="small-3 medium-3 large-3 columns">
														<label for="describelabel" class="right inline">Description:</label>
													</div>
													<div class="small-9 medium-9 large-9 columns">
														<textarea id="describelabel" name="description" required class="estimatetextarea" placeholder="Describe what needs to be done."></textarea>
														<small class="error">A description of what needs to be done is required.</small>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="small-12 medium-12 large-12 columns">
												<div class="row">
													<div class="small-12 medium-12 large-12 columns">
														<div class="captcha">
															<?php echo $recaptcha_html; ?>
															<br/>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="small-12 medium-12 large-12 columns">
										<button type="submit" class="expand">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
			</section> <!-- END SECTION.MAIN-SECTION -->