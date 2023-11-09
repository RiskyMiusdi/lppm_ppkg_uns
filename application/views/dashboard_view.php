<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Sederhana</title>
    <!-- Tambahkan referensi Bootstrap dan CSS lainnya di sini -->
</head>

<body>
    <div class="container">
        <h1>Dashboard Sederhana</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dashboard_data as $data) { ?>
                    <tr>
                        <td><?php echo $data->username; ?></td>
                        <td><?php echo $data->role; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>