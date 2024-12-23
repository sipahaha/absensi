<?php
include 'lib/koneksi.php';

// Cek apakah ada ID yang dikirim melalui URL
    $ic = $_GET['id'];
    $sql = "SELECT*FROM tb_siswa WHERE id='$ic'";
    $stmt = $pdo->query($sql);
    $stmt->execute();

    $sql_siswa = "SELECT*FROM tb_absen";
    $stmt = $pdo->query($sql_siswa);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC); 


// Proses update jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $tanggal = $_POST['tanggal'];

    // Update data absensi
    $update_sql = "UPDATE tb_absen SET  tanggal = '$tanggal' , status = '$status' WHERE id = '$id' ";
    $update_stmt = $pdo->query($update_sql);
    $update_stmt->execute([$tanggal, $status, $id]);

    header("Location: ?page=daftar"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Update Absensi</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= date('Y-m-d', strtotime($row['tanggal'])) ?>" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Keterangan</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="hadir" <?= $row['status'] == 'hadir' ? 'selected' : '' ?>>Hadir</option>
                    <option value="sakit" <?= $row['status'] == 'sakit' ? 'selected' : '' ?>>Sakit</option>
                    <option value="izin" <?= $row['status'] == 'izin' ? 'selected' : '' ?>>Izin</option>
                    <option value="alfa" <?= $row['status'] == 'alfa' ? 'selected' : '' ?>>Alfa</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="?page=daftar" class="btn btn-secondary">Batal</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>