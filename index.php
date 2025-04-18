<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Royal Arm Software Company | Web Development Courses</title>
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
      height: 100vh;
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
      font-size: 60px;
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

    /* Collection section */
    .collection {
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

    .collection-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px;
    }

    .collection-item {
      background-color: rgba(26, 26, 26, 0.8);
      padding: 30px;
      text-align: center;
      border: 1px solid rgba(200, 164, 92, 0.2);
      transition: transform 0.3s, border 0.3s;
    }

    .collection-item:hover {
      transform: translateY(-10px);
      border: 1px solid var(--secondary);
    }

    .collection-item img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .collection-item h4 {
      font-size: 24px;
      color: var(--secondary);
      margin-bottom: 15px;
      font-weight: 400;
    }

    .collection-item p {
      color: rgba(245, 245, 245, 0.7);
      margin-bottom: 20px;
    }

    .price {
      font-size: 22px;
      color: var(--light);
      margin-bottom: 20px;
    }

    /* Craftsmanship section */
    .craftsmanship {
      padding: 100px 0;
      background-color: var(--primary);
    }

    .craftsmanship-content {
      display: flex;
      align-items: center;
      gap: 60px;
    }

    .craftsmanship-text {
      flex: 1;
    }

    .craftsmanship-text h3 {
      font-size: 36px;
      color: var(--secondary);
      margin-bottom: 30px;
      font-weight: 400;
      letter-spacing: 2px;
    }

    .craftsmanship-text p {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 30px;
      line-height: 1.8;
    }

    .craftsmanship-image {
      flex: 1;
    }

    .craftsmanship-image img {
      width: 100%;
      height: auto;
      border: 1px solid rgba(200, 164, 92, 0.3);
    }

    /* Testimonials section */
    .testimonials {
      padding: 100px 0;
      background-color: var(--dark);
    }

    .testimonial-item {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
      padding: 40px;
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
    }

    .testimonial-text {
      font-size: 20px;
      color: var(--light);
      margin-bottom: 30px;
      line-height: 1.8;
      font-style: italic;
    }

    .testimonial-author {
      color: var(--secondary);
      font-size: 18px;
    }

    /* Contact section */
    .contact {
      padding: 100px 0;
      background-color: var(--primary);
    }

    .contact-content {
      display: flex;
      gap: 60px;
    }

    .contact-info {
      flex: 1;
    }

    .contact-info h3 {
      font-size: 36px;
      color: var(--secondary);
      margin-bottom: 30px;
      font-weight: 400;
      letter-spacing: 2px;
    }

    .contact-info p {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 30px;
      line-height: 1.8;
    }

    .contact-details {
      margin-top: 40px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .contact-item i {
      width: 40px;
      height: 40px;
      background-color: var(--secondary);
      color: var(--dark);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
    }

    .contact-item span {
      color: var(--light);
    }

    .contact-form {
      flex: 1;
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
    .form-group textarea {
      width: 100%;
      padding: 15px;
      background-color: rgba(245, 245, 245, 0.1);
      border: 1px solid rgba(200, 164, 92, 0.2);
      color: var(--light);
      font-size: 16px;
    }

    .form-group input:focus,
    .form-group textarea:focus {
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
    @media (max-width: 991px) {

      .craftsmanship-content,
      .contact-content {
        flex-direction: column;
      }

      .collection-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
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

      .hero h2 {
        font-size: 40px;
      }
    }

    /* Large Devices (laptops/desktops, up to 1200px) */
    @media (max-width: 1200px) {
      .container {
        max-width: 960px;
      }

      .hero h2 {
        font-size: 50px;
      }

      .collection-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    /* Medium Devices (tablets, up to 992px) */
    @media (max-width: 992px) {
      .container {
        max-width: 720px;
      }

      .craftsmanship-content,
      .contact-content {
        flex-direction: column;
        gap: 40px;
      }

      .collection-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
      }

      .hero h2 {
        font-size: 42px;
      }

      .section-title h3 {
        font-size: 32px;
      }

      .craftsmanship-text h3,
      .contact-info h3 {
        font-size: 32px;
      }
    }

    /* Small Devices (landscape phones, up to 768px) */
    @media (max-width: 768px) {
      .container {
        max-width: 540px;
      }

      .header-content {
        padding: 10px 0;
      }

      .hero {
        height: auto;
        min-height: 100vh;
        padding: 120px 0 60px;
      }

      .hero h2 {
        font-size: 36px;
        letter-spacing: 2px;
      }

      .hero p {
        font-size: 16px;
      }

      .collection {
        padding: 60px 0;
      }

      .section-title {
        margin-bottom: 40px;
      }

      .section-title h3 {
        font-size: 28px;
      }

      .collection-grid {
        grid-template-columns: 1fr;
        gap: 30px;
      }

      .craftsmanship,
      .testimonials,
      .contact {
        padding: 60px 0;
      }

      .craftsmanship-text h3,
      .contact-info h3 {
        font-size: 28px;
        margin-bottom: 20px;
      }

      .testimonial-item {
        padding: 30px 20px;
      }

      .testimonial-text {
        font-size: 18px;
      }

      .footer-links {
        flex-direction: column;
      }

      .footer-links a {
        margin: 5px 0;
      }
    }

    /* Extra Small Devices (phones, up to 576px) */
    @media (max-width: 576px) {
      .container {
        padding: 0 15px;
      }

      .logo h1 {
        font-size: 20px;
      }

      .hero h2 {
        font-size: 30px;
      }

      .hero p {
        font-size: 15px;
      }

      .collection-item {
        padding: 20px;
      }

      .section-title h3,
      .craftsmanship-text h3,
      .contact-info h3 {
        font-size: 24px;
      }

      .testimonial-text {
        font-size: 16px;
      }

      .contact-form {
        padding: 25px 15px;
      }

      .form-group input,
      .form-group textarea {
        padding: 12px;
      }

      .social-links a {
        width: 35px;
        height: 35px;
      }
    }

    /* For very small devices */
    @media (max-width: 375px) {
      .logo h1 {
        font-size: 18px;
      }

      .hero h2 {
        font-size: 26px;
      }

      .hero p {
        font-size: 14px;
      }

      .collection-item h4 {
        font-size: 20px;
      }

      .price {
        font-size: 18px;
      }

      .contact-item span {
        font-size: 14px;
      }
    }

    /* Portrait orientation adjustments */
    @media (max-width: 768px) and (orientation: portrait) {
      .hero {
        min-height: 80vh;
      }
    }

    /* Landscape orientation adjustments for phones */
    @media (max-height: 500px) and (orientation: landscape) {
      .hero {
        min-height: 120vh;
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
<?php include 'includes/navbar.php'; ?>
  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="container">
      <div class="hero-content">
        <h2>Master <span>Web Development</span> with Elegance</h2>
        <p>Since 2020, Royal Arm Software Company has empowered students with affordable, high-quality courses in modern web development, AI-driven solutions, and career mentorship, crafting pathways to success in tech.</p>
        <button class="cta-button">Explore Our Courses</button>
      </div>
    </div>
  </section>

  <!-- Courses Section -->
  <section class="collection" id="courses">
    <div class="container">
      <div class="section-title">
        <h3>Our Premier Courses</h3>
        <p>Discover our expertly designed courses, covering modern web development, AI web solutions, and career-building tools, available in free and paid formats.</p>
      </div>
      <div class="collection-grid">
        <div class="collection-item">
          <img src="/api/placeholder/300/250" alt="Full-Stack Web Development">
          <h4>Full-Stack Web Development</h4>
          <p>Master HTML, CSS, JavaScript, React, Node.js, Express, MongoDB, and more in our comprehensive course, with free and paid tiers.</p>
          <div class="price">Free - $499</div>
          <button class="cta-button">View Course</button>
        </div>
        <div class="collection-item">
          <img src="/api/placeholder/300/250" alt="AI Web Development">
          <h4>AI Web Development</h4>
          <p>Learn to integrate AI into web projects using Tailwind CSS, GSAP, AOS animations, and modern frameworks, with mentorship included.</p>
          <div class="price">Free - $799</div>
          <button class="cta-button">View Course</button>
        </div>
        <div class="collection-item">
          <img src="/api/placeholder/300/250" alt="Career & Resume Building">
          <h4>Career & Resume Building</h4>
          <p>Access free and premium CV templates, job-ready resumes, and personalized mentorship for a successful tech career roadmap.</p>
          <div class="price">Free - $199</div>
          <button class="cta-button">View Details</button>
        </div>
      </div>
    </div>
  </section>

  <section class="components" id="components">
    <div class="container">
      <div class="section-title">
        <h3>Free & Paid Components</h3>
        <p>Enhance your web projects with our meticulously crafted components, available in free and premium tiers, designed for seamless integration with modern frameworks like React, Tailwind CSS, and more.</p>
      </div>
      <div class="collection-grid">
        <div class="collection-item">
          <img src="/api/placeholder/300/250" alt="UI Component Kit">
          <h4>UI Component Kit</h4>
          <p>Access a rich library of reusable UI components, including buttons, forms, and modals, optimized for Tailwind CSS and React, available in free and premium versions.</p>
          <div class="price">Free - $99</div>
          <button class="cta-button">Explore Components</button>
        </div>
        <div class="collection-item">
          <img src="/api/placeholder/300/250" alt="Animation Pack">
          <h4>Animation Pack</h4>
          <p>Elevate your websites with GSAP and AOS-powered animations, including scroll effects and transitions, with free starter packs and premium bundles.</p>
          <div class="price">Free - $149</div>
          <button class="cta-button">Explore Animations</button>
        </div>
        <div class="collection-item">
          <img src="/api/placeholder/300/250" alt="Website Templates">
          <h4>Website Templates</h4>
          <p>Launch projects faster with our responsive templates for portfolios, e-commerce, and dashboards, compatible with HTML, CSS, and JavaScript frameworks.</p>
          <div class="price">Free - $199</div>
          <button class="cta-button">Explore Templates</button>
        </div>
      </div>
    </div>
  </section>

  <style>
    .components {
      padding: 100px 0;
      background-color: var(--dark);
    }

    .collection-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px;
    }

    .collection-item {
      background-color: rgba(26, 26, 26, 0.8);
      padding: 30px;
      text-align: center;
      border: 1px solid rgba(200, 164, 92, 0.2);
      transition: transform 0.3s, border 0.3s;
    }

    .collection-item:hover {
      transform: translateY(-10px);
      border: 1px solid var(--secondary);
    }

    .collection-item img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .collection-item h4 {
      font-size: 24px;
      color: var(--secondary);
      margin-bottom: 15px;
      font-weight: 400;
    }

    .collection-item p {
      color: rgba(245, 245, 245, 0.7);
      margin-bottom: 20px;
    }

    .price {
      font-size: 22px;
      color: var(--light);
      margin-bottom: 20px;
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

    /* Responsive styles */
    @media (max-width: 1200px) {
      .collection-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (max-width: 992px) {
      .collection-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
      }
    }

    @media (max-width: 768px) {
      .components {
        padding: 60px 0;
      }

      .collection-grid {
        grid-template-columns: 1fr;
        gap: 30px;
      }
    }

    @media (max-width: 576px) {
      .collection-item {
        padding: 20px;
      }

      .section-title h3 {
        font-size: 24px;
      }
    }
  </style>


  <!-- Expertise Section -->
  <section class="craftsmanship" id="expertise">
    <div class="container">
      <div class="craftsmanship-content">
        <div class="craftsmanship-text">
          <h3>Unparalleled Development Expertise</h3>
          <p>Our courses are crafted by industry veterans with decades of experience in web development and AI. We teach cutting-edge technologies like React, Node.js, Tailwind CSS, and GSAP, ensuring you stay ahead in the tech world.</p>
          <p>From free components to premium mentorship, we provide tools and guidance to build scalable, animated, and AI-driven web applications, alongside business roadmaps for entrepreneurial success.</p>
          <button class="cta-button">Explore Expertise</button>
        </div>
        <div class="craftsmanship-image">
          <img src="/api/placeholder/600/400" alt="Developer at work">
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="section-title">
        <h3>Student Success Stories</h3>
        <p>Our students’ achievements reflect our commitment to transformative education and mentorship.</p>
      </div>
      <div class="testimonial-item">
        <p class="testimonial-text">"The AI Web Development course at Royal Arm Software transformed my career. The mentorship and free components helped me land a senior developer role within months."</p>
        <p class="testimonial-author">— Sarah Thompson, Full-Stack Developer</p>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="section-title">
        <h3>Start Your Journey</h3>
        <p>Connect with our team to explore our courses, components, or mentorship programs tailored to your tech career goals.</p>
      </div>
      <div class="contact-content">
        <div class="contact-info">
          <h3>Join Our Community</h3>
          <p>Engage with our expert instructors and vibrant student community. Whether you’re starting with our free courses or diving into premium mentorship, we’re here to guide you every step of the way.</p>
          <div class="contact-details">
            <div class="contact-item">
              <i class="fas fa-map-marker-alt"></i>
              <span>123 Tech Lane, London, SW1A 1PL</span>
            </div>
            <div class="contact-item">
              <i class="fas fa-phone"></i>
              <span>+44 (0) 20 7987 6543</span>
            </div>
            <div class="contact-item">
              <i class="fas fa-envelope"></i>
              <span>info@royalarmsoftware.com</span>
            </div>
          </div>
        </div>
        <div class="contact-form">
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
              <label for="phone">Phone</label>
              <input type="tel" id="phone">
            </div>
            <div class="form-group">
              <label for="message">Your Interest</label>
              <textarea id="message" rows="5" required></textarea>
            </div>
            <button type="button" class="cta-button">Request Information</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <script>
    document.querySelector('.menu-toggle').addEventListener('click', () => {
      document.querySelector('nav').classList.toggle('active');
    });
  </script>
</body>

</html>