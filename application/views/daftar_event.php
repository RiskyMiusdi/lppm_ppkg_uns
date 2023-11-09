<!-- Home -->
<div class="hero-area">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/home-background.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">

				<h1>Formulir Pendaftaran Event</h1>

			</div>

			<div class="card-body">
				<?php
				if ($this->session->flashdata('error') != '') {
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>


</div>

<!-- /Home -->


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<!-- contact form -->
			<div class="col-md-4 col-md-offset-4">
				<div class="contact-form">
					<form method="post" action="<?php echo base_url(); ?>index.php/c_register/proses">

						<div class="form-group">
							<h5>Email</h5>
							<input type="text" class="form-input" name="email" id="email" placeholder="Enter email">
						</div>
						<div class="form-group">
							<h5>Nama Lengkap</h5>
							<input type="text" class="form-input" name="name" id="name" placeholder="Enter Nama Lengkap">
						</div>
						<div class="form-group">
							<h5>No Hp</h5>
							<input type="text" class="form-input" name="no_hp" id="no_hp" placeholder="Enter No Hp">
						</div>
						<div class="form-group">
							<h5>Status keanggotaan</h5>
							<select name="role" class="form-input">
								<option value="PPKG">PPKG</option>
								<option value="Non-PPKG">Non-PPKG</option>

							</select>
						</div>
						<button type="submit" class="main-button icon-button pull-right">Kirim</button>
					</form>
				</div>
			</div>
			<!-- /contact form -->

		</div>
	</div>
</div>