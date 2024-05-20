<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header, .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white">
                        <h3 class="card-title mb-0">Review Order!</h3>
                    </div>
                    <div class="card-body">
                        <?php
                            $selected_order = $_POST['select_all'];
                            $quantity = $_POST['quantity'];
                            $cash = $_POST['cash'];
                            echo "<p><b>Selected Order:</b> $selected_order</p>";
                            echo "<p><b>Quantity:</b> $quantity</p>";
                            echo "<p><b>Cash:</b> $cash</p>";
                        ?>
                        <a href="order.php" class="btn btn-primary btn-block mt-4">Place Another Order</a>
                        <a href="ty.php" class="btn btn-primary btn-block mt-4">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional, for advanced functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
