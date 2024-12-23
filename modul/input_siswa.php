<?php 
include 'lib/koneksi.php';
 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
        $id = $_POST['id']; 
        $nama = $_POST['nama']; 
        $kelas = $_POST['kelas']; 
        $sql = "INSERT INTO tb_siswa ( id, nama, kelas) VALUES ( :id, :nama, :kelas)"; 
        $stmt = $pdo->prepare($sql); 
        $stmt->execute(['id' => $id, 'nama' => $nama,  'kelas' => $kelas]); 
        header('Location: ?page=daftars');
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
                <h3>Tambah Data Siswa</h3>
            </div>
            <form class="bg-white p-4 rounded shadow-sm" method="POST">
            <input type="hidden" class="form-control" id="id" name="id">
                <div class="mb-3">
                    <label for="customerName" class="form-label">Nama Siswa :</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas :</label>
                    <select name="kelas" id="kelas" class="form-select">
                        <option value="">Pilih Kelas</option>
                        <?php
                            $sql = $pdo->query("SELECT*FROM tb_kelas");
                            foreach($sql as $view){
                                echo"<option value='".$view['kelas']."'>".$view['kelas']."</option>";
                            }                      
                            ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Input Data</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>