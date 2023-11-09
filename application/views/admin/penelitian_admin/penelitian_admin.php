<!-- page content -->
<div class="right_col" role="main">
  <div class="">


    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div style="background-color:#ebebeb;" class="x_panel">
          <div class="col-md-12 col-sm-9 col-xs-12">
            <div class="x_content">
              <?php if ($this->session->flashdata('success_register') != '') {
                echo '<div class="alert alert-info" role="alert">';
                echo $this->session->flashdata('success_register');
                echo '</div>';
              } ?>

              <center>
                <h1>Daftar Event Penelitian</h1>
              </center>
              <a href="<?php echo base_url(); ?>index.php/admin/penelitian_admin/c_penelitian_admin/create_event" class="btn btn-success">Tambah Event</a>
              <table id="datatable" style="border:2px solid black; color:black;" class="table table-striped table-bordered">

                <thead style="border:2px solid black; background-color:#25ff7a;">
                  <tr style="border:2px solid black;">
                    <th style="border:2px solid black;">No</th>
                    <th style="border:2px solid black;">Nama Event</th>
                    <th style="border:2px solid black;">Peserta</th>
                    <th style="border:2px solid black;">Tanggal Pelaksanaan</th>

                    <th style="border:2px solid black;">Kuota</th>
                    <th style="border:2px solid black;">Aksi</th>

                  </tr>
                </thead>


                <tbody>
                  <?php
                  $no = 1;
                  foreach ($penelitian as $row) {
                  ?>
                    <tr style="border:2px solid black;">
                      <td style="border:2px solid black;" width="5%"><?php echo $no++; ?></td>
                      <td style="border:2px solid black;"><?php echo $row->nama_agenda; ?></td>
                      <td style="border:2px solid black;"><?php echo $row->peserta; ?></td>

                      <td style="border:2px solid black;"><?php echo date('d-F-Y', strtotime($row->tanggal_pelaksanaan)); ?></td>
                      <td style="border:2px solid black;"><a class="btn btn-link" href="<?php echo site_url('admin/penelitian_admin/c_penelitian_admin/daftar_semua_peserta/' . $row->id_penelitian) ?>"><?php echo $row->kuota; ?></a></td>
                      <td style="border:2px solid black;">
                        <a class="btn btn-info" href="<?php echo site_url('admin/penelitian_admin/c_penelitian_admin/edit_event/' . $row->id_penelitian); ?>">Kelola</a>
                        <a class="btn btn-warning" href="<?php echo site_url('c_penelitian/lihat_event_penelitian/' . $row->id_penelitian); ?>">Lihat</a>
                        <a class="btn btn-danger" href="<?php echo site_url('admin/penelitian_admin/c_penelitian_admin/delete_event/' . $row->id_penelitian); ?>">Hapus</a>
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