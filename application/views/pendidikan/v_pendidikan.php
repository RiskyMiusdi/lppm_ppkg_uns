		<!-- Home -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/gedung-lppm-uns.jpg)"></div>
			<!-- /Backgound Image -->


		</div>
		<!-- /Home -->


		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">
				<div class="section-header text-center">
					<?php if ($this->session->flashdata('login_dulu') != '') {
						echo '<div class="alert alert-danger" role="alert">';
						echo $this->session->flashdata('login_dulu');
						echo '</div>';
					} ?>
					<br />
					<br />
					<br />
					<h2>Event Pendidikan</h2>

				</div>
			</div>
			<!-- /row -->

			<!-- courses -->
			<div id="courses-wrapper">

				<!-- row -->
				<div class="row">
					<?php foreach ($pendidikan as $row) { ?>
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<!-- <img src="<?php //echo base_url() 
													?>assets/img/kuliah-umum.jpg" alt=""> -->
									<img width="200" height="200" src="<?php echo base_url(); ?>uploads/<?php echo $row->avatar; ?>" />
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title"><?php echo $row->nama_agenda; ?></a>
								<br />
								<br />
								<br />
								<br />
								<br />
								<br />
								<br />
								<div class="course-details">
									<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>
										<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_pendidikan/lihat_event_pendidikan/' . $row->id_pendidikan); ?>">Lihat</a></span>
									<?php } else {
									?>
										<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_event_pendidikan/' . $row->id_pendidikan); ?>">Lihat</a></span>
									<?php } ?>
								</div>
							</div>
						</div>
						<!-- /single course -->
					<?php if ($row->id_pendidikan == 4) {
							break;
						}
					} ?>
				</div>
				<!-- /row -->

				<center>
					<br />
					<br />
					<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>
						<a class="main-button icon-button" href="<?php echo site_url('c_pendidikan/lihat_event_pendidikan_more/'); ?>">More</a>
					<?php } else {
					?>
						<a class="main-button icon-button" href="<?php echo site_url('c_login/login_untuk_melihat_event_pendidikan_more/'); ?>">More</a>
					<?php } ?>

				</center>
			</div>
			<!-- /courses -->


		</div>
		<!-- container -->

		<hr class="section-hr">

		<!-- Contact CTA -->

		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="section-header text-center">

					<h2>Artikel Pendidikan</h2>
				</div>
			</div>
			<!-- /row -->
		</div>



		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">


				<?php foreach ($artikel as $row) { ?>
					<!-- single course -->

					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img width="200" height="200" src="<?php echo base_url(); ?>uploads/<?php echo $row->avatar; ?>" />
								<i class="course-link-icon fa fa-link"></i>
							</a>

							<a class="course-title"><?php echo $row->judul_artikel; ?></a>
							<br />
							<br />
							<br />
							<br />
							<br />
							<br />
							<div class="course-details">
								<!-- <span class="course-category"><a style="color: darkorange;" href=" <?php //echo site_url('c_pendidikan/lihat_artikel_pendidikan/' . $row->id_artikel_pendidikan); 
																										?>">Baca</a></span> -->
								<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>

									<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_pendidikan/lihat_artikel_pendidikan/' . $row->id_artikel_pendidikan); ?>">Baca</a></span>

								<?php } else {
								?>
									<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_artikel_pendidikan/' . $row->id_artikel_pendidikan); ?>">Baca</a></span>
								<?php } ?>

							</div>
						</div>
					</div>
					<!-- /single course -->
				<?php if ($row->id_artikel_pendidikan == 4) {
						break;
					}
				} ?>
			</div>
			<!-- /row -->
			<center>
				<br />
				<br />
				<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>
					<a class="main-button icon-button" href="<?php echo site_url('c_pendidikan/lihat_artikel_pendidikan_more/'); ?>">More</a>
				<?php } else {
				?>
					<a class="main-button icon-button" href="<?php echo site_url('c_login/login_untuk_melihat_artikel_pendidikan_more/'); ?>">More</a>
				<?php } ?>

			</center>
		</div>
		<!-- /container -->

		</div>
		<!-- /Contact CTA -->