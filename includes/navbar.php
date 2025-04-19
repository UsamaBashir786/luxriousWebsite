<header>
  <div class="container">
    <div class="header-content">
      <div class="logo">
        <img src="assets/img/logo-1.png" alt="Royal Arm Software Logo">
        <h1>ROYAL ARM</h1>
      </div>
      <button class="menu-toggle"><i class="fas fa-bars"></i></button>
      <nav>
        <ul>
          <li><a href="index.php#home">Home</a></li>
          <li><a href="enroll.php">Courses</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle">Others <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="resume.php">Resumes</a></li>
              <li><a href="tech-trends.php">Trends</a></li>
              <li><a href="success-stories.php">Success_Stories</a></li>
              <li><a href="index.php#expertise">Expertise</a></li>
              <li><a href="index.php#expertise">Join_Team</a></li>
            </ul>
          </li>
          <li><a href="components.php">Components</a></li>
          <li><a href="donate.php">Donate</a></li>
          <li><a href="index.php#contact">Contact</a></li>
        </ul>
      </nav>
      <button class="cta-button header-cta" onclick="window.location.href='enroll.php'">Enroll Now</button>
    </div>
  </div>
</header>
<style>
  /* Dropdown Styles */
  .dropdown {
    position: relative;
  }

  .dropdown-toggle {
    display: flex;
    align-items: center;
  }

  .dropdown-toggle i {
    margin-left: 5px;
    font-size: 12px;
    transition: transform 0.3s;
  }

  .dropdown:hover .dropdown-toggle i {
    transform: rotate(180deg);
  }

  .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: var(--primary);
    min-width: 200px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    padding: 10px 0;
    border: 1px solid rgba(200, 164, 92, 0.3);
    z-index: 1001;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.3s;
  }

  .dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  .dropdown-menu li {
    margin: 0 !important;
  }

  .dropdown-menu li a {
    display: block;
    padding: 8px 20px;
    color: var(--light);
    text-decoration: none;
    transition: all 0.3s;
  }

  .dropdown-menu li a:hover {
    color: var(--secondary);
    background-color: rgba(200, 164, 92, 0.1);
  }

  /* Mobile responsive dropdown */
  @media (max-width: 768px) {
    .dropdown-menu {
      position: static;
      background-color: rgba(26, 26, 26, 0.9);
      display: none;
      opacity: 1;
      visibility: visible;
      transform: none;
      box-shadow: none;
      width: 100%;
      padding: 0;
      border: none;
      border-left: 2px solid var(--secondary);
      margin-left: 20px;
    }

    .dropdown.active .dropdown-menu {
      display: block;
    }

    .dropdown-toggle {
      justify-content: space-between;
      width: 100%;
    }

    .dropdown-menu li a {
      padding: 10px 15px;
    }
  }
</style>

<script>
  // Add this script to your existing script or at the end of navbar.php
  document.addEventListener('DOMContentLoaded', function() {
    // For mobile dropdown toggle
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
      const dropdownToggle = dropdown.querySelector('.dropdown-toggle');

      // Only add click handler for mobile view
      dropdownToggle.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
          e.preventDefault();
          dropdown.classList.toggle('active');
        }
      });
    });
  });
</script>