<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Delete Profile</title>
  <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="delete-profile.css" />
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo">
        <img src="https://via.placeholder.com/120x40?text=RAMASIA" alt="RAMASIA Logo">
      </div>

      <div class="user-info">
        <img src="https://via.placeholder.com/60" class="user-photo" alt="User">
        <h3 class="user-name">Alden Richards</h3>
      </div>

      <nav class="menu">
        <a href="#">User Dashboard</a>
        <a href="#">My Resume</a>
        <a href="#">My Applied</a>
        <a href="#">Messages</a>
        <a href="#">Change Password</a>
        <a href="#" class="active">Delete Profile</a>
        <a href="#">Logout</a>
      </nav>
    </aside>

    <!-- Main -->
    <main class="main-content">
      <header class="navbar">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">JOB SEEKER</a></li>
          <li><a href="#">RESUME APPLICATION</a></li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="#">ABOUT US</a></li>
        </ul>
      </header>

      <section class="content">
        <h2>Delete Profile</h2>

        <div class="delete-box">
          <p><strong>Are you sure!</strong> You want to delete your profile.<br>
          <span class="note">This can't be undone!</span></p>

          <form>
            <label>Please enter your login Password to confirm:</label>
            <input type="password" placeholder="Password">
            <button type="submit">Delete Profile</button>
          </form>
        </div>

        <footer>© 2025 Ramasia International. All Right Reserved.</footer>
      </section>
    </main>
  </div>
</body>
</html>
