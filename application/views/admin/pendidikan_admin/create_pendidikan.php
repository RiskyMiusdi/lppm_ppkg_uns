<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">

                <h3>Tambah Event Pendidikan Baru</h3>
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

                                <form method="post" action="<?php echo base_url(); ?>index.php/admin/pendidikan_admin/c_pendidikan_admin/store_event" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                    <br />
                                    <center>
                                        <span class="section">Formulir Event Pendidikan</span>
                                    </center>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="id_peserta" class="form-control col-md-7 col-xs-12" name="id_peserta" required="required" type="hidden" value="<?php echo $user["id_user"]; ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Foto Event<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input required id="avatar" class="form-control col-md-7 col-xs-12" name="avatar" type="file">
                                            <p>Ukuran maksimal file 100 kb. Dimensi gambar 1024 x 768. Ekstensi file harus .jpg atau .png. </p>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_agenda">Nama Event<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="nama_agenda" class="form-control col-md-7 col-xs-12" name="nama_agenda" required="required" type="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat">Tempat<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="tempat" class="form-control col-md-7 col-xs-12" name="tempat" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="peserta">Peserta <span class="required"></span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="peserta" class="form-control col-md-7 col-xs-12" name="peserta" required="required">
                                                <option value="PPKG">PPKG</option>
                                                <option value="Umum">Umum</option>
                                                <!-- Tambahkan opsi sesuai kebutuhan -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kuota">Kuota<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="kuota" class="form-control col-md-7 col-xs-12" name="kuota" required="required" type="number">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_pelaksanaan">Waktu Pelaksanaan<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="tanggal_pelaksanaan" class="form-control col-md-7 col-xs-12" name="tanggal_pelaksanaan" required="required" type="date">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deskripsi_agenda">Deskripsi<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea type="text" id="deskripsi_agenda" name="deskripsi_agenda" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="batas_waktu_pendaftaran">Batas Waktu Pendaftaran<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="date" id="batas_waktu_pendaftaran" name="batas_waktu_pendaftaran" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/pendidikan_admin/c_pendidikan_admin/daftar_semua_event">Batal</a>
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