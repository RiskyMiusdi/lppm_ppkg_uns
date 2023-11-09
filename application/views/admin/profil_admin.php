<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">

				<h3>Profil Anda</h3>
			</div>


		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel" style="border:2px solid black; color:black;">

					<div class="x_content">
						<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
							<div class="profile_img">
								<div id="crop-avatar">
									<!-- Current avatar -->
									<img style="border:2px solid black; color:black;" class="img-responsive avatar-view" src="<?php echo base_url(); ?>uploads/<?php echo $user['avatar']; ?>" alt="Avatar" title="Change the avatar">

								</div>
							</div>

							<br />
							<br />
							<a href="<?php echo base_url(); ?>index.php/admin/c_profil_admin/edit/<?php echo $user['id_user']; ?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>

						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">

							<div>
								<form class="form-horizontal form-label-left" novalidate>

									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nomor Induk Anggota<span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input readonly value="<?php echo $user['nia']; ?>" id="nia" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nia" required="required" type="text">
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lengkap <span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input readonly value="<?php echo $user['name']; ?>" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input readonly value="<?php echo $user['username']; ?>" id="username" class="form-control col-md-7 col-xs-12" class="form-control col-md-7 col-xs-12" name="username" required="required" type="text">
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Role<span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input readonly value="<?php echo $user['role']; ?>" id="role" class="form-control col-md-7 col-xs-12" class="form-control col-md-7 col-xs-12" name="role" required="required" type="text">
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input readonly value="<?php echo $user['email']; ?>" type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">Nomor Handphone<span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input readonly value="<?php echo $user['no_hp']; ?>" type="number" id="no_hp" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_kelamin">Jenis Kelamin<span class="required"></span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input readonly value="<?php echo $user['jenis_kelamin']; ?>" type="text" id="jenis_kelamin" name="jenis_kelamin" required="required" class="form-control col-md-7 col-xs-12">
										</div>
									</div>

									<div class="item form-group">
										<label for="password" class="control-label col-md-3">Password</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input readonly value="<?php echo $user['password']; ?>" id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
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
<!-- /page content -->