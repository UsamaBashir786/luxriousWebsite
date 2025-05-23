<?php
// Start the session or include any necessary configurations
// session_start(); // Uncomment if session management is needed
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Components | Royal Arm Software Company</title>
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
    }

    .container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Header styles */
    header {
      padding: 20px 0;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      background-color: rgba(26, 26, 26, 0.9);
      backdrop-filter: blur(5px);
      border-bottom: 1px solid rgba(200, 164, 92, 0.3);
    }

    .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 60px;
      margin-right: 15px;
    }

    .logo h1 {
      font-size: 24px;
      color: var(--secondary);
      font-weight: 400;
      letter-spacing: 2px;
    }

    nav {
      display: flex;
      align-items: center;
    }

    nav ul {
      display: flex;
      list-style: none;
    }

    nav ul li {
      margin-left: 40px;
    }

    nav ul li a {
      color: var(--light);
      text-decoration: none;
      font-size: 16px;
      letter-spacing: 1px;
      transition: color 0.3s;
      text-transform: uppercase;
    }

    nav ul li a:hover {
      color: var(--secondary);
    }

    .cta-button {
      background-color: transparent;
      border: 2px solid var(--secondary);
      color: var(--secondary);
      padding: 10px 25px;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s;
      text-transform: uppercase;
      letter-spacing: 1px;
      border-radius: 4px;
    }

    .cta-button:hover {
      background-color: var(--secondary);
      color: var(--dark);
    }

    .menu-toggle {
      display: none;
      font-size: 24px;
      color: var(--secondary);
      background: none;
      border: none;
      cursor: pointer;
      padding: 10px;
    }

    /* Hero section */
    .hero {
      padding: 120px 0 60px;
      text-align: center;
      background: linear-gradient(rgba(10, 10, 10, 0.7), rgba(10, 10, 10, 0.7)), url('/api/placeholder/1400/400') center/cover no-repeat;
      margin-bottom: 60px;
    }

    .hero h2 {
      font-size: 48px;
      color: var(--light);
      font-weight: 400;
      margin-bottom: 20px;
    }

    .hero h2 span {
      color: var(--secondary);
    }

    .hero p {
      font-size: 18px;
      color: rgba(245, 245, 245, 0.8);
      max-width: 600px;
      margin: 0 auto;
    }

    /* Components Section */
    .components-section {
      padding: 60px 0;
      background-color: var(--dark);
    }

    .category-title {
      font-size: 28px;
      color: var(--secondary);
      margin-bottom: 20px;
      font-weight: 400;
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

    .price {
      font-size: 18px;
      color: var(--light);
      margin-bottom: 10px;
    }

    /* Footer */
    footer {
      padding: 50px 0;
      background-color: var(--dark);
      text-align: center;
    }

    .footer-content {
      max-width: 600px;
      margin: 0 auto;
    }

    .footer-logo {
      margin-bottom: 30px;
    }

    .footer-logo img {
      height: 60px;
    }

    .footer-links {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }

    .footer-links a {
      color: var(--light);
      margin: 0 15px;
      text-decoration: none;
      font-size: 16px;
      transition: color 0.3s;
    }

    .footer-links a:hover {
      color: var(--secondary);
    }

    .social-links {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }

    .social-links a {
      width: 40px;
      height: 40px;
      background-color: rgba(200, 164, 92, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 10px;
      color: var(--light);
      transition: background-color 0.3s;
    }

    .social-links a:hover {
      background-color: var(--secondary);
      color: var(--dark);
    }

    .copyright {
      color: rgba(245, 245, 245, 0.5);
      font-size: 14px;
    }

    /* Responsive styles */
    @media (max-width: 1200px) {
      .container {
        max-width: 960px;
      }

      .hero h2 {
        font-size: 40px;
      }
    }

    @media (max-width: 992px) {
      .container {
        max-width: 720px;
      }

      .hero h2 {
        font-size: 36px;
      }

      .category-title {
        font-size: 24px;
      }
    }

    @media (max-width: 768px) {
      .container {
        max-width: 540px;
      }

      .header-content {
        flex-wrap: wrap;
        position: relative;
      }

      .logo {
        margin-bottom: 10px;
      }

      .menu-toggle {
        display: block;
      }

      nav {
        width: 100%;
        display: none;
      }

      nav.active {
        display: block;
      }

      nav ul {
        flex-direction: column;
        align-items: center;
        background-color: var(--primary);
        padding: 20px 0;
      }

      nav ul li {
        margin: 10px 0;
      }

      .cta-button.header-cta {
        display: none;
      }

      .hero {
        padding: 100px 0 40px;
      }

      .hero h2 {
        font-size: 32px;
        letter-spacing: 2px;
      }

      .hero p {
        font-size: 16px;
      }

      .components-section {
        padding: 40px 0;
      }
    }

    @media (max-width: 576px) {
      .container {
        padding: 0 15px;
      }

      .logo h1 {
        font-size: 20px;
      }

      .hero h2 {
        font-size: 28px;
      }

      .hero p {
        font-size: 15px;
      }

      .component-card h4 {
        font-size: 18px;
      }

      .cta-button {
        font-size: 12px;
        padding: 6px 16px;
      }
    }
  </style>
</head>

<body>
  <!-- Header -->
<?php include 'includes/navbar.php' ?>
  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h2>Discover <span>Free Components</span></h2>
      <p>Access our collection of free, reusable components to elevate your web development projects, organized by category for seamless integration.</p>
    </div>
  </section>

  <!-- Components Section -->
  <section class="components-section" id="components">
    <div class="container">
      <!-- UI Kits -->
      <div class="category">
        <h3 class="category-title">UI Kits</h3>
        <div class="components-grid">
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="Tailwind UI Kit">
            <h4>Tailwind UI Kit</h4>
            <p>Reusable UI components like buttons, cards, and modals for Tailwind CSS.</p>
            <div class="price">Free</div>
            <button class="cta-button">Download</button>
          </div>
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="React UI Kit">
            <h4>React UI Kit</h4>
            <p>Pre-built React components for dynamic, Tailwind-styled interfaces.</p>
            <div class="price">Free</div>
            <button class="cta-button">Download</button>
          </div>
        </div>
      </div>

      <!-- Animation Packs -->
      <div class="category">
        <h3 class="category-title">Animation Packs</h3>
        <div class="components-grid">
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="GSAP Animation Pack">
            <h4>GSAP Animation Pack</h4>
            <p>Smooth scroll-triggered animations using GSAP for engaging websites.</p>
            <div class="price">Free</div>
            <button class="cta-button">Download</button>
          </div>
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="AOS Animation Pack">
            <h4>AOS Animation Pack</h4>
            <p>Lightweight animate-on-scroll library for performant animations.</p>
            <div class="price">Free</div>
            <button class="cta-button">Download</button>
          </div>
        </div>
      </div>

      <!-- Website Templates -->
      <div class="category">
        <h3 class="category-title">Website Templates</h3>
        <div class="components-grid">
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="Portfolio Template">
            <h4>Portfolio Template</h4>
            <p>Responsive portfolio template for developers, built with Tailwind CSS.</p>
            <div class="price">Free</div>
            <button class="cta-button">Download</button>
          </div>
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="E-Commerce Template">
            <h4>E-Commerce Template</h4>
            <p>Modern e-commerce template with product grids and checkout UI.</p>
            <div class="price">Free</div>
            <button class="cta-button">Download</button>
          </div>
        </div>
      </div>

      <!-- Form Components -->
      <div class="category">
        <h3 class="category-title">Form Components</h3>
        <div class="components-grid">
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="Contact Form">
            <h4>Contact Form</h4>
            <p>Accessible, responsive contact form with validation and Tailwind styling.</p>
            <div class="price">Free</div>
            <button class="cta-button">Download</button>
          </div>
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="Login Form">
            <h4>Login Form</h4>
            <p>Secure login form with password toggle and error handling.</p>
            <div class="price">Free</div>
            <button class="cta-button">Download</button>
          </div>
        </div>
      </div>

      <!-- Navigation Components -->
      <div class="category">
        <h3 class="category-title">Navigation Components</h3>
        <div class="components-grid">
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="Sticky Navbar">
            <h4>Sticky Navbar</h4>
            <p>Responsive sticky navigation bar with dropdown menu support.</p>
            <div class="price">Free</div>
            <button class="cta-button">Download</button>
          </div>
          <div class="component-card">
            <img src="/api/placeholder/300/150" alt="Sidebar Menu">
            <h4>Sidebar Menu</h4>
            <p>Collapsible sidebar menu for dashboards and admin panels.</p>
            <div class="price">Free</div>
            <button class="cta-button">Download</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <img src="/api/placeholder/120/60" alt="Royal Arm Software Logo">
        </div>
        <div class="footer-links">
          <a href="index.php">Home</a>
          <a href="enroll-now.php">Courses</a>
          <a href="index.php#components">Components</a>
          <a href="contact.php">Contact</a>
        </div>
        <div class="social-links">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <p class="copyright">© 2025 Royal Arm Software Company. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    // Menu Toggle
    document.querySelector('.menu-toggle').addEventListener('click', () => {
      document.querySelector('nav').classList.toggle('active');
    });

    // GSAP Animations
    gsap.from('.hero', { opacity: 0, y: 50, duration: 1, delay: 0.2 });
    gsap.from('.component-card', { opacity: 0, y: 50, duration: 1, stagger: 0.2, delay: 0.4 });
  </script>
</body>

</html>
<?php
// Add any server-side logic here, e.g., fetching component data from a database
?>