<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Navigasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .sidebar-header img {
        width: 50px;
        height: 50px;
    }

    .nav-link.active {
        background-color: #0d6efd;
        border-radius: 5px;
    }

    .nav-link i {
        margin-right: 10px;
    }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-dark text-white vh-100 p-3" style="width: 250px;">
            <div class="sidebar-header text-center mb-3">
                <img src="asset/img/user1.png" class="rounded-circle mb-2" alt="User Avatar">
                <h5>Agus Susanto</h5>
                <p>Admin</p>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white active">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">
                        <i class="bi bi-file-text"></i> Rekap
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">
                        <i class="bi bi-calendar-check"></i> Izin
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">
                        <i class="bi bi-calendar3"></i> Jadwal
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="bi bi-database"></i> Data Master
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="p-3 flex-grow-1">
            <h1>E-Absensi</h1>
            <p>Konten utama di sini...</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>