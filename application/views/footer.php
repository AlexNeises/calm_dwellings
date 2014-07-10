		<footer id="contact" class="gradient_footer">
			<div class="row">
				<div class="small-12 medium-6 large-6 columns">
					<div class="row">
						<div class="small-12 medium-12 large-12 columns">
							<!-- <h1 class="small show-for-small-only">Contact Me</h1> -->
							<p>Let me work for you!  Fill out the fields below and I will contact you as soon as possible about an estimate.</p>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="small-12 medium-12 large-12 columns">
								<label for="name">Full Name</label>
							</div>
						</div>
						<div class="row">
							<div class="small-12 medium-12 large-12 columns">
								<input type="text" id="name"/>
							</div>
						</div>
						<div class="row">
							<div class="small-12 medium-12 large-12 columns">
								<label for="email">Email Address</label>
							</div>
						</div>
						<div class="row">
							<div class="small-12 medium-12 large-12 columns">
								<input type="text" id="email"/>
							</div>
						</div>
						<div class="row">
							<div class="small-8 medium-8 large-8 columns">
								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<label for="phone">Phone Number</label>
									</div>
								</div>
								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<input type="text" data-inputmask="'mask': '(999) 999-9999'" id="phone"/>
									</div>
								</div>
							</div>
							<div class="small-4 medium-4 large-4 columns">
								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<label for="zip">Zip Code</label>
									</div>
								</div>
								<div class="row">
									<div class="small-12 medium-12 large-12 columns">
										<input type="text" data-inputmask="'mask': '99999'" id="zip"/>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="small-12 medium-12 large-12 columns">
								<label for="comment">Comment</label>
							</div>
						</div>
						<div class="row">
							<div class="small-12 medium-12 large-12 columns">
								<textarea id="comment" rows="10"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="small-12 medium-12 large-12 columns">
								<a href="javascript:void(0)" id="form_submit" class="button secondary radius expand">Submit</a>
							</div>
						</div>
					</form>
				</div>
				<div class="show-for-medium-up medium-6 large-6 columns">
					<h1>Contact Me</h1>
				</div>
			</div>
		</footer>
		<section class="full-width section_odd copyright-section">
			<div class="row">
				<div class="small-12 columns">
					<p>&copy; <?php print date("Y"); ?> Neises Home Designs, LLC.  All Rights Reserved.</p>
				</div>
			</div>
		</section>
		<script src="<?php print base_url(); ?>/static/foundation/javascripts/foundation/foundation.js?<?php print time(); ?>"></script>
		<script src="<?php print base_url(); ?>/static/foundation/javascripts/foundation/foundation.topbar.js?<?php print time(); ?>"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
	<!-- <a class="display-for-small-only exit-off-canvas"></a>
			</div>
		</div> -->
</html>