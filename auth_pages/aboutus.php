<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniUnique - Dashboard</title>
    <link rel="stylesheet" href="../css/auth_pages.css">
    <link rel="stylesheet" href="../css/aboutus.css">

        
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
                  <li><a href="aboutus.php">About Us</a></li>
              
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
<section class="our-story">
        <div class="container">
            <h2>Our Story</h2>
            <p>UniUnique was born out of a simple idea: to create a vibrant, student-centric platform that simplifies university life. Founded by a group of passionate students at the University of Moratuwa, we understand the challenges of balancing academics, finances, and campus living. Our mission is to connect students with opportunities to buy, sell, freelance, and find accommodation, all while fostering a sense of community.</p>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision">
        <div class="container">
            <div class="mission-vision-grid">
                <div class="mission-card">
                    <h3>Our Mission</h3>
                    <p>To empower students by providing a seamless platform for freelancing, trading, and accessing essential campus services, making university life easier and more connected.</p>
                </div>
                <div class="vision-card">
                    <h3>Our Vision</h3>
                    <p>To become the ultimate campus companion for students worldwide, fostering a global community where students thrive through collaboration and opportunity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why UniUnique Section -->
    <section class="why-uniunique">
        <div class="container">
            <h2>Why Choose UniUnique?</h2>
            <div class="why-grid">
                <div class="why-card">
                    <h3>Student-Centric</h3>
                    <p>Designed by students, for students, addressing the unique needs of university life.</p>
                </div>
                <div class="why-card">
                    <h3>Freelancing Hub</h3>
                    <p>Connect with skilled student freelancers for academic, creative, or technical projects.</p>
                </div>
                <div class="why-card">
                    <h3>Seamless Marketplace</h3>
                    <p>Buy and sell textbooks, gadgets, and more with trusted peers on campus.</p>
                </div>
                <div class="why-card">
                    <h3>Community Driven</h3>
                    <p>Join a vibrant community of students sharing resources, events, and opportunities.</p>
                </div>
            </div>
        </div>
    </section>




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