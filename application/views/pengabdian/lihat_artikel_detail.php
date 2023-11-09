<!-- Hero-area -->
<div class="hero-area section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/gedung-lppm-uns.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h1 style="font-size: 20pt; color:black;"><b><?php echo $artikel->judul_artikel; ?></b></h1>

			</div>
		</div>
	</div>
</div>
<!-- /Hero-area -->

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-center">

			<ul class=" blog-post-meta">
				<li class="blog-meta-author">
					<p style=" color:black;">Penulis :<?php echo " " . $artikel->penulis; ?></p>
				</li>
				<br />
				<li>
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
					$bts_pendaftaran = $artikel->tanggal_publikasi;

					// Mengonversi format tanggal menjadi berbahasa Indonesia
					$tanggal_indonesia = date('d F Y', strtotime($bts_pendaftaran));
					$bulanInggris = date('F', strtotime($bts_pendaftaran));
					$bulanIndonesia = get_Nama_Bulan_Indonesia($bulanInggris);

					// Menggabungkan tanggal dan bulan yang sudah dikonversi menjadi berbahasa Indonesia
					$tanggal_berbahasa_indonesia = date('d', strtotime($bts_pendaftaran)) . ' ' . $bulanIndonesia . ' ' . date('Y', strtotime($bts_pendaftaran));

					// Menampilkan tanggal dengan format berbahasa Indonesia
					echo '<p style="text-align: center; color:black;">' . $tanggal_berbahasa_indonesia . '</p>';

					?>
				</li>

			</ul>
			<br />
			<br />
			<center>
				<img width="900" src="<?php echo base_url(); ?>uploads/<?php echo $artikel->avatar; ?>" />
			</center>

			<br />
			<p class="white-text" style="text-align: justify;  color:black;"><?php echo $artikel->paragraf1; ?></p>
			<br />
			<center>

				<?php if ($this->session->userdata('role') === 'PPKG') { ?>
					<button style="background-color: black;">
						<a style="color: white;" href="<?php echo site_url('ppkg/c_dashboard_ppkg/'); ?>">
							Kembali ke dashboard
						</a>
					</button>
				<?php } elseif ($this->session->userdata('role') === 'Non-PPKG') { ?>
					<button style="background-color: black;">
						<a style="color: white;" href="<?php echo site_url('non_ppkg/c_dashboard_non_ppkg/'); ?>">
							Kembali ke dashboard
						</a>
					</button>

				<?php } elseif ($this->session->userdata('role') === 'Admin') { ?>
					<button style="background-color: black;">
						<a style="color: white;" href="<?php echo site_url('admin/c_dashboard_admin/'); ?>">
							Kembali ke dashboard
						</a>
					</button>
				<?php } else { ?>
					<button style="background-color: black;">
						<a style="color: white;" href="<?php echo site_url('c_pengabdian'); ?>">
							Kembali ke dashboard
						</a>
					</button>
				<?php } ?>
			</center>
		</div>
	</div>
</div>