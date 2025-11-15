/* START: main.js (Event Delegation Version) */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Define the Fragment Loader
    const loadFragment = async (selector, url) => {
        try {
            const target = document.querySelector(selector);
            if (target) {
                const response = await fetch(url);
                if (response.ok) {
                    target.innerHTML = await response.text();
                } else {
                    console.error(`Failed to load ${url}`);
                }
            }
        } catch (error) {
            console.error(`Error loading ${url}:`, error);
        }
    };

    // 2. Load the Sidebar and Navbar
    // Note: We don't need to await this for the buttons to work anymore!
    loadFragment('#sidebar-container', './global-user-sidebar.php');
    loadFragment('#navbar-container', './global-user-navbar.php');

    // 3. GLOBAL CLICK LISTENER (The "Event Delegation" Fix)
    // This watches *every* click on the page. If the click happens inside
    // our button, it runs the code. This works even if the button loads late.
    document.addEventListener('click', (e) => {
        
        // --- A. Sidebar Collapse Arrow ---
        const collapseBtn = e.target.closest('#sidebar-collapse-toggle, .sidebar-collapse-toggle');
        if (collapseBtn) {
            document.body.classList.toggle('sidebar-collapsed');
        }

        // --- B. Mobile Sidebar Open ---
        const sidebarOpenBtn = e.target.closest('#sidebar-open-toggle, .sidebar-open-toggle');
        if (sidebarOpenBtn) {
            document.body.classList.add('sidebar-open');
        }

        // --- C. Mobile Sidebar Close (X button or Overlay) ---
        const sidebarCloseBtn = e.target.closest('#sidebar-close-toggle, .sidebar-close-toggle');
        const sidebarOverlay = e.target.closest('.sidebar-overlay');
        
        // If we clicked the X button OR the Overlay (the dark background)
        if (sidebarCloseBtn || (e.target.classList.contains('sidebar-overlay'))) {
            document.body.classList.remove('sidebar-open');
        }

        // --- D. Mobile Navbar Open ---
        const navbarOpenBtn = e.target.closest('#navbar-open-toggle, .navbar-open-toggle');
        if (navbarOpenBtn) {
            document.body.classList.add('navbar-open');
        }

        // --- E. Mobile Navbar Close (Overlay) ---
        // If we clicked the Navbar Overlay itself
        if (e.target.classList.contains('navbar-overlay')) {
            document.body.classList.remove('navbar-open');
        }
    });

    // 4. Dynamic Padding (Kept separate as it needs to measure height)
    const initDynamicNavbarPadding = () => {
        const navbar = document.getElementById('navbar-container');
        if (!navbar) return;
        
        const observer = new MutationObserver(() => {
            if (navbar.offsetHeight > 0) {
                const navbarHeight = navbar.offsetHeight + 20; 
                document.documentElement.style.setProperty('--navbar-height', `${navbarHeight}px`);
            }
        });
        observer.observe(navbar, { childList: true, subtree: true });
    };

    initDynamicNavbarPadding();
    console.log('Global Event Delegation initialized.');
});
/* END: main.js */