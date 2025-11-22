// js/admin-sidebar.js

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay'); 
    const icon = document.getElementById('toggleIcon');
    const body = document.body;

    // 1. Toggle Active Classes
    sidebar.classList.toggle('active');
    overlay.classList.toggle('active');

    // 2. Handle Icons and Scroll Lock
    if (sidebar.classList.contains('active')) {
        // Menu is OPEN
        icon.classList.remove('bi-chevron-double-right');
        icon.classList.add('bi-chevron-double-left');
        
        // Lock the background body from scrolling
        body.style.overflow = 'hidden';
    } else {
        // Menu is CLOSED
        icon.classList.remove('bi-chevron-double-left');
        icon.classList.add('bi-chevron-double-right');
        
        // Unlock scrolling
        body.style.overflow = '';
    }
}