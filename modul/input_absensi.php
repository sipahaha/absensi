<?php 
include 'lib/koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        $id_siswa = $_POST['id_siswa']; 
        $tanggal = $_POST['tanggal']; 
        $status = $_POST['status']; 
        $sql = "INSERT INTO tb_absen (id_siswa, tanggal, status) VALUES (:id_siswa, :tanggal, :status) "; 
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(['id_siswa' => $id_siswa, 'tanggal' => $tanggal, 'status' => $status ]); 
        header('Location: ?page=daftar'); 
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    form {
        max-width: 600px;
        margin: auto;
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <div class="d-flex">
        <div class="flex-grow-1 p-4 bg-light">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3>Tambah Absensi Siswa</h3>
            </div>
            <form class="bg-white p-4 rounded shadow-sm" method="POST">
                <div class="mb-3">
                    <label for="customerName" class="form-label">Nama Siswa :</label>
                    <select name="id_siswa" id="id_siswa" class="form-select">
                        <option value="">Pilih Nama Siswa</option>
                        <?php
                                        $sql = $pdo->query("SELECT*FROM tb_siswa");
                                        foreach($sql as $view){
                                            echo"<option value='".$view['id']."'>".$view['nama']."</option>";
                                            }                      
                                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="orderType" class="form-label">Tanggal :</label>
                    <input type="datetime-local" id="tanggal" class="form-control" name="tanggal" required>
                </div>
                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Keterangan</label>
                    <select class="form-select" name="status" id="status">
                        <option value="hadir">Hadir</option>
                        <option value="sakit">Sakit</option>
                        <option value="izin">Izin</option>
                        <option value="alfa">Alfa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Input Data</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
