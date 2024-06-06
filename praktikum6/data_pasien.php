<?php
require_once 'koneksi.php';

$query = "SELECT pasien.*, kelurahan.nama as nama_kelurahan
            FROM pasien
            LEFT JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id_kelurahan";
$pasiens = $dbh->query($query);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Data pasien puskesmas sukaranti</h2>
        <a href="create.php" class="btn btn-primary"> Tambah Data Pasien</a>
        <table class="table table-bordered">
            <tr class="table-warning">
                <th>No</th>
                <th>Kode Pasien</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kelurahan</th>
                <th>Aksi</th>
                
            </tr>
            <?php 
            $no = 1;
            foreach($pasiens as $pasiens){ ?>
            <tr>

            <td><?= $no++; ?></td>
            <td><?= $pasiens['kode']; ?></td>
            <td><?= $pasiens['nama']; ?></td>
            <td><?= $pasiens['gender']; ?></td>
            <td><?= $pasiens['tmp_lahir']; ?></td>
            <td><?= $pasiens['tgl_lahir']; ?></td>
            <td><?= $pasiens['nama_kelurahan']; ?></td>
            <td>
            <a href="edit.php?id=<?= $pasiens['id_pasien'];?>" class="btn btn-primary">Edit</a>
            <a href="proses.php?id=<?= $pasiens['id_pasien'];?>" class="btn btn-danger">Hapus</a>
            </td>

            </tr>
            <?php } ?>
        </table>

    </div>
</body>
</html>