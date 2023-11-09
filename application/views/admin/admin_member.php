<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="background-color:#ebebeb;">

          <div class="x_content">
            <center>
              <h1>Daftar Member</h1>
            </center>
            <br />
            <a href="<?php echo base_url(); ?>index.php/admin/c_member/create" class="btn btn-success">Tambah</a>
            <table id="datatable" style="border:2px solid black; color:black;" class="table table-striped table-bordered">

              <thead style="border:2px solid black; background-color:#25ff7a;">
                <tr style="border:2px solid black;">
                  <th style="border:2px solid black;">No</th>
                  <th style="border:2px solid black;">Nomor Induk Anggota</th>
                  <th style="border:2px solid black;">Nama Lengkap</th>
                  <th style="border:2px solid black;">Username</th>
                  <th style="border:2px solid black;">Role</th>
                  <th style="border:2px solid black;">Email</th>
                  <th style="border:2px solid black;">Foto</th>
                  <th style="border:2px solid black;">Nomor Handphone</th>
                  <th style="border:2px solid black;">Jenis Kelamin</th>
                  <th style="border:2px solid black;">Action</th>
                </tr>
              </thead>


              <tbody>
                <?php
                $no = 1;
                foreach ($user as $row) {
                ?>
                  <tr style="border:2px solid black;">
                    <td style="border:2px solid black;" width="5%"><?php echo $no++; ?></td>
                    <td style="border:2px solid black;"><?php echo $row->nia; ?></td>
                    <td style="border:2px solid black;"><?php echo $row->name; ?></td>
                    <td style="border:2px solid black;"><?php echo $row->username; ?></td>
                    <td style="border:2px solid black;"><?php echo $row->role; ?></td>
                    <td style="border:2px solid black;"><?php echo $row->email; ?></td>
                    <td style="border:2px solid black;"> <img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $row->avatar; ?>" /></td>
                    <td style="border:2px solid black;"><?php echo $row->no_hp; ?></td>
                    <td style="border:2px solid black;"><?php echo $row->jenis_kelamin; ?></td>
                    <td style="border:2px solid black;">
                      <a href="<?php echo base_url(); ?>index.php/admin/c_member/edit_member/<?php echo $row->id_user; ?>" class="btn btn-warning">Edit</a>
                      <a href="<?php echo base_url(); ?>index.php/admin/c_member/delete/<?php echo $row->id_user; ?>" class="btn btn-danger">Hapus</a>

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