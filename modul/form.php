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
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-light vh-100 p-3 sidebar">
            <div class="text-center mb-4">
                <h4>Bringova</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-house me-2"></i> Live Orders</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active"><i class="bi bi-clock-history me-2"></i> Order History</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-box me-2"></i> Products</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-gear me-2"></i> Settings</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4 bg-light">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3>New Order Form</h3>
            </div>
            <form class="bg-white p-4 rounded shadow-sm">
                <div class="mb-3">
                    <label for="customerName" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="customerName" placeholder="Enter customer name">
                </div>
                <div class="mb-3">
                    <label for="orderType" class="form-label">Order Type</label>
                    <select class="form-select" id="orderType">
                        <option value="delivery">Delivery</option>
                        <option value="pickup">Pickup</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Payment Method</label>
                    <select class="form-select" id="paymentMethod">
                        <option value="cash">Cash</option>
                        <option value="card">Credit/Debit Card</option>
                        <option value="ewallet">E-Wallet</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="totalAmount" class="form-label">Total Amount</label>
                    <input type="number" class="form-control" id="totalAmount" placeholder="Enter total amount">
                </div>
                <button type="submit" class="btn btn-primary">Submit Order</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>