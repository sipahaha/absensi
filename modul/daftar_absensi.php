<?php 
include 'lib/koneksi.php';


    $sql = "SELECT tb_absen.id, tb_siswa.id, tb_siswa.nama, tb_siswa.kelas, tb_absen.tanggal, tb_absen.status  
    FROM tb_absen JOIN tb_siswa ON tb_absen.id_siswa = tb_siswa.id"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .table thead {
        background-color: #f8f9fa;
    }

    .table tbody tr {
        vertical-align: middle;
    }

    . .table tbody td {
        float: center;
    }

    .badge {
        font-size: 12px;
    }
    </style>
</head>

<body>
    <div class="d-flex">

        <!-- Main Content -->
        <div class="flex-grow-1 p-4 bg-light">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>Daftar Absensi Siswa</h3>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                            $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC); 
                            if (count($data) > 0) { 
                                foreach ($data as $row) { 
                     ?>
                <tbody>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['kelas']?></td>
                        <td><?=$row['tanggal']?></td>
                        <td><?=$row['status']?></td>
                        <td>
                            <div class="aksi">
                                <button class="btn btn btn-warning"><a href="?page=edit&id=<?=$row['id']?>"
                                        style=" color: white;"><i class="bi bi-pencil-square"
                                            style="font-size: 18px;"></i></a></button>
                                <button class="btn btn-danger">
                                    <a href="?page=hapus&id=<?=$row['id']?>" style="color: white;">
                                        <i class="bi bi-trash3" style="font-size: 18px;"></i>
                                    </a>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php 
                     } 
                     } 
                     ?>
                    <!-- Tambahkan baris -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>