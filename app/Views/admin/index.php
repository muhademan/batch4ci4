<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Halaman Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Berita </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <br>
        <a href="<?= base_url('admin/add_data');  ?>" class="btn btn-primary">Tambah Data</a>
        <br><br>


        <table class='table'>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
            <?php
            $no = 1;
            foreach ($berita as $resultberita) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $resultberita['Judul'] ?></td>
                    <td>##</td>
                    <td><a href="<?= base_url("admin/delete/$resultberita[IdBerita]") ?>" onclick="return confirm('yakin ingin menghapus data ?')" class="btn btn-sm btn-danger">Delete</a>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

</html>