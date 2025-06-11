<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniUnique - Dashboard</title>
    <link rel="stylesheet" href="../css/auth_pages.css">
    <link rel="stylesheet" href="../css/styles.css">

        
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
                  <li><a href="freelance.html">Freelance</a></li>
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
    <div class="main-content">
        <div class="welcome-section">
            <h1 class="welcome-title">Welcome to UniUnique!</h1>
            <p class="welcome-subtitle">
                Hello <?php echo htmlspecialchars($user_name); ?>! 🎉<br>
                You've successfully logged into your account. We're excited to have you here!
            </p>
        </div>
    </div>
    <!--Content From Home -->
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Your Ultimate Campus Companion</h1>
            <p>Access everything you need for student life in one place - buy and sell essentials, connect with campus services, and explore learning resources.</p>
            <div class="hero-buttons">
                <button class="btn-primary">Get Started</button>
                <button class="btn-secondary">Discover More</button>
            </div>
        </div>
        <div class="hero-image">
            <div class="placeholder-image">
                <img src="https://i.ibb.co/5X5fMqfr/uom.jpg" width="400px" height="300px">
            </div>
        </div>
    </section>

    <!-- Special Offer Banner -->
    <section class="special-offer">
        <div class="offer-content">
            <div class="offer-text">
                <h3>SPECIAL OFFER</h3>
                <h2>Get 25% OFF on select items in the marketplace!</h2>
                <p>Find the best deals on used textbooks, gadgets, and accessories.</p>
                <a href="marketplace.html" class="btn-offer">Explore the Marketplace</a>

            </div>
            <div class="offer-badge">
                <span class="discount">25%</span>
                <span class="off">OFF</span>
            </div>
        </div>
    </section>

    <!-- Marketplace Section -->
    <section id="marketplace" class="marketplace">
        <div class="container">
            <h2>Discover Your Campus Marketplace</h2>
            <p>Easily buy and sell essential student items with our dedicated campus marketplace.</p>
            
            <div class="marketplace-features">
                <div class="feature-card">
                    <h3>Sell Your Unused Items</h3>
                    <p>Turn your old books, electronics, and equipment into cash effortlessly.</p>
                    
                </div>
                <div class="feature-card">
                    <h3>Find Great Deals</h3>
                    <p>Discover affordable second-hand goods from fellow students.</p>
                    
                </div>
                <div class="feature-card">
                    <h3>Hassle-Free Transactions</h3>
                    <p>Seamless, student-to-student buying and selling - no hidden fees!</p>
                </div>
            </div>

        </div>
    </section>

    
    
    <!--List of Services-->
    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <p>Discover the comprehensive range of services we offer to enhance your university experience</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <span>🛒</span>
                    </div>
                    <h3>Marketplace</h3>
                    <p>Buy or sell electronics, books, tools, or any useful item within your university. Safe and student-centered trading platform.</p>
                    <a href="marketplace.html" class="service-link">Visit Marketplace</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <span>🎓</span>
                    </div>
                    <h3>Freelancing</h3>
                    <p>Offer or find freelance services from fellow university students. Whether you're a designer, coder, writer, or tutor—this is your space to collaborate.</p>
                    <a href="freelance.html" class="service-link">Explore Freelance</a>
                </div>
                
                
                <div class="service-card">
                    <div class="service-icon">
                        <span>📅</span>
                    </div>
                    <h3>Get Connected</h3>
                    <p>Stay updated with the latest university markets including all kinds of services. Never miss out on what's happening!</p>
                    <a href="../index.html" class="service-link">Connect with others</a>
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