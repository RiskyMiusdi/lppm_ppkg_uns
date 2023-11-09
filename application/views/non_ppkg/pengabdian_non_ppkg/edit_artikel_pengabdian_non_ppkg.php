<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">

                <h3>Edit Artikel Pengabdian</h3>
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
                                <form method="post" action="<?php echo site_url('non_ppkg/pengabdian_non_ppkg/c_pengabdian_non_ppkg/update_artikel/' . $pengabdian->id_artikel_pengabdian); ?>" enctype="multipart/form-data" class="form-horizontal form-label-left">

                                    <br />
                                    <center>
                                        <span class="section">Formulir Edit Artikel</span>
                                    </center>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Gambar Artikel<span class="required"></span>
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
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_publikasi">Tanggal Publikasi<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input required value="<?php echo $pengabdian->tanggal_publikasi; ?>" id="tanggal_publikasi" class="form-control col-md-7 col-xs-12" name="tanggal_publikasi" type="date">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="penulis">Penulis<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input required value="<?php echo $pengabdian->penulis; ?>" id="penulis" class="form-control col-md-7 col-xs-12" name="penulis" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul_artikel">Judul Artikel<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea required id="judul_artikel" class="form-control col-md-7 col-xs-12" name="judul_artikel" type="text"><?php echo $pengabdian->judul_artikel; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paragraf1">Isi Artikel<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea required id="paragraf1" class="form-control col-md-7 col-xs-12" name="paragraf1" type="text"><?php echo $pengabdian->paragraf1; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/non_ppkg/pengabdian_non_ppkg/c_pengabdian_non_ppkg/daftar_semua_artikel">Batal</a>
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