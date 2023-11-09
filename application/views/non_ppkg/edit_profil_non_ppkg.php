<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">

                <h3>Edit Profil Anda</h3>

            </div>


        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="border:2px solid black; color:black; background-color:white">


                    <div class="col-md-12 col-sm-9 col-xs-12">

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">

                            <div id="myTabContent" class="tab-content">
                                <?php if (validation_errors()) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= validation_errors(); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('error') != '') {
                                    echo '<div class="alert alert-danger" role="alert">';
                                    echo $this->session->flashdata('error');
                                    echo '</div>';
                                } ?>
                                <form method="post" action="<?php echo base_url(); ?><?php echo "index.php/non_ppkg/c_profil_non_ppkg/update/" . $user->id_user; ?>" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                    <br />

                                    <center>
                                        <h1 class="section">Form Edit Profil</h1>
                                    </center>
                                    <br />
                                    <br />
                                    <br />
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Foto <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <center>
                                                <img style="border:2px solid black; color:black;" width="200" src="<?php echo base_url(); ?>uploads/<?php echo $user->avatar; ?>" />
                                            </center>
                                            <br />
                                            <input id="avatar" class="form-control col-md-7 col-xs-12" name="avatar" type="file">
                                            <p>Ukuran file foto maksimal 5 Megabyte. Dimensi foto maksimal 3048 pixel x 3000 pixel.</p>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lengkap <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="<?php echo $user->name; ?>" id="name" class="form-control col-md-7 col-xs-12" name="name" placeholder="Tulis nama lengkap anda." required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nia">Nomor Induk Anggota<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="<?php echo $user->nia; ?>" id="nia" class="form-control col-md-7 col-xs-12" name="nia" placeholder="Tulis nomor induk anggota anda." required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly value="<?php echo $user->username; ?>" id="username" class="form-control col-md-7 col-xs-12" name="username" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Role <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly value="<?php echo $user->role; ?>" id="role" class="form-control col-md-7 col-xs-12" name="role" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_kelamin">Jenis Kelamin<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="role" class="form-control col-md-7 col-xs-12" name="jenis_kelamin" required="required">
                                                <option value="<?php echo $user->jenis_kelamin; ?>"><?php echo $user->jenis_kelamin; ?></option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="password" class="control-label col-md-3">Password</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly value="<?php echo $user->password;  ?>" id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly value="<?php echo $user->email; ?>" type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">Nomor Handphone<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input placeholder="Tulis nomor handphone anda. Contoh: 0856 47xx xxxx." value="<?php echo $user->no_hp; ?>" type="text" id="no_hp" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">Batal</button>
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