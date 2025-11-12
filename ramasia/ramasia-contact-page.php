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
      <div class="subtitle"><img src="../image-source/transparent-ramasialredlogo-navbar.png" alt="RAMASIA Logo"></div>

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
            <iframe id="gmap-iframe" title="Ramasia International Office Location" loading="lazy"
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
          <img src="../image-source/transparent-ramasialredlogo-navbar.png" alt="Ramasia Logo" class="footer-logo-img">
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


  <?php
  include_once './components/auth.php';
  ?>


</body>

</html>

<script>
  // Enable map interactivity on first click while keeping it static by default
  (function () {
    const container = document.getElementById('gmap-container');
    if (!container) return;
    container.addEventListener('click', function () {
      container.classList.remove('is-disabled');
    }, { once: true });
  })();
</script>