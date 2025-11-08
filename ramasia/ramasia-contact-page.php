<!DOCTYPE html>
<html lang="en" class="ra-has-navbar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Ramasia</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" type="image/png" href="../image-source/favicon.png">
  <link rel="stylesheet" href="./css/ramasia-contact-page.css">
  <!-- Shared Navbar Styles -->
  <link rel="stylesheet" href="./css/ramasia-navbar.css">
  <!-- Modal Styles -->
  <link rel="stylesheet" href="./css/ramasia-modal.css">
  <!-- Shared Navbar JavaScript -->
  <script defer src="../ramasia-navbar.js"></script>
</head>
<body>

  <!-- Global Navbar -->
    <?php
    include_once './components/navbar.php';
    ?>

  <!-- ===========================
       HERO SECTION
       =========================== -->
  <section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div class="get-in-touch">Get in touch</div>
      <h1>Contact Us</h1>
      <div class="subtitle"><img src="../image-source/transparent-ramasialredlogo-navbar -.png" alt="RAMASIA Logo"></div>
      
      <!-- Contact Cards -->
      <div class="card-container">
        <!-- Address Card -->
        <div class="contact-card">
          <i class="fas fa-map-marker-alt"></i>
          <h3>Address</h3>
          <p>12th Floor, Suite 1208 Ermita Center Building 1350 Roxas BLVD, Ermita Manila</p>
        </div>

        <!-- Call Us Card -->
        <div class="contact-card">
          <i class="fas fa-phone-alt"></i>
          <h3>Call Us</h3>
          <p>+639498005763</p>
          <p>+639698604299</p>
        </div>

        <!-- Email Card -->
        <div class="contact-card">
          <i class="fas fa-envelope"></i>
          <h3>Email</h3>
          <p><a href="mailto:ramasiaintl@gmail.com">ramasiaintl@gmail.com</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===========================
       NATIONWIDE BRANCHES SECTION
       =========================== -->
  <section class="nationwide-branches">
    <div class="container">
      <h2>NATIONWIDE BRANCHES</h2>
      <p class="subtitle">RAMASIA INTERNATIONAL MANPOWER SERVICES INC</p>
      
      <div class="branches-grid">
        <!-- Cebu Branch -->
        <div class="branch-card">
          <div class="branch-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>CEBU</h3>
          <p>Room 202 2nd Floor, Hotel de Mercedes, Pelaez Street, Cebu</p>
        </div>

        <!-- Iloilo Branch -->
        <div class="branch-card">
          <div class="branch-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>ILOILO</h3>
          <p>2nd Floor, ATB Building #28 Ledesma St, Iloilo City</p>
        </div>

        <!-- Pagadian Branch -->
        <div class="branch-card">
          <div class="branch-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>PAGADIAN</h3>
          <p>Unit 2A 2nd Floor Casino Arcade Rizal, Rizal Avenue, Pagadian C.</p>
        </div>

        <!-- Davao Branch -->
        <div class="branch-card">
          <div class="branch-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>DAVAO</h3>
          <p>2nd Floor DACI Bldg, Artiaga St. Brgy. 38-D, Quezon Boulevard</p>
        </div>

        <!-- General Santos Branch -->
        <div class="branch-card">
          <div class="branch-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>GENERAL SANTOS CITY</h3>
          <p>3 Royeca P. Arcenas Corner Asin Village, Brgy 01 Gen General</p>
        </div>

        <!-- Cagayan De Oro Branch -->
        <div class="branch-card">
          <div class="branch-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>CAGAYAN DE ORO</h3>
          <p>2F/3F CAP Ventures Bldg, Corner Tiano Del Pilar St, Cagayan De Oro City</p>
        </div>

        <!-- Tacloban Branch -->
        <div class="branch-card">
          <div class="branch-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>TACLOBAN</h3>
          <p>Door A room 104, #3417 Mendoza Realty Development Bldg, Fatima Village</p>
        </div>

        <!-- Aklan Branch -->
        <div class="branch-card">
          <div class="branch-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>AKLAN</h3>
          <p>Casa Antigua Aklan Bldg, Archbishop Reyes St., Poblacion, Kalibo, Aklan</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===========================
       CAN'T FIND US SECTION
       =========================== -->
  <section class="cant-find-us">
    <div class="container">
      <div class="cant-find-grid">
        <div class="cant-find-info">
          <h2>CAN'T FIND US?</h2>
          <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            <p>12th Floor, Suite 1208 Ermita Center Building 1350 Roxas BLVD, Ermita Manila</p>
          </div>
          <div class="info-item">
            <i class="fas fa-phone-alt"></i>
            <p>+639498005763 / +639698604299</p>
          </div>
          <div class="info-item">
            <i class="fas fa-envelope"></i>
            <p>ramasiaintl@gmail.com</p>
          </div>
          <a href="ramasia-about-page.html" class="more-about-btn">More About Us</a>
        </div>
          <div class="map-placeholder">
            <!-- Google Maps Embed non-interactive; becomes interactive on first click -->
            <div class="map-embed is-disabled" id="gmap-container" aria-label="Map to Ramasia International office">
              <iframe
                id="gmap-iframe"
                title="Ramasia International Office Location"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps?q=12th%20Floor%2C%20Suite%201208%20Ermita%20Center%20Building%2C%201350%20Roxas%20Blvd%2C%20Ermita%2C%20Manila%2C%20Philippines&output=embed">
              </iframe>
            </div>
          </div>
      </div>
    </div>
  </section>

 <!-- ===========================
       FOOTER SECTION
       =========================== -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <img src="../image-source/transparent-ramasialogo-navbar.png" alt="Ramasia Logo" class="footer-logo-img">
        </div>
        <div class="footer-info">
          <div class="footer-address">
            <p>
              <strong>RAMASIA INTERNATIONAL</strong><br>
              12th Floor, Suite 1208 Ermita Center/Building 1350 Roxas BLVD, Ermita Manila
            </p>
          </div>
          <div class="footer-contact">
            <p>+639498005763 / +639698604299</p>
            <p>ramasiaintl@gmail.com</p>
          </div>
        </div>
        <div class="footer-links">
          <div class="footer-nav">
            <a href="ramasia-landing-page.html">Home</a>
            <a href="ramasia-about-page.html">About us</a>
            <a href="#">Job Seeker</a>
            <a href="ramasia-contact-page.html">Contact</a>
            <a href="#">Latest Jobs</a>
          </div>
          <div class="footer-social">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-bottom-content">
          <p class="footer-copyright">
            © 2023 Ramasia International. All rights reserved.
          </p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Page-specific JS not needed; navbar behavior is shared -->
  <script>
    // Enable map interactivity on first click while keeping it static by default
    (function(){
      const container = document.getElementById('gmap-container');
      if (!container) return;
      container.addEventListener('click', function(){
        container.classList.remove('is-disabled');
      }, { once: true });
    })();
  </script>

  <!-- ===================================
       Auth Modals - Login & Sign Up
       =================================== -->
  <div class="ra-modal-backdrop" id="ra-modal-backdrop" aria-hidden="true">
    <!-- Login Modal -->
    <div class="ra-modal-container" id="ra-login-modal" role="dialog" aria-modal="true" aria-labelledby="ra-login-title" tabindex="-1">
      <button class="ra-modal-close" aria-label="Close login modal" data-modal-close>&#10006;</button>
      
      <div class="ra-modal-grid">
        <!-- Left Panel - Visual/Welcome -->
        <div class="ra-modal-visual">
          <div class="ra-modal-visual-content">
            <h3>Welcome!</h3>
            <p>Login to browse more jobs!<br>Don't have an account yet?</p>
            <button class="ra-btn-switch" id="ra-switch-to-signup">Sign up</button>
          </div>
          <div class="ra-modal-logo">
            <img src="../image-source/ramasia - transparent - red.png" alt="Ramasia Logo">
            <span>RAMASIA</span>
          </div>
        </div>

        <!-- Right Panel - Login Form -->
        <div class="ra-modal-form">
          <h2 id="ra-login-title" class="ra-modal-title">Login</h2>
          <form id="ra-login-form">
            <div class="ra-form-group">
              <label for="ra-login-email">Email</label>
              <input type="email" id="ra-login-email" name="email" placeholder="Email" required>
            </div>
            
            <div class="ra-form-group">
              <label for="ra-login-password">Password</label>
              <input type="password" id="ra-login-password" name="password" placeholder="Password" required>
            </div>
            
            <div class="ra-form-row">
              <div class="ra-checkbox-wrapper">
                <input type="checkbox" id="ra-remember-me" name="remember">
                <label for="ra-remember-me">Keep me signed in</label>
              </div>
              <a href="#" class="ra-forgot-link">Forgot password?</a>
            </div>
            
            <button type="submit" class="ra-btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Sign Up Modal -->
    <div class="ra-modal-container" id="ra-signup-modal" role="dialog" aria-modal="true" aria-labelledby="ra-signup-title" tabindex="-1">
      <button class="ra-modal-close" aria-label="Close sign up modal" data-modal-close>&#10006;</button>
      
      <div class="ra-modal-grid">
        <!-- Left Panel - Visual/Welcome -->
        <div class="ra-modal-visual">
          <div class="ra-modal-visual-content">
            <h3>Welcome!</h3>
            <p>Signup to browse more jobs!<br>Already have an account?</p>
            <button class="ra-btn-switch" id="ra-switch-to-login">Login</button>
          </div>
          <div class="ra-modal-logo">
            <img src="../image-source/ramasia - transparent - red.png" alt="Ramasia Logo">
            <span>RAMASIA</span>
          </div>
        </div>

        <!-- Right Panel - Sign Up Form -->
        <div class="ra-modal-form">
          <h2 id="ra-signup-title" class="ra-modal-title">Sign Up</h2>
          <form id="ra-signup-form">
            <div class="ra-form-group">
              <label for="ra-signup-email">Email</label>
              <input type="email" id="ra-signup-email" name="email" placeholder="Email" required>
            </div>
            
            <div class="ra-form-group">
              <label for="ra-signup-password">Password</label>
              <input type="password" id="ra-signup-password" name="password" placeholder="Password" required>
            </div>
            
            <div class="ra-form-group">
              <label for="ra-signup-confirm-password">Confirm Password</label>
              <input type="password" id="ra-signup-confirm-password" name="confirmPassword" placeholder="Confirm Password" required>
            </div>
            
            <div class="ra-form-group">
              <label for="ra-signup-gender">Gender</label>
              <select id="ra-signup-gender" name="gender" required>
                <option value="" disabled selected>Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Prefer not to say</option>
              </select>
            </div>
            
            <div class="ra-form-row">
              <div class="ra-checkbox-wrapper">
                <input type="checkbox" id="ra-terms" name="terms" required>
                <label for="ra-terms">You accept our Terms, Condition and Policy</label>
              </div>
            </div>
            
            <button type="submit" class="ra-btn-primary">Register Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================================
       Modal JavaScript
       =================================== -->
  <script>
    (function() {
      'use strict';

      const backdrop = document.getElementById('ra-modal-backdrop');
      const loginModal = document.getElementById('ra-login-modal');
      const signupModal = document.getElementById('ra-signup-modal');
      const switchToSignupBtn = document.getElementById('ra-switch-to-signup');
      const switchToLoginBtn = document.getElementById('ra-switch-to-login');
      const closeButtons = document.querySelectorAll('[data-modal-close]');
      const loginForm = document.getElementById('ra-login-form');
      const signupForm = document.getElementById('ra-signup-form');

      let currentModal = null;
      let isAnimating = false;

      function openModal(modalType) {
        if (isAnimating) return;
        if (!backdrop || !loginModal || !signupModal) return;

        isAnimating = true;
        const targetModal = modalType === 'login' ? loginModal : signupModal;
        const otherModal = modalType === 'login' ? signupModal : loginModal;

        if (otherModal.classList.contains('active')) {
          otherModal.classList.remove('active');
          otherModal.classList.add('ra-fade-out');
          setTimeout(() => {
            otherModal.classList.remove('ra-fade-out');
          }, 300);
        }

        backdrop.classList.add('active');
        backdrop.setAttribute('aria-hidden', 'false');

        targetModal.setAttribute('aria-hidden', 'false');
        targetModal.classList.add('active');
        targetModal.classList.add('ra-fade-in');
        currentModal = targetModal;

        document.body.style.overflow = 'hidden';

        setTimeout(() => {
          const firstInput = targetModal.querySelector('input, button');
          if (firstInput) firstInput.focus();
          isAnimating = false;
        }, 100);
      }

      function closeModal() {
        if (isAnimating || !currentModal) return;

        isAnimating = true;

        currentModal.classList.remove('ra-fade-in');
        currentModal.classList.add('ra-fade-out');
        backdrop.classList.remove('active');

        setTimeout(() => {
          currentModal.classList.remove('active');
          currentModal.classList.remove('ra-fade-out');
          currentModal.setAttribute('aria-hidden', 'true');
          backdrop.setAttribute('aria-hidden', 'true');
          currentModal = null;

          document.body.style.overflow = '';
          isAnimating = false;
        }, 300);
      }

      function switchModal(fromType, toType) {
        if (isAnimating) return;
        closeModal();
        setTimeout(() => {
          openModal(toType);
        }, 350);
      }

      if (switchToSignupBtn) {
        switchToSignupBtn.addEventListener('click', (e) => {
          e.preventDefault();
          switchModal('login', 'signup');
        });
      }

      if (switchToLoginBtn) {
        switchToLoginBtn.addEventListener('click', (e) => {
          e.preventDefault();
          switchModal('signup', 'login');
        });
      }

      closeButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
          e.preventDefault();
          closeModal();
        });
      });

      if (backdrop) {
        backdrop.addEventListener('click', (e) => {
          if (e.target === backdrop) {
            closeModal();
          }
        });
      }

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && currentModal) {
          closeModal();
        }
      });

      if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
          e.preventDefault();
          console.log('Login form submitted');
        });
      }

      if (signupForm) {
        signupForm.addEventListener('submit', (e) => {
          e.preventDefault();
          console.log('Signup form submitted');
        });
      }

      window.openRamasiaModal = openModal;
    })();
  </script>
</body>
</html>