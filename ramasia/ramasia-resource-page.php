<!DOCTYPE html>
<html lang="en" class="ra-has-navbar">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resources | Ramasia</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" type="image/png" href="../image-source/favicon.png">
  <link rel="stylesheet" href="./css/ramasia-navbar.css">
  <link rel="stylesheet" href="./css/ramasia-resource-page.css">
  <!-- Modal Styles -->
  <link rel="stylesheet" href="./css/ramasia-modal.css">
  <!-- Shared Navbar JavaScript -->
  <script defer src="../ramasia-navbar.js"></script>
</head>

<body class="resources-page">

  <?php
  include_once './components/navbar.php';
  ?>

  <!-- ===================================
       Hero Section
       =================================== -->
  <section class="resources-hero">
    <h1 class="resources-hero-title">Where Global Careers Begin.</h1>
    <p class="resources-hero-subtitle">
      Ramasia connects skilled professionals with life-changing opportunities across industries and borders.
    </p>
    <div class="resources-hero-buttons">
      <a href="ramasia-job-seeker-page.html" class="resources-btn-primary">
        Explore Opportunities →
      </a>
      <a href="ramasia-contact-page.html" class="resources-btn-outline">
        Contact Us →
      </a>
    </div>
    <div class="resources-hero-image">
      <img src="../image-source/resource-image-1.jpg" alt="Ramasia" />
    </div>
  </section>

  <!-- ===================================
       More Resources Section
       =================================== -->
  <section class="resources-section">
    <h2 class="resources-section-title">More Resources<span class="arrow">→</span></h2>

    <div class="resources-cards">
      <!-- Blogs Card -->
      <article class="resources-card">
        <div class="resources-card-image">
          <!-- Image placeholder for Blogs -->
        </div>
        <div class="resources-card-content">
          <h3 class="resources-card-title">
            Check the latest news, step-by-step interview guides, and more in our blogs library!
          </h3>
          <p class="resources-card-description">
            Discover valuable insights from the Ramasia team on manpower solutions and industry trends. Stay updated on
            global recruitment and deployment of skilled Filipino professionals, workforce management best practices,
            job application tips, and inspiring success stories from professionals in the USA, UK, and Asia. Our blog is
            a practical resource for job seekers and employers alike, empowering you to navigate the labor market
            effectively.
          </p>
          <a href="#" class="resources-card-btn">Check Blogs →</a>
        </div>
      </article>

      <!-- Reading Materials Card -->
      <article class="resources-card">
        <div class="resources-card-image">
          <!-- Image placeholder for Reading Materials -->
        </div>
        <div class="resources-card-content">
          <h3 class="resources-card-title">
            Read our materials to help you improve your skills!
          </h3>
          <p class="resources-card-description">
            Our collection includes diverse guides, instructional manuals, and learning materials aimed at enhancing
            your professional development. By accessing our resource center, you can stay informed about the job market,
            recruitment processes, and skill advancement tips, all tailored to support your career ambitions. Explore
            our curated resources today for invaluable guidance and learning opportunities!
          </p>
          <a href="#" class="resources-card-btn">Check Reading Materials →</a>
        </div>
      </article>

      <!-- Video Library Card -->
      <article class="resources-card">
        <div class="resources-card-image">
          <!-- Image placeholder for Video Library -->
        </div>
        <div class="resources-card-content">
          <h3 class="resources-card-title">
            Quick, informative clips!
          </h3>
          <p class="resources-card-description">
            Discover valuable tips and insights from Ramasia International Manpower Services. Access seminars and video
            clips designed to assist you in your application process, enhancing your chances of securing employment
            opportunities abroad. Explore expert guidance tailored for aspiring Filipino professionals.
          </p>
          <a href="#" class="resources-card-btn">Check Video Library →</a>
        </div>
      </article>

      <!-- Salary Guide Card -->
      <article class="resources-card">
        <div class="resources-card-image">
          <!-- Image placeholder for Salary Guide -->
        </div>
        <div class="resources-card-content">
          <h3 class="resources-card-title">
            Looking for insider knowledge on current salaries?
          </h3>
          <p class="resources-card-description">
            If you're considering new job opportunities but are unsure about expected salaries, we can help you assess
            your worth. By filling out the form below, you can access the latest salary benchmarks in your field, a
            crucial resource for both job seekers and those preparing for salary negotiations.
          </p>
          <a href="#" class="resources-card-btn">Check Salary Guide →</a>
        </div>
      </article>

      <!-- Generate Template Card -->
      <article class="resources-card">
        <div class="resources-card-image">
          <!-- Image placeholder for Generate Template -->
        </div>
        <div class="resources-card-content">
          <h3 class="resources-card-title">
            Looking for a professional resume template to showcase your skills and experiences?
          </h3>
          <p class="resources-card-description">
            Our professional resume template allows you to easily input your information and generate a polished resume,
            helping you make a strong impression in your job search. Get started today and take the first step towards
            your dream career!
          </p>
          <a href="#" class="resources-card-btn">Generate Template →</a>
        </div>
      </article>
    </div>
  </section>

  <!-- Shared Navbar Behavior: fade/slide on load, scroll compact state, hamburger menu -->
  <script src="ramasia-navbar.js"></script>

  <!-- ===================================
       Auth Modals - Login & Sign Up
       =================================== -->
  <?php
  include_once './components/auth.php';
  ?>
  <!-- Footer Section -->
  <footer class="footer-section">
    <div class="footer-container">
      <div class="footer-content">
        <!-- Company Info -->
        <div class="footer-column footer-main">
          <div class="footer-logo">
            <img src="../image-source/transparent-ramasialogo-navbar.png" alt="Ramasia Logo" class="footer-logo-img">
          </div>
          <p class="footer-description">
            Ramasia International Man Power Services Inc. has been connecting skilled professionals with global
            opportunities since 1999. Licensed by the Department of Migrant Workers.
          </p>
          <div class="footer-social">
            <a href="#" aria-label="Facebook" class="social-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
              </svg>
            </a>
            <a href="#" aria-label="LinkedIn" class="social-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
              </svg>
            </a>
            <a href="#" aria-label="Twitter" class="social-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
              </svg>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-column">
          <h4 class="footer-heading">Quick Links</h4>
          <ul class="footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Job Seeker</a></li>
            <li><a href="#">Browse Jobs</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>

        <!-- Services -->
        <div class="footer-column">
          <h4 class="footer-heading">Our Services</h4>
          <ul class="footer-links">
            <li><a href="#">Recruitment Services</a></li>
            <li><a href="#">Career Guidance</a></li>
            <li><a href="#">Resume Building</a></li>
            <li><a href="#">Job Placement</a></li>
            <li><a href="#">Training Programs</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer-column">
          <h4 class="footer-heading">Contact Info</h4>
          <div class="footer-contact">
            <div class="contact-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
              </svg>
              <span>Manila, Philippines</span>
            </div>
            <div class="contact-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
              </svg>
              <span>+63 2 8123 4567</span>
            </div>
            <div class="contact-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 14H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
              </svg>
              <span>info@ramasia.com</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="footer-bottom-content">
          <p class="footer-copyright">
            © 2024 Ramasia International Man Power Services Inc. All rights reserved.
          </p>
          <div class="footer-legal">
            <a href="#">Privacy Policy</a>
            <span class="separator">|</span>
            <a href="#">Terms of Service</a>
            <span class="separator">|</span>
            <a href="#">Cookie Policy</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- ===================================
       Modal JavaScript
       =================================== -->
  <script>
    (function () {
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