<?php
include 'lib/koneksi.php';


    $sql = "SELECT * FROM tb_siswa"; 
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
                <h3>Daftar Data Siswa</h3>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
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
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown">
                                    Actions
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Refund</a></li>
                                    <li><a class="dropdown-item" href="#">Message</a></li>
                                </ul>
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