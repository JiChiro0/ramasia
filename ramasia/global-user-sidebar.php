<?php 
    session_start();
?>
<button class="navbar-toggle sidebar-close-toggle" id="sidebar-close-toggle" aria-label="Close Sidebar Menu">
    <i class="bi bi-chevron-double-left"></i>
</button>

<div class="logo">
    <img src="https://via.placeholder.com/120x40?text=RAMASIA" alt="RAMASIA Logo">
</div>

<div class="user-info">
    <img src="https://via.placeholder.com/60" alt="User photo" class="user-photo">
    <h3 class="user-name"><?php echo $_SESSION["username"] ?></h3>
</div>

<nav class="menu">
    <a href="user-dashboard.php" class="active">
        <span class="icon"><i class="bi bi-house-door-fill"></i></span> 
        <span class="text">User Dashboard</span>
    </a>
    <a href="user-resume.php">
        <span class="icon"><i class="bi bi-file-earmark-text-fill"></i></span> 
        <span class="text">My Resume</span>
    </a>
    <a href="user-applied.php">
        <span class="icon"><i class="bi bi-send-fill"></i></span> 
        <span class="text">My Applied</span>
    </a>
    <a href="user-messages.php">
        <span class="icon"><i class="bi bi-chat-dots-fill"></i></span> 
        <span class="text">Messages</span>
    </a>
    <a href="user-changepassword.php">
        <span class="icon"><i class="bi bi-shield-lock-fill"></i></span> 
        <span class="text">Change Password</span>
    </a>
    <a href="user-delete-profile.php">
        <span class="icon"><i class="bi bi-trash-fill"></i></span> 
        <span class="text">Delete Profile</span>
    </a>
    <a href="#">
        <span class="icon"><i class="bi bi-box-arrow-right"></i></span> 
        <span class="text">Logout</span>
    </a>
</nav>