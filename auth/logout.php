<?php
session_start();
session_unset();     // Unset all session variables
session_destroy();   // Destroy the session

// Unset all session variables
$_SESSION = array();

// Destroy the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Delete remember me cookie
if (isset($_COOKIE['remember_user'])) {
    setcookie('remember_user', '', time() - 3600, "/");
}

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: ../pages/form.html");
exit();
?>