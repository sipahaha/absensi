<?php
include 'lib/koneksi.php';

// Cek apakah ada ID siswa yang dikirim melalui URL
if (isset($_GET['id_siswa'])) {
    $id_siswa = $_GET['id_siswa'];

    try {
        // Hapus semua absensi untuk siswa tertentu
        $delete_absen_sql = "DELETE FROM tb_absen WHERE id_siswa = ?";
        $delete_absen_stmt = $pdo->prepare($delete_absen_sql);
        $delete_absen_stmt->execute([$id_siswa]);

        // Hapus siswa dari tb_siswa
        $delete_siswa_sql = "DELETE FROM tb_siswa WHERE id = ?";
        $delete_siswa_stmt = $pdo->prepare($delete_siswa_sql);
        $delete_siswa_stmt->execute([$id_siswa]);

        // Redirect setelah penghapusan
        header("Location: ?page=daftar");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "ID siswa tidak ditemukan.";
    exit;
}
?>