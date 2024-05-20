<?php
session_start();


if (isset($_POST['username']) && isset($_POST['password'])) {
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canteen Order System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        body {
            background: linear-gradient(to bottom right, #9FECE8, #2989d8);
        }
    </style>
</head>
<body class="bg-light">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your user and password!</p>
                                <form method="post" action="loginnext.php">
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="username" name="username" class="form-control form-control-lg" required>
                                        <label class="form-label" for="username">Username</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                                        <label class="form-label" for="password">Password</label>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                </form>
                            </div>
                            <div>
                                <?php
                                if (isset($_GET['error'])) {
                                    echo "<p style='color: red;'>Invalid username or password.</p>";
                                }
                                ?>
                                <p class="mb-0">Don't have an account? <a href="register.php" class="text-white-50 fw-bold">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
