<!DOCTYPE html>
<html lang="en" class="ra-has-navbar">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Seeker | Ramasia</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" type="image/png" href="../image-source/favicon.png">
  <link rel="stylesheet" href="./css/ramasia-job-seeker-page.css">
  <!-- <script src="jquery-3.7.1.min.js"></script> -->
  <!-- Shared Navbar Styles -->
  <link rel="stylesheet" href="./css/ramasia-navbar.css">
  <!-- Modal Styles -->
  <link rel="stylesheet" href="./css/ramasia-modal.css">
  <!-- Shared Navbar JavaScript -->
  <script defer src="../ramasia-navbar.js"></script>
</head>

<body>
  <?php
  include_once './components/navbar.php';
  ?>

  <!-- Hero -->
  <section class="hero" role="img" aria-label="People in a meeting background">
    <div class="hero-overlay">
      <h1>Job Seeker</h1>
      <img class="hero-logo" src="../image-source/transparent-ramasialredlogo-navbar.png" alt="Ramasia logo">
    </div>
  </section>

  <!-- Main Content -->
  <main class="container content-grid">
    <!-- Sidebar Filters -->
    <aside class="filters" aria-label="Job Filters">
      <div class="filter-group">
        <h3>Experience Level</h3>
        <label class="filter-option">
          <input type="checkbox" name="experience" value="Fresh"> Fresh
        </label>
        <label class="filter-option">
          <input type="checkbox" name="experience" value="1 Year"> 1 Year
        </label>
        <label class="filter-option">
          <input type="checkbox" name="experience" value="2 Year"> 2 Year
        </label>
        <label class="filter-option">
          <input type="checkbox" name="experience" value="3 Year"> 3 Year
        </label>
        <label class="filter-option">
          <input type="checkbox" name="experience" value="4 Year"> 4 Year
        </label>
        <label class="filter-option">
          <input type="checkbox" name="experience" value="5 Year"> 5 Year
        </label>
      </div>

      <div class="filter-group">
        <h3>Career Level</h3>
        <label class="filter-option">
          <input type="checkbox" name="career" value="Manager"> Manager
        </label>
        <label class="filter-option">
          <input type="checkbox" name="career" value="Officer"> Officer
        </label>
        <label class="filter-option">
          <input type="checkbox" name="career" value="Student"> Student
        </label>
        <label class="filter-option">
          <input type="checkbox" name="career" value="Executive"> Executive
        </label>
        <label class="filter-option">
          <input type="checkbox" name="career" value="Others"> Others
        </label>
      </div>

      <button class="btn-primary" id="findJobsBtn" type="button">Find Jobs</button>
    </aside>

    <!-- Job Results -->
    <section class="results">
      <div class="results-header">
        <p id="resultsCount">Showing 0 results</p>
        <div class="sort-row">
          <label for="sortSelect" class="sr-only">Sort</label>
          <select id="sortSelect" aria-label="Sort jobs">
            <option value="default">Sort By (Default)</option>
            <option value="dateDesc">Newest</option>
            <option value="dateAsc">Oldest</option>
          </select>
        </div>
      </div>

      <div class="cards-scroll" id="cardsScroll" aria-live="polite"></div>
    </section>
  </main>

  <!-- Footer placeholder -->
  <footer class="site-footer"></footer>

  <script>
    // ------------------------------
    // Job data and filtering logic
    // ------------------------------
    // Sample jobs. Each item includes fields used for rendering and filtering.
    const allJobs = [
      { id: 1, employer: "EITMAM - DOMESTIC HELPER", position: "Domestic Helper", date: "2023-04-18", location: "Abu Dhabi", experience: "Fresh", career: "Others" },
      { id: 2, employer: "EITMAM - DOMESTIC HELPER", position: "Domestic Helper", date: "2023-04-17", location: "Abu Dhabi", experience: "1 Year", career: "Others" },
      { id: 3, employer: "Global Care", position: "Nurse Assistant", date: "2023-04-15", location: "Doha", experience: "2 Year", career: "Officer" },
      { id: 4, employer: "Bright Homes", position: "Housekeeper", date: "2023-04-12", location: "Dubai", experience: "3 Year", career: "Executive" },
      { id: 5, employer: "Blue Sands", position: "Domestic Helper", date: "2023-04-10", location: "Abu Dhabi", experience: "4 Year", career: "Manager" },
      { id: 6, employer: "Sunrise Family", position: "Caregiver", date: "2023-04-08", location: "Al Ain", experience: "5 Year", career: "Officer" },
      { id: 7, employer: "EITMAM - DOMESTIC HELPER", position: "Domestic Helper", date: "2023-04-05", location: "Abu Dhabi", experience: "3 Year", career: "Others" },
    ];

    const cardsScroll = document.getElementById('cardsScroll');
    const resultsCount = document.getElementById('resultsCount');
    const sortSelect = document.getElementById('sortSelect');
    const findBtn = document.getElementById('findJobsBtn');

    // Utility to format ISO date strings to a readable form
    function formatDate(iso) {
      const d = new Date(iso + 'T00:00:00');
      const options = { year: 'numeric', month: 'long', day: 'numeric' };
      return d.toLocaleDateString(undefined, options);
    }

    // Render a single job card element
    function renderCard(job) {
      const wrapper = document.createElement('article');
      wrapper.className = 'job-card';
      wrapper.innerHTML = `
                <div class="job-card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suitcase-lg" viewBox="0 0 16 16">
  <path d="M5 2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2h3.5A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5H14a.5.5 0 0 1-1 0H3a.5.5 0 0 1-1 0h-.5A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2zm1 0h4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5H3V3zM15 12.5v-9a.5.5 0 0 0-.5-.5H13v10h1.5a.5.5 0 0 0 .5-.5m-3 .5V3H4v10z"/>
</svg></div>
                <div class="job-card-body">
                    <h4 class="job-title">${job.employer}</h4>
                    <div class="job-meta">
                        <span>${job.position}</span>
                        <span>• ${formatDate(job.date)}</span>
                        <span>• ${job.location}</span>
                    </div>
                </div>
                <button class="bookmark" aria-label="Save job">☆</button>
            `;
      return wrapper;
    }

    // Collect selected filter values from the sidebar
    function collectFilters() {
      const exp = Array.from(document.querySelectorAll('input[name="experience"]:checked')).map(i => i.value);
      const car = Array.from(document.querySelectorAll('input[name="career"]:checked')).map(i => i.value);
      return { exp, car };
    }

    // Apply filters to the full job list
    // - If a filter group has no selections, it's considered a pass-through
    function filterJobs(jobs, filters) {
      return jobs.filter(j => {
        const expMatch = filters.exp.length === 0 || filters.exp.includes(j.experience);
        const carMatch = filters.car.length === 0 || filters.car.includes(j.career);
        return expMatch && carMatch;
      });
    }

    // Sort jobs based on the selected option
    function sortJobs(jobs, mode) {
      const clone = jobs.slice();
      if (mode === 'dateDesc') {
        clone.sort((a, b) => new Date(b.date) - new Date(a.date));
      } else if (mode === 'dateAsc') {
        clone.sort((a, b) => new Date(a.date) - new Date(b.date));
      }
      return clone;
    }

    // Render the current (filtered + sorted) job list and update the count label
    function updateUI() {
      const filters = collectFilters();
      const sorted = sortJobs(allJobs, sortSelect.value);
      const filtered = filterJobs(sorted, filters);

      cardsScroll.innerHTML = '';
      filtered.forEach(job => cardsScroll.appendChild(renderCard(job)));
      resultsCount.textContent = `Showing ${filtered.length} results`;
    }

    // Event bindings
    document.querySelectorAll('input[name="experience"], input[name="career"]').forEach(inp => {
      inp.addEventListener('change', updateUI);
    });
    sortSelect.addEventListener('change', updateUI);
    findBtn.addEventListener('click', updateUI);

    // Initial render
    updateUI();
  </script>

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
            <img src="../image-source/transparent-ramasialredlogo-navbar.png" alt="Ramasia Logo"
              class="footer-logo-img">
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

</body>

</html>