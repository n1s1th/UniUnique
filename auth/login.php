<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/auth.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">UniUnique</div>
        </div>
        <h1>Welcome Back</h1>
        
        <?php if (isset($_GET['error'])): ?>
            <div class="error-message" style="color: red; text-align: center; margin-bottom: 20px;">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>
        
        <?php if (isset($_GET['success'])): ?>
            <div class="success-message" style="color: green; text-align: center; margin-bottom: 20px;">
                Registration successful! Please log in.
            </div>
        <?php endif; ?>
        
        <form id="login-form" method="POST" action="connect.php">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="footer">
            <a href="forgot-password.html">Forgot Password?</a>
            <a href="signup.php">Create Account</a>
        </div>
    </div>
    <script src="../js/validation.js"></script>
</body>
</html>