<?php
// session_start(); 
include "lib/koneksi.php";

// // if (!isset($_SESSION['id_siswa'])) {
// //     header("Location: login.php"); 
// //     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php
                    include 'modul/navigasi.php';
                ?>
            </div>
            <div class="col-md-9">
                <?php
                        $page = isset($_GET['page'])?$_GET['page']:null;
                        if(isset($page)) {
                            if ($page=='tambahs') {
                                include "modul/input_siswa.php";
                            }
                            if ($page=='tambaha') {
                                include "modul/input_absensi.php";
                            }
                            if ($page=='daftars') {
                                include "modul/daftar_siswa.php";
                            }
                            if ($page=='edit') {
                                include "modul/edit.php";
                            }
                            if ($page=='hapus') {
                                include "modul/hapus.php";
                            }
                            if ($page=='keluar') {
                                include "modul/logout.php";
                            }
                            if ($page=='daftar') {
                                include "modul/daftar_absensi.php";
                            }
                        }else{
                                include "modul/daftar_absensi.php";
                            }
                            
             ?>
            </div>
        </div>
    </div>
</body>

</html>