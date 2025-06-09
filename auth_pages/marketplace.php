<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniUnique - Dashboard</title>
    <link rel="stylesheet" href="../css/auth_pages.css">
    <link rel="stylesheet" href="../css/marketplace.css">

        
</head>
<body>
    <!-- Header with user profile -->
    <div class="header">
        <div class="logo">UniUnique</div>

        <!--home.html-->
          <div class="nav-container">
              <ul class="nav-menu">
                  <li><a href="home_uom.php">Home</a></li>
                  <li><a href="marketplace.php">Marketplace</a></li>
                  <li><a href="../pages/freelance.html">Freelance</a></li>
                  <li><a href="../pages/aboutus.html">About Us</a></li>
              
              <div class="hamburger">
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
          </div>

        <div class="user-profile">
            <div class="user-avatar">
                <?php echo strtoupper(substr($user_name, 0, 2)); ?>
            </div>
            <div class="user-info">
                <div class="user-name"><?php echo htmlspecialchars($user_name); ?></div>
                <div class="user-email"><?php echo htmlspecialchars($user_email); ?></div>
            </div>
            <div class="user-dropdown">
                <a href="#" class="dropdown-item">Profile Settings</a>
                <a href="#" class="dropdown-item">Dashboard</a>
                <a href="#" class="dropdown-item">Help & Support</a>
                <a href="auth/logout.php" class="dropdown-item">Logout</a>
            </div>
        </div>
    </div>

    <!-- Main content-->
    
    <!--Content From Home -->
    <main>
    <section class="category">
      <h2>📱 Electronic Devices</h2>
      <div class="product-grid">
        <div class="product-card">
          <img src="https://i.ibb.co/S7Gq0fj2/arduino-kit.jpg" alt="Arduino Kit" />
          <h3>Arduino Starter Kit</h3>
          <p>Includes Uno board, cables, sensors.</p>
          <span>Rs 7,500</span>
        </div>

        <div class="product-card">
          <img src="https://i.ibb.co/7tjgqD2T/casio-calculator.jpg" alt="Scientific Calculator" />
          <h3>Casio Scientific Calculator</h3>
          <p>Perfect for engineering/math students.</p>
          <span>Rs 4,000</span>
        </div>

        <div class="product-card">
          <img src="https://i.ibb.co/mCNX5mSc/nc-headphones.jpg" alt="Headphones" />
          <h3>Noise-Canceling Headphones</h3>
          <p>Gently used, ideal for study.</p>
          <span>Rs 10,000</span>
        </div>
      </div>
    </section>

    <section class="category">
      <h2>📚 Academic Materials</h2>
      <div class="product-grid">
        <div class="product-card">
          <img src="https://i.ibb.co/GvTd76ms/physics-book.jpg" alt="Textbooks" />
          <h3>Physics Textbook Set</h3>
          <p>Includes volumes 1–3, secondhand.</p>
          <span>Rs 5,000</span>
        </div>

        <div class="product-card">
          <img src="https://i.ibb.co/35q9RTm7/csnotes.png" alt="Lecture Notes" />
          <h3>Computer Science Notes</h3>
          <p>Handwritten notes and practice questions.</p>
          <span>Rs 1,500</span>
        </div>

        <div class="product-card">
          <img src="https://i.ibb.co/PvBt68Q5/stationery-pack.jpg" alt="Stationery" />
          <h3>Stationery Pack</h3>
          <p>Highlighters, pens, index cards.</p>
          <span>Rs 500</span>
        </div>
      </div>
    </section>
  </main>



   
<!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>UniUnique</h3>
                    <p>Your all-in-one platform for an effortless university experience.</p>
                    <div class="contact-info">
                        <p> Bandaranayake Mawatha, Moratuwa 10400</p>
                        <p>0112 640 051</p>
                        <p>https://uom.lk/</p>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="home_uom.php">Home</a></li>
                        <!--<li><a href="#">Contact</a></li>-->
                        <li><a href="../pages/help.html">Help</a></li>
                        <li><a href="../pages/help.html">FAQ</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="../pages/marketplace.html">Marketplace</a></li>
                        <li><a href="../pages/freelance.html">Freelance</a></li>
                        <!--<li><a href="#accommodation">Accommodation</a></li>
                        <li><a href="#events">Events</a></li>-->
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 UniUnique. All rights reserved.</p>
                <div class="footer-links">
                    <a href="https://policies.google.com/privacy?hl=en-US">Privacy Policy</a>
                    <a href="https://policies.google.com/terms?hl=en-US">Terms of Service</a>
                    <a href="https://policies.google.com/technologies/cookies?hl=en-US">Cookies Settings</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/script.js"></script>



    
    <!-- Success Popup -->
    <?php if ($show_success_popup): ?>
    <div class="success-popup-overlay show" id="successOverlay"></div>
    <div class="success-popup show" id="successPopup">
        <div class="success-icon">✓</div>
        <div class="success-title">Login Successful!</div>
        <div class="success-message">
            Welcome back, <?php echo htmlspecialchars($user_name); ?>!<br>
            You have successfully logged into your UniUnique account.
        </div>
        <button class="close-popup" onclick="closeSuccessPopup()">Continue</button>
    </div>
    <?php endif; ?>
    
    <script>
        // Close success popup
        function closeSuccessPopup() {
            const popup = document.getElementById('successPopup');
            const overlay = document.getElementById('successOverlay');
            
            if (popup && overlay) {
                popup.classList.remove('show');
                overlay.classList.remove('show');
                
                // Remove the login=success parameter from URL
                const url = new URL(window.location);
                url.searchParams.delete('login');
                window.history.replaceState({}, document.title, url.pathname);
            }
        }

        // Auto close popup after 5 seconds
        <?php if ($show_success_popup): ?>
        setTimeout(closeSuccessPopup, 5000);
        <?php endif; ?>

        // Close popup when clicking overlay
        document.addEventListener('DOMContentLoaded', function() {
            const overlay = document.getElementById('successOverlay');
            if (overlay) {
                overlay.addEventListener('click', closeSuccessPopup);
            }
        });
    </script>
</body>
</html>