<!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="background-color:#ebebeb;">

                    <div class="col-md-12 col-sm-9 col-xs-12">
                        <div class="x_content">
                            <center>
                                <h2>Daftar Peserta <?php echo $event->nama_agenda; ?></h2>
                            </center>
                            <br />
                            <a href="<?php echo site_url('admin/pengabdian_admin/c_pengabdian_admin/create_peserta/' . $event->id_pengabdian); ?>" class="btn btn-success">Tambah Peserta</a>
                            <table style="border:2px solid black; color:black;" id="datatable" class="table table-striped table-bordered">

                                <thead style="border:2px solid black; background-color:#25ff7a;">
                                    <tr style="border:2px solid black;">
                                        <th style="border:2px solid black;" width="5%">No</th>
                                        <th style="border:2px solid black;">Nama Agenda</th>
                                        <th style="border:2px solid black;">Nama Peserta</th>
                                        <th style="border:2px solid black;">ID registrasi</th>
                                        <th style="border:2px solid black;">Tanggal registrasi</th>
                                        <th style="border:2px solid black;">Status Keanggotaan</th>
                                        <th style="border:2px solid black;">Email</th>
                                        <th style="border:2px solid black;">No telepon</th>
                                        <th style="border:2px solid black;">avatar</th>
                                        <th style="border:2px solid black;">Aksi</th>

                                    </tr>
                                </thead>


                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta as $row) {

                                    ?>
                                        <tr style="border:2px solid black;">
                                            <td style="border:2px solid black;" width="5%"><?php echo $no++; ?></td>

                                            <td style="border:2px solid black;"><?php echo $row->nama_agenda; ?></td>
                                            <td style="border:2px solid black;"><?php echo $row->nama_lengkap; ?></td>
                                            <td style="border:2px solid black;"><?php echo $row->id_registrasi; ?></td>
                                            <td style="border:2px solid black;"><?php echo date('d-F-Y', strtotime($row->tanggal_registrasi)); ?></td>
                                            <td style="border:2px solid black;"><?php echo $row->status_anggota; ?></td>
                                            <td style="border:2px solid black;"><?php echo $row->email; ?></td>
                                            <td style="border:2px solid black;"><?php echo $row->no_hp; ?></td>
                                            <td style="border:2px solid black;"><img width="100" src="<?php echo base_url('uploads/' . $row->avatar); ?>" /></td>
                                            <td style="border:2px solid black;">
                                                <a class="btn btn-info" href="<?php echo site_url('admin/pengabdian_admin/c_pengabdian_admin/edit_peserta/' . $row->id_registrasi); ?>">Edit</a>

                                                <a class="btn btn-danger" href="<?php echo site_url('admin/pengabdian_admin/c_pengabdian_admin/delete_peserta/' . $row->id_registrasi); ?>">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }

                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /page content -->