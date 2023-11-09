<!-- Hero-area -->
<div class="hero-area section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/gedung-lppm-uns.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h1 style="font-size: 20pt; color:black;"><b><?php echo $penelitian->nama_agenda; ?></b></h1>

			</div>
		</div>
	</div>
</div>
<!-- /Hero-area -->


<!-- Blog -->
<div id="blog" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-10 col-md-offset-1 text-center">


				<!-- blog post -->
				<div class="blog-post">



					<center><img width="900" src="<?php echo base_url(); ?>uploads/<?php echo $penelitian->avatar; ?>" />

						<br />
						<br />
						<br />
						<p class="white-text" style="text-align:justify; color:black;"><?php echo $penelitian->deskripsi_agenda; ?></p>
						<!-- <p><?php //echo $artikel->paragraf1; 
								?></p> -->
						<br />
					</center>
					<table width="100%">
						<tr>
							<th width="20%">
								<p style="text-align: center; color:black;">Waktu Pelaksanaan</p>
							</th>
							<th width="20%">
								<p style="text-align: center; color:black;">Tempat</p>
							</th>
							<th width="20%">
								<p style="text-align: center; color:black;">Peserta</p>
							</th>
							<th width="20%">
								<p style="text-align: center; color:black;">Batas waktu pendaftaran</p>
							</th>
							<th width="20%">
								<p style="text-align: center; color:black;">Kuota</p>
							</th>
						</tr>
						<td style="text-align: center;">
							<?php
							// Fungsi untuk mengonversi nama bulan dalam bahasa Indonesia
							function getNamaBulanIndonesia($bulanInggris)
							{
								$namaBulanIndonesia = array(
									'January' => 'Januari',
									'February' => 'Februari',
									'March' => 'Maret',
									'April' => 'April',
									'May' => 'Mei',
									'June' => 'Juni',
									'July' => 'Juli',
									'August' => 'Agustus',
									'September' => 'September',
									'October' => 'Oktober',
									'November' => 'November',
									'December' => 'Desember'
								);

								return $namaBulanIndonesia[$bulanInggris];
							}

							// Tanggal yang akan diubah formatnya
							$tanggal_pelaksanaan = $penelitian->tanggal_pelaksanaan;

							// Mengonversi format tanggal menjadi berbahasa Indonesia
							$tanggal_indonesia = date('d F Y', strtotime($tanggal_pelaksanaan));
							$bulanInggris = date('F', strtotime($tanggal_pelaksanaan));
							$bulanIndonesia = getNamaBulanIndonesia($bulanInggris);

							// Menggabungkan tanggal dan bulan yang sudah dikonversi menjadi berbahasa Indonesia
							$tanggal_berbahasa_indonesia = date('d', strtotime($tanggal_pelaksanaan)) . ' ' . $bulanIndonesia . ' ' . date('Y', strtotime($tanggal_pelaksanaan));

							// Menampilkan tanggal dengan format berbahasa Indonesia
							echo '<p style="text-align: center; color:black;">' . $tanggal_berbahasa_indonesia . '</p>';

							?>


						</td>

						<td style="text-align: center;">
							<p style="text-align: center; color:black;"><?php echo $penelitian->tempat; ?></p>
						</td>


						<td style="text-align: center;">
							<p style="text-align: center; color:black;"><?php echo $penelitian->peserta; ?></p>
						</td>

						<td style="text-align: center;">

							<?php
							// Fungsi untuk mengonversi nama bulan dalam bahasa Indonesia
							function get_Nama_Bulan_Indonesia($bulanInggris)
							{
								$namaBulanIndonesia = array(
									'January' => 'Januari',
									'February' => 'Februari',
									'March' => 'Maret',
									'April' => 'April',
									'May' => 'Mei',
									'June' => 'Juni',
									'July' => 'Juli',
									'August' => 'Agustus',
									'September' => 'September',
									'October' => 'Oktober',
									'November' => 'November',
									'December' => 'Desember'
								);

								return $namaBulanIndonesia[$bulanInggris];
							}

							// Tanggal yang akan diubah formatnya
							$bts_pendaftaran = $penelitian->batas_waktu_pendaftaran;

							// Mengonversi format tanggal menjadi berbahasa Indonesia
							$tanggal_indonesia = date('d F Y', strtotime($bts_pendaftaran));
							$bulanInggris = date('F', strtotime($bts_pendaftaran));
							$bulanIndonesia = get_Nama_Bulan_Indonesia($bulanInggris);

							// Menggabungkan tanggal dan bulan yang sudah dikonversi menjadi berbahasa Indonesia
							$tanggal_berbahasa_indonesia = date('d', strtotime($bts_pendaftaran)) . ' ' . $bulanIndonesia . ' ' . date('Y', strtotime($bts_pendaftaran));

							// Menampilkan tanggal dengan format berbahasa Indonesia
							echo '<p style="text-align: center; color:black;">' . $tanggal_berbahasa_indonesia . '</p>';

							?>

						</td>
						<td style="text-align: center;">
							<p style="text-align: center; color:black;"><?php echo $penelitian->kuota . " " . "orang"; ?></p>
						</td>
					</table>
					<br />
					<br />

					<?php if ($this->session->userdata('role') === 'PPKG') { ?>
						<button class="main-button icon-button">
							<a style="color: white;" href="<?php echo site_url('ppkg/penelitian_ppkg/c_penelitian_ppkg/create_peserta/' . $penelitian->id_penelitian); ?>">Registrasi Sekarang</a>
						</button>
						<br />
						<br />
						<button style="background-color: black;">
							<a style="color: white;" style="color: white;" href="<?php echo site_url('ppkg/c_dashboard_ppkg/'); ?>">
								Kembali ke dashboard
							</a>
						</button>
						<?php } elseif ($this->session->userdata('role') === 'Non-PPKG') {
						if ($penelitian->peserta == 'Umum') { ?>
							<button class="main-button icon-button">
								<a style="color: white;" href="<?php echo site_url('non_ppkg/penelitian_non_ppkg/c_penelitian_non_ppkg/create_peserta/' . $penelitian->id_penelitian); ?>">Registrasi Sekarang</a>
							</button>
						<?php } ?>
						<br />
						<br />
						<button style="background-color: black;">
							<a style="color: white;" href="<?php echo site_url('non_ppkg/c_dashboard_non_ppkg/'); ?>">
								Kembali ke dashboard
							</a>
						</button>

					<?php
					} elseif ($this->session->userdata('role') === 'Admin') { ?>
						<button class="main-button icon-button">
							<a style="color: white;" href="<?php echo site_url('admin/penelitian_admin/c_penelitian_admin/daftar_semua_peserta/' . $penelitian->id_penelitian); ?>">Cek Daftar Peserta</a>
						</button>
						<br />
						<br />
						<button style="background-color: black;">
							<a style="color: white;" href="<?php echo site_url('admin/c_dashboard_admin/'); ?>">
								Kembali ke dashboard
							</a>
						</button>
					<?php } else { ?>
						<?php $this->session->set_flashdata('registrasi_event', 'Maaf, anda harus login dulu sebelum registrasi.'); ?>
						<button class="main-button icon-button">
							<a style="color: white;" href="<?php echo site_url('c_login'); ?>">Registrasi Sekarang</a>
						</button>
						<br />
						<br />
						<button style="background-color: black;">
							<a style="color: white;" href="<?php echo site_url('c_home'); ?>">
								Kembali
							</a>
						</button>
					<?php } ?>

				</div>
				<!-- /blog post -->

			</div>
			<!-- row -->

		</div>
		<!-- container -->

	</div>
	<!-- /Blog -->