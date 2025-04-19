<?php include 'preloader.php' ?>
<header>
  <div class="container">
    <div class="header-content">
      <div class="logo" onclick="window.location.href='index.php'">
        <img src="assets/img/logo-1.png" alt="Royal Arm Software Logo">
        <h1>ROYAL ARM</h1>
      </div>
      <button class="menu-toggle"><i class="fas fa-bars"></i></button>
      <nav>
        <ul>
          <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' && (!isset($_GET['section']) || $_GET['section'] == 'home') ? 'active' : ''; ?>">
            <a href="index.php?section=home">Home<?php if (basename($_SERVER['PHP_SELF']) == 'index.php' && (!isset($_GET['section']) || $_GET['section'] == 'home')) { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a>
          </li>
          <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'enroll.php' ? 'active' : ''; ?>">
            <a href="enroll.php">Courses<?php if (basename($_SERVER['PHP_SELF']) == 'enroll.php') { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a>
          </li>
          <li class="dropdown <?php echo in_array(basename($_SERVER['PHP_SELF']), ['resume.php', 'components.php', 'success-stories.php']) || (basename($_SERVER['PHP_SELF']) == 'index.php' && isset($_GET['section']) && $_GET['section'] == 'expertise') ? 'active' : ''; ?>">
            <a href="javascript:void(0)" class="dropdown-toggle">Resources<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="resume.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'resume.php' ? 'active' : ''; ?>">Resumes<?php if (basename($_SERVER['PHP_SELF']) == 'resume.php') { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a></li>
              <li><a href="components.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'components.php' ? 'active' : ''; ?>">Components<?php if (basename($_SERVER['PHP_SELF']) == 'components.php') { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a></li>
              <li><a href="success-stories.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'success-stories.php' ? 'active' : ''; ?>">Success_Sories<?php if (basename($_SERVER['PHP_SELF']) == 'success-stories.php') { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a></li>
              <li><a href="index.php?section=expertise" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' && isset($_GET['section']) && $_GET['section'] == 'expertise' ? 'active' : ''; ?>">Expertise<?php if (basename($_SERVER['PHP_SELF']) == 'index.php' && isset($_GET['section']) && $_GET['section'] == 'expertise') { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a></li>
            </ul>
          </li>
          <li class="dropdown <?php echo in_array(basename($_SERVER['PHP_SELF']), ['tech-trends.php', 'become-team-member.php', 'certification.php']) ? 'active' : ''; ?>">
            <a href="javascript:void(0)" class="dropdown-toggle">Valuable<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="tech-trends.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'tech-trends.php' ? 'active' : ''; ?>">Trends<?php if (basename($_SERVER['PHP_SELF']) == 'tech-trends.php') { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a></li>
              <li><a href="become-team-member.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'become-team-member.php' ? 'active' : ''; ?>">Join_Team<?php if (basename($_SERVER['PHP_SELF']) == 'become-team-member.php') { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a></li>
              <li><a href="certification.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'certification.php' ? 'active' : ''; ?>">Certifications<?php if (basename($_SERVER['PHP_SELF']) == 'certification.php') { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a></li>
            </ul>
          </li>
          <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'donate.php' ? 'active' : ''; ?>">
            <a href="donate.php">Donate<?php if (basename($_SERVER['PHP_SELF']) == 'donate.php') { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a>
          </li>
          <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' && isset($_GET['section']) && $_GET['section'] == 'contact' ? 'active' : ''; ?>">
            <a href="index.php#contact">Contact<?php if (basename($_SERVER['PHP_SELF']) == 'index.php' && isset($_GET['section']) && $_GET['section'] == 'contact') { echo '<svg class="active-icon" viewBox="0 0 24 24" aria-label="Active page"><path fill="var(--secondary)" d="M12 2.5c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5S14.5 2.5 12 2.5zm0 7c-1.4 0-2.5-1.1-2.5-2.5S10.6 4.5 12 4.5s2.5 1.1 2.5 2.5S13.4 9.5 12 9.5zM12 22c-2.8 0-5-2.2-5-5h2c0 1.7 1.3 3 3 3s3-1.3 3-3h2c0 2.8-2.2 5-5 5z"/></svg>'; } ?></a>
          </li>
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

  /* Active Link Styles */
  nav ul li.active > a,
  .dropdown-menu li a.active {
    color: var(--secondary);
    font-weight: 500;
    position: relative;
  }

  .active-icon {
    width: 16px;
    height: 16px;
    margin-left: 8px;
    vertical-align: middle;
    transition: transform 0.3s ease;
  }

  nav ul li.active > a:hover .active-icon,
  .dropdown-menu li a.active:hover .active-icon {
    transform: scale(1.2);
  }

  /* Dropdown Active Parent */
  .dropdown.active > .dropdown-toggle {
    color: var(--secondary);
  }

  /* Mobile Responsive Styles */
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

    nav ul li.active > a,
    .dropdown-menu li a.active {
      background-color: rgba(200, 164, 92, 0.1);
      padding-left: 25px;
    }

    .active-icon {
      width: 14px;
      height: 14px;
    }

    .dropdown.active > .dropdown-toggle {
      background-color: rgba(200, 164, 92, 0.1);
    }
  }
</style>

<script>
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