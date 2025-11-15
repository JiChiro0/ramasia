<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="ra-modal-backdrop" id="ra-modal-backdrop" aria-hidden="true">
    <!-- Login Modal -->
    <div class="ra-modal-container" id="ra-login-modal" role="dialog" aria-modal="true" aria-labelledby="ra-login-title"
      tabindex="-1">
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
            <img src="../image-source/ramasia-transparent-red.png" alt="Ramasia Logo">
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

            <div class="alert alert-danger" role="alert" id="alert" hidden>
              This is a danger alert—check it out!
            </div>

            <button type="submit" class="ra-btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Sign Up Modal -->
    <div class="ra-modal-container" id="ra-signup-modal" role="dialog" aria-modal="true"
      aria-labelledby="ra-signup-title" tabindex="-1">
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
          <form id="ra-signup-form" action="">
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
              <input type="password" id="ra-signup-confirm-password" name="confirmPassword"
                placeholder="Confirm Password" required>
            </div>

            <div class="ra-form-group">
              <label for="ra-signup-gender">Gender</label>
              <select id="ra-signup-gender" name="gender">
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
</body>

</html>

<script>
  $(document).ready(function () {
    // var showAlert = document.getElementsByClassName("alert")
    $("#ra-signup-form").on("submit", function () {
      var username = $("#ra-signup-email").val();
      var password = $("#ra-signup-password").val();
      var gender = $("#ra-signup-gender").val();


      $.ajax({
        url: "./actions/register.php",
        type: "POST",
        data: { username: username, password: password, gender: gender },
        success: function (response) {
          console.log(response);
        },
        error: function (xhr, status, error) {

          console.log(status);
          console.log(error);
          console.log(xhr);
        }
      });
    });

    $("#ra-login-form").on("submit", function () {
      var username = $("#ra-login-email").val();
      var password = $("#ra-login-password").val();


      $.ajax({
        url: "./actions/login.php",
        type: "POST",
        data: { username: username, password: password },
        success: function (response) {
          console.log(response)
          if (response) {
            // Show alert message
            localStorage.setItem("token", response);
            window.location.href = "user-dashboard.php";
          } else {
            $("#alert")
              .removeAttr("hidden")
              .hide()                 // ensure it's hidden before fadeIn
              .fadeIn(300)
              .text(response);

            // Auto-hide after 3 seconds
            setTimeout(function () {
              $("#alert").fadeOut(500, function () {
                $(this).attr("hidden", true); // hide again after fade out
              });
            }, 3000);

          }
        },
        error: function (xhr, status, error) {

          console.log(status);
          console.log(error);
          console.log(xhr);
        }
      });
    });
  });
  (function () {
    'use strict';

    // Modal elements
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

    // Open modal function
    function openModal(modalType) {
      if (isAnimating) return;
      if (!backdrop || !loginModal || !signupModal) return;

      isAnimating = true;
      const targetModal = modalType === 'login' ? loginModal : signupModal;
      const otherModal = modalType === 'login' ? signupModal : loginModal;

      // Close other modal if open
      if (otherModal.classList.contains('active')) {
        otherModal.classList.remove('active');
        otherModal.classList.add('ra-fade-out');
        setTimeout(() => {
          otherModal.classList.remove('ra-fade-out');
        }, 300);
      }

      // Show backdrop
      backdrop.classList.add('active');
      backdrop.setAttribute('aria-hidden', 'false');

      // Show target modal
      targetModal.setAttribute('aria-hidden', 'false');
      targetModal.classList.add('active');
      targetModal.classList.add('ra-fade-in');
      currentModal = targetModal;

      // Prevent body scroll
      document.body.style.overflow = 'hidden';

      // Focus management
      setTimeout(() => {
        const firstInput = targetModal.querySelector('input, button');
        if (firstInput) firstInput.focus();
        isAnimating = false;
      }, 100);
    }

    // Close modal function
    function closeModal() {
      if (isAnimating || !currentModal) return;

      isAnimating = true;

      // Animate out
      currentModal.classList.remove('ra-fade-in');
      currentModal.classList.add('ra-fade-out');
      backdrop.classList.remove('active');

      setTimeout(() => {
        currentModal.classList.remove('active');
        currentModal.classList.remove('ra-fade-out');
        currentModal.setAttribute('aria-hidden', 'true');
        backdrop.setAttribute('aria-hidden', 'true');
        currentModal = null;

        // Restore body scroll
        document.body.style.overflow = '';
        isAnimating = false;
      }, 300);
    }

    // Switch between modals
    function switchModal(fromType, toType) {
      if (isAnimating) return;
      closeModal();
      setTimeout(() => {
        openModal(toType);
      }, 350);
    }

    // Event listeners
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

    // Close button listeners
    closeButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        closeModal();
      });
    });

    // Backdrop click to close
    if (backdrop) {
      backdrop.addEventListener('click', (e) => {
        if (e.target === backdrop) {
          closeModal();
        }
      });
    }

    // Escape key to close
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && currentModal) {
        closeModal();
      }
    });

    // Form submissions
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

    // Expose openModal function globally for navbar
    window.openRamasiaModal = openModal;
  })();
  // Partnership carousel nav - 3-item infinite loop
  const partnershipTrack = document.getElementById('partnership-track');
  const prevBtn = document.querySelector('.partnership-prev');
  const nextBtn = document.querySelector('.partnership-next');

  function setupInfiniteCarousel() {
    const items = Array.from(partnershipTrack.children);
    if (items.length < 3) return;

    // TRUE INFINITE SCROLL: Clone items for seamless loop without visible duplication
    const originalItems = [...items];

    // Create enough clones for smooth infinite scrolling
    originalItems.forEach(item => {
      const clone = item.cloneNode(true);
      clone.classList.add('clone');
      partnershipTrack.appendChild(clone);
    });

    // Add more clones at the beginning for reverse scrolling
    originalItems.slice().reverse().forEach(item => {
      const clone = item.cloneNode(true);
      clone.classList.add('clone');
      partnershipTrack.insertBefore(clone, partnershipTrack.firstChild);
    });

    let currentIndex = originalItems.length; // Start at first original item
    let isAnimating = false;

    function getItemWidth() {
      const firstItem = partnershipTrack.children[0];
      const gap = parseFloat(getComputedStyle(partnershipTrack).gap || '0');
      return firstItem.getBoundingClientRect().width + gap;
    }

    function updatePosition(animate = true) {
      const itemWidth = getItemWidth();
      const offset = -currentIndex * itemWidth;

      if (animate) {
        partnershipTrack.style.transition = 'transform 400ms ease';
        partnershipTrack.style.transform = `translateX(${offset}px)`;

        setTimeout(() => {
          isAnimating = false;
        }, 400);
      } else {
        partnershipTrack.style.transition = 'none';
        partnershipTrack.style.transform = `translateX(${offset}px)`;
      }
    }

    function slideRight() {
      if (isAnimating) return;
      isAnimating = true;

      currentIndex++;
      updatePosition();

      // Reset position when reaching the end of original items
      setTimeout(() => {
        if (currentIndex >= originalItems.length * 2) {
          currentIndex = originalItems.length;
          updatePosition(false);
        }
      }, 400);
    }

    function slideLeft() {
      if (isAnimating) return;
      isAnimating = true;

      currentIndex--;
      updatePosition();

      // Reset position when reaching the beginning
      setTimeout(() => {
        if (currentIndex < originalItems.length) {
          currentIndex = originalItems.length * 2 - 1;
          updatePosition(false);
        }
      }, 400);
    }

    prevBtn?.addEventListener('click', slideLeft);
    nextBtn?.addEventListener('click', slideRight);

    partnershipTrack.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') slideLeft();
      if (e.key === 'ArrowRight') slideRight();
    });

    // Initialize position
    updatePosition(false);
  }

  if (partnershipTrack) setupInfiniteCarousel();
</script>