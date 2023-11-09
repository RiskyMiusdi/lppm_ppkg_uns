<!DOCTYPE html>
<html>

<head>
    <title>Data Anggota</title>
    <style type="text/css">
        thead td {
            padding: 5px;
            background-color: #4cb1d8;
            text-align: center;
        }
    </style>
</head>
<h2>Data Anggota</h2>

<body>
    <table class="test" border="1">
        <thead>
            <td>Id</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Hp</td>
        </thead>
        <?php
        foreach ($anggota as $rows) {
        ?>
            <tr>
                <td><?php echo $rows->id_anggota ?></td>
                <td><?php echo $rows->nama ?></td>
                <td><?php echo $rows->jenis_kelamin ?></td>
                <td><?php echo $rows->alamat ?></td>
                <td><?php echo $rows->no_hp ?></td>
            </tr>
        <?php } ?>
    </table>
    <h2>Data Simpanan</h2>
    <table class="test" border="1">
        <thead>
            <td>Id Simpanan</td>
            <td>Id Anggota</td>
            <td>Jumlah Simpanan</td>
            <td>Tanggal</td>
        </thead>
        <?php
        foreach ($simpanan as $rows) {
        ?>
            <tr>
                <td><?php echo $rows->id_simpanan ?></td>
                <td><?php echo $rows->id_anggota ?></td>
                <td><?php echo $rows->jumlah_simpanan ?></td>
                <td><?php echo $rows->tgl_simp ?></td>
            </tr>
        <?php } ?>
    </table>
    <h2>Data Join Anggota dan Simpanan</h2>
    <table class="test" border="1">
        <thead>
            <td>Id</td>
            <td>Nama</td>
            <td>Jumlah Simpanan</td>
            <td>Tanggal</td>
        </thead>
        <?php
        foreach ($join_anggota_simpanan as $rows) {
        ?>
            <tr>
                <td><?php echo $rows->id_anggota ?></td>
                <td><?php echo $rows->nama ?></td>
                <td><?php echo $rows->jumlah_simpanan ?></td>
                <td><?php echo $rows->tgl_simp ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>