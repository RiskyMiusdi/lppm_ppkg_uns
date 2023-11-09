<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Event kerjasama</h3>
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
                                <form method="post" action="<?php echo site_url('non_ppkg/kerjasama_non_ppkg/c_kerjasama_non_ppkg/update_event_kerjasama/' . $kerjasama->id_kerjasama); ?>" enctype="multipart/form-data" class="form-horizontal form-label-left">

                                    <br />
                                    <center>
                                        <span class="section">Formulir Edit <?php echo $kerjasama->nama_agenda; ?></span>
                                    </center>
                                    <br />
                                    <br />

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Foto Event<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <center>

                                                <img style="border:2px solid black; color:black;" width="200 " src="<?php echo base_url(); ?>uploads/<?php echo $kerjasama->avatar; ?>" />
                                            </center>
                                            <br />
                                            <input id="avatar" class="form-control col-md-7 col-xs-12" name="avatar" type="file">
                                            <p>Ukuran maksimal file 100 kb. Dimensi gambar 1024 x 768. Ekstensi file harus .jpg atau .png. </p>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_agenda">Nama Event<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="nama_agenda" class="form-control col-md-7 col-xs-12" name="nama_agenda" type="text"><?php echo $kerjasama->nama_agenda; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat">Tempat<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="<?php echo $kerjasama->tempat; ?>" id="tempat" class="form-control col-md-7 col-xs-12" name="tempat" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="peserta">Peserta<span class="required"></span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="peserta" class="form-control col-md-7 col-xs-12" name="peserta" required="required">
                                                <option value="<?php echo $kerjasama->peserta; ?>"><?php echo $kerjasama->peserta; ?></option>
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
                                            <input value="<?php echo $kerjasama->kuota; ?>" id="kuota" class="form-control col-md-7 col-xs-12" name="kuota" type="number">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_pelaksanaan">Waktu Pelaksanaan<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="<?php echo $kerjasama->tanggal_pelaksanaan; ?>" id="tanggal_pelaksanaan" class="form-control col-md-7 col-xs-12" name="tanggal_pelaksanaan" type="date">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deskripsi_agenda">Deskripsi<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea type="text" id="deskripsi_agenda" name="deskripsi_agenda" class="form-control col-md-7 col-xs-12"><?php echo $kerjasama->deskripsi_agenda; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="batas_waktu_pendaftaran">Batas Waktu Pendaftaran<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="<?php echo $kerjasama->batas_waktu_pendaftaran; ?>" type="date" id="batas_waktu_pendaftaran" name="batas_waktu_pendaftaran" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/non_ppkg/kerjasama_non_ppkg/c_kerjasama_non_ppkg/daftar_semua_event">Batal</a>
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