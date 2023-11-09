<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">

                <h3>Tambah Artikel Pengabdian Baru </h3>
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
                                <form method="post" action="<?php echo site_url('ppkg/pengabdian_ppkg/c_pengabdian_ppkg/store_artikel/'); ?>" enctype="multipart/form-data" class="form-horizontal form-label-left">

                                    <br />
                                    <center>
                                        <h1>Formulir Artikel Pengabdian</h1>
                                    </center>
                                    <br />
                                    <br />
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input required="id_penulis" class="form-control col-md-7 col-xs-12" name="id_penulis" type="hidden" value="<?php echo $user['id_user']; ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Gambar Artikel<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input required id="avatar" class="form-control col-md-7 col-xs-12" name="avatar" type="file">
                                            <p>Ukuran maksimal file 100 kb. Dimensi gambar 1024 x 768. Ekstensi file harus .jpg atau .png. </p>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Penulis<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly id="penulis" class="form-control col-md-7 col-xs-12" name="penulis" type="text" value="<?php echo $user['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_publikasi">Tanggal Publikasi<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input required id="tanggal_publikasi" class="form-control col-md-7 col-xs-12" name="tanggal_publikasi" type="date">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul_artikel">Judul Artikel<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea required id="judul_artikel" class="form-control col-md-7 col-xs-12" name="judul_artikel" type="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paragraf1">Isi Artikel<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea required id="paragraf1" class="form-control col-md-7 col-xs-12" name="paragraf1" type="text"></textarea>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly id="status" class="form-control col-md-7 col-xs-12" name="status" type="hidden" value="Menunggu">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/ppkg/pengabdian_ppkg/c_pengabdian_ppkg/daftar_semua_artikel">Batal</a>
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