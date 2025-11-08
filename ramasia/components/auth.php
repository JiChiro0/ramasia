 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 </head>
 <body>
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
          <form id="ra-signup-form" action="">
            <div class="ra-form-group">
              <label for="ra-signup-email">Email</label>
              <input type="email" id="ra-signup-email" name="email" placeholder="Email" required >
            </div>
            
            <div class="ra-form-group">
              <label for="ra-signup-password">Password</label>
              <input type="password" id="ra-signup-password" name="password" placeholder="Password" required >
            </div>
            
            <div class="ra-form-group">
              <label for="ra-signup-confirm-password">Confirm Password</label>
              <input type="password" id="ra-signup-confirm-password" name="confirmPassword" placeholder="Confirm Password" required >
            </div>
            
            <div class="ra-form-group">
              <label for="ra-signup-gender">Gender</label>
              <select id="ra-signup-gender" name="gender" >
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
     $(document).ready(function() {
      $("#ra-signup-form").on("submit",function() {
        var username = $("#ra-signup-email").val();
        var password = $("#ra-signup-password").val();
        var gender = $("#ra-signup-gender").val();

      
        $.ajax({
          url: "./actions/registerr.php",     
          type: "POST",       
          data: { username: username, password: password , gender : gender },
          success: function(response) {
            console.log(response);
          },
          error: function(xhr, status, error) {
        
            console.log(status);
            console.log(error);
            console.log(xhr);
          }
        });
      });

       $("#ra-login-form").on("submit",function() {
        var username = $("#ra-login-email").val();
        var password = $("#ra-login-password").val();
        

      
        $.ajax({
          url: "./actions/login.php",     
          type: "POST",       
          data: { username: username, password: password },
          success: function(response) {
            console.log(response);
          },
          error: function(xhr, status, error) {
        
            console.log(status);
            console.log(error);
            console.log(xhr);
          }
        });
      });
    });
  </script>