<!DOCTYPE html>
<html lang="en" class="ra-has-navbar">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ramasia | Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="icon" type="image/png" href="../image-source/favicon.png">
  <link rel="stylesheet" href="./css/ramasia-landing-page.css">
  <!-- Shared Navbar Styles -->
  <link rel="stylesheet" href="./css/ramasia-navbar.css">
  <!-- Modal Styles -->
  <link rel="stylesheet" href="./css/ramasia-modal.css">
  <link rel="stylesheet" href="./css/globat-chatbot.css">
  <!-- Shared Navbar JavaScript -->
  <script defer src="../ramasia-navbar.js"></script>
</head>

<body>

  <?php
  include_once './components/navbar.php';
  ?>

  <section class="hero">
    <div class="hero-content">
      <h2>Start your new<br>career with Ramasia</h2>
      <p>15,000+ Browse Jobs Abroad!<br> Find Jobs, Employment & Career Opportunities</p>
      <button class="btn">Get Started! →</button>
    </div>

    <!-- Partnership overlay inside hero, centered independently -->
    <div class="hero-partnership-overlay">
      <h3 class="partnership-title sarala-bold">Our Global Partnership</h3>
      <div class="partnership">
        <div class="partnership-inner">
          <div class="partnership-carousel" role="group" aria-roledescription="carousel"
            aria-label="Our partnership logos carousel">
            <button class="partnership-nav partnership-prev" aria-label="Previous partners"
              aria-controls="partnership-track" type="button">&#10094;</button>
            <div class="partnership-window">
              <div class="partnership-track" id="partnership-track" role="region" aria-label="Our partnership logos"
                tabindex="0">
                <div class="partner-item"><img src="../image-source/partnership-1.jpg" alt="Partner 1"
                    class="partner-logo" /></div>
                <div class="partner-item"><img src="../image-source/partnership-2.jpg" alt="Partner 2"
                    class="partner-logo" /></div>
                <div class="partner-item"><img src="../image-source/partnership-3.jpg" alt="Partner 3"
                    class="partner-logo" /></div>
                <div class="partner-item"><img src="../image-source/partnership-4.jpg" alt="Partner 4"
                    class="partner-logo" /></div>
                <div class="partner-item"><img src="../image-source/partnership-5.png" alt="Partner 5"
                    class="partner-logo" /></div>
              </div>
            </div>
            <button class="partnership-nav partnership-next" aria-label="Next partners"
              aria-controls="partnership-track" type="button">&#10095;</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Latest Jobs Section -->
  <section class="latest-jobs" aria-labelledby="latest-jobs-title">
    <div class="lj-container">
      <h3 id="latest-jobs-title" class="sarala-bold lj-heading">Latest Jobs</h3>
      <div class="jobs-grid">
        <article class="job-card" tabindex="0">
          <header class="job-card-header">
            <h4 class="job-title">EITMAM - DOMESTIC HELPER</h4>
            <button class="bookmark" aria-label="Save job"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                <path
                  d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
              </svg></i></button>
          </header>
          <ul class="job-meta">
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suitcase-lg" viewBox="0 0 16 16">
                <path
                  d="M5 2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2h3.5A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5H14a.5.5 0 0 1-1 0H3a.5.5 0 0 1-1 0h-.5A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2zm1 0h4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5H3V3zM15 12.5v-9a.5.5 0 0 0-.5-.5H13v10h1.5a.5.5 0 0 0 .5-.5m-3 .5V3H4v10z" />
              </svg>Domestic Helper</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-calendar" viewBox="0 0 16 16">
                <path
                  d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
              </svg>April 18, 2023</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
                viewBox="0 0 16 16">
                <path
                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
              </svg>ABU DHABI</li>
          </ul>
          <button class="job-cta">Apply Now</button>
        </article>

        <article class="job-card" tabindex="0">
          <header class="job-card-header">
            <h4 class="job-title">EITMAM - DOMESTIC HELPER</h4>
            <button class="bookmark" aria-label="Save job"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                <path
                  d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
              </svg></button>
          </header>
          <ul class="job-meta">
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suitcase-lg" viewBox="0 0 16 16">
                <path
                  d="M5 2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2h3.5A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5H14a.5.5 0 0 1-1 0H3a.5.5 0 0 1-1 0h-.5A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2zm1 0h4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5H3V3zM15 12.5v-9a.5.5 0 0 0-.5-.5H13v10h1.5a.5.5 0 0 0 .5-.5m-3 .5V3H4v10z" />
              </svg>Domestic Helper</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-calendar" viewBox="0 0 16 16">
                <path
                  d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
              </svg>April 18, 2023</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
                viewBox="0 0 16 16">
                <path
                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
              </svg>ABU DHABI</li>
          </ul>
          <button class="job-cta">Apply Now</button>
        </article>

        <article class="job-card" tabindex="0">
          <header class="job-card-header">
            <h4 class="job-title">EITMAM - DOMESTIC HELPER</h4>
            <button class="bookmark" aria-label="Save job"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                <path
                  d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
              </svg></button>
          </header>
          <ul class="job-meta">
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suitcase-lg" viewBox="0 0 16 16">
                <path
                  d="M5 2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2h3.5A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5H14a.5.5 0 0 1-1 0H3a.5.5 0 0 1-1 0h-.5A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2zm1 0h4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5H3V3zM15 12.5v-9a.5.5 0 0 0-.5-.5H13v10h1.5a.5.5 0 0 0 .5-.5m-3 .5V3H4v10z" />
              </svg>Domestic Helper</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-calendar" viewBox="0 0 16 16">
                <path
                  d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
              </svg>April 18, 2023</li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
                viewBox="0 0 16 16">
                <path
                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
              </svg>ABU DHABI</li>
          </ul>
          <button class="job-cta">Apply Now</button>
        </article>

        <a class="view-more-card" href="#" aria-label="View more jobs">
          <span class="vm-icon">→</span>
          <span>View More</span>
        </a>
      </div>
    </div>
  </section>



  <!-- Our Recruitment Process Section -->
  <section class="process" aria-labelledby="process-title">
    <div class="process-overlay"></div>
    <div class="process-container">
      <h3 id="process-title" class="process-heading">Our Recruitment Process</h3>
      <p class="process-description">At Ramasia International, we are committed to helping highly skilled and motivated
        individuals who share our passion<br> for delivering exceptional results.
        Our recruitment process is designed to identify the best-fit candidates <br>for our organization and ensure a
        smooth, easy, and effective hiring process.</p>
      <p class="process-sub">Find jobs with 3 easy steps:</p>
      <div class="process-steps">
        <div class="step-card">
          <div class="step-header">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor"
                class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path
                  d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd"
                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
              </svg></div>
            <h4 class="step-title">Register an account to start.</h4>
          </div>
          <p class="step-text">You can register by clicking the "Login/Register" or the "Get Started" button.</p>
          <div class="step-num">1</div>
        </div>
        <div class="step-card">
          <div class="step-header">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor"
                class="bi bi-search" viewBox="0 0 16 16">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
              </svg></div>
            <h4 class="step-title">Explore over thousands of jobs available.</h4>
          </div>
          <p class="step-text">View all available jobs by clicking the "View All Jobs" button.</p>
          <div class="step-num">2</div>
        </div>
        <div class="step-card">
          <div class="step-header">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor"
                class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path
                  d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5z" />
              </svg></div>
            <h4 class="step-title">Send your resume and apply.</h4>
          </div>
          <p class="step-text">Create a resume by clicking the "Create Resume" button to apply.</p>
          <div class="step-num">3</div>
        </div>
        <a class="step-card step-card-cta" href="#" aria-label="Create Resume">
          <span class="cta-circle">→</span>
          <span class="cta-text">Create Resume</span>
        </a>
      </div>
    </div>
  </section>

  <!-- About + Accreditation Section (bottom) -->
  <section class="aa-section" aria-labelledby="aa-title">
    <div class="aa-top">
      <div class="aa-content">
        <h3 id="aa-title" class="sarala-bold aa-heading">RAMASIA INTERNATIONAL MAN POWER SERVICES INC.</h3>
        <p class="aa-sub">DMW-295-LB-03132024-R</p>
        <p class="aa-text">Started its operations in 1999 and is licensed by the Department of Migrant Workers (former
          POEA) on to recruit and deploy all types of land-based workers for overseas under the POEA License No.
          078-LB052820-R.</p>
        <p class="aa-text">In the course of more than seventeen years operation, Ramasia had deployed thousand of
          professional workers to different countries all over the world. Ramasia is presently involved in deploying
          professionals including nurses, caregivers, teachers, computer programmers, web designers & developers plus
          other skilled workers to the USA, United kingdom, Middle East & Asian Countries.</p>
        <div class="aa-actions">
          <a href="#" class="aa-btn aa-btn-primary">Job Seeker →</a>
          <a href="#" class="aa-btn aa-btn-outline">Contact Us</a>
        </div>
      </div>
      <div class="aa-media">
        <img src="../image-source/accreditation-image-1.jpg" alt="Ramasia office" class="aa-img">
        <div class="aa-badge" role="note" aria-label="Award highlight">
          <div class="aa-badge-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
              fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
              <path
                d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
            </svg></div>
          <div class="aa-badge-text">
            <strong>Ranked 2nd</strong> in the Department of Migrant Workers (DMW-POEA) Top 100 Deploying Agencies for
            the month of March 2022
          </div>
        </div>
      </div>
    </div>

    <div class="aa-overlay">ACCREDITATION AND AFFILIATIONS</div>

    <div class="aa-bottom" aria-label="Accreditation logos">
      <div class="aa-logos">
        <img src="../image-source/accreditation-image-logo-1.jpg" alt="Accreditation 1">
        <img src="../image-source/accreditation-image-logo-2.jpg" alt="Accreditation 2">
        <img src="../image-source/accreditation-image-logo-3.jpg" alt="Accreditation 3">
        <img src="../image-source/accreditation-image-logo-4.jpg" alt="Accreditation 4">
        <img src="../image-source/accreditation-image-logo-5.jpg" alt="Accreditation 5">
        <img src="../image-source/accreditation-image-logo-6.jpg" alt="Accreditation 6">
      </div>
    </div>
  </section>

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



      <div class="chat-toggle-btn" id="chatToggle">
        <i class="bi bi-chat-dots-fill"></i>
      </div>

      <div class="chat-window" id="chatWindow">
        <div class="chat-header">
          <strong>Ramasia Assistant</strong>
          <button id="chatClose">✖</button>
        </div>
        <div class="chat-body" id="chatBody">
          <div class="msg bot">Welcome to Ramasia! Ask me about 'jobs', 'fees', or our 'process'.</div>
        </div>
        <div class="chat-input-area">
          <input type="text" id="chatInput" placeholder="Type a message...">
          <button id="chatSend">Send</button>
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


  <!-- Shared Navbar Behavior -->
  <!-- ===================================
       Auth Modals - Login & Sign Up
       =================================== -->
  <?php
  include_once './components/auth.php';
  ?>

  <!-- ===================================
       Modal JavaScript
       =================================== -->

</body>

</html>

<script src="./js-function/chatbot.js"></script>