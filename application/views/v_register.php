<!-- Home -->
<div class="hero-area">

	<!-- Backgound Image -->

	<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/gedung-lppm-uns.jpg)"></div>
	<!-- /Backgound Image -->
	<div class="col-md-10 col-md-offset-1 text-center">
		<br />

	</div>

</div>

<!-- /Home -->


<div id="cta" class="section">
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/gedung-lppm-uns.jpg)"></div>


	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">

				<!-- contact form -->
				<div class="col-md-4 col-md-offset-4">
					<div class="contact-form">
						<?php
						if ($this->session->flashdata('error') != '') {
							echo '<div class="alert alert-danger" role="alert">';
							echo $this->session->flashdata('error');
							echo '</div>';
						}
						?>
						<center>
							<h1>Register</h1>
						</center>
						<br />
						<br />
						<form method="post" action="<?php echo base_url(); ?>index.php/c_register/proses">
							<div class="form-group">
								<h5>Username</h5>
								<input type="text" class="form-input" name="username" id="username" placeholder="Enter Username">
							</div>
							<div class="form-group">
								<h5>Password</h5>
								<input type="password" class="form-input" name="password" id="password" placeholder="Enter Password">
							</div>
							<div class="form-group">
								<h5>Email</h5>
								<input type="text" class="form-input" name="email" id="email" placeholder="Enter email">
							</div>
							<div class="form-group">
								<h5>Name</h5>
								<input type="text" class="form-input" name="name" id="name" placeholder="Enter name">
							</div>
							<div class="form-group">
								<h5>Role</h5>
								<select name="role" class="form-input">

									<option value="Non-PPKG">Non-PPKG</option>

								</select>
							</div>
							<button type="submit" class="main-button icon-button pull-right">Register</button>
						</form>
					</div>
				</div>
				<!-- /contact form -->

			</div>
		</div>
	</div>
</div>