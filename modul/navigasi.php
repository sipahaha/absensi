<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    .sidebar .nav-link {
        font-size: 16px;
        margin: 8px 0;
        color: #6c757d;
    }

    .sidebar .nav-link.active {
        color: #fff;
        background-color: #0d6efd;
        border-radius: 5px;
    }

    .sidebar .nav-link:hover {
        background-color: #e9ecef;
        border-radius: 5px;
    }

    .nav-link i {
        font-size: 18px;
    }

    form {
        max-width: 600px;
        margin: auto;
    }

    .logo b {
        margin-right: 79px;
        float: right;
        margin-top: 0px;
        font-size: 18px
    }

    .nav-item i {
        margin-inline-end: 20px;
    }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-light vh-100 p-3 sidebar">
            <div class="logo mb-4">
                <img src="asset/img/logo_gm2.png" alt="" width="50" height="50">
                <b>Generasi <br> Madani</b>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="?page=daftar" class="nav-link active"><i class="bi bi-archive"></i>Daftar Absen Siswa</a>
                </li>
                <li class="nav-item">
                    <a href="?page=tambaha" class="nav-link "><i class="bi bi-plus"></i>Tambah Absen Siswa</a>
                </li>
                <li class="nav-item">
                    <a href="?page=daftars" class="nav-link"><i class="bi bi-collection"></i>Daftar Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a href="?page=tambahs" class="nav-link"><i class="bi bi-file-earmark-person"></i>Tambah Data Siswa</a>
                </li>
            </ul>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>