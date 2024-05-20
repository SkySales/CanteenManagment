<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "canteen_order_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($pass, $hashed_password)) {
            $_SESSION['username'] = $user;
            header("Location: order.php");
        } else {
            header("Location: index.php?error=true");
        }
    } else {
        header("Location: index.php?error=true");
    }

    $stmt->close();
} else {
    header("Location: order.php");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Here</h1>
    <form action="index.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 'true') {
        echo "<p style='color:red;'>Invalid username or password</p>";
    }
    ?>
</body>
</html>
