<?php
// Include the database connection
include('db.php');
session_start(); // Start session to track user login

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the username exists
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id']; // Store user id in session
            $_SESSION['username'] = $row['username']; // Store username in session
            header("Location: dashboard.php"); // Redirect to dashboard
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No such user found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="font-family: Arial, sans-serif; background: linear-gradient(135deg, #f4f4f9, #e0d0b1); display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; width: 300px;">
        <h2 style="margin-bottom: 20px; color: #333;">Login</h2>
        <form method="post" action="login.php">
            <input type="text" name="username" placeholder="Username" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #d0a772; border-radius: 5px; font-size: 16px;"><br>
            <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #d0a772; border-radius: 5px; font-size: 16px;"><br>
            <button type="submit" style="width: 100%; background: #d0a772; color: white; border: none; padding: 10px; border-radius: 5px; font-size: 18px; cursor: pointer; transition: 0.3s;">Login</button>
        </form>
    </div>
</body>
</html>
