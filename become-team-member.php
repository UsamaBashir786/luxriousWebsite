<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Become a Team Member | Royal Arm Software Company</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* Team Member Page Specific Styles */
    .team-benefits {
      padding: 80px 0;
      background-color: var(--dark);
    }

    .benefits-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      margin-top: 50px;
    }

    .benefit-card {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      padding: 30px;
      transition: transform 0.3s, border-color 0.3s;
    }

    .benefit-card:hover {
      transform: translateY(-10px);
      border-color: var(--secondary);
    }

    .benefit-icon {
      width: 70px;
      height: 70px;
      background-color: rgba(200, 164, 92, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .benefit-icon i {
      font-size: 30px;
      color: var(--secondary);
    }

    .benefit-card h3 {
      font-size: 22px;
      color: var(--secondary);
      margin-bottom: 15px;
      font-weight: 500;
    }

    .benefit-card p {
      color: rgba(245, 245, 245, 0.8);
      line-height: 1.6;
    }

    /* Open Positions Section */
    .open-positions {
      padding: 80px 0;
      background-color: var(--primary);
    }

    .positions-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 30px;
      margin-top: 50px;
    }

    .position-card {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      padding: 30px;
      transition: transform 0.3s, border-color 0.3s;
    }

    .position-card:hover {
      transform: translateY(-10px);
      border-color: var(--secondary);
    }

    .position-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 20px;
    }

    .position-title h3 {
      font-size: 22px;
      color: var(--secondary);
      margin-bottom: 5px;
      font-weight: 500;
    }

    .position-type {
      padding: 5px 15px;
      background-color: rgba(200, 164, 92, 0.2);
      border-radius: 20px;
      color: var(--secondary);
      font-size: 14px;
      font-weight: 500;
    }

    .position-details {
      margin-bottom: 20px;
    }

    .position-detail {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      color: rgba(245, 245, 245, 0.8);
    }

    .position-detail i {
      color: var(--secondary);
      margin-right: 10px;
      width: 20px;
      text-align: center;
    }

    .position-card p {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .position-requirements {
      margin-bottom: 25px;
    }

    .position-requirements h4 {
      font-size: 18px;
      color: var(--light);
      margin-bottom: 15px;
      font-weight: 500;
    }

    .position-requirements ul {
      list-style: none;
    }

    .position-requirements li {
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 8px;
      display: flex;
      align-items: flex-start;
    }

    .position-requirements li i {
      color: var(--secondary);
      margin-right: 10px;
      margin-top: 6px;
      font-size: 12px;
    }

    .position-requirements li span {
      flex: 1;
    }

    /* Application Form Section */
    .application-form {
      padding: 80px 0;
      background-color: var(--dark);
    }

    .form-container {
      max-width: 800px;
      margin: 40px auto 0;
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      padding: 40px;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-bottom: 20px;
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

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 12px 15px;
      background-color: rgba(245, 245, 245, 0.1);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 4px;
      color: var(--light);
      font-size: 16px;
      font-family: 'Playfair Display', serif;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: var(--secondary);
    }

    .form-group textarea {
      min-height: 150px;
      resize: vertical;
    }

    .form-group select {
      appearance: none;
      background-image: url('data:image/svg+xml;utf8,<svg fill="%23c8a45c" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
      background-repeat: no-repeat;
      background-position: right 10px top 50%;
    }

    .upload-field {
      position: relative;
      margin-bottom: 20px;
    }

    .upload-label {
      display: block;
      margin-bottom: 10px;
      color: var(--light);
      font-size: 16px;
    }

    .upload-input {
      opacity: 0;
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      height: 0;
    }

    .upload-button {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px 15px;
      background-color: rgba(245, 245, 245, 0.1);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 4px;
      color: var(--light);
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s;
    }

    .upload-button:hover {
      background-color: rgba(200, 164, 92, 0.1);
      border-color: var(--secondary);
    }

    .upload-button i {
      color: var(--secondary);
    }

    .file-name {
      margin-top: 8px;
      font-size: 14px;
      color: rgba(245, 245, 245, 0.7);
    }

    .privacy-checkbox {
      display: flex;
      align-items: flex-start;
      margin-bottom: 25px;
      gap: 10px;
    }

    .privacy-checkbox input {
      width: auto;
      margin-top: 5px;
    }

    .privacy-checkbox label {
      color: rgba(245, 245, 245, 0.8);
      font-size: 14px;
    }

    .privacy-checkbox a {
      color: var(--secondary);
      text-decoration: none;
      border-bottom: 1px dotted var(--secondary);
    }

    /* Testimonials Section */
    .team-testimonials {
      padding: 80px 0;
      background-color: var(--primary);
    }

    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 30px;
      margin-top: 50px;
    }

    .testimonial-card {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      padding: 30px;
      text-align: left;
      position: relative;
    }

    .testimonial-card::before {
      content: "\201C";
      position: absolute;
      top: 20px;
      left: 20px;
      font-size: 60px;
      color: rgba(200, 164, 92, 0.2);
      font-family: Georgia, serif;
      line-height: 1;
    }

    .testimonial-content {
      margin-bottom: 20px;
      padding-top: 30px;
    }

    .testimonial-text {
      color: rgba(245, 245, 245, 0.9);
      font-style: italic;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .testimonial-author img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 2px solid var(--secondary);
      object-fit: cover;
    }

    .author-info h4 {
      color: var(--secondary);
      font-size: 18px;
      margin-bottom: 5px;
      font-weight: 500;
    }

    .author-info p {
      color: rgba(245, 245, 245, 0.7);
      font-size: 14px;
    }

    /* FAQ Section */
    .team-faq {
      padding: 80px 0;
      background-color: var(--dark);
    }

    .faq-container {
      max-width: 800px;
      margin: 40px auto 0;
    }

    .faq-item {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      margin-bottom: 15px;
      overflow: hidden;
    }

    .faq-question {
      padding: 20px;
      background-color: rgba(10, 10, 10, 0.5);
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .faq-question h3 {
      font-size: 18px;
      color: var(--light);
      font-weight: 500;
    }

    .faq-question i {
      color: var(--secondary);
      transition: transform 0.3s;
    }

    .faq-answer {
      padding: 0 20px;
      max-height: 0;
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .faq-answer p {
      color: rgba(245, 245, 245, 0.8);
      line-height: 1.6;
      padding-bottom: 20px;
    }

    .faq-item.active .faq-question i {
      transform: rotate(180deg);
    }

    .faq-item.active .faq-answer {
      max-height: 300px;
      padding-top: 20px;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
      .form-container {
        padding: 30px;
      }
    }

    @media (max-width: 768px) {
      .form-row {
        grid-template-columns: 1fr;
      }

      .position-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }

      .position-type {
        align-self: flex-start;
      }

      .form-container {
        padding: 25px;
      }
    }

    @media (max-width: 576px) {
      .benefit-card {
        padding: 20px;
      }

      .position-card {
        padding: 20px;
      }

      .position-card h3 {
        font-size: 20px;
      }

      .testimonial-card {
        padding: 20px;
      }

      .form-container {
        padding: 20px;
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
      <div class="hero-content">
        <h2>Join Our <span>Elite Team</span></h2>
        <p>Become part of a passionate community of developers, educators, and innovators dedicated to transforming web development education through AI-driven approaches.</p>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="team-benefits">
    <div class="container">
      <div class="section-title">
        <h3>Why Join Royal Arm?</h3>
        <p>Discover the unique benefits of becoming a team member at Royal Arm Software Company.</p>
      </div>

      <div class="benefits-grid">
        <!-- Benefit 1 -->
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-rocket"></i>
          </div>
          <h3>Career Growth</h3>
          <p>Access continuous learning opportunities, mentorship programs, and clear advancement pathways in cutting-edge technologies that keep you at the forefront of the industry.</p>
        </div>

        <!-- Benefit 2 -->
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-lightbulb"></i>
          </div>
          <h3>Innovation Culture</h3>
          <p>Work in an environment that encourages creative thinking, experimentation, and the freedom to contribute ideas that shape the future of our products and services.</p>
        </div>

        <!-- Benefit 3 -->
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-globe"></i>
          </div>
          <h3>Global Impact</h3>
          <p>Make a difference in the lives of students worldwide by creating educational resources that democratize access to high-quality tech education and career opportunities.</p>
        </div>

        <!-- Benefit 4 -->
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3>Cutting-Edge Tech</h3>
          <p>Work with the latest frameworks, tools, and AI technologies while developing innovative solutions for modern web development education.</p>
        </div>

        <!-- Benefit 5 -->
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-users"></i>
          </div>
          <h3>Collaborative Environment</h3>
          <p>Join a diverse and supportive team where knowledge sharing, pair programming, and cross-functional collaboration are integral to our work culture.</p>
        </div>

        <!-- Benefit 6 -->
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-balance-scale"></i>
          </div>
          <h3>Work-Life Balance</h3>
          <p>Enjoy flexible working arrangements, remote options, and policies designed to ensure you maintain a healthy balance between professional growth and personal well-being.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Open Positions Section -->
  <section class="open-positions">
    <div class="container">
      <div class="section-title">
        <h3>Open Positions</h3>
        <p>Explore current opportunities to join our growing team across various departments.</p>
      </div>

      <div class="positions-grid">
        <!-- Position 1 -->
        <div class="position-card">
          <div class="position-header">
            <div class="position-title">
              <h3>Front-End Developer</h3>
            </div>
            <div class="position-type">Remote</div>
          </div>
          <div class="position-details">
            <div class="position-detail">
              <i class="fas fa-money-bill-wave"></i>
              <span>Competitive Salary</span>
            </div>
            <div class="position-detail">
              <i class="fas fa-clock"></i>
              <span>Flexible Hours</span>
            </div>
            <div class="position-detail">
              <i class="fas fa-calendar-alt"></i>
              <span>Contract or Full-Time</span>
            </div>
          </div>
          <p>We're looking for a passionate front-end developer with expertise in React, Tailwind CSS, and animation libraries to help develop interactive learning experiences.</p>
          <div class="position-requirements">
            <h4>Requirements:</h4>
            <ul>
              <li>
                <i class="fas fa-circle"></i>
                <span>3+ years of experience with modern JavaScript and React</span>
              </li>
              <li>
                <i class="fas fa-circle"></i>
                <span>Strong proficiency with CSS, Tailwind, and responsive design</span>
              </li>
              <li>
                <i class="fas fa-circle"></i>
                <span>Experience with animation libraries (GSAP, AOS, Framer Motion)</span>
              </li>
              <li>
                <i class="fas fa-circle"></i>
                <span>Knowledge of UI/UX principles and accessibility standards</span>
              </li>
            </ul>
          </div>
          <button class="cta-button" onclick="document.getElementById('application-form').scrollIntoView({behavior: 'smooth'})">Apply Now</button>
        </div>

        <!-- Position 2 -->
        <div class="position-card">
          <div class="position-header">
            <div class="position-title">
              <h3>Full Stack Developer</h3>
            </div>
            <div class="position-type">Remote</div>
          </div>
          <div class="position-details">
            <div class="position-detail">
              <i class="fas fa-money-bill-wave"></i>
              <span>Competitive Salary</span>
            </div>
            <div class="position-detail">
              <i class="fas fa-clock"></i>
              <span>Flexible Hours</span>
            </div>
            <div class="position-detail">
              <i class="fas fa-calendar-alt"></i>
              <span>Full-Time</span>
            </div>
          </div>
          <p>Join us in developing comprehensive learning platforms using the MERN stack and implementing AI-driven features to enhance the educational experience.</p>
          <div class="position-requirements">
            <h4>Requirements:</h4>
            <ul>
              <li>
                <i class="fas fa-circle"></i>
                <span>4+ years of full stack development experience with MERN stack</span>
              </li>
              <li>
                <i class="fas fa-circle"></i>
                <span>Proficiency with MongoDB/NoSQL and SQL databases</span>
              </li>
              <li>
                <i class="fas fa-circle"></i>
                <span>Experience with API design and implementation</span>
              </li>
              <li>
                <i class="fas fa-circle"></i>
                <span>Knowledge of cloud services (AWS, Azure, or GCP)</span>
              </li>
            </ul>
          </div>
          <button class="cta-button" onclick="document.getElementById('application-form').scrollIntoView({behavior: 'smooth'})">Apply Now</button>
        </div>

        <!-- Position 3 -->
        <div class="position-card">
          <div class="position-header">
            <div class="position-title">
              <h3>Course Instructor</h3>
            </div>
            <div class="position-type">Part-Time</div>
          </div>
          <div class="position-details">
            <div class="position-detail">
              <i class="fas fa-money-bill-wave"></i>
              <span>Per Course/Revenue Share</span>
            </div>
            <div class="position-detail">
              <i class="fas fa-clock"></i>
              <span>Flexible Schedule</span>
            </div>
            <div class="position-detail">
              <i class="fas fa-calendar-alt"></i>
              <span>Contract</span>
            </div>
          </div>
          <p>Share your expertise with our students by developing and teaching courses in modern web development technologies, AI integration, and best practices.</p>
          <div class="position-requirements">
            <h4>Requirements:</h4>
            <ul>
              <li>
                <i class="fas fa-circle"></i>
                <span>5+ years of industry experience in web development</span>
              </li>
              <li>
                <i class="fas fa-circle"></i>
                <span>Strong communication and teaching skills</span>
              </li>
              <li>
                <i class="fas fa-circle"></i>
                <span>Expertise in one or more: React, Node.js, Python, AI integration</span>
              </li>
              <li>
                <i class="fas fa-circle"></i>
                <span>Previous teaching or mentoring experience preferred</span>
              </li>
            </ul>
          </div>
          <button class="cta-button" onclick="document.getElementById('application-form').scrollIntoView({behavior: 'smooth'})">Apply Now</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Application Form Section -->
  <section class="application-form" id="application-form">
    <div class="container">
      <div class="section-title">
        <h3>Join Our Team</h3>
        <p>Submit your application to become part of the Royal Arm Software Company family.</p>
      </div>

      <div class="form-container">
        <form action="process-application.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group">
              <label for="first-name">First Name</label>
              <input type="text" id="first-name" name="first_name" required>
            </div>
            <div class="form-group">
              <label for="last-name">Last Name</label>
              <input type="text" id="last-name" name="last_name" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" required>
            </div>
          </div>

          <div class="form-group">
            <label for="position">Position You're Applying For</label>
            <select id="position" name="position" required>
              <option value="" disabled selected>Select a position</option>
              <option value="frontend-developer">Front-End Developer</option>
              <option value="fullstack-developer">Full Stack Developer</option>
              <option value="course-instructor">Course Instructor</option>
              <option value="other">Other (Please specify)</option>
            </select>
          </div>

          <div class="form-group" id="other-position-container" style="display: none;">
            <label for="other-position">Please Specify Position</label>
            <input type="text" id="other-position" name="other_position">
          </div>

          <div class="form-group">
            <label for="experience">Years of Experience</label>
            <select id="experience" name="experience" required>
              <option value="" disabled selected>Select your experience level</option>
              <option value="less-than-1">Less than 1 year</option>
              <option value="1-2">1-2 years</option>
              <option value="3-5">3-5 years</option>
              <option value="6-10">6-10 years</option>
              <option value="more-than-10">More than 10 years</option>
            </select>
          </div>

          <div class="form-group">
            <label for="portfolio">Portfolio or Website URL (Optional)</label>
            <input type="url" id="portfolio" name="portfolio" placeholder="https://...">
          </div>

          <div class="form-group">
            <label for="linkedin">LinkedIn Profile (Optional)</label>
            <input type="url" id="linkedin" name="linkedin" placeholder="https://linkedin.com/in/...">
          </div>

          <div class="form-group">
            <label for="github">GitHub Username (Optional)</label>
            <input type="text" id="github" name="github" placeholder="yourusername">
          </div>

          <div class="upload-field">
            <label class="upload-label" for="resume">Upload Resume/CV</label>
            <input type="file" id="resume" name="resume" class="upload-input" accept=".pdf,.doc,.docx" required>
            <div class="upload-button">
              <i class="fas fa-upload"></i>
              <span>Choose File</span>
            </div>
            <div class="file-name" id="resume-file-name">No file chosen</div>
          </div>

          <div class="upload-field">
            <label class="upload-label" for="portfolio-samples">Portfolio Samples (Optional)</label>
            <input type="file" id="portfolio-samples" name="portfolio_samples[]" class="upload-input" accept=".pdf,.zip,.rar,.jpg,.jpeg,.png" multiple>
            <div class="upload-button">
              <i class="fas fa-upload"></i>
              <span>Choose Files</span>
            </div>
            <div class="file-name" id="portfolio-file-name">No files chosen</div>
          </div>

          <div class="form-group">
            <label for="message">Why do you want to join Royal Arm?</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>

          <div class="privacy-checkbox">
            <input type="checkbox" id="privacy-consent" name="privacy_consent" required>
            <label for="privacy-consent">I consent to Royal Arm Software Company storing and processing my personal information for recruitment purposes. I understand that my data will be handled according to the <a href="#">Privacy Policy</a>.</label>
          </div>

          <button type="submit" class="cta-button">Submit Application</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Team Member Testimonials -->
  <section class="team-testimonials">
    <div class="container">
      <div class="section-title">
        <h3>Meet Our Team Members</h3>
        <p>Hear from the people who make Royal Arm a great place to work and grow.</p>
      </div>

      <div class="testimonials-grid">
        <!-- Testimonial 1 -->
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p class="testimonial-text">"Working at Royal Arm has been transformative for my career. The collaborative environment and focus on cutting-edge technologies have helped me grow both technically and professionally. The leadership truly values innovation and employee growth."</p>
          </div>
          <div class="testimonial-author">
            <img src="/api/placeholder/50/50" alt="Amina Khan">
            <div class="author-info">
              <h4>Amina Khan</h4>
              <p>Senior Frontend Developer, 2 years at Royal Arm</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p class="testimonial-text">"What makes Royal Arm special is the balance between creative freedom and structured guidance. As a course instructor, I've been able to develop innovative teaching approaches while having the support I need to deliver exceptional learning experiences."</p>
          </div>
          <div class="testimonial-author">
            <img src="/api/placeholder/50/50" alt="Michael Chen">
            <div class="author-info">
              <h4>Michael Chen</h4>
              <p>Lead Course Instructor, 3 years at Royal Arm</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p class="testimonial-text">"The remote-first approach at Royal Arm has allowed me to join an international team while maintaining work-life balance. The flexible hours and focus on results rather than time spent has revolutionized how I approach my career in tech."</p>
          </div>
          <div class="testimonial-author">
            <img src="/api/placeholder/50/50" alt="Rahul Sharma">
            <div class="author-info">
              <h4>Rahul Sharma</h4>
              <p>Full Stack Developer, 1.5 years at Royal Arm</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="team-faq">
    <div class="container">
      <div class="section-title">
        <h3>Frequently Asked Questions</h3>
        <p>Find answers to common questions about working at Royal Arm Software Company.</p>
      </div>

      <div class="faq-container">
        <!-- FAQ Item 1 -->
        <div class="faq-item">
          <div class="faq-question">
            <h3>What is the interview process like?</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            <p>Our interview process typically consists of 3-4 stages: an initial screening call, a technical assessment relevant to your role, a panel interview with team members, and a final discussion with leadership. We aim to make the process informative and engaging, giving you a clear picture of what working at Royal Arm is like.</p>
          </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="faq-item">
          <div class="faq-question">
            <h3>Do you offer remote work options?</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            <p>Yes, we're a remote-first company! Most of our positions are fully remote, with team members working across different time zones. We use collaborative tools to maintain strong communication and have regular virtual team-building events to foster connection despite physical distance.</p>
          </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="faq-item">
          <div class="faq-question">
            <h3>What learning and development opportunities do you provide?</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            <p>We're committed to ongoing professional development through several channels: access to online learning platforms, a dedicated learning budget for conferences and courses, internal knowledge-sharing sessions, mentorship programs, and collaborative projects that stretch your skills. We encourage team members to dedicate time each week to learning.</p>
          </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="faq-item">
          <div class="faq-question">
            <h3>What technologies does Royal Arm work with?</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            <p>Our primary tech stack includes React, Node.js, MongoDB, and Express (MERN stack), along with modern frameworks like Next.js. We're also heavily invested in AI integration using Python, TensorFlow, and various NLP tools. For styling, we primarily use Tailwind CSS and animation libraries like GSAP. We're always evolving our tech stack based on industry trends and practical needs.</p>
          </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="faq-item">
          <div class="faq-question">
            <h3>How does Royal Arm support work-life balance?</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            <p>We believe in results over hours, offering flexible scheduling, generous paid time off, mental health days, and a culture that respects boundaries between work and personal time. We avoid after-hours communications except for genuine emergencies and encourage regular breaks throughout the workday.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="container" style="margin: 80px auto;">
    <div class="story-cta-section">
      <h2 class="cta-title">Ready to Join <span>Royal Arm</span>?</h2>
      <p class="cta-description">Take the next step in your career journey and become part of a team that's transforming web development education through innovation and excellence.</p>
      <div class="cta-buttons">
        <a href="#application-form" class="cta-button">Apply Now</a>
        <a href="index.php#contact" class="cta-button">Contact Us</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scroll-top.php'; ?>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Position dropdown toggle
      const positionSelect = document.getElementById('position');
      const otherPositionContainer = document.getElementById('other-position-container');

      positionSelect.addEventListener('change', function() {
        if (this.value === 'other') {
          otherPositionContainer.style.display = 'block';
        } else {
          otherPositionContainer.style.display = 'none';
        }
      });

      // File upload display
      const resumeInput = document.getElementById('resume');
      const resumeFileName = document.getElementById('resume-file-name');
      const portfolioInput = document.getElementById('portfolio-samples');
      const portfolioFileName = document.getElementById('portfolio-file-name');

      resumeInput.addEventListener('change', function() {
        if (this.files.length > 0) {
          resumeFileName.textContent = this.files[0].name;
        } else {
          resumeFileName.textContent = 'No file chosen';
        }
      });

      portfolioInput.addEventListener('change', function() {
        if (this.files.length > 0) {
          if (this.files.length === 1) {
            portfolioFileName.textContent = this.files[0].name;
          } else {
            portfolioFileName.textContent = `${this.files.length} files selected`;
          }
        } else {
          portfolioFileName.textContent = 'No files chosen';
        }
      });

      // Custom file upload buttons
      const uploadButtons = document.querySelectorAll('.upload-button');

      uploadButtons.forEach(button => {
        const input = button.previousElementSibling.previousElementSibling;

        button.addEventListener('click', () => {
          input.click();
        });
      });

      // FAQ Accordion
      const faqItems = document.querySelectorAll('.faq-item');

      faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');

        question.addEventListener('click', () => {
          // Close all other items
          faqItems.forEach(otherItem => {
            if (otherItem !== item) {
              otherItem.classList.remove('active');
            }
          });

          // Toggle current item
          item.classList.toggle('active');
        });
      });
    });
  </script>
</body>

</html>