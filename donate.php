<?php
// Start the session or include any necessary configurations
// session_start(); // Uncomment if session management is needed
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donate | Royal Arm Software Company</title>
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

    /* Header Styles */
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

    /* Hero Section */
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

    /* Donation Form Section */
    .donation-section {
      padding: 60px 0;
      background-color: var(--dark);
    }

    .donation-form {
      max-width: 600px;
      margin: 0 auto;
      background-color: rgba(26, 26, 26, 0.8);
      padding: 40px;
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 10px;
      color: var(--light);
      font-size: 16px;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      background-color: rgba(245, 245, 245, 0.1);
      border: 1px solid rgba(200, 164, 92, 0.2);
      color: var(--light);
      font-size: 16px;
      border-radius: 4px;
    }

    .form-group input:focus {
      outline: none;
      border-color: var(--secondary);
    }

    .donation-amounts {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 20px;
    }

    .donation-amounts input[type="radio"] {
      display: none;
    }

    .donation-amounts label {
      flex: 1;
      min-width: 100px;
      padding: 12px;
      background-color: rgba(245, 245, 245, 0.1);
      border: 1px solid rgba(200, 164, 92, 0.2);
      text-align: center;
      cursor: pointer;
      color: var(--light);
      border-radius: 4px;
      transition: all 0.3s;
    }

    .donation-amounts input[type="radio"]:checked + label {
      background-color: var(--secondary);
      color: var(--dark);
      border-color: var(--secondary);
    }

    .donation-amounts label:hover {
      border-color: var(--secondary);
    }

    /* Impact Section */
    .impact-section {
      padding: 60px 0;
      background-color: var(--primary);
    }

    .impact-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .impact-card {
      background-color: rgba(26, 26, 26, 0.8);
      padding: 20px;
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      transition: transform 0.3s, border-color 0.3s;
      text-align: center;
    }

    .impact-card:hover {
      transform: translateY(-5px);
      border-color: var(--secondary);
    }

    .impact-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .impact-card h4 {
      font-size: 20px;
      color: var(--secondary);
      margin-bottom: 10px;
    }

    .impact-card p {
      color: rgba(245, 245, 245, 0.7);
    }

    /* Footer Styles */
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

    /* Responsive Styles */
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
    }

    @media (max-width: 768px) {
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
      }

      .hero p {
        font-size: 16px;
      }

      .donation-section,
      .impact-section {
        padding: 40px 0;
      }

      .donation-form {
        padding: 30px;
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

      .donation-form {
        padding: 20px;
      }

      .impact-card h4 {
        font-size: 18px;
      }
    }
  </style>
</head>

<body>
  <!-- Header -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h2>Support <span>Royal Arm’s Mission</span></h2>
      <p>Your donation empowers us to provide free education, develop open-source components, and drive innovation in web development.</p>
    </div>
  </section>

  <!-- Donation Form Section -->
  <section class="donation-section">
    <div class="container">
      <div class="donation-form">
        <h3 class="text-2xl text-[var(--secondary)] font-medium text-center mb-6">Make a Donation</h3>
        <form action="/process-donation.php" method="POST">
          <div class="form-group">
            <label for="amount">Choose an Amount</label>
            <div class="donation-amounts">
              <input type="radio" name="amount" id="amount-10" value="10" checked>
              <label for="amount-10">100 pkr</label>
              <input type="radio" name="amount" id="amount-25" value="25">
              <label for="amount-25">200 pkr</label>
              <input type="radio" name="amount" id="amount-50" value="50">
              <label for="amount-50">500 pkr</label>
              <input type="radio" name="amount" id="amount-100" value="100">
              <label for="amount-100">1000 pkr</label>
              <input type="radio" name="amount" id="amount-custom" value="custom">
              <label for="amount-custom">Custom</label>
            </div>
          </div>
          <div class="form-group" id="custom-amount-group" style="display: none;">
            <label for="custom-amount">Enter Custom Amount</label>
            <input type="number" id="custom-amount" name="custom-amount" placeholder="pkr 0.00" min="1">
          </div>
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="john.doe@example.com" required>
          </div>
          <button type="submit" class="cta-button w-full text-center">Donate Now</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Impact Section -->
  <section class="impact-section">
    <div class="container">
      <h3 class="text-2xl text-[var(--secondary)] font-medium text-center mb-6">Your Impact</h3>
      <div class="impact-grid">
        <div class="impact-card">
          <img src="/api/placeholder/300/150" alt="Free Education">
          <h4>Free Education</h4>
          <p>Fund free AI-driven courses for aspiring developers worldwide.</p>
        </div>
        <div class="impact-card">
          <img src="/api/placeholder/300/150" alt="Open-Source Components">
          <h4>Open-Source Components</h4>
          <p>Support the development of free, reusable UI and animation components.</p>
        </div>
        <div class="impact-card">
          <img src="/api/placeholder/300/150" alt="Innovation">
          <h4>Innovation</h4>
          <p>Drive cutting-edge research in AI and web development technologies.</p>
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
          <a href="donate.php">Donate</a>
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
    gsap.from('.donation-form', { opacity: 0, y: 50, duration: 1, delay: 0.4 });
    gsap.from('.impact-card', { opacity: 0, y: 50, duration: 1, stagger: 0.2, delay: 0.6 });

    // Custom Amount Toggle
    const customRadio = document.getElementById('amount-custom');
    const customAmountGroup = document.getElementById('custom-amount-group');
    document.querySelectorAll('input[name="amount"]').forEach(radio => {
      radio.addEventListener('change', () => {
        customAmountGroup.style.display = radio.id === 'amount-custom' ? 'block' : 'none';
      });
    });
  </script>
</body>

</html>
<?php
// Add server-side logic here, e.g., processing donation form submissions
?>