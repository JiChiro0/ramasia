// Ramasia Navbar: Scroll/Dropdown/Hamburger/Accordion Logic
// -------------------------------------------
document.addEventListener("DOMContentLoaded", () => {
  // Elements
  const navbar = document.querySelector('.ra-navbar');
  const burger = document.querySelector('.ra-burger');
  const mobile = document.getElementById('ra-mobile');
  const dropdowns = document.querySelectorAll('.ra-dropdown');
  const loginButtons = document.querySelectorAll('.ra-cta');
  
  
  // Add down arrow to Resources dropdown links if not already present
  dropdowns.forEach(dropdown => {
    const link = dropdown.querySelector('a');
    if (link && !link.querySelector('.ra-dropdown-arrow')) {
      const arrow = document.createElement('span');
      arrow.className = 'ra-dropdown-arrow';
      arrow.textContent = ' ▾';
      link.appendChild(arrow);
    }
  });

  // SCROLL ANIMATION: Compact/shadow on scroll
  window.addEventListener('scroll', () => {
    if(!navbar) return;
    if(window.scrollY > 24) {
      navbar.classList.add('ra-scrolled');
    } else {
      navbar.classList.remove('ra-scrolled');
    }
  });

  // HAMBURGER MENU - Works on all pages
  if(burger && mobile) {
    burger.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      burger.classList.toggle('is-open');
      mobile.classList.toggle('is-open');
      document.body.style.overflow = burger.classList.contains('is-open') ? 'hidden' : '';
    });
    
    // Close mobile menu on resize/escape
    window.addEventListener('resize', () => {
      if(window.innerWidth > 900 && mobile.classList.contains('is-open')) {
        burger.classList.remove('is-open');
        mobile.classList.remove('is-open');
        document.body.style.overflow = '';
      }
    });
    
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        burger.classList.remove('is-open');
        mobile.classList.remove('is-open');
        document.body.style.overflow = '';
      }
    });
  }
  
  // Track mouse position globally for better hover detection across all dropdowns
  let mouseTrack = { x: 0, y: 0 };
  document.addEventListener('mousemove', (e) => {
    mouseTrack.x = e.clientX;
    mouseTrack.y = e.clientY;
  });

  // DROPDOWN FUNCTIONALITY - Works on all pages
  // Handle both desktop and mobile dropdowns
  dropdowns.forEach(dropdown => {
    const link = dropdown.querySelector('a');
    const menu = dropdown.querySelector('.ra-dropdown-menu');
    
    if (link && menu) {
      // Create variables to track hover state and timeout
      let isHovering = false;
      let closeTimeout;
      const HOVER_DELAY = 200; // Reduced delay for faster response
      
      // Function to show dropdown
      const showDropdown = () => {
        isHovering = true;
        clearTimeout(closeTimeout);
        dropdown.classList.add('open');
        menu.classList.add('show');
      };
      
      // Function to hide dropdown with delay
      const hideDropdown = (e) => {
        isHovering = false;
        clearTimeout(closeTimeout);
        closeTimeout = setTimeout(() => {
          // Double-check mouse position before hiding
          const dropdownRect = dropdown.getBoundingClientRect();
          const menuRect = menu.getBoundingClientRect();
          
          const isOverDropdown = mouseTrack.x >= dropdownRect.left && 
                                 mouseTrack.x <= dropdownRect.right &&
                                 mouseTrack.y >= dropdownRect.top && 
                                 mouseTrack.y <= dropdownRect.bottom;
          
          const menuTop = menuRect.top - 4; // Account for bridge
          const isOverMenu = mouseTrack.x >= menuRect.left && 
                            mouseTrack.x <= menuRect.right &&
                            mouseTrack.y >= menuTop && 
                            mouseTrack.y <= menuRect.bottom;
          
          if (!isOverDropdown && !isOverMenu && !isHovering) {
            dropdown.classList.remove('open');
            menu.classList.remove('show');
          }
        }, HOVER_DELAY);
      };
      
      // Show dropdown when hovering over the dropdown button
      dropdown.addEventListener('mouseenter', showDropdown);
      
      // Show dropdown when hovering over the menu (including the invisible bridge)
      menu.addEventListener('mouseenter', showDropdown);
      
      // Hide when leaving dropdown - use improved logic
      dropdown.addEventListener('mouseleave', (e) => {
        // Small delay to check if mouse moved to menu
        setTimeout(() => {
          if (!isHovering) {
            hideDropdown(e);
          }
        }, 50);
      });
      
      // Hide when leaving menu area completely
      menu.addEventListener('mouseleave', hideDropdown);
      
      // For touch devices and keyboard navigation
      document.addEventListener('click', (e) => {
        // Only close if clicking outside both dropdown and menu
        if (!dropdown.contains(e.target) && !menu.contains(e.target)) {
          dropdown.classList.remove('open');
          menu.classList.remove('show');
        }
      });
      
      // Toggle dropdown on click (primarily for mobile)
      // Allow navigation if the link has a valid href (like resources page)
      link.addEventListener('click', (e) => {
        // Check if link has a valid href (not '#' or empty)
        const href = link.getAttribute('href');
        const hasValidHref = href && href !== '#' && href !== '';
        
        // If link has a valid href, allow normal navigation
        if (hasValidHref) {
          // Allow the link to navigate normally
          // Don't prevent default - let browser handle navigation
          return true;
        }
        
        // If no valid href, toggle dropdown (for mobile/touch devices)
        e.preventDefault();
        dropdown.classList.toggle('open');
        menu.classList.toggle('show');
      });
      
      // Keyboard accessibility
      link.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          const hasValidHref = link.getAttribute('href') && 
                              link.getAttribute('href') !== '#' && 
                              link.getAttribute('href') !== '';
          
          // If link has a valid href, allow navigation (don't prevent default)
          if (!hasValidHref) {
            e.preventDefault();
            dropdown.classList.toggle('open');
            menu.classList.toggle('show');
          }
          // If has valid href, let the browser handle navigation normally
        }
      });
    }
  });
  
  // Login/Register Modal Functionality
  loginButtons.forEach(button => {
    button.addEventListener('click', function(e) {
      e.preventDefault();
      // Check if modal function exists (will be available after page loads)
      if (typeof window.openRamasiaModal === 'function') {
        window.openRamasiaModal('login');
      } else {
        // Fallback: wait for modal script to load
        setTimeout(() => {
          if (typeof window.openRamasiaModal === 'function') {
            window.openRamasiaModal('login');
          }
        }, 100);
      }
    });
  });
  
  // Check for URL parameter to open modal
  const urlParams = new URLSearchParams(window.location.search);
  const modalParam = urlParams.get('openModal');
  if (modalParam === 'login' || modalParam === 'signup') {
    // Wait for modal script to load
    const checkModal = setInterval(() => {
      if (typeof window.openRamasiaModal === 'function') {
        window.openRamasiaModal(modalParam);
        clearInterval(checkModal);
      }
    }, 50);
    // Stop checking after 2 seconds
    setTimeout(() => clearInterval(checkModal), 2000);
  }
});


