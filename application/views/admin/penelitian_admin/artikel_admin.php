<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="background-color:#ebebeb;">

                    <div class="x_content">
                        <center>

                            <h1>Daftar Artikel Penelitian</h1>
                        </center>
                        <br />
                        <a href="<?php echo base_url(); ?>index.php/admin/penelitian_admin/c_penelitian_admin/create_artikel" class="btn btn-success">Tambah Artikel</a>
                        <table id="datatable" style="border:2px solid black; color:black;" class="table table-striped table-bordered">

                            <thead style="border:2px solid black; background-color:#25ff7a;">
                                <tr style="border:2px solid black;">
                                    <th style="border:2px solid black;">No</th>
                                    <th style="border:2px solid black;">Judul</th>
                                    <th style="border:2px solid black;">Status</th>

                                    <th style="border:2px solid black;">Penulis</th>
                                    <th style="border:2px solid black;">Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($artikel as $row) {
                                ?>
                                    <tr style="border:2px solid black;">
                                        <td style="border:2px solid black;" width="5%"><?php echo $no++; ?></td>
                                        <td style="border:2px solid black;"><?php echo $row->judul_artikel; ?></td>
                                        <td style="border:2px solid black;"><?php echo $row->status; ?></td>
                                        <td style="border:2px solid black;"><?php echo $row->penulis; ?></td>
                                        <td style="border:2px solid black;">
                                            <a href="<?php echo base_url(); ?>index.php/admin/penelitian_admin/c_penelitian_admin/edit_artikel/<?php echo $row->id_artikel_penelitian; ?>" class="btn btn-warning">Edit</a>
                                            <a class="btn btn-info" href="<?php echo site_url('c_penelitian/lihat_artikel_penelitian/' . $row->id_artikel_penelitian); ?>">Lihat</a>
                                            <a href="<?php echo base_url(); ?>index.php/admin/penelitian_admin/c_penelitian_admin/delete_artikel/<?php echo $row->id_artikel_penelitian; ?>" class="btn btn-danger">Hapus</a>

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
    <!-- /page content -->