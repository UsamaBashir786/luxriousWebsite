<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enroll Now | Royal Arm Software Company</title>
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
      height: 80vh;
      background: linear-gradient(rgba(10, 10, 10, 0.7), rgba(10, 10, 10, 0.7)), url('/api/placeholder/1400/800') center/cover no-repeat;
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

    /* Courses section */
    .courses {
      padding: 100px 0;
      background-color: var(--dark);
    }

    .section-title {
      text-align: center;
      margin-bottom: 80px;
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

    .course-category {
      margin-bottom: 60px;
    }

    .course-category h4 {
      font-size: 28px;
      color: var(--secondary);
      text-align: center;
      margin-bottom: 40px;
      font-weight: 400;
    }

    .courses-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px;
    }

    .course-item {
      background-color: rgba(26, 26, 26, 0.8);
      padding: 30px;
      text-align: center;
      border: 1px solid rgba(200, 164, 92, 0.2);
      transition: transform 0.3s, border 0.3s;
    }

    .course-item:hover {
      transform: translateY(-10px);
      border: 1px solid var(--secondary);
    }

    .course-item img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .course-item h5 {
      font-size: 20px;
      color: var(--secondary);
      margin-bottom: 15px;
      font-weight: 400;
    }

    .course-item p {
      color: rgba(245, 245, 245, 0.7);
      margin-bottom: 20px;
    }

    .price {
      font-size: 22px;
      color: var(--light);
      margin-bottom: 20px;
    }

    /* Enrollment Form Section */
    .enrollment {
      padding: 100px 0;
      background-color: var(--primary);
    }

    .enrollment-form {
      max-width: 600px;
      margin: 0 auto;
      background-color: rgba(26, 26, 26, 0.8);
      padding: 40px;
      border: 1px solid rgba(200, 164, 92, 0.2);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 10px;
      color: var(--light);
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 15px;
      background-color: rgba(245, 245, 245, 0.1);
      border: 1px solid rgba(200, 164, 92, 0.2);
      color: var(--light);
      font-size: 16px;
    }

    .form-group select {
      appearance: none;
      background-image: url('data:image/svg+xml;utf8,<svg fill="%23c8a45c" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
      background-repeat: no-repeat;
      background-position: right 10px top 50%;
    }

    .form-group input:focus,
    .form-group select:focus {
      outline: none;
      border-color: var(--secondary);
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

      .courses-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (max-width: 992px) {
      .container {
        max-width: 720px;
      }

      .courses-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
      }

      .hero h2 {
        font-size: 36px;
      }

      .section-title h3 {
        font-size: 32px;
      }

      .course-category h4 {
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
        height: auto;
        min-height: 80vh;
        padding: 120px 0 60px;
      }

      .hero h2 {
        font-size: 32px;
        letter-spacing: 2px;
      }

      .hero p {
        font-size: 16px;
      }

      .courses,
      .enrollment {
        padding: 60px 0;
      }

      .section-title {
        margin-bottom: 40px;
      }

      .section-title h3 {
        font-size: 28px;
      }

      .course-category h4 {
        font-size: 22px;
      }

      .courses-grid {
        grid-template-columns: 1fr;
        gap: 30px;
      }

      .enrollment-form {
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

      .course-item {
        padding: 20px;
      }

      .section-title h3 {
        font-size: 24px;
      }

      .course-category h4 {
        font-size: 20px;
      }

      .enrollment-form {
        padding: 25px 15px;
      }

      .form-group input,
      .form-group select {
        padding: 12px;
      }
    }

    @media (max-width: 375px) {
      .logo h1 {
        font-size: 18px;
      }

      .hero h2 {
        font-size: 24px;
      }

      .hero p {
        font-size: 14px;
      }

      .course-item h5 {
        font-size: 18px;
      }

      .price {
        font-size: 18px;
      }
    }

    @media (max-width: 768px) and (orientation: portrait) {
      .hero {
        min-height: 70vh;
      }
    }

    @media (max-height: 500px) and (orientation: landscape) {
      .hero {
        min-height: 100vh;
      }

      .hero-content {
        padding-top: 100px;
      }
    }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <?php include 'includes/navbar.php' ?>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h2>Master <span>AI-Driven</span> Development</h2>
        <p>Enroll in our AI-powered courses, from Front End to Full Stack and Python Django/Flask, with free Beginner and Intermediate levels and premium Expert courses.</p>
        <button class="cta-button" onclick="document.getElementById('courses').scrollIntoView({behavior: 'smooth'})">Explore Courses</button>
      </div>
    </div>
  </section>

  <!-- Courses Section -->
  <section class="courses" id="courses">
    <div class="container">
      <div class="section-title">
        <h3>Our AI-Driven Courses</h3>
        <p>Discover our comprehensive courses integrating AI with modern development frameworks, with free access for Beginner and Intermediate levels and premium Expert courses.</p>
      </div>

      <!-- AI Front End Development -->
      <div class="course-category">
        <h4>AI Front End Development</h4>
        <div class="courses-grid">
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Beginner AI Front End">
            <h5>Beginner</h5>
            <p>Learn HTML, CSS, JavaScript, and Tailwind CSS with AI-driven design tools. Build responsive interfaces with GSAP animations and AOS effects. Projects: AI-enhanced landing pages.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Intermediate AI Front End">
            <h5>Intermediate</h5>
            <p>Master React.js and AI-powered UI frameworks. Create dynamic, accessible front ends with real-time AI analytics integration. Projects: AI-driven dashboards and e-commerce UIs.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Expert AI Front End">
            <h5>Expert</h5>
            <p>Develop advanced AI-optimized front ends with Next.js and WebAssembly. Implement AI-driven UX personalization and performance optimization. Projects: AI-powered PWAs.</p>
            <div class="price">5000 PKR</div>
            <button class="cta-button">Start Course</button>
          </div>
        </div>
      </div>

      <!-- AI Back End Development -->
      <div class="course-category">
        <h4>AI Back End Development</h4>
        <div class="courses-grid">
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Beginner AI Back End">
            <h5>Beginner</h5>
            <p>Explore Node.js, Express.js, and MongoDB with AI-driven APIs. Learn to build secure RESTful services. Projects: AI-enhanced task management APIs.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Intermediate AI Back End">
            <h5>Intermediate</h5>
            <p>Develop scalable back ends with GraphQL and AI-powered microservices. Implement real-time data processing with WebSockets. Projects: AI-driven chatbots and analytics APIs.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Expert AI Back End">
            <h5>Expert</h5>
            <p>Master serverless architectures and AI-optimized databases with AWS Lambda and DynamoDB. Build high-performance AI inference APIs. Projects: AI-powered recommendation systems.</p>
            <div class="price">5000 PKR</div>
            <button class="cta-button">Start Course</button>
          </div>
        </div>
      </div>

      <!-- AI Full Stack Development -->
      <div class="course-category">
        <h4>AI Full Stack Development</h4>
        <div class="courses-grid">
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Beginner AI Full Stack">
            <h5>Beginner</h5>
            <p>Combine front end (React, Tailwind) and back end (Node.js, MongoDB) with AI tools. Build full-stack apps with basic AI features. Projects: AI-enhanced to-do apps.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Intermediate AI Full Stack">
            <h5>Intermediate</h5>
            <p>Create robust MERN stack apps with AI-driven features like sentiment analysis. Implement CI/CD pipelines. Projects: AI-powered e-commerce platforms.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Expert AI Full Stack">
            <h5>Expert</h5>
            <p>Architect end-to-end AI-driven solutions with Next.js, GraphQL, and Kubernetes. Optimize for scale and security. Projects: AI-powered social media platforms.</p>
            <div class="price">5000 PKR</div>
            <button class="cta-button">Start Course</button>
          </div>
        </div>
      </div>

      <!-- AI Python Django/Flask -->
      <div class="course-category">
        <h4>AI Python Django/Flask</h4>
        <div class="courses-grid">
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Beginner AI Python Django/Flask">
            <h5>Beginner</h5>
            <p>Learn Python, Django, and Flask basics with AI integration. Build simple web apps with AI-driven features. Projects: AI-enhanced blog platforms.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Intermediate AI Python Django/Flask">
            <h5>Intermediate</h5>
            <p>Develop advanced Django/Flask apps with AI models (e.g., TensorFlow). Implement secure APIs and databases. Projects: AI-driven inventory systems.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="/api/placeholder/300/250" alt="Expert AI Python Django/Flask">
            <h5>Expert</h5>
            <p>Master AI-optimized Django/Flask apps with cloud deployment (AWS, Heroku). Build scalable ML-driven solutions. Projects: AI-powered healthcare platforms.</p>
            <div class="price">5000 PKR</div>
            <button class="cta-button">Start Course</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Enrollment Form Section -->
  <section class="enrollment" id="enrollment">
    <div class="container">
      <div class="section-title">
        <h3>Enroll Today</h3>
        <p>Select your course and level to begin your journey in AI-driven development with Royal Arm Software Company.</p>
      </div>
      <div class="enrollment-form">
        <div>
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone">
          </div>
          <div class="form-group">
            <label for="course">Select Course</label>
            <select id="course" required>
              <option value="" disabled selected>Choose a course</option>
              <option value="ai-front-end">AI Front End Development</option>
              <option value="ai-back-end">AI Back End Development</option>
              <option value="ai-full-stack">AI Full Stack Development</option>
              <option value="ai-python-django-flask">AI Python Django/Flask</option>
            </select>
          </div>
          <div class="form-group">
            <label for="level">Select Level</label>
            <select id="level" required>
              <option value="" disabled selected>Choose a level</option>
              <option value="beginner">Beginner</option>
              <option value="intermediate">Intermediate</option>
              <option value="expert">Expert</option>
            </select>
          </div>
          <button type="button" class="cta-button">Submit Enrollment</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php' ?>

  <script>
    document.querySelector('.menu-toggle').addEventListener('click', () => {
      document.querySelector('nav').classList.toggle('active');
    });
  </script>
</body>

</html>