<!-- Home -->
<div id="home" class="hero-area">
	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/gedung-lppm-uns.jpg)"></div>
	<!-- /Backgound Image -->
	<div class="home-wrapper">
		<div class="container">
			<div class="row">
				<div class="text-justify">
					<center>
						<h1 class="white-text">Selamat Datang di Web Resmi
						</h1>
						<p class="lead white-text">Pusat Penelitian Kependudukan dan Gender Universitas Sebelas Maret</p>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Why us -->
<div id="why-us" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="section-header text-center">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="section-header text-center">
							<h2> Pendidikan</h2>
						</div>
					</div>
					<!-- /row -->
					<!-- courses -->
					<div id="courses-wrapper">
						<!-- row -->
						<div class="row">
							<!-- single course -->
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="course">
									<a class="course-img">
										<img width="200" height="300" src="<?php echo base_url(); ?>uploads/<?php echo $pendidikan->avatar; ?>" />
									</a>
									<a class="course-title"><?php echo $pendidikan->nama_agenda; ?></a>
									<br />
									<br />
									<br />
									<div class="course-details">
										<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_pendidikan/lihat_event_pendidikan/' . $pendidikan->id_pendidikan); ?>">Lihat</a></span>
										<?php } else {
										?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_event_pendidikan/' . $pendidikan->id_pendidikan); ?>">Lihat</a></span>
										<?php } ?>
									</div>
								</div>
							</div>


							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="course">
									<a class="course-img">
										<img width="200" height="300" src="<?php echo base_url(); ?>uploads/<?php echo $artikel_pendidikan->avatar; ?>" />
									</a>
									<a class="course-title"><?php echo $artikel_pendidikan->judul_artikel; ?></a>
									<br />
									<br />
									<br />
									<div class="course-details">
										<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>

											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_pendidikan/lihat_artikel_pendidikan/' . $artikel_pendidikan->id_artikel_pendidikan); ?>">Baca</a></span>

										<?php } else {
										?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_artikel_pendidikan/' . $artikel_pendidikan->id_artikel_pendidikan); ?>">Baca</a></span>
										<?php } ?>
									</div>
								</div>
							</div>
							<!-- /single course -->
							<?php //} 
							?>

						</div>
						<!-- /row -->
						<center>
							<br />
							<br />

							<a class="main-button icon-button" href="<?php echo base_url() ?>index.php/c_pendidikan/index">More</a>
						</center>


					</div>
					<!-- /courses -->

				</div>
				<!-- container -->
			</div>
		</div>
		<!-- /row -->

		<hr class="section-hr">

		<!-- row -->
		<div class="row">
			<div class="section-header text-center">
				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">
						<div class="section-header text-center">

							<h2>Pengabdian</h2>

						</div>
					</div>
					<!-- /row -->

					<!-- courses -->
					<div id="courses-wrapper">

						<!-- row -->
						<div class="row">
							<?php //foreach ($pendidikan as $row) { 
							?>
							<!-- single course -->
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="course">
									<a class="course-img">
										<img width="200" height="300" src="<?php echo base_url(); ?>uploads/<?php echo $pengabdian->avatar; ?>" />
									</a>
									<a class="course-title"><?php echo $pengabdian->nama_agenda; ?></a>
									<br />
									<br />
									<br />
									<div class="course-details">
										<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>

											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_pengabdian/lihat_event_pengabdian/' . $pengabdian->id_pengabdian); ?>">Lihat</a></span>

										<?php } else {
										?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_event_pengabdian/' . $pengabdian->id_pengabdian); ?>">Lihat</a></span>
										<?php } ?>

									</div>
								</div>
							</div>


							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="course">
									<a class="course-img">
										<img width="200" height="300" src="<?php echo base_url(); ?>uploads/<?php echo $artikel_pengabdian->avatar; ?>" />

									</a>
									<a class="course-title"><?php echo $artikel_pengabdian->judul_artikel; ?></a>
									<br />
									<br />
									<br />
									<div class="course-details">
										<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>

											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_pengabdian/lihat_artikel_pengabdian/' . $artikel_pengabdian->id_artikel_pengabdian); ?>">Baca</a></span>

										<?php } else {
										?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_artikel_pengabdian/' . $artikel_pengabdian->id_artikel_pengabdian); ?>">Baca</a></span>
										<?php } ?>
									</div>
								</div>
							</div>
							<!-- /single course -->
							<?php //} 
							?>

						</div>
						<!-- /row -->
						<center>
							<br />
							<br />
							<a class="main-button icon-button" href="<?php echo base_url() ?>index.php/c_pengabdian/index">More</a>
						</center>
					</div>
					<!-- /courses -->
				</div>
				<!-- container -->
			</div>
		</div>
		<!-- /row -->
		<hr class="section-hr">
		<!-- row -->
		<div class="row">
			<div class="section-header text-center">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="section-header text-center">
							<h2>Penelitian</h2>
						</div>
					</div>
					<!-- /row -->
					<!-- courses -->
					<div id="courses-wrapper">
						<!-- row -->
						<div class="row">
							<?php //foreach ($pendidikan as $row) { 
							?>
							<!-- single course -->
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="course">
									<a class="course-img">
										<img width="200" height="300" src="<?php echo base_url(); ?>uploads/<?php echo $penelitian->avatar; ?>" />
									</a>
									<a class="course-title"><?php echo $penelitian->nama_agenda; ?></a>
									<br />
									<br />
									<br />
									<div class="course-details">
										<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>

											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_penelitian/lihat_event_penelitian/' . $penelitian->id_penelitian); ?>">Lihat</a></span>

										<?php } else {
										?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_event_penelitian/' . $penelitian->id_penelitian); ?>">Lihat</a></span>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="course">
									<a class="course-img">
										<img width="200" height="300" src="<?php echo base_url(); ?>uploads/<?php echo $artikel_penelitian->avatar; ?>" />
									</a>
									<a class="course-title"><?php echo $artikel_penelitian->judul_artikel; ?></a>
									<br />
									<br />
									<br />
									<div class="course-details">
										<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>

											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_penelitian/lihat_artikel_penelitian/' . $artikel_penelitian->id_artikel_penelitian); ?>">Baca</a></span>

										<?php } else {
										?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_artikel_penelitian/' . $artikel_penelitian->id_artikel_penelitian); ?>">Baca</a></span>
										<?php } ?>
									</div>
								</div>
							</div>
							<!-- /single course -->
							<?php //} 
							?>
						</div>
						<!-- /row -->
						<center>
							<br />
							<br />
							<a class="main-button icon-button" href="<?php echo base_url() ?>index.php/c_penelitian/index">More</a>
						</center>
					</div>
					<!-- /courses -->
				</div>
				<!-- container -->
			</div>
		</div>
		<!-- /row -->
		<hr class="section-hr">
		<!-- row -->
		<div class="row">
			<div class="section-header text-center">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="section-header text-center">
							<h2>Seminar</h2>
						</div>
					</div>
					<!-- /row -->
					<!-- courses -->
					<div id="courses-wrapper">
						<!-- row -->
						<div class="row">
							<!-- single course -->
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="course">
									<a class="course-img">
										<img width="200" height="300" src="<?php echo base_url(); ?>uploads/<?php echo $seminar->avatar; ?>" />
									</a>
									<a class="course-title"><?php echo $seminar->nama_agenda; ?></a>
									<br />
									<br />
									<br />
									<div class="course-details">
										<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>

											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_seminar/lihat_event_seminar/' . $seminar->id_seminar); ?>">Lihat</a></span>

										<?php } else {
										?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_event_seminar/' . $seminar->id_seminar); ?>">Lihat</a></span>
										<?php } ?>

									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="course">
									<a class="course-img">
										<img width="200" height="300" src="<?php echo base_url(); ?>uploads/<?php echo $artikel_seminar->avatar; ?>" />
									</a>
									<a class="course-title"><?php echo $artikel_seminar->judul_artikel; ?></a>
									<br />
									<br />
									<br />
									<div class="course-details">
										<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>

											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_seminar/lihat_artikel_seminar/' . $artikel_seminar->id_artikel_seminar); ?>">Baca</a></span>

										<?php } else {
										?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_artikel_seminar/' . $artikel_seminar->id_artikel_seminar); ?>">Baca</a></span>
										<?php } ?>
									</div>
								</div>
							</div>
							<!-- /single course -->
							<?php //} 
							?>
						</div>
						<!-- /row -->
						<center>
							<br />
							<br />
							<a class="main-button icon-button" href="<?php echo base_url() ?>index.php/c_seminar/index">More</a>
						</center>
					</div>
					<!-- /courses -->
				</div>
				<!-- container -->
			</div>
		</div>
		<!-- /row -->
		<hr class="section-hr">
		<!-- row -->
		<div class="row">
			<div class="section-header text-center">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="section-header text-center">
							<h2>Kerja Sama</h2>
						</div>
					</div>
					<!-- /row -->
					<!-- courses -->
					<div id="courses-wrapper">
						<!-- row -->
						<div class="row">
							<!-- single course -->
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="course">
									<a class="course-img">
										<img width="200" height="300" src="<?php echo base_url(); ?>uploads/<?php echo $kerjasama->avatar; ?>" />
									</a>
									<a class="course-title"><?php echo $kerjasama->nama_agenda; ?></a>
									<br />
									<br />
									<br />
									<div class="course-details">
										<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>

											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_kerjasama/lihat_event_kerjasama/' . $kerjasama->id_kerjasama); ?>">Lihat</a></span>

										<?php } else {
										?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_event_kerjasama/' . $kerjasama->id_kerjasama); ?>">Lihat</a></span>
										<?php } ?>

									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="course">
									<a class="course-img">
										<img width="200" height="300" src="<?php echo base_url(); ?>uploads/<?php echo $artikel_kerjasama->avatar; ?>" />
									</a>
									<a class="course-title"><?php echo $artikel_kerjasama->judul_artikel; ?></a>
									<br />
									<br />
									<br />
									<div class="course-details">
										<?php if ($this->session->userdata('role') === 'PPKG' || $this->session->userdata('role') === 'Non-PPKG' || $this->session->userdata('role') === 'Admin') { ?>

											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_kerjasama/lihat_artikel_kerjasama/' . $artikel_kerjasama->id_artikel_kerjasama); ?>">Baca</a></span>

										<?php } else {
										?>
											<span class="course-category"><a style="color: darkorange;" href="<?php echo site_url('c_login/login_untuk_melihat_artikel_kerjasama/' . $artikel_kerjasama->id_artikel_kerjasama); ?>">Baca</a></span>
										<?php } ?>
									</div>
								</div>
							</div>
							<!-- /single course -->
							<?php //} 
							?>
						</div>
						<!-- /row -->
						<center>
							<br />
							<br />
							<a class="main-button icon-button" href="<?php echo base_url() ?>index.php/c_kerjasama/index">More</a>
						</center>
					</div>
					<!-- /courses -->
				</div>
				<!-- container -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /Why us -->
</body>