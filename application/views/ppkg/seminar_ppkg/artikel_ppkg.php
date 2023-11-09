<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="background-color:#ebebeb;">

                    <div class="x_content">
                        <center>
                            <?php if ($this->session->flashdata('success_artikel') != '') {
                                echo '<div class="alert alert-info" role="alert">';
                                echo $this->session->flashdata('success_artikel');
                                echo '</div>';
                            } ?>
                            <h1>Daftar Artikel Seminar</h1>
                        </center>
                        <br />
                        <a href="<?php echo base_url(); ?>index.php/ppkg/seminar_ppkg/c_seminar_ppkg/create_artikel" class="btn btn-success">Tambah Artikel</a>
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
                                            <?php if ($row->status == "Menunggu") { ?>
                                                <a disabled class="btn btn-info">Lihat</a>
                                            <?php } ?>
                                            <?php if ($row->status == "Publis") { ?>
                                                <a class=" btn btn-info" href="<?php echo site_url('c_seminar/lihat_artikel_seminar/' . $row->id_artikel_seminar); ?>">Lihat</a>
                                            <?php } ?>

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