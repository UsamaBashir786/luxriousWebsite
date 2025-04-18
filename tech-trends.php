<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latest Tech Trends | Royal Arm Software Company</title>
  <style>
    :root {
      --primary: #1a1a1a;
      --secondary: #c8a45c;
      --light: #f5f5f5;
      --dark: #0a0a0a;
      --accent: #c8a45c;
      --accent-light: rgba(200, 164, 92, 0.2);
      --accent-medium: rgba(200, 164, 92, 0.5);
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
      height: 60vh;
      background: linear-gradient(rgba(10, 10, 10, 0.7), rgba(10, 10, 10, 0.7)), url('/api/placeholder/1400/500') center/cover no-repeat;
      display: flex;
      align-items: center;
      text-align: center;
    }

    .hero-content {
      max-width: 800px;
      margin: 0 auto;
      padding-top: 80px;
    }

    .hero h2 {
      font-size: 48px;
      font-weight: 400;
      color: var(--light);
      margin-bottom: 20px;
      letter-spacing: 3px;
    }

    .hero h2 span {
      color: var(--secondary);
    }

    .hero p {
      font-size: 18px;
      margin-bottom: 40px;
      color: rgba(245, 245, 245, 0.8);
      line-height: 1.8;
    }

    /* Trend Tabs Section */
    .trends-section {
      padding: 100px 0;
      background-color: var(--dark);
    }

    .section-title {
      text-align: center;
      margin-bottom: 60px;
    }

    .section-title h3 {
      font-size: 36px;
      color: var(--secondary);
      font-weight: 400;
      letter-spacing: 2px;
      margin-bottom: 15px;
    }

    .section-title p {
      color: rgba(245, 245, 245, 0.7);
      max-width: 600px;
      margin: 0 auto;
    }

    .tabs {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }

    .tab {
      background-color: transparent;
      border: none;
      padding: 15px 30px;
      font-size: 18px;
      color: var(--light);
      cursor: pointer;
      transition: all 0.3s;
      position: relative;
      margin: 0 5px 10px;
    }

    .tab::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 2px;
      background-color: var(--secondary);
      transition: width 0.3s;
    }

    .tab:hover::after,
    .tab.active::after {
      width: 80%;
    }

    .tab.active {
      color: var(--secondary);
    }

    .tab-content {
      display: none;
      animation: fadeIn 0.5s ease-in-out;
    }

    .tab-content.active {
      display: block;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Language/Framework Cards */
    .trend-cards {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 30px;
    }

    .trend-card {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s, border 0.3s;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .trend-card:hover {
      transform: translateY(-10px);
      border: 1px solid var(--secondary);
    }

    .trend-header {
      padding: 20px;
      background-color: rgba(200, 164, 92, 0.1);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .trend-name {
      display: flex;
      align-items: center;
    }

    .trend-name img {
      width: 40px;
      height: 40px;
      margin-right: 15px;
      object-fit: contain;
    }

    .trend-name h4 {
      font-size: 22px;
      color: var(--secondary);
      font-weight: 400;
    }

    .trend-popularity {
      background-color: var(--secondary);
      color: var(--dark);
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 14px;
      font-weight: 600;
    }

    .trend-content {
      padding: 20px;
    }

    .trend-description {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 20px;
      font-size: 16px;
    }

    .trend-stats {
      margin-bottom: 20px;
    }

    .trend-stat {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .stat-label {
      color: rgba(245, 245, 245, 0.6);
    }

    .stat-value {
      color: var(--secondary);
      font-weight: 500;
    }

    .trend-features {
      margin-bottom: 20px;
    }

    .trend-features h5 {
      font-size: 16px;
      color: var(--secondary);
      margin-bottom: 10px;
      font-weight: 400;
    }

    .trend-features ul {
      list-style: none;
    }

    .trend-features li {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 8px;
      display: flex;
      align-items: center;
    }

    .trend-features li i {
      color: var(--secondary);
      margin-right: 10px;
      font-size: 14px;
    }

    .trend-links {
      display: flex;
      justify-content: space-between;
    }

    .trend-links a {
      color: var(--secondary);
      text-decoration: none;
      font-size: 14px;
      display: flex;
      align-items: center;
      transition: color 0.3s;
    }

    .trend-links a:hover {
      color: var(--light);
    }

    .trend-links a i {
      margin-right: 5px;
    }

    /* Tech Stack Section */
    .stack-section {
      padding: 100px 0;
      background-color: var(--primary);
    }

    .stack-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
    }

    .stack-card {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s, border 0.3s;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .stack-card:hover {
      transform: translateY(-10px);
      border: 1px solid var(--secondary);
    }

    .stack-header {
      padding: 20px;
      background-color: rgba(200, 164, 92, 0.1);
      text-align: center;
    }

    .stack-header h4 {
      font-size: 24px;
      color: var(--secondary);
      font-weight: 400;
    }

    .stack-content {
      padding: 30px;
    }

    .stack-description {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 30px;
      font-size: 16px;
      line-height: 1.8;
    }

    .stack-technologies {
      margin-bottom: 30px;
    }

    .stack-technologies h5 {
      font-size: 18px;
      color: var(--secondary);
      margin-bottom: 15px;
      font-weight: 400;
    }

    .tech-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .tech-tag {
      background-color: rgba(200, 164, 92, 0.1);
      color: var(--light);
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 14px;
      display: flex;
      align-items: center;
      border: 1px solid rgba(200, 164, 92, 0.3);
    }

    .tech-tag i {
      margin-right: 5px;
      font-size: 12px;
      color: var(--secondary);
    }

    .stack-companies {
      margin-bottom: 30px;
    }

    .stack-companies h5 {
      font-size: 18px;
      color: var(--secondary);
      margin-bottom: 15px;
      font-weight: 400;
    }

    .company-logos {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    .company-logo {
      width: 80px;
      height: 40px;
      background-color: rgba(245, 245, 245, 0.1);
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 5px;
    }

    .company-logo img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
    }

    .stack-cta {
      text-align: center;
      margin-top: 20px;
    }

    /* Tools Section */
    .tools-section {
      padding: 100px 0;
      background-color: var(--dark);
    }

    .tools-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 30px;
    }

    .tool-card {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      padding: 30px;
      text-align: center;
      transition: transform 0.3s, border 0.3s;
    }

    .tool-card:hover {
      transform: translateY(-10px);
      border: 1px solid var(--secondary);
    }

    .tool-icon {
      width: 80px;
      height: 80px;
      margin: 0 auto 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: rgba(200, 164, 92, 0.1);
      border-radius: 50%;
    }

    .tool-icon i {
      font-size: 40px;
      color: var(--secondary);
    }

    .tool-card h4 {
      font-size: 20px;
      color: var(--secondary);
      margin-bottom: 15px;
      font-weight: 400;
    }

    .tool-card p {
      color: rgba(245, 245, 245, 0.7);
      margin-bottom: 20px;
      font-size: 15px;
    }

    .tool-card a {
      color: var(--secondary);
      text-decoration: none;
      font-size: 14px;
      transition: color 0.3s;
      display: inline-flex;
      align-items: center;
    }

    .tool-card a i {
      margin-left: 5px;
    }

    .tool-card a:hover {
      color: var(--light);
    }

    /* Industry Report Section */
    .report-section {
      padding: 100px 0;
      background-color: var(--primary);
    }

    .report-content {
      display: flex;
      align-items: center;
      gap: 60px;
    }

    .report-image {
      flex: 1;
      position: relative;
      height: 400px;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
      border: 1px solid rgba(200, 164, 92, 0.3);
    }

    .report-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .report-text {
      flex: 1;
    }

    .report-text h3 {
      font-size: 36px;
      color: var(--secondary);
      margin-bottom: 20px;
      font-weight: 400;
      letter-spacing: 2px;
    }

    .report-text p {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 20px;
      line-height: 1.8;
    }

    .report-stats {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin: 30px 0;
    }

    .stat-box {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      padding: 20px;
      flex: 1;
      min-width: 150px;
      text-align: center;
    }

    .stat-value {
      font-size: 28px;
      color: var(--secondary);
      margin-bottom: 10px;
      font-weight: 500;
    }

    .stat-label {
      color: rgba(245, 245, 245, 0.7);
      font-size: 14px;
    }

    /* Newsletter Section */
    .newsletter-section {
      padding: 100px 0;
      background-color: var(--dark);
    }

    .newsletter-container {
      max-width: 600px;
      margin: 0 auto;
      text-align: center;
    }

    .newsletter-form {
      display: flex;
      margin-top: 40px;
      overflow: hidden;
      border-radius: 8px;
      border: 1px solid rgba(200, 164, 92, 0.2);
    }

    .newsletter-input {
      flex: 1;
      padding: 15px 20px;
      border: none;
      background-color: rgba(26, 26, 26, 0.8);
      color: var(--light);
      font-size: 16px;
    }

    .newsletter-input:focus {
      outline: none;
    }

    .newsletter-button {
      background-color: var(--secondary);
      color: var(--dark);
      border: none;
      padding: 15px 30px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
      font-weight: 500;
    }

    .newsletter-button:hover {
      background-color: var(--light);
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

    /* Charts and visualizations */
    .chart-container {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      padding: 20px;
      margin: 40px 0;
    }

    .chart-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .chart-header h4 {
      font-size: 22px;
      color: var(--secondary);
      font-weight: 400;
    }

    .chart-header select {
      background-color: rgba(200, 164, 92, 0.1);
      border: 1px solid rgba(200, 164, 92, 0.3);
      padding: 8px 15px;
      color: var(--light);
      font-size: 14px;
      border-radius: 4px;
    }

    .chart-header select:focus {
      outline: none;
      border-color: var(--secondary);
    }

    .chart {
      height: 300px;
      display: flex;
      align-items: flex-end;
      gap: 15px;
      margin-top: 20px;
    }

    .chart-bar {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .bar {
      width: 100%;
      background-color: var(--secondary);
      border-radius: 5px 5px 0 0;
      transition: height 0.5s;
    }

    .bar-label {
      margin-top: 10px;
      color: var(--light);
      font-size: 14px;
      text-align: center;
    }

    .bar-value {
      margin-bottom: 5px;
      color: var(--secondary);
      font-size: 14px;
      font-weight: 500;
    }

    /* Responsive styles */
    @media (max-width: 1200px) {
      .container {
        max-width: 960px;
      }

      .hero h2 {
        font-size: 40px;
      }

      .stack-container {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .report-content {
        flex-direction: column;
        gap: 40px;
      }

      .report-image {
        width: 100%;
      }

      .chart {
        height: 250px;
      }
    }

    @media (max-width: 992px) {
      .container {
        max-width: 720px;
      }

      .hero h2 {
        font-size: 36px;
      }

      .section-title h3,
      .report-text h3 {
        font-size: 32px;
      }

      .trend-cards {
        grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
      }

      .trend-name h4 {
        font-size: 20px;
      }

      .tools-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
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
        height: auto;
        min-height: 60vh;
        padding: 120px 0 60px;
      }

      .hero h2 {
        font-size: 32px;
        letter-spacing: 2px;
      }

      .hero p {
        font-size: 16px;
      }

      .trends-section,
      .stack-section,
      .tools-section,
      .report-section,
      .newsletter-section {
        padding: 60px 0;
      }

      .section-title {
        margin-bottom: 40px;
      }

      .section-title h3,
      .report-text h3 {
        font-size: 28px;
      }

      .tabs {
        overflow-x: auto;
        padding-bottom: 15px;
        justify-content: flex-start;
      }

      .tab {
        padding: 10px 20px;
        font-size: 16px;
        flex: 0 0 auto;
      }

      .trend-cards {
        grid-template-columns: 1fr;
      }

      .trend-header {
        padding: 15px;
      }

      .trend-content {
        padding: 15px;
      }

      .report-stats {
        flex-direction: column;
        gap: 15px;
      }

      .newsletter-form {
        flex-direction: column;
      }

      .newsletter-input {
        padding: 12px 15px;
      }

      .newsletter-button {
        padding: 12px 15px;
      }

      .chart {
        overflow-x: auto;
        padding-bottom: 15px;
        height: 200px;
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

      .section-title h3,
      .report-text h3 {
        font-size: 24px;
      }

      .tools-grid {
        grid-template-columns: 1fr 1fr;
      }

      .tool-icon {
        width: 60px;
        height: 60px;
      }

      .tool-icon i {
        font-size: 30px;
      }

      .tool-card h4 {
        font-size: 18px;
      }

      .tool-card p {
        font-size: 14px;
      }

      .chart-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
    }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <header>
    <div class="container">
      <div class="header-content">
        <div class="logo">
          <h1>ROYAL ARM</h1>
        </div>
        <button class="menu-toggle"><i class="fas fa-bars"></i></button>
        <nav>
          <ul>
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#courses">Courses</a></li>
            <li><a href="index.php#expertise">Expertise</a></li>
            <li><a href="index.php#testimonials">Testimonials</a></li>
            <li><a href="index.php#contact">Contact</a></li>
          </ul>
        </nav>
        <button class="cta-button header-cta" onclick="window.location.href='enroll.php'">Enroll Now</button>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h2>Latest <span>Tech Trends</span> 2025</h2>
        <p>Stay ahead in the rapidly evolving tech landscape with our comprehensive analysis of trending programming languages, frameworks, and development stacks.</p>
        <button class="cta-button" onclick="document.getElementById('trends').scrollIntoView({behavior: 'smooth'})">Explore Trends</button>
      </div>
    </div>
  </section>

  <!-- Programming Languages & Frameworks Section -->
  <section class="trends-section" id="trends">
    <div class="container">
      <div class="section-title">
        <h3>Trending Technologies</h3>
        <p>Discover the most in-demand programming languages, frameworks, and technologies driving innovation in 2025.</p>
      </div>

      <div class="tabs">
        <button class="tab active" data-target="languages">Languages</button>
        <button class="tab" data-target="frameworks">Frameworks</button>
        <button class="tab" data-target="databases">Databases</button>
        <button class="tab" data-target="cloud">Cloud & DevOps</button>
        <button class="tab" data-target="aiml">AI & ML</button>
      </div>

      <!-- Programming Languages Tab Content -->
      <div class="tab-content active" id="languages">
        <div class="trend-cards">
          <!-- Python -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="Python Logo">
                <h4>Python</h4>
              </div>
              <div class="trend-popularity">
                #1
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">Python continues to dominate as the most versatile language, powering everything from web development to data science and AI applications.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+22%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">Very High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$120K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Top Use Cases</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Data Science & ML</li>
                  <li><i class="fas fa-check"></i> Web Development (Django, Flask)</li>
                  <li><i class="fas fa-check"></i> Automation & Scripting</li>
                  <li><i class="fas fa-check"></i> AI & LLM Development</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- JavaScript -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="JavaScript Logo">
                <h4>JavaScript</h4>
              </div>
              <div class="trend-popularity">
                #2
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The language of the web remains essential, with TypeScript adoption accelerating and server-side capabilities expanding through Node.js and Deno.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+18%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$115K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Top Use Cases</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Front-end Development</li>
                  <li><i class="fas fa-check"></i> Full-stack (MERN, MEAN)</li>
                  <li><i class="fas fa-check"></i> Mobile Apps (React Native)</li>
                  <li><i class="fas fa-check"></i> Serverless Functions</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- Rust -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="Rust Logo">
                <h4>Rust</h4>
              </div>
              <div class="trend-popularity">
                #3
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The fastest-growing systems programming language, known for memory safety without garbage collection and increasingly adopted for performance-critical applications.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+48%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">Rising</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$145K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Top Use Cases</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Systems Programming</li>
                  <li><i class="fas fa-check"></i> WebAssembly Applications</li>
                  <li><i class="fas fa-check"></i> High-performance Services</li>
                  <li><i class="fas fa-check"></i> Embedded Systems</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- Go -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="Go Logo">
                <h4>Go</h4>
              </div>
              <div class="trend-popularity">
                #4
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">Google's language for cloud-native development continues to grow in popularity for its simplicity, performance, and excellent concurrency support.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+32%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$140K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Top Use Cases</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Cloud Services</li>
                  <li><i class="fas fa-check"></i> Microservices</li>
                  <li><i class="fas fa-check"></i> DevOps Tooling</li>
                  <li><i class="fas fa-check"></i> High-traffic Web Servers</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- TypeScript -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="TypeScript Logo">
                <h4>TypeScript</h4>
              </div>
              <div class="trend-popularity">
                #5
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">Microsoft's typed superset of JavaScript has become the standard for large-scale application development with superior tooling and type safety.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+36%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">Very High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$130K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Top Use Cases</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Enterprise Web Apps</li>
                  <li><i class="fas fa-check"></i> React/Angular/Vue Projects</li>
                  <li><i class="fas fa-check"></i> Node.js Backend</li>
                  <li><i class="fas fa-check"></i> Large-scale Applications</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Frameworks Tab Content -->
      <div class="tab-content" id="frameworks">
        <div class="trend-cards">
          <!-- React -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="React Logo">
                <h4>React</h4>
              </div>
              <div class="trend-popularity">
                #1
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">Facebook's UI library continues to dominate frontend development with its component-based architecture and rich ecosystem.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+28%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">Very High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$125K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Server Components</li>
                  <li><i class="fas fa-check"></i> Concurrent Rendering</li>
                  <li><i class="fas fa-check"></i> React Query Integration</li>
                  <li><i class="fas fa-check"></i> Enhanced React Native Support</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- Next.js -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="Next.js Logo">
                <h4>Next.js</h4>
              </div>
              <div class="trend-popularity">
                #2
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The React framework has become the standard for production applications with its hybrid rendering capabilities and optimized developer experience.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+42%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$135K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> App Router</li>
                  <li><i class="fas fa-check"></i> Server Components</li>
                  <li><i class="fas fa-check"></i> Enhanced Image Optimization</li>
                  <li><i class="fas fa-check"></i> Edge Runtime Support</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- FastAPI -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="FastAPI Logo">
                <h4>FastAPI</h4>
              </div>
              <div class="trend-popularity">
                #3
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The modern, fast Python web framework has seen rapid adoption for its speed, simplicity, and automatic API documentation.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+56%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">Rising</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$130K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> AsyncIO Support</li>
                  <li><i class="fas fa-check"></i> Auto Documentation</li>
                  <li><i class="fas fa-check"></i> Type Hints & Validation</li>
                  <li><i class="fas fa-check"></i> WebSocket Support</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- Svelte -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="Svelte Logo">
                <h4>Svelte</h4>
              </div>
              <div class="trend-popularity">
                #4
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The compiler-based framework continues to gain momentum with its minimal runtime footprint and intuitive reactive programming model.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+38%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">Moderate</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$120K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Compile-time Framework</li>
                  <li><i class="fas fa-check"></i> No Virtual DOM</li>
                  <li><i class="fas fa-check"></i> SvelteKit for Full-stack</li>
                  <li><i class="fas fa-check"></i> Built-in Animations</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- Django -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="Django Logo">
                <h4>Django</h4>
              </div>
              <div class="trend-popularity">
                #5
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The Python web framework remains a top choice for rapid development of secure, maintainable web applications with modern features.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+24%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$125K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Async Views & ORM</li>
                  <li><i class="fas fa-check"></i> Enhanced Security</li>
                  <li><i class="fas fa-check"></i> Admin Interface</li>
                  <li><i class="fas fa-check"></i> REST Framework</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Databases Tab Content -->
      <div class="tab-content" id="databases">
        <div class="trend-cards">
          <!-- PostgreSQL -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="PostgreSQL Logo">
                <h4>PostgreSQL</h4>
              </div>
              <div class="trend-popularity">
                #1
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The advanced open-source relational database continues to lead with powerful features, reliability, and excellent performance.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+32%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">Very High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$135K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Advanced JSON Support</li>
                  <li><i class="fas fa-check"></i> Vector Storage & Search</li>
                  <li><i class="fas fa-check"></i> Horizontal Scaling</li>
                  <li><i class="fas fa-check"></i> TimescaleDB Extension</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- MongoDB -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="MongoDB Logo">
                <h4>MongoDB</h4>
              </div>
              <div class="trend-popularity">
                #2
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The leading document database continues to evolve with real-time capabilities, advanced analytics, and improved relational features.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+28%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$130K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Atlas Vector Search</li>
                  <li><i class="fas fa-check"></i> Serverless Instances</li>
                  <li><i class="fas fa-check"></i> Time Series Collections</li>
                  <li><i class="fas fa-check"></i> Enhanced Aggregation</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- Redis -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="Redis Logo">
                <h4>Redis</h4>
              </div>
              <div class="trend-popularity">
                #3
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The high-performance in-memory database has expanded beyond caching to become a versatile real-time data platform.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+34%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$140K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Redis Stack</li>
                  <li><i class="fas fa-check"></i> Vector Search</li>
                  <li><i class="fas fa-check"></i> Time Series</li>
                  <li><i class="fas fa-check"></i> RedisJSON</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Cloud & DevOps Tab Content -->
      <div class="tab-content" id="cloud">
        <div class="trend-cards">
          <!-- Kubernetes -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="Kubernetes Logo">
                <h4>Kubernetes</h4>
              </div>
              <div class="trend-popularity">
                #1
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The container orchestration platform continues to be the foundation of cloud-native application deployment and management.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+38%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">Very High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$150K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Gateway API</li>
                  <li><i class="fas fa-check"></i> Improved Security Controls</li>
                  <li><i class="fas fa-check"></i> Enhanced Autoscaling</li>
                  <li><i class="fas fa-check"></i> Multi-cluster Management</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- Terraform -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="Terraform Logo">
                <h4>Terraform</h4>
              </div>
              <div class="trend-popularity">
                #2
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">HashiCorp's infrastructure as code tool maintains its position as the standard for multi-cloud infrastructure provisioning.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+42%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$145K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Improved HCL</li>
                  <li><i class="fas fa-check"></i> Enhanced Testing Framework</li>
                  <li><i class="fas fa-check"></i> Custom Functions</li>
                  <li><i class="fas fa-check"></i> Terraform Cloud Integration</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- AI & ML Tab Content -->
      <div class="tab-content" id="aiml">
        <div class="trend-cards">
          <!-- PyTorch -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="PyTorch Logo">
                <h4>PyTorch</h4>
              </div>
              <div class="trend-popularity">
                #1
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">Facebook's deep learning framework continues to be the preferred choice for research and production ML applications.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+45%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">Very High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$150K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Dynamic Computation Graphs</li>
                  <li><i class="fas fa-check"></i> TorchScript for Production</li>
                  <li><i class="fas fa-check"></i> Advanced GPU Optimization</li>
                  <li><i class="fas fa-check"></i> Model Interpretability</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- TensorFlow -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="TensorFlow Logo">
                <h4>TensorFlow</h4>
              </div>
              <div class="trend-popularity">
                #2
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">Google's ML framework remains a powerful choice for production deployments with its comprehensive ecosystem and deployment tools.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+28%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$145K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> TensorFlow Lite</li>
                  <li><i class="fas fa-check"></i> Enterprise-ready Deployment</li>
                  <li><i class="fas fa-check"></i> TensorFlow.js</li>
                  <li><i class="fas fa-check"></i> Google Cloud Integration</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>

          <!-- Hugging Face -->
          <div class="trend-card">
            <div class="trend-header">
              <div class="trend-name">
                <img src="/api/placeholder/40/40" alt="Hugging Face Logo">
                <h4>Hugging Face</h4>
              </div>
              <div class="trend-popularity">
                #3
              </div>
            </div>
            <div class="trend-content">
              <p class="trend-description">The transformers library and ecosystem has become the go-to platform for NLP and generative AI models with its vast model hub.</p>

              <div class="trend-stats">
                <div class="trend-stat">
                  <span class="stat-label">Growth (YoY)</span>
                  <span class="stat-value">+62%</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Job Demand</span>
                  <span class="stat-value">Very High</span>
                </div>
                <div class="trend-stat">
                  <span class="stat-label">Average Salary</span>
                  <span class="stat-value">$155K</span>
                </div>
              </div>

              <div class="trend-features">
                <h5>Key Features</h5>
                <ul>
                  <li><i class="fas fa-check"></i> Transformers Library</li>
                  <li><i class="fas fa-check"></i> Model Hub & Spaces</li>
                  <li><i class="fas fa-check"></i> PEFT & Quantization</li>
                  <li><i class="fas fa-check"></i> Diffusers for Image Gen</li>
                </ul>
              </div>

              <div class="trend-links">
                <a href="#"><i class="fas fa-book"></i> Learn More</a>
                <a href="#"><i class="fas fa-graduation-cap"></i> View Courses</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tech Stack Section -->
  <section class="stack-section" id="stacks">
    <div class="container">
      <div class="section-title">
        <h3>Trending Tech Stacks</h3>
        <p>Discover the most popular technology combinations used by leading companies to build modern applications.</p>
      </div>

      <div class="stack-container">
        <!-- MERN Stack -->
        <div class="stack-card">
          <div class="stack-header">
            <h4>MERN Stack</h4>
          </div>
          <div class="stack-content">
            <p class="stack-description">The MongoDB, Express.js, React, and Node.js stack continues to be one of the most popular JavaScript-based tech stacks for building full-stack web applications with a single language across the entire development stack.</p>

            <div class="stack-technologies">
              <h5>Core Technologies</h5>
              <div class="tech-tags">
                <span class="tech-tag"><i class="fas fa-database"></i> MongoDB</span>
                <span class="tech-tag"><i class="fas fa-server"></i> Express.js</span>
                <span class="tech-tag"><i class="fas fa-code"></i> React</span>
                <span class="tech-tag"><i class="fas fa-terminal"></i> Node.js</span>
                <span class="tech-tag"><i class="fas fa-language"></i> TypeScript</span>
                <span class="tech-tag"><i class="fas fa-box"></i> Redux</span>
              </div>
            </div>

            <div class="stack-companies">
              <h5>Companies Using This Stack</h5>
              <div class="company-logos">
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Netflix Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Airbnb Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Instagram Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="PayPal Logo"></div>
              </div>
            </div>

            <div class="stack-cta">
              <button class="cta-button">View MERN Courses</button>
            </div>
          </div>
        </div>

        <!-- Next.js Full Stack -->
        <div class="stack-card">
          <div class="stack-header">
            <h4>Next.js Full Stack</h4>
          </div>
          <div class="stack-content">
            <p class="stack-description">The Next.js full-stack approach with serverless functions, Prisma ORM, and PostgreSQL has gained tremendous popularity for its simplicity, performance, and developer experience. This stack enables building modern web applications with a unified codebase.</p>

            <div class="stack-technologies">
              <h5>Core Technologies</h5>
              <div class="tech-tags">
                <span class="tech-tag"><i class="fas fa-code"></i> Next.js</span>
                <span class="tech-tag"><i class="fas fa-database"></i> PostgreSQL</span>
                <span class="tech-tag"><i class="fas fa-table"></i> Prisma</span>
                <span class="tech-tag"><i class="fas fa-paint-brush"></i> Tailwind CSS</span>
                <span class="tech-tag"><i class="fas fa-language"></i> TypeScript</span>
                <span class="tech-tag"><i class="fas fa-box"></i> tRPC</span>
              </div>
            </div>

            <div class="stack-companies">
              <h5>Companies Using This Stack</h5>
              <div class="company-logos">
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Vercel Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="TikTok Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Twitch Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Notion Logo"></div>
              </div>
            </div>

            <div class="stack-cta">
              <button class="cta-button">View Next.js Courses</button>
            </div>
          </div>
        </div>

        <!-- Python AI Stack -->
        <div class="stack-card">
          <div class="stack-header">
            <h4>Python AI Stack</h4>
          </div>
          <div class="stack-content">
            <p class="stack-description">The Python-based AI development stack has become increasingly standardized with PyTorch at its core, supported by LangChain for LLM orchestration, FastAPI for serving models, and Vector Databases for embeddings storage.</p>

            <div class="stack-technologies">
              <h5>Core Technologies</h5>
              <div class="tech-tags">
                <span class="tech-tag"><i class="fas fa-brain"></i> PyTorch</span>
                <span class="tech-tag"><i class="fas fa-link"></i> LangChain</span>
                <span class="tech-tag"><i class="fas fa-server"></i> FastAPI</span>
                <span class="tech-tag"><i class="fas fa-database"></i> Pinecone</span>
                <span class="tech-tag"><i class="fas fa-robot"></i> Hugging Face</span>
                <span class="tech-tag"><i class="fas fa-chart-bar"></i> Weights & Biases</span>
              </div>
            </div>

            <div class="stack-companies">
              <h5>Companies Using This Stack</h5>
              <div class="company-logos">
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="OpenAI Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Anthropic Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Cohere Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Stability AI Logo"></div>
              </div>
            </div>

            <div class="stack-cta">
              <button class="cta-button">View AI Stack Courses</button>
            </div>
          </div>
        </div>

        <!-- Cloud Native Stack -->
        <div class="stack-card">
          <div class="stack-header">
            <h4>Cloud Native Stack</h4>
          </div>
          <div class="stack-content">
            <p class="stack-description">The modern cloud-native application stack centers around Kubernetes orchestration with microservices written in Go, infrastructure defined as code with Terraform, and observability tools for monitoring and maintaining reliability.</p>

            <div class="stack-technologies">
              <h5>Core Technologies</h5>
              <div class="tech-tags">
                <span class="tech-tag"><i class="fas fa-dharmachakra"></i> Kubernetes</span>
                <span class="tech-tag"><i class="fas fa-code"></i> Go</span>
                <span class="tech-tag"><i class="fas fa-server"></i> Terraform</span>
                <span class="tech-tag"><i class="fas fa-chart-line"></i> Prometheus</span>
                <span class="tech-tag"><i class="fas fa-project-diagram"></i> Istio</span>
                <span class="tech-tag"><i class="fas fa-clipboard-list"></i> GitOps</span>
              </div>
            </div>

            <div class="stack-companies">
              <h5>Companies Using This Stack</h5>
              <div class="company-logos">
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Google Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Uber Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Shopify Logo"></div>
                <div class="company-logo"><img src="/api/placeholder/80/40" alt="Spotify Logo"></div>
              </div>
            </div>

            <div class="stack-cta">
              <button class="cta-button">View Cloud Native Courses</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Developer Tools Section -->
  <section class="tools-section" id="tools">
    <div class="container">
      <div class="section-title">
        <h3>Essential Developer Tools</h3>
        <p>Explore the most impactful tools helping developers increase productivity and code quality in 2025.</p>
      </div>

      <div class="tools-grid">
        <!-- GitHub Copilot -->
        <div class="tool-card">
          <div class="tool-icon">
            <i class="fas fa-robot"></i>
          </div>
          <h4>GitHub Copilot</h4>
          <p>AI-powered coding assistant that helps developers write code faster with intelligent suggestions and completions.</p>
          <a href="#">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Docker -->
        <div class="tool-card">
          <div class="tool-icon">
            <i class="fas fa-dharmachakra"></i>
          </div>
          <h4>Docker</h4>
          <p>Containerization platform that enables developers to package applications with dependencies for consistent deployment.</p>
          <a href="#">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- VS Code -->
        <div class="tool-card">
          <div class="tool-icon">
            <i class="fas fa-code"></i>
          </div>
          <h4>VS Code</h4>
          <p>Lightweight yet powerful source code editor with extensive extensions ecosystem and built-in Git integration.</p>
          <a href="#">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- GitHub Actions -->
        <div class="tool-card">
          <div class="tool-icon">
            <i class="fas fa-play-circle"></i>
          </div>
          <h4>GitHub Actions</h4>
          <p>CI/CD solution that enables automation of software workflows directly in GitHub repositories.</p>
          <a href="#">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- TypeScript -->
        <div class="tool-card">
          <div class="tool-icon">
            <i class="fas fa-language"></i>
          </div>
          <h4>TypeScript</h4>
          <p>JavaScript superset that adds static types, making code more robust and enabling better IDE features.</p>
          <a href="#">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Vercel -->
        <div class="tool-card">
          <div class="tool-icon">
            <i class="fas fa-cloud-upload-alt"></i>
          </div>
          <h4>Vercel</h4>
          <p>Platform for frontend frameworks and static sites, offering seamless deployment and global CDN distribution.</p>
          <a href="#">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Grafana -->
        <div class="tool-card">
          <div class="tool-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h4>Grafana</h4>
          <p>Observability platform that enables visualization of metrics, logs, and traces from multiple data sources.</p>
          <a href="#">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Tailwind CSS -->
        <div class="tool-card">
          <div class="tool-icon">
            <i class="fas fa-paint-brush"></i>
          </div>
          <h4>Tailwind CSS</h4>
          <p>Utility-first CSS framework for creating custom designs without leaving your HTML, with enhanced plugins.</p>
          <a href="#">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <!-- Skills Demand Chart -->
      <div class="chart-container">
        <div class="chart-header">
          <h4>Developer Skills Demand in 2025</h4>
          <select>
            <option>All Regions</option>
            <option>North America</option>
            <option>Europe</option>
            <option>Asia-Pacific</option>
          </select>
        </div>

        <div class="chart">
          <div class="chart-bar">
            <div class="bar-value">84%</div>
            <div class="bar" style="height: 84%;"></div>
            <div class="bar-label">AI/ML</div>
          </div>
          <div class="chart-bar">
            <div class="bar-value">78%</div>
            <div class="bar" style="height: 78%;"></div>
            <div class="bar-label">Cloud</div>
          </div>
          <div class="chart-bar">
            <div class="bar-value">72%</div>
            <div class="bar" style="height: 72%;"></div>
            <div class="bar-label">JS/TS</div>
          </div>
          <div class="chart-bar">
            <div class="bar-value">68%</div>
            <div class="bar" style="height: 68%;"></div>
            <div class="bar-label">Python</div>
          </div>
          <div class="chart-bar">
            <div class="bar-value">65%</div>
            <div class="bar" style="height: 65%;"></div>
            <div class="bar-label">DevOps</div>
          </div>
          <div class="chart-bar">
            <div class="bar-value">58%</div>
            <div class="bar" style="height: 58%;"></div>
            <div class="bar-label">Go</div>
          </div>
          <div class="chart-bar">
            <div class="bar-value">55%</div>
            <div class="bar" style="height: 55%;"></div>
            <div class="bar-label">Rust</div>
          </div>
          <div class="chart-bar">
            <div class="bar-value">52%</div>
            <div class="bar" style="height: 52%;"></div>
            <div class="bar-label">Cyber</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Industry Report Section -->
  <section class="report-section" id="report">
    <div class="container">
      <div class="section-title">
        <h3>2025 Tech Industry Report</h3>
        <p>Key insights and predictions for the technology industry over the next year, based on comprehensive market analysis.</p>
      </div>

      <div class="report-content">
        <div class="report-image">
          <img src="/api/placeholder/600/400" alt="Tech Industry Report">
        </div>

        <div class="report-text">
          <h3>The Rise of AI-Native Development</h3>
          <p>In 2025, we're witnessing a fundamental shift in how software is built, with AI becoming an integral part of the development process rather than just a feature. Developer workflows now incorporate AI at every stage, from planning and coding to testing and deployment.</p>

          <p>The most successful companies are those that have reimagined their tech stacks and processes to fully leverage AI capabilities, resulting in significantly faster development cycles and more innovative solutions.</p>

          <div class="report-stats">
            <div class="stat-box">
              <div class="stat-value">68%</div>
              <div class="stat-label">Companies Using AI-Powered Development Tools</div>
            </div>
            <div class="stat-box">
              <div class="stat-value">3.5x</div>
              <div class="stat-label">Productivity Increase With AI-Assisted Coding</div>
            </div>
            <div class="stat-box">
              <div class="stat-value">42%</div>
              <div class="stat-label">Reduction in Bug Rates</div>
            </div>
          </div>

          <button class="cta-button">Download Full Report</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="newsletter-section" id="newsletter">
    <div class="container">
      <div class="newsletter-container">
        <div class="section-title">
          <h3>Stay Updated</h3>
          <p>Subscribe to our newsletter to receive monthly updates on the latest tech trends, tutorials, and industry insights.</p>
        </div>

        <div class="newsletter-form">
          <input type="email" class="newsletter-input" placeholder="Enter your email address">
          <button class="newsletter-button">Subscribe</button>
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
          <a href="#home">Home</a>
          <a href="#courses">Courses</a>
          <a href="#expertise">Expertise</a>
          <a href="#testimonials">Testimonials</a>
          <a href="#contact">Contact</a>
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

    // Tabs Functionality
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = tab.dataset.target;

        // Remove active class from all tabs and contents
        tabs.forEach(t => t.classList.remove('active'));
        tabContents.forEach(c => c.classList.remove('active'));

        // Add active class to clicked tab and corresponding content
        tab.classList.add('active');
        document.getElementById(target).classList.add('active');
      });
    });

    // Animate bars on scroll
    const animateBars = () => {
      const chart = document.querySelector('.chart');
      if (!chart) return;

      const chartPosition = chart.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.2;

      if (chartPosition < screenPosition) {
        const bars = document.querySelectorAll('.bar');
        bars.forEach(bar => {
          const height = bar.style.height;
          bar.style.height = '0';
          setTimeout(() => {
            bar.style.height = height;
          }, 100);
        });

        // Remove scroll event after animation
        window.removeEventListener('scroll', animateBars);
      }
    };

    window.addEventListener('scroll', animateBars);

    // Initialize animation on page load
    document.addEventListener('DOMContentLoaded', () => {
      // Show the first tab content
      document.querySelector('.tab.active').click();

      // Check if chart is in view on page load
      setTimeout(animateBars, 500);
    });
  </script>
</body>

</html>