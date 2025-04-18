<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard | Royal Arm Software Company</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --primary: #1a1a1a;
      --secondary: #c8a45c;
      --light: #f5f5f5;
      --dark: #0a0a0a;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Playfair Display', serif;
    }

    body {
      background-color: var(--primary);
      color: var(--light);
      line-height: 1.6;
      overflow-x: hidden;
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 280px;
      height: 100vh;
      background-color: var(--dark);
      padding: 20px;
      border-right: 1px solid rgba(200, 164, 92, 0.2);
      transition: transform 0.3s ease;
      z-index: 1000;
    }

    .sidebar.hidden {
      transform: translateX(-280px);
    }

    .sidebar-logo {
      display: flex;
      align-items: center;
      margin-bottom: 40px;
    }

    .sidebar-logo img {
      height: 50px;
      margin-right: 10px;
    }

    .sidebar-logo h1 {
      font-size: 20px;
      color: var(--secondary);
      font-weight: 400;
    }

    .sidebar-nav ul {
      list-style: none;
    }

    .sidebar-nav li {
      margin-bottom: 20px;
    }

    .sidebar-nav a {
      color: var(--light);
      text-decoration: none;
      font-size: 16px;
      display: flex;
      align-items: center;
      padding: 10px;
      border-radius: 8px;
      transition: all 0.3s;
    }

    .sidebar-nav a i {
      margin-right: 12px;
      font-size: 18px;
    }

    .sidebar-nav a:hover,
    .sidebar-nav a.active {
      background-color: rgba(200, 164, 92, 0.1);
      color: var(--secondary);
    }

    .menu-toggle {
      display: none;
      position: fixed;
      top: 20px;
      left: 20px;
      font-size: 24px;
      color: var(--secondary);
      background: none;
      border: none;
      cursor: pointer;
      z-index: 1100;
    }

    /* Main Content */
    .main-content {
      margin-left: 280px;
      padding: 40px;
      min-height: 100vh;
      background-color: var(--primary);
      transition: margin-left 0.3s ease;
    }

    .main-content.full {
      margin-left: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Header */
    .dashboard-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 40px;
    }

    .dashboard-header h2 {
      font-size: 36px;
      color: var(--secondary);
      font-weight: 400;
    }

    /* Profile Card */
    .profile-card {
      background-color: rgba(26, 26, 26, 0.8);
      padding: 20px;
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      margin-bottom: 40px;
      display: flex;
      align-items: center;
      gap: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .profile-card img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid var(--secondary);
    }

    .profile-card h3 {
      font-size: 24px;
      color: var(--secondary);
      margin-bottom: 10px;
    }

    .profile-card p {
      color: rgba(245, 245, 245, 0.7);
    }

    /* Courses Section */
    .courses-section {
      margin-bottom: 60px;
    }

    .section-title {
      font-size: 28px;
      color: var(--secondary);
      margin-bottom: 20px;
      font-weight: 400;
    }

    .courses-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .course-card {
      background-color: rgba(26, 26, 26, 0.8);
      padding: 20px;
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      transition: transform 0.3s, border-color 0.3s;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .course-card:hover {
      transform: translateY(-5px);
      border-color: var(--secondary);
    }

    .course-card h4 {
      font-size: 20px;
      color: var(--secondary);
      margin-bottom: 10px;
    }

    .course-card p {
      color: rgba(245, 245, 245, 0.7);
      margin-bottom: 10px;
    }

    .progress-bar {
      height: 10px;
      background-color: rgba(245, 245, 245, 0.2);
      border-radius: 5px;
      overflow: hidden;
      margin-bottom: 10px;
    }

    .progress {
      height: 100%;
      background-color: var(--secondary);
      transition: width 0.3s;
    }

    .price {
      font-size: 18px;
      color: var(--light);
      margin-bottom: 10px;
    }

    .cta-button {
      background-color: transparent;
      border: 2px solid var(--secondary);
      color: var(--secondary);
      padding: 8px 20px;
      font-size: 14px;
      cursor: pointer;
      transition: all 0.3s;
      text-transform: uppercase;
      letter-spacing: 1px;
      width: 100%;
      text-align: center;
      border-radius: 4px;
    }

    .cta-button:hover {
      background-color: var(--secondary);
      color: var(--dark);
    }

    /* Lessons Section */
    .lessons-section {
      margin-bottom: 60px;
    }

    .lessons-table {
      width: 100%;
      border-collapse: collapse;
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      overflow: hidden;
    }

    .lessons-table th,
    .lessons-table td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid rgba(200, 164, 92, 0.2);
    }

    .lessons-table th {
      background-color: rgba(200, 164, 92, 0.1);
      color: var(--secondary);
      font-weight: 500;
    }

    .lessons-table td {
      color: rgba(245, 245, 245, 0.7);
    }

    .lessons-table a {
      color: var(--secondary);
      text-decoration: none;
      transition: color 0.3s;
    }

    .lessons-table a:hover {
      color: var(--light);
    }

    .status-completed {
      color: #34c759;
    }

    .status-in-progress {
      color: #ff9500;
    }

    /* Components Section */
    .components-section {
      margin-bottom: 60px;
    }

    .components-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .component-card {
      background-color: rgba(26, 26, 26, 0.8);
      padding: 20px;
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      transition: transform 0.3s, border-color 0.3s;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .component-card:hover {
      transform: translateY(-5px);
      border-color: var(--secondary);
    }

    .component-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .component-card h4 {
      font-size: 20px;
      color: var(--secondary);
      margin-bottom: 10px;
    }

    .component-card p {
      color: rgba(245, 245, 245, 0.7);
      margin-bottom: 10px;
    }

    /* Responsive Styles */
    @media (max-width: 1024px) {
      .sidebar {
        transform: translateX(-280px);
      }

      .sidebar.hidden {
        transform: translateX(0);
      }

      .main-content {
        margin-left: 0;
      }

      .main-content.full {
        margin-left: 0;
      }

      .menu-toggle {
        display: block;
      }
    }

    @media (max-width: 768px) {
      .dashboard-header h2 {
        font-size: 28px;
      }

      .profile-card {
        flex-direction: column;
        text-align: center;
      }

      .courses-section,
      .lessons-section,
      .components-section {
        padding: 20px;
      }

      .section-title {
        font-size: 24px;
      }

      .lessons-table {
        font-size: 14px;
      }

      .lessons-table th,
      .lessons-table td {
        padding: 10px;
      }
    }

    @media (max-width: 576px) {
      .container {
        padding: 0 15px;
      }

      .dashboard-header h2 {
        font-size: 24px;
      }

      .profile-card img {
        width: 60px;
        height: 60px;
      }

      .profile-card h3 {
        font-size: 20px;
      }

      .course-card h4,
      .component-card h4 {
        font-size: 18px;
      }

      .cta-button {
        font-size: 12px;
        padding: 6px 16px;
      }

      .lessons-table {
        display: block;
        overflow-x: auto;
      }
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <button class="menu-toggle"><i class="fas fa-bars"></i></button>
  <aside class="sidebar">
    <div class="sidebar-logo">
      <!-- <img src="/api/placeholder/50/50" alt="Royal Arm Software Logo"> -->
      <h1>ROYAL ARM</h1>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li><a href="#dashboard" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="#courses"><i class="fas fa-book"></i> Courses</a></li>
        <li><a href="#lessons"><i class="fas fa-chalkboard-teacher"></i> Lessons</a></li>
        <li><a href="#components"><i class="fas fa-puzzle-piece"></i> Components</a></li>
        <li><a href="#profile"><i class="fas fa-user"></i> Profile</a></li>
        <li><a href="#logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="main-content">
    <div class="container">
      <!-- Header -->
      <div class="dashboard-header">
        <h2>Welcome, [User Name]</h2>
      </div>

      <!-- Profile Card -->
      <div class="profile-card">
        <img src="/api/placeholder/80/80" alt="User Avatar">
        <div>
          <h3>[User Name]</h3>
          <p>Email: user@example.com</p>
          <p>Enrolled Courses: 4</p>
        </div>
      </div>

      <!-- Courses Section -->
      <section class="courses-section" id="courses">
        <h3 class="section-title">Your Enrolled Courses</h3>
        <div class="courses-grid">
          <div class="course-card">
            <h4>AI Front End Development - Beginner</h4>
            <p>Learn HTML, CSS, JavaScript, and Tailwind CSS with AI tools.</p>
            <div class="price">Free</div>
            <div class="progress-bar"><div class="progress" style="width: 60%;"></div></div>
            <button class="cta-button">Continue Course</button>
          </div>
          <div class="course-card">
            <h4>AI Back End Development - Intermediate</h4>
            <p>Build scalable back ends with GraphQL and AI microservices.</p>
            <div class="price">Free</div>
            <div class="progress-bar"><div class="progress" style="width: 45%;"></div></div>
            <button class="cta-button">Continue Course</button>
          </div>
          <div class="course-card">
            <h4>AI Full Stack Development - Expert</h4>
            <p>Architect AI-driven solutions with Next.js and Kubernetes.</p>
            <div class="price">$999 - $1499</div>
            <div class="progress-bar"><div class="progress" style="width: 20%;"></div></div>
            <button class="cta-button">Continue Course</button>
          </div>
          <div class="course-card">
            <h4>AI Python Django/Flask - Beginner</h4>
            <p>Build web apps with Python, Django, and AI integration.</p>
            <div class="price">Free</div>
            <div class="progress-bar"><div class="progress" style="width: 80%;"></div></div>
            <button class="cta-button">Continue Course</button>
          </div>
        </div>
      </section>

      <!-- Lessons Section -->
      <section class="lessons-section" id="lessons">
        <h3 class="section-title">Your Lessons</h3>
        <table class="lessons-table">
          <thead>
            <tr>
              <th>Course</th>
              <th>Module</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>AI Front End Development</td>
              <td>Introduction to HTML & CSS</td>
              <td class="status-completed">Completed</td>
              <td><a href="#">Review</a></td>
            </tr>
            <tr>
              <td>AI Front End Development</td>
              <td>JavaScript Basics</td>
              <td class="status-in-progress">In Progress</td>
              <td><a href="#">Continue</a></td>
            </tr>
            <tr>
              <td>AI Back End Development</td>
              <td>Node.js Fundamentals</td>
              <td class="status-completed">Completed</td>
              <td><a href="#">Review</a></td>
            </tr>
            <tr>
              <td>AI Full Stack Development</td>
              <td>MERN Stack Setup</td>
              <td class="status-in-progress">In Progress</td>
              <td><a href="#">Continue</a></td>
            </tr>
            <tr>
              <td>AI Python Django/Flask</td>
              <td>Django Models</td>
              <td class="status-completed">Completed</td>
              <td><a href="#">Review</a></td>
            </tr>
          </tbody>
        </table>
      </section>

      <!-- Components Section -->
      <section class="components-section" id="components">
        <h3 class="section-title">Available Components</h3>
        <div class="components-grid">
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="UI Component Kit">
            <h4>UI Component Kit</h4>
            <p>Reusable UI components for Tailwind CSS and React.</p>
            <div class="price">Free - $99</div>
            <button class="cta-button">Access Component</button>
          </div>
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="Animation Pack">
            <h4>Animation Pack</h4>
            <p>GSAP and AOS-powered animations for websites.</p>
            <div class="price">Free - $149</div>
            <button class="cta-button">Access Component</button>
          </div>
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="Website Templates">
            <h4>Website Templates</h4>
            <p>Responsive templates for portfolios and e-commerce.</p>
            <div class="price">Free - $199</div>
            <button class="cta-button">Access Component</button>
          </div>
        </div>
      </section>
    </div>
  </main>

  <script>
    // Sidebar Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    // Initialize sidebar visibility based on screen size
    if (window.innerWidth <= 1024) {
      sidebar.classList.add('hidden');
      mainContent.classList.add('full');
    } else {
      sidebar.classList.remove('hidden');
      mainContent.classList.remove('full');
    }

    menuToggle.addEventListener('click', () => {
      sidebar.classList.toggle('hidden');
      mainContent.classList.toggle('full');
    });

    // GSAP Animations
    gsap.from('.profile-card', { opacity: 0, y: 50, duration: 1, delay: 0.2 });
    gsap.from('.course-card', { opacity: 0, y: 50, duration: 1, stagger: 0.2, delay: 0.4 });
    gsap.from('.lessons-table', { opacity: 0, y: 50, duration: 1, delay: 0.6 });
    gsap.from('.component-card', { opacity: 0, y: 50, duration: 1, stagger: 0.2, delay: 0.8 });

    // Sidebar Navigation Active State
    document.querySelectorAll('.sidebar-nav a').forEach(link => {
      link.addEventListener('click', () => {
        document.querySelector('.sidebar-nav a.active').classList.remove('active');
        link.classList.add('active');
      });
    });
  </script>
</body>

</html>