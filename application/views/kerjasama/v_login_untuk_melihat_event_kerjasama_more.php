<!-- Home -->
<div class="hero-area">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/gedung-lppm-uns.jpg)"></div>
	<!-- /Backgound Image -->



	<div class="home-wrapper">
		<div class="container">

			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<br />



				</div>
			</div>



		</div>

	</div>
</div>

<!-- /Home -->

<div id="cta" class="section">
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/gedung-lppm-uns.jpg)"></div>

	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<!-- contact form -->
			<div class="col-md-4 col-md-offset-4">
				<div class="contact-form">
					<center>
						<h1>Login</h1>
						<?php
						if ($this->session->flashdata('login_dulu') != '') {
							echo '<div class="alert alert-danger" role="alert">';
							echo $this->session->flashdata('login_dulu');
							echo '</div>';
						}
						if ($this->session->flashdata('error') != '') {
							echo '<div class="alert alert-danger" role="alert">';
							echo $this->session->flashdata('error');
							echo '</div>';
						}
						?>
					</center>
					<br />
					<br />

					<form method="post" action="<?php echo site_url('c_login/proses_untuk_melihat_event_kerjasama_more/'); ?>">

						<div class="form-group">
						</div>
						<div class="form-group">
							<h4>Username</h4>
							<input type="text" class="form-input" name="username" id="username" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<h4>Password</h4>
							<input type="password" class="form-input" name="password" id="password" placeholder="Enter Password">
						</div>

						<div class="form-group">
							<h4>Role</h4>
							<select name="role" class="form-input">
								<option value="Admin">Admin</option>
								<option value="PPKG">PPKG</option>
								<option value="Non-PPKG">Non-PPKG</option>

							</select>
						</div>
						<button type="submit" class="main-button icon-button pull-right">Login</button>
					</form>

				</div>
			</div>
			<!-- /contact form -->
		</div>
	</div>
</div>