<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">

                <h3>Edit Data <?php echo $pengabdian->nama_lengkap; ?> </h3>
            </div>


        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="border:2px solid black; color:black;">


                    <div class="col-md-12 col-sm-9 col-xs-12">

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">

                            <div id="myTabContent" class="tab-content">
                                <?php if (validation_errors()) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= validation_errors(); ?>
                                    </div>
                                <?php endif; ?>

                                <form method="post" action="<?php echo site_url('ppkg/pengabdian_ppkg/c_pengabdian_ppkg/update_peserta_event_pengabdian/' .  $pengabdian->id_registrasi); ?>" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                    <br />
                                    <center>
                                        <span class="section"><?php echo "Form Pendaftaran" . " " . $pengabdian->nama_agenda; ?></span>
                                    </center>

                                    <br />
                                    <br />
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Foto Anda
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <center>
                                                <img style="border:2px solid black; color:black;" width="200 " src="<?php echo base_url(); ?>uploads/<?php echo $pengabdian->avatar; ?>" />
                                            </center>
                                            <br />
                                            <input id="avatar" class="form-control col-md-7 col-xs-12" name="avatar" type="file">
                                            <p>Ukuran maksimal file 100 kb. Dimensi gambar 1024 x 768. Ekstensi file harus .jpg atau .png. </p>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_pengabdian">ID Agenda<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly value="<?php echo $pengabdian->id_pengabdian; ?>" id="id_pengabdian" class="form-control col-md-7 col-xs-12" name="id_pengabdian" required="required" type="hidden">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_agenda">Nama Agenda<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="nama_agenda" class="form-control col-md-7 col-xs-12" name="nama_agenda" required="required" type="text" readonly><?php echo $pengabdian->nama_agenda; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lengkap">Nama Lengkap<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="<?php echo $pengabdian->nama_lengkap; ?>" id="nama_lengkap" class="form-control col-md-7 col-xs-12" name="nama_lengkap" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_anggota">Status Keanggotaan<span class="required"></span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="status_anggota" class="form-control col-md-7 col-xs-12" name="status_anggota" required="required">
                                                <option value="<?php echo $pengabdian->status_anggota; ?>"><?php echo $pengabdian->status_anggota; ?></option>
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
                                            <input readonly value="<?php echo $pengabdian->email; ?>" type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">No HP<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="<?php echo $pengabdian->no_hp; ?>" type="text" id="no_hp" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a class="btn btn-primary" href="<?php echo site_url('ppkg/pengabdian_ppkg/c_pengabdian_ppkg/daftar_semua_peserta_event_pengabdian/' . $pengabdian->id_pengabdian); ?>">Batal</a>
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