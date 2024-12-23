<?php
session_start(); 
include "lib/koneksi.php"; 

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama']; 
    $sql = "SELECT * FROM tb_siswa WHERE id = :id AND nama = :nama";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nama', $nama);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC); 
    
    if ($result) {
        $_SESSION['id_siswa'] = $result['id']; 
        $_SESSION['nama'] = $result['nama']; 
        header("Location: index.php");
        exit();
    }else{
        echo "belum terdaftar";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .row {
        margin-top: 80px;
    }
    .card-head h3{
        margin-top: 30px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-head mb-4">
                       <center><h3>Login</h3></center>
                    </div>
                    <div class="card-body">
                      <form action="" method="post">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Nomor Siswa</label>
                                <input type="text" id="form2Example1" class="form-control" name="id" />
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Nama Siswa</label>
                                <input type="text" id="form2Example2" class="form-control" name="nama" />
                            </div>
                    
                            <!-- Submit button -->
                            <center><button data-mdb-ripple-init type="submit" class="btn btn-dark btn-block mb-4">
                                Login</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>