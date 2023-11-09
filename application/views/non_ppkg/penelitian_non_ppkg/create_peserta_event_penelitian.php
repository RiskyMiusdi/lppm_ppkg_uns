<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="page-title">
			<div class="title_left">

				<h3>Tambah Peserta Baru</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel" style=" border:2px solid black; color:black;">


					<div class="col-md-12 col-sm-9 col-xs-12">

						<div class="" role="tabpanel" data-example-id="togglable-tabs">

							<div id="myTabContent" class="tab-content">
								<?php if (validation_errors()) : ?>
									<div class="alert alert-danger" role="alert">
										<?= validation_errors(); ?>
									</div>
								<?php endif; ?>

								<form method="post" action="<?php echo site_url('non_ppkg/penelitian_non_ppkg/c_penelitian_non_ppkg/store_peserta/'); ?>" enctype="multipart/form-data" class="form-horizontal form-label-left">
									<br />
									<center>
										<span class="section"><?php echo "Form Pendaftaran " . $event->nama_agenda; ?></span>
									</center>
									<br />
									<br />
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Foto Peserta<span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input required id="avatar" class="form-control col-md-7 col-xs-12" name="avatar" type="file">
											<p>Ukuran maksimal file 100 kb. Dimensi gambar 1024 x 768. Ekstensi file harus .jpg atau .png. </p>
										</div>
									</div>
									<div class="item form-group">

										<div class="col-md-6 col-sm-6 col-xs-12">
											<input readonly id="id_penelitian" class="form-control col-md-7 col-xs-12" name="id_penelitian" required="required" type="hidden" value="<?php echo $event->id_penelitian; ?>">
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_agenda">Nama Agenda<span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<textarea readonly id="nama_agenda" class="form-control col-md-7 col-xs-12" name="nama_agenda" required="required" type="text"> <?php echo $event->nama_agenda; ?></textarea>
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lengkap">Nama Lengkap<span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input readonly id="nama_lengkap" class="form-control col-md-7 col-xs-12" value="<?php echo $user['name']; ?>" name="nama_lengkap" required="required" type="text">
										</div>
									</div>
									<div class="item form-group">

										<div class="col-md-6 col-sm-6 col-xs-12">
											<input id="id_peserta" class="form-control col-md-7 col-xs-12" value="<?php echo $user['id_user']; ?>" name="id_peserta" required="required" type="hidden">
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_anggota">Status Keanggotaan<span class="required"></span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select id="status_anggota" class="form-control col-md-7 col-xs-12" name="status_anggota" required="required">

												<option value="PPKG">PPKG</option>
												<option value="Non-PPKG">Non-PPKG</option>
												<!-- Tambahkan opsi sesuai kebutuhan -->
											</select>
										</div>
									</div>


									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">No HP<span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="number" id="no_hp" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-6 col-md-offset-3">
											<a class="btn btn-primary" href="<?php echo site_url('non_ppkg/penelitian_non_ppkg/c_penelitian_non_ppkg/daftar_semua_event/'); ?>">Batal</a>
											<button id="send" type="submit" class="btn btn-success">Kirim</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- /page content -->