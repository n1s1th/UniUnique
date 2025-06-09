<?php
session_start();

// Database configuration
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "uniunique_db"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    } else {
        // Prepare and execute query to check user credentials
        $stmt = $conn->prepare("SELECT id, fullname, email, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            
            // Verify password (assuming passwords are hashed with password_hash())
            if (password_verify($password, $user['password'])) {
                // Login successful
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['fullname'];
                $_SESSION['user_email'] = $user['email'];
                
                // Set remember me cookie if checked
                if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
                    $cookie_value = base64_encode($user['id'] . ':' . $user['email']);
                    setcookie('remember_user', $cookie_value, time() + (86400 * 30), "/"); // 30 days
                }
                
                // Redirect to index2.html
                header("Location: index2.html");
                exit();
            } else {
                $error = "Invalid email or password";
            }
        } else {
            $error = "Invalid email or password";
        }
        
        $stmt->close();
    }
}

// Handle signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm-password'])) {
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    
    // Validate inputs
    if (empty($fullname)) {
        $error = "Full name is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    } elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters long";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $error = "Email already exists";
        } else {
            // Hash password and insert new user
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            $stmt = $conn->prepare("INSERT INTO users (fullname, email, password, created_at) VALUES (?, ?, ?, NOW())");
            $stmt->bind_param("sss", $fullname, $email, $hashed_password);
            
            if ($stmt->execute()) {
                // Registration successful, redirect to login page
                header("Location: login.php?success=1");
                exit();
            } else {
                $error = "Registration failed. Please try again.";
            }
        }
        
        $stmt->close();
    }
}

// Check if user is already logged in (for remember me functionality)
if (isset($_COOKIE['remember_user']) && !isset($_SESSION['user_id'])) {
    $cookie_data = base64_decode($_COOKIE['remember_user']);
    list($user_id, $email) = explode(':', $cookie_data);
    
    $stmt = $conn->prepare("SELECT id, fullname, email FROM users WHERE id = ? AND email = ?");
    $stmt->bind_param("is", $user_id, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['fullname'];
        $_SESSION['user_email'] = $user['email'];
    }
    
    $stmt->close();
}

$conn->close();

// If there's an error, redirect back to the form with error message
if (isset($error)) {
    $referring_page = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'login.html';
    header("Location: " . $referring_page . "?error=" . urlencode($error));
    exit();
}
?>