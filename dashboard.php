<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

// If logged in, redirect to dashboard.html
header("Location: index.php");
exit;
?>
