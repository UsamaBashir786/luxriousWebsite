<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume Templates | Royal Arm Software Company</title>
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

    /* Resume templates section */
    .resume-section {
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

    .templates-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px;
    }

    .template-card {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s, border 0.3s;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .template-card:hover {
      transform: translateY(-10px);
      border: 1px solid var(--secondary);
    }

    .template-image {
      position: relative;
      height: 400px;
      overflow: hidden;
    }

    .template-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s;
    }

    .template-card:hover .template-image img {
      transform: scale(1.05);
    }

    .template-content {
      padding: 25px;
      text-align: center;
    }

    .template-content h4 {
      font-size: 24px;
      color: var(--secondary);
      margin-bottom: 10px;
      font-weight: 400;
    }

    .template-content p {
      color: rgba(245, 245, 245, 0.7);
      margin-bottom: 20px;
    }

    .template-price {
      font-size: 20px;
      color: var(--light);
      margin-bottom: 20px;
      font-weight: 500;
    }

    .template-price span {
      color: var(--secondary);
    }

    .template-features {
      margin-bottom: 20px;
      text-align: left;
    }

    .template-features ul {
      list-style: none;
    }

    .template-features li {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 8px;
      display: flex;
      align-items: center;
    }

    .template-features li i {
      color: var(--secondary);
      margin-right: 10px;
      font-size: 14px;
    }

    /* Custom resume section */
    .custom-resume {
      padding: 100px 0;
      background-color: var(--primary);
    }

    .custom-content {
      display: flex;
      align-items: center;
      gap: 60px;
    }

    .custom-image {
      flex: 1;
      position: relative;
      height: 500px;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
      border: 1px solid rgba(200, 164, 92, 0.3);
    }

    .custom-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .custom-text {
      flex: 1;
    }

    .custom-text h3 {
      font-size: 36px;
      color: var(--secondary);
      margin-bottom: 20px;
      font-weight: 400;
      letter-spacing: 2px;
    }

    .custom-text p {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 20px;
      line-height: 1.8;
    }

    .custom-features {
      margin: 30px 0;
    }

    .custom-features ul {
      list-style: none;
    }

    .custom-features li {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 15px;
      display: flex;
      align-items: flex-start;
    }

    .custom-features li i {
      color: var(--secondary);
      margin-right: 15px;
      font-size: 18px;
      margin-top: 3px;
    }

    .price-tag {
      display: inline-block;
      background-color: var(--secondary);
      color: var(--dark);
      padding: 10px 20px;
      font-size: 20px;
      font-weight: 600;
      margin: 20px 0;
      border-radius: 4px;
    }

    /* Process section */
    .process-section {
      padding: 100px 0;
      background-color: var(--dark);
    }

    .process-steps {
      display: flex;
      justify-content: space-between;
      margin-top: 60px;
    }

    .process-step {
      flex: 1;
      text-align: center;
      padding: 0 20px;
      position: relative;
    }

    .process-step:not(:last-child)::after {
      content: "";
      position: absolute;
      top: 40px;
      right: 0;
      width: 100%;
      height: 2px;
      background: linear-gradient(to right, transparent, var(--secondary), transparent);
      z-index: 0;
    }

    .step-number {
      width: 80px;
      height: 80px;
      background-color: var(--secondary);
      color: var(--dark);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 30px;
      font-weight: 600;
      margin: 0 auto 30px;
      position: relative;
      z-index: 1;
    }

    .process-step h4 {
      font-size: 22px;
      color: var(--secondary);
      margin-bottom: 15px;
      font-weight: 400;
    }

    .process-step p {
      color: rgba(245, 245, 245, 0.7);
      line-height: 1.6;
    }

    /* Testimonials section */
    .testimonials {
      padding: 100px 0;
      background-color: var(--primary);
    }

    .testimonial-container {
      max-width: 800px;
      margin: 0 auto;
    }

    .testimonial-card {
      background-color: rgba(26, 26, 26, 0.8);
      padding: 40px;
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      text-align: center;
      position: relative;
    }

    .testimonial-card::before {
      content: "\201C";
      position: absolute;
      top: 10px;
      left: 30px;
      font-size: 100px;
      color: rgba(200, 164, 92, 0.1);
      font-family: Georgia, serif;
    }

    .testimonial-text {
      font-size: 18px;
      color: var(--light);
      line-height: 1.8;
      margin-bottom: 30px;
      position: relative;
      z-index: 1;
    }

    .testimonial-author {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .testimonial-author img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 15px;
      border: 2px solid var(--secondary);
    }

    .author-info h5 {
      font-size: 18px;
      color: var(--secondary);
      margin-bottom: 5px;
      font-weight: 400;
    }

    .author-info p {
      color: rgba(245, 245, 245, 0.7);
      font-size: 14px;
    }

    /* Contact Form Section */
    .contact-section {
      padding: 100px 0;
      background-color: var(--dark);
    }

    .contact-form {
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
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 15px;
      background-color: rgba(245, 245, 245, 0.1);
      border: 1px solid rgba(200, 164, 92, 0.2);
      color: var(--light);
      font-size: 16px;
      border-radius: 4px;
    }

    .form-group select {
      appearance: none;
      background-image: url('data:image/svg+xml;utf8,<svg fill="%23c8a45c" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
      background-repeat: no-repeat;
      background-position: right 10px top 50%;
    }

    .form-group textarea {
      min-height: 150px;
      resize: vertical;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: var(--secondary);
    }

    /* FAQ Section */
    .faq-section {
      padding: 100px 0;
      background-color: var(--primary);
    }

    .accordion {
      max-width: 800px;
      margin: 40px auto 0;
    }

    .accordion-item {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      margin-bottom: 15px;
      overflow: hidden;
    }

    .accordion-header {
      padding: 20px;
      background-color: rgba(200, 164, 92, 0.05);
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .accordion-header h4 {
      font-size: 18px;
      color: var(--secondary);
      font-weight: 400;
    }

    .accordion-header i {
      color: var(--secondary);
      transition: transform 0.3s;
    }

    .accordion-content {
      padding: 0 20px;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease, padding 0.3s ease;
    }

    .accordion-content p {
      color: rgba(245, 245, 245, 0.7);
      padding-bottom: 20px;
      line-height: 1.6;
    }

    .accordion-item.active .accordion-header i {
      transform: rotate(180deg);
    }

    .accordion-item.active .accordion-content {
      max-height: 300px;
      padding-top: 20px;
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

      .templates-grid {
        grid-template-columns: repeat(3, 1fr);
      }

      .process-steps {
        flex-wrap: wrap;
      }

      .process-step {
        flex: 0 0 50%;
        margin-bottom: 40px;
      }

      .process-step:not(:last-child)::after {
        display: none;
      }
    }

    @media (max-width: 992px) {
      .container {
        max-width: 720px;
      }

      .templates-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
      }

      .custom-content {
        flex-direction: column;
      }

      .custom-image {
        width: 100%;
        height: 400px;
      }

      .hero h2 {
        font-size: 36px;
      }

      .section-title h3 {
        font-size: 32px;
      }

      .custom-text h3 {
        font-size: 32px;
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

      .templates-grid {
        grid-template-columns: 1fr;
      }

      .process-step {
        flex: 0 0 100%;
      }

      .testimonial-card {
        padding: 30px 20px;
      }

      .section-title h3,
      .custom-text h3 {
        font-size: 28px;
      }

      .accordion-header h4 {
        font-size: 16px;
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

      .template-card {
        padding: 20px;
      }

      .section-title h3,
      .custom-text h3 {
        font-size: 24px;
      }

      .testimonial-text {
        font-size: 16px;
      }

      .contact-form {
        padding: 25px 15px;
      }

      .form-group input,
      .form-group select,
      .form-group textarea {
        padding: 12px;
      }

      .template-image {
        height: 300px;
      }

      .custom-image {
        height: 300px;
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

      .template-content h4 {
        font-size: 18px;
      }

      .template-price {
        font-size: 18px;
      }

      .testimonial-author img {
        width: 50px;
        height: 50px;
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
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h2>Professional <span>Resume Templates</span></h2>
        <p>Elevate your job applications with our expertly designed resume templates, available for free download or customized to your unique career goals with our premium service.</p>
        <button class="cta-button" onclick="document.getElementById('templates').scrollIntoView({behavior: 'smooth'})">Explore Templates</button>
      </div>
    </div>
  </section>

  <!-- Resume Templates Section -->
  <section class="resume-section" id="templates">
    <div class="container">
      <div class="section-title">
        <h3>Free Resume Templates</h3>
        <p>Access our collection of professionally designed resume templates, ready for immediate download and customization.</p>
      </div>
      <div class="templates-grid">
        <!-- Template 1 -->
        <div class="template-card">
          <div class="template-image">
            <img src="/api/placeholder/300/400" alt="Minimal Resume Template">
          </div>
          <div class="template-content">
            <h4>Minimal</h4>
            <p>A clean, modern design perfect for any profession with emphasis on skills and experience.</p>
            <div class="template-price">
              <span>Free</span>
            </div>
            <div class="template-features">
              <ul>
                <li><i class="fas fa-check"></i> Professional layout</li>
                <li><i class="fas fa-check"></i> Easy to customize</li>
                <li><i class="fas fa-check"></i> PDF & Word formats</li>
                <li><i class="fas fa-check"></i> ATS-friendly</li>
              </ul>
            </div>
            <button class="cta-button">Download</button>
          </div>
        </div>

        <!-- Template 2 -->
        <div class="template-card">
          <div class="template-image">
            <img src="/api/placeholder/300/400" alt="Creative Resume Template">
          </div>
          <div class="template-content">
            <h4>Creative</h4>
            <p>A visually distinctive template ideal for creative professionals and designers.</p>
            <div class="template-price">
              <span>Free</span>
            </div>
            <div class="template-features">
              <ul>
                <li><i class="fas fa-check"></i> Unique visual design</li>
                <li><i class="fas fa-check"></i> Portfolio section</li>
                <li><i class="fas fa-check"></i> PDF & InDesign formats</li>
                <li><i class="fas fa-check"></i> Customizable colors</li>
              </ul>
            </div>
            <button class="cta-button">Download</button>
          </div>
        </div>

        <!-- Template 3 -->
        <div class="template-card">
          <div class="template-image">
            <img src="/api/placeholder/300/400" alt="Executive Resume Template">
          </div>
          <div class="template-content">
            <h4>Executive</h4>
            <p>A sophisticated template designed for senior professionals and executives.</p>
            <div class="template-price">
              <span>Free</span>
            </div>
            <div class="template-features">
              <ul>
                <li><i class="fas fa-check"></i> Executive layout</li>
                <li><i class="fas fa-check"></i> Leadership focus</li>
                <li><i class="fas fa-check"></i> PDF & Word formats</li>
                <li><i class="fas fa-check"></i> Achievement-oriented</li>
              </ul>
            </div>
            <button class="cta-button">Download</button>
          </div>
        </div>

        <!-- Template 4 -->
        <div class="template-card">
          <div class="template-image">
            <img src="/api/placeholder/300/400" alt="Tech Resume Template">
          </div>
          <div class="template-content">
            <h4>Tech Focus</h4>
            <p>A specialized template for IT professionals, developers and technical roles.</p>
            <div class="template-price">
              <span>Free</span>
            </div>
            <div class="template-features">
              <ul>
                <li><i class="fas fa-check"></i> Tech skills section</li>
                <li><i class="fas fa-check"></i> Project highlights</li>
                <li><i class="fas fa-check"></i> PDF & Word formats</li>
                <li><i class="fas fa-check"></i> GitHub integration</li>
              </ul>
            </div>
            <button class="cta-button">Download</button>
          </div>
        </div>

        <!-- Template 5 -->
        <div class="template-card">
          <div class="template-image">
            <img src="/api/placeholder/300/400" alt="Graduate Resume Template">
          </div>
          <div class="template-content">
            <h4>Graduate</h4>
            <p>An entry-level template ideal for recent graduates and early career professionals.</p>
            <div class="template-price">
              <span>Free</span>
            </div>
            <div class="template-features">
              <ul>
                <li><i class="fas fa-check"></i> Education emphasis</li>
                <li><i class="fas fa-check"></i> Skills showcase</li>
                <li><i class="fas fa-check"></i> PDF & Word formats</li>
                <li><i class="fas fa-check"></i> Internship highlights</li>
              </ul>
            </div>
            <button class="cta-button">Download</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Custom Resume Section -->
  <section class="custom-resume" id="custom">
    <div class="container">
      <div class="custom-content">
        <div class="custom-image">
          <img src="/api/placeholder/600/500" alt="Custom Resume Service">
        </div>
        <div class="custom-text">
          <h3>Premium Custom Resume Service</h3>
          <p>Stand out from the competition with a professionally crafted resume, tailored specifically to your career goals and industry requirements.</p>
          <p>Our expert resume writers will work one-on-one with you to highlight your strengths, showcase your accomplishments, and create a compelling narrative that resonates with employers.</p>
          
          <div class="custom-features">
            <ul>
              <li>
                <i class="fas fa-check-circle"></i>
                <div>
                  <strong>Personalized Consultation:</strong> One-on-one session with a professional resume writer to understand your career goals and achievements.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div>
                  <strong>Industry-Specific Content:</strong> Tailored content that highlights relevant skills and achievements for your target industry and position.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div>
                  <strong>ATS Optimization:</strong> Strategic keyword placement to ensure your resume passes through Applicant Tracking Systems.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div>
                  <strong>Multiple Revisions:</strong> Up to three rounds of revisions to perfect your resume before final delivery.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div>
                  <strong>Premium Formats:</strong> Delivery in multiple formats (PDF, Word, Plain Text) for different application requirements.</div>
              </li>
            </ul>
          </div>
          
          <div class="price-tag">499 pkr</div>
          
          <button class="cta-button" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Request Custom Resume</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Section -->
  <section class="process-section" id="process">
    <div class="container">
      <div class="section-title">
        <h3>Our Custom Resume Process</h3>
        <p>A simple, efficient process designed to create the perfect resume for your career goals.</p>
      </div>
      
      <div class="process-steps">
        <div class="process-step">
          <div class="step-number">1</div>
          <h4>Consultation</h4>
          <p>Complete our initial questionnaire and schedule a one-on-one consultation with your dedicated resume writer.</p>
        </div>
        
        <div class="process-step">
          <div class="step-number">2</div>
          <h4>Draft Creation</h4>
          <p>Our experts craft the first draft of your resume, highlighting your strengths and achievements.</p>
        </div>
        
        <div class="process-step">
          <div class="step-number">3</div>
          <h4>Revision</h4>
          <p>Review the draft and provide feedback for any desired changes or improvements.</p>
        </div>
        
        <div class="process-step">
          <div class="step-number">4</div>
          <h4>Finalization</h4>
          <p>Receive your polished, final resume in multiple formats, ready to impress potential employers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="section-title">
        <h3>Success Stories</h3>
        <p>Hear from professionals who transformed their job search with our resume services.</p>
      </div>
      
      <div class="testimonial-container">
        <div class="testimonial-card">
          <p class="testimonial-text">"The custom resume service from Royal Arm completely transformed my job search. Within two weeks of using my new resume, I received three interview calls from companies I had been trying to get into for months. The investment was absolutely worth it!"</p>
          
          <div class="testimonial-author">
            <img src="/api/placeholder/60/60" alt="Ahmad Khan">
            <div class="author-info">
              <h5>Ahmad Khan</h5>
              <p>Software Engineer, hired at a multinational tech company</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section class="contact-section" id="contact">
    <div class="container">
      <div class="section-title">
        <h3>Request a Custom Resume</h3>
        <p>Fill out the form below to start your journey toward a professionally crafted resume.</p>
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
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone">
          </div>
          
          <div class="form-group">
            <label for="industry">Industry/Field</label>
            <select id="industry" required>
              <option value="" disabled selected>Select your industry</option>
              <option value="technology">Technology & IT</option>
              <option value="finance">Finance & Banking</option>
              <option value="healthcare">Healthcare</option>
              <option value="education">Education</option>
              <option value="marketing">Marketing & Communications</option>
              <option value="engineering">Engineering</option>
              <option value="other">Other</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="experience">Years of Experience</label>
            <select id="experience" required>
              <option value="" disabled selected>Select your experience level</option>
              <option value="entry">Entry Level (0-2 years)</option>
              <option value="mid">Mid-Level (3-5 years)</option>
              <option value="senior">Senior Level (6-10 years)</option>
              <option value="executive">Executive Level (10+ years)</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="message">Additional Information</label>
            <textarea id="message" rows="5" placeholder="Tell us about your career goals, target positions, or any specific requirements for your resume."></textarea>
          </div>
          
          <button type="button" class="cta-button">Submit Request</button>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section" id="faq">
    <div class="container">
      <div class="section-title">
        <h3>Frequently Asked Questions</h3>
        <p>Find answers to common questions about our resume templates and services.</p>
      </div>
      
      <div class="accordion">
        <div class="accordion-item">
          <div class="accordion-header">
            <h4>What's the difference between free templates and custom resumes?</h4>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="accordion-content">
            <p>Our free templates are professionally designed and ready for you to customize yourself. Custom resumes involve working with a professional resume writer who will craft a unique document tailored to your specific experience, skills, and career goals. The custom service includes personalized content writing, strategic keyword placement for ATS systems, and multiple revision rounds.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <div class="accordion-header">
            <h4>How long does the custom resume process take?</h4>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="accordion-content">
            <p>The typical timeline for our custom resume service is 5-7 business days from the initial consultation to the delivery of your final resume. Rush orders can be accommodated for an additional fee, with delivery in as little as 2-3 business days.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <div class="accordion-header">
            <h4>Are your resumes ATS-friendly?</h4>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="accordion-content">
            <p>Yes, both our free templates and custom resumes are designed to be ATS (Applicant Tracking System) friendly. Our custom service includes strategic keyword optimization based on your target roles to ensure maximum visibility when submitted through automated hiring systems.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <div class="accordion-header">
            <h4>Can I make changes to my custom resume after it's delivered?</h4>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="accordion-content">
            <p>Your custom resume service includes up to three rounds of revisions within 14 days of receiving your first draft. Additional revisions or changes requested after the 14-day period may incur additional fees. We provide your resume in editable formats so you can make small updates yourself as needed.</p>
          </div>
        </div>
        
        <div class="accordion-item">
          <div class="accordion-header">
            <h4>What information do I need to provide for a custom resume?</h4>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="accordion-content">
            <p>You'll need to provide your educational background, work history, skills, and achievements. If you have an existing resume, that's helpful as a starting point. During the consultation, your resume writer will ask specific questions to draw out accomplishments and experiences that might set you apart. The more detailed information you can provide, the more effectively we can highlight your unique value proposition.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php' ?>

  <script>
    // Menu Toggle
    document.querySelector('.menu-toggle').addEventListener('click', () => {
      document.querySelector('nav').classList.toggle('active');
    });
    
    // Accordion
    const accordionItems = document.querySelectorAll('.accordion-item');
    
    accordionItems.forEach(item => {
      const header = item.querySelector('.accordion-header');
      
      header.addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  </script>
</body>

</html>