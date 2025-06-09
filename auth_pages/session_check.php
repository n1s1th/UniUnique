<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to login page
    header("Location: auth/login.php");
    exit();
}

// Get user information
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'User';
$user_email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : '';

// Check if this is a fresh login (show success popup)
$show_success_popup = false;
if (isset($_GET['login']) && $_GET['login'] == 'success') {
    $show_success_popup = true;
}
?>