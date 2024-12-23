<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .sidebar .nav-link {
        color: #6c757d;
        font-size: 14px;
        margin: 10px 0;
    }

    .sidebar .nav-link.active {
        background-color: #f8f9fa;
        color: #000;
        border-radius: 5px;
    }

    .nav-link i {
        margin-right: 8px;
    }

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
        <!-- Sidebar -->
        <nav class="bg-light vh-100 p-3 sidebar">
            <div class="text-center mb-4">
                <img src="https://via.placeholder.com/40" alt="Logo" class="mb-2">
                <h5>Bringova</h5>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link active"><i class="bi bi-house"></i> Live Orders</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-clock-history"></i> Order History</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-tags"></i> Offers</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-box"></i> Products</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-database"></i> Stock</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-chat-dots"></i> Messages</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-gear"></i> Settings</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4 bg-light">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>Order History</h3>
                <button class="btn btn-sm btn-success">Open For Order</button>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Payment</th>
                        <th>Time Remaining</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#2632</td>
                        <td>Brooklyn Zoe</td>
                        <td>Cash</td>
                        <td>13 min</td>
                        <td>Delivery</td>
                        <td><span class="badge bg-warning">Delivered</span></td>
                        <td>£12.00</td>
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
                    <!-- Tambahkan baris lainnya -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>