<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
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
        .list-group-item {
            font-weight: bold;
        }
        .form-control {
            border-radius: 0.25rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-title {
            flex: 1;
            text-align: center;
            margin-bottom: 0;
        }
        .logout-form {
            margin-left: auto;
        }
    </style>
</head>
<body>

    <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
            session_destroy();
            header("Location: index.php");
            exit;
        }
    ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">Order Form</h3>
                        <form method="post" class="logout-form">
                            <button type="submit" name="logout" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <form action="orderna.php" method="post">
                            <div class="form-group">
                                <label><b>Menu</b></label>
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Chicken Inasal <span class="badge badge-primary badge-pill">180 PHP</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Ice Cream <span class="badge badge-primary badge-pill">50 PHP</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Fried Rice <span class="badge badge-primary badge-pill">25 PHP</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="form-group">
                                <label for="select_all"><b>Choose your order:</b></label>
                                <select class="form-control" id="select_all" name="select_all">
                                    <option value="Chicken Inasal">Chicken Inasal</option>
                                    <option value="Ice Cream">Ice Cream</option>
                                    <option value="Garlic Fried Rice">Garlic Fried Rice</option>
                                </select>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cash">Cash:</label>
                                    <input type="number" class="form-control" id="cash" name="cash" min="0" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Submit Order</button>
                        </form>
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
