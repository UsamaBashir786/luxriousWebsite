<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success Stories | Royal Arm Software Company</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* Success Stories Specific Styles */
    .filter-controls {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 40px;
    }

    .filter-btn {
      background-color: transparent;
      border: 1px solid var(--secondary);
      color: var(--light);
      padding: 8px 20px;
      font-size: 14px;
      cursor: pointer;
      transition: all 0.3s;
      border-radius: 4px;
    }

    .filter-btn:hover,
    .filter-btn.active {
      background-color: var(--secondary);
      color: var(--dark);
    }

    .stories-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 30px;
    }

    .story-card {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s, border-color 0.3s;
    }

    .story-card:hover {
      transform: translateY(-10px);
      border-color: var(--secondary);
    }

    .story-header {
      padding: 20px;
      background-color: rgba(200, 164, 92, 0.1);
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .story-avatar {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid var(--secondary);
    }

    .story-person h3 {
      font-size: 22px;
      color: var(--secondary);
      font-weight: 500;
      margin-bottom: 5px;
    }

    .story-person p {
      color: var(--light);
      font-size: 14px;
      opacity: 0.8;
    }

    .story-content {
      padding: 25px;
    }

    .story-quote {
      font-style: italic;
      color: rgba(245, 245, 245, 0.8);
      margin-bottom: 20px;
      position: relative;
      padding: 0 10px;
    }

    .story-quote::before {
      content: "\201C";
      font-size: 60px;
      color: var(--secondary);
      opacity: 0.3;
      position: absolute;
      top: -20px;
      left: -15px;
    }

    .story-metrics {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 20px;
    }

    .metric {
      flex: 1;
      min-width: 100px;
      background-color: rgba(10, 10, 10, 0.3);
      padding: 15px;
      border-radius: 6px;
      text-align: center;
    }

    .metric-value {
      font-size: 24px;
      color: var(--secondary);
      font-weight: 600;
      margin-bottom: 8px;
    }

    .metric-label {
      font-size: 14px;
      color: var(--light);
      opacity: 0.7;
    }

    .story-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin: 15px 0 20px;
    }

    .story-tag {
      background-color: rgba(200, 164, 92, 0.1);
      color: var(--light);
      font-size: 12px;
      padding: 5px 10px;
      border-radius: 4px;
      border: 1px solid rgba(200, 164, 92, 0.3);
    }

    .story-cta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
    }

    .social-links a {
      color: var(--light);
      margin-left: 10px;
      font-size: 16px;
      transition: color 0.3s;
    }

    .social-links a:hover {
      color: var(--secondary);
    }

    .read-more {
      font-size: 14px;
      color: var(--secondary);
      border-bottom: 1px solid var(--secondary);
      padding-bottom: 2px;
      text-decoration: none;
      transition: all 0.3s;
    }

    .read-more:hover {
      color: var(--light);
      border-bottom-color: var(--light);
    }

    /* Featured Story Styles */
    .featured-story {
      margin-bottom: 60px;
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.3);
      border-radius: 8px;
      overflow: hidden;
    }

    .featured-story-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
    }

    .featured-story-content {
      padding: 40px;
    }

    .featured-label {
      display: inline-block;
      background-color: var(--secondary);
      color: var(--dark);
      font-size: 12px;
      font-weight: 600;
      padding: 5px 12px;
      border-radius: 4px;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .featured-story-title {
      font-size: 28px;
      color: var(--light);
      margin-bottom: 15px;
    }

    .featured-story-title span {
      color: var(--secondary);
    }

    .featured-story-quote {
      font-size: 18px;
      font-style: italic;
      margin-bottom: 20px;
      color: rgba(245, 245, 245, 0.8);
      line-height: 1.6;
    }

    .featured-story-info {
      margin-bottom: 25px;
    }

    .featured-story-image {
      display: flex;
      align-items: stretch;
      position: relative;
    }

    .featured-story-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .featured-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(transparent, rgba(10, 10, 10, 0.8));
      padding: 30px 20px 20px;
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .featured-avatar {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      border: 2px solid var(--secondary);
    }

    .featured-person h3 {
      font-size: 20px;
      color: var(--light);
      margin-bottom: 5px;
    }

    .featured-person p {
      font-size: 14px;
      color: var(--secondary);
    }

    /* Stats Section */
    .student-stats {
      padding: 80px 0;
      background-color: var(--primary);
      text-align: center;
      margin-bottom: 80px;
    }

    .stats-title {
      font-size: 32px;
      color: var(--light);
      margin-bottom: 15px;
    }

    .stats-title span {
      color: var(--secondary);
    }

    .stats-subtitle {
      max-width: 600px;
      margin: 0 auto 50px;
      color: rgba(245, 245, 245, 0.7);
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
    }

    .stat-card {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      padding: 30px 20px;
      border-radius: 8px;
    }

    .stat-value {
      font-size: 48px;
      color: var(--secondary);
      margin-bottom: 10px;
      font-weight: 600;
    }

    .stat-label {
      font-size: 16px;
      color: var(--light);
    }

    /* Testimonial Carousel */
    .testimonial-carousel {
      margin: 60px 0;
      position: relative;
    }

    .testimonial-slide {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.2);
      border-radius: 8px;
      padding: 30px;
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
    }

    .testimonial-quote {
      font-size: 22px;
      color: var(--light);
      font-style: italic;
      margin-bottom: 30px;
      line-height: 1.6;
    }

    .testimonial-author {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
    }

    .testimonial-author img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      border: 2px solid var(--secondary);
    }

    .author-details h4 {
      font-size: 18px;
      color: var(--secondary);
      margin-bottom: 5px;
    }

    .author-details p {
      font-size: 14px;
      color: rgba(245, 245, 245, 0.7);
    }

    .carousel-controls {
      display: flex;
      justify-content: center;
      margin-top: 30px;
      gap: 15px;
    }

    .carousel-control {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: rgba(200, 164, 92, 0.1);
      border: 1px solid rgba(200, 164, 92, 0.3);
      color: var(--light);
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .carousel-control:hover {
      background-color: var(--secondary);
      color: var(--dark);
    }

    .carousel-dots {
      display: flex;
      justify-content: center;
      margin-top: 20px;
      gap: 8px;
    }

    .carousel-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background-color: rgba(200, 164, 92, 0.3);
      cursor: pointer;
      transition: all 0.3s;
    }

    .carousel-dot.active {
      background-color: var(--secondary);
    }

    /* CTA Section */
    .story-cta-section {
      background-color: rgba(26, 26, 26, 0.8);
      border: 1px solid rgba(200, 164, 92, 0.3);
      border-radius: 8px;
      padding: 60px 40px;
      text-align: center;
      margin: 80px 0;
    }

    .cta-title {
      font-size: 32px;
      color: var(--light);
      margin-bottom: 20px;
    }

    .cta-title span {
      color: var(--secondary);
    }

    .cta-description {
      max-width: 600px;
      margin: 0 auto 30px;
      color: rgba(245, 245, 245, 0.8);
      font-size: 18px;
      line-height: 1.6;
    }

    .cta-buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
      .featured-story-inner {
        grid-template-columns: 1fr;
      }

      .featured-story-content {
        padding: 30px;
      }

      .featured-story-title {
        font-size: 24px;
      }

      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .stories-grid {
        grid-template-columns: 1fr;
      }

      .testimonial-quote {
        font-size: 18px;
      }

      .featured-story-quote {
        font-size: 16px;
      }

      .story-cta-section {
        padding: 40px 20px;
      }

      .cta-title {
        font-size: 26px;
      }
    }

    @media (max-width: 576px) {
      .stats-grid {
        grid-template-columns: 1fr;
      }

      .metric {
        min-width: 100%;
      }

      .story-metrics {
        flex-direction: column;
      }

      .story-header {
        flex-direction: column;
        text-align: center;
      }

      .featured-overlay {
        flex-direction: column;
        text-align: center;
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
        <h2>Our <span>Success Stories</span></h2>
        <p>Discover how our students transformed their careers, built impressive portfolios, and landed dream jobs through our AI-driven courses and mentorship.</p>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="student-stats">
    <div class="container">
      <h2 class="stats-title">Turning <span>Ambition</span> Into Achievement</h2>
      <p class="stats-subtitle">Since 2020, we've helped thousands of students transform their careers and build successful paths in tech. Here's our impact by the numbers.</p>

      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-value">95%</div>
          <div class="stat-label">Employment Rate</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">78%</div>
          <div class="stat-label">Salary Increase</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">5,000+</div>
          <div class="stat-label">Students Taught</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">35+</div>
          <div class="stat-label">Countries Reached</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Success Story -->
  <section class="container">
    <div class="featured-story">
      <div class="featured-story-inner">
        <div class="featured-story-content">
          <div class="featured-label">Featured Story</div>
          <h2 class="featured-story-title">From Teaching Assistant to <span>Senior Developer at Google</span></h2>
          <p class="featured-story-quote">"Royal Arm's AI Full Stack course completely transformed my career trajectory. The hands-on projects and personalized mentorship gave me both the technical skills and confidence to apply for positions I previously thought were out of reach."</p>
          <div class="featured-story-info">
            <p>Sarah joined our AI Full Stack Development course with basic HTML and CSS knowledge. Within 8 months, she built a portfolio of AI-enhanced applications, secured three technical interviews, and landed a Senior Developer role at Google with a 156% salary increase.</p>
          </div>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">8</div>
              <div class="metric-label">Months to Job</div>
            </div>
            <div class="metric">
              <div class="metric-value">156%</div>
              <div class="metric-label">Salary Increase</div>
            </div>
            <div class="metric">
              <div class="metric-value">5</div>
              <div class="metric-label">Project Portfolio</div>
            </div>
          </div>
          <a href="#" class="cta-button">Read Full Story</a>
        </div>
        <div class="featured-story-image">
          <img src="/api/placeholder/600/500" alt="Sarah Thompson Working at Google">
          <div class="featured-overlay">
            <img src="/api/placeholder/60/60" alt="Sarah Thompson" class="featured-avatar">
            <div class="featured-person">
              <h3>Sarah Thompson</h3>
              <p>Senior Developer at Google</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Success Stories Main Content -->
  <section class="container">
    <div class="filter-controls">
      <button class="filter-btn active" data-filter="all">All Stories</button>
      <button class="filter-btn" data-filter="frontend">Front End</button>
      <button class="filter-btn" data-filter="backend">Back End</button>
      <button class="filter-btn" data-filter="fullstack">Full Stack</button>
      <button class="filter-btn" data-filter="python">Python/Django</button>
      <button class="filter-btn" data-filter="career">Career Change</button>
    </div>

    <div class="stories-grid">
      <!-- Story 1 -->
      <div class="story-card" data-category="frontend career">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Ahmed Khan" class="story-avatar">
          <div class="story-person">
            <h3>Ahmed Khan</h3>
            <p>UI Engineer at Shopify</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">The React and AI integration modules completely transformed my understanding of modern front-end development. I went from struggling with basic components to building complex, state-managed applications in just 12 weeks.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">12</div>
              <div class="metric-label">Weeks to Job</div>
            </div>
            <div class="metric">
              <div class="metric-value">85%</div>
              <div class="metric-label">Salary Increase</div>
            </div>
          </div>
          <div class="story-tags">
            <span class="story-tag">Front End Course</span>
            <span class="story-tag">React Specialist</span>
            <span class="story-tag">Career Change</span>
          </div>
          <div class="story-cta">
            <div class="social-links">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <a href="#" class="read-more">Read Full Story</a>
          </div>
        </div>
      </div>

      <!-- Story 2 -->
      <div class="story-card" data-category="backend python">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Priya Sharma" class="story-avatar">
          <div class="story-person">
            <h3>Priya Sharma</h3>
            <p>Backend Developer at Uber</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">The Python Django course was incredibly comprehensive. The AI integration modules taught me how to build scalable backend services that leverage machine learning capabilities, which is exactly what my current role requires.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">6</div>
              <div class="metric-label">Months to Job</div>
            </div>
            <div class="metric">
              <div class="metric-value">110%</div>
              <div class="metric-label">Salary Increase</div>
            </div>
          </div>
          <div class="story-tags">
            <span class="story-tag">Python Course</span>
            <span class="story-tag">Django Expertise</span>
            <span class="story-tag">AI Integration</span>
          </div>
          <div class="story-cta">
            <div class="social-links">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <a href="#" class="read-more">Read Full Story</a>
          </div>
        </div>
      </div>

      <!-- Story 3 -->
      <div class="story-card" data-category="fullstack career">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Michael Lee" class="story-avatar">
          <div class="story-person">
            <h3>Michael Lee</h3>
            <p>Full Stack Engineer at Spotify</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">Coming from a non-technical background in marketing, I never thought I could make such a dramatic career change. The Full Stack course provided me with the perfect balance of theory and practical projects to build a compelling portfolio.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">10</div>
              <div class="metric-label">Months to Job</div>
            </div>
            <div class="metric">
              <div class="metric-value">125%</div>
              <div class="metric-label">Salary Increase</div>
            </div>
          </div>
          <div class="story-tags">
            <span class="story-tag">Full Stack Course</span>
            <span class="story-tag">Career Transition</span>
            <span class="story-tag">MERN Stack</span>
          </div>
          <div class="story-cta">
            <div class="social-links">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <a href="#" class="read-more">Read Full Story</a>
          </div>
        </div>
      </div>

      <!-- Story 4 -->
      <div class="story-card" data-category="frontend">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Sophia Rodriguez" class="story-avatar">
          <div class="story-person">
            <h3>Sophia Rodriguez</h3>
            <p>UI/UX Developer at Adobe</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">The AI Front End Development course helped me combine my design background with technical implementation skills. Learning about React, Tailwind CSS, and GSAP animations gave me a competitive edge in the job market.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">4</div>
              <div class="metric-label">Months to Job</div>
            </div>
            <div class="metric">
              <div class="metric-value">95%</div>
              <div class="metric-label">Salary Increase</div>
            </div>
          </div>
          <div class="story-tags">
            <span class="story-tag">Front End Course</span>
            <span class="story-tag">UI/UX Focus</span>
            <span class="story-tag">Animation Expert</span>
          </div>
          <div class="story-cta">
            <div class="social-links">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-dribbble"></i></a>
            </div>
            <a href="#" class="read-more">Read Full Story</a>
          </div>
        </div>
      </div>

      <!-- Story 5 -->
      <div class="story-card" data-category="backend python">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="James Wilson" class="story-avatar">
          <div class="story-person">
            <h3>James Wilson</h3>
            <p>ML Engineer at Amazon</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">The AI Python Django/Flask course provided me with the perfect bridge between traditional backend development and machine learning integration. This combination is exactly what employers are looking for.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">7</div>
              <div class="metric-label">Months to Job</div>
            </div>
            <div class="metric">
              <div class="metric-value">140%</div>
              <div class="metric-label">Salary Increase</div>
            </div>
          </div>
          <div class="story-tags">
            <span class="story-tag">Python Course</span>
            <span class="story-tag">ML Integration</span>
            <span class="story-tag">AWS Deployment</span>
          </div>
          <div class="story-cta">
            <div class="social-links">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-medium"></i></a>
            </div>
            <a href="#" class="read-more">Read Full Story</a>
          </div>
        </div>
      </div>

      <!-- Story 6 -->
      <div class="story-card" data-category="fullstack career">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Aisha Patel" class="story-avatar">
          <div class="story-person">
            <h3>Aisha Patel</h3>
            <p>Full Stack Developer at Microsoft</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">After being laid off from my retail management position, I decided to completely change careers. Royal Arm's Full Stack course provided me with the structure, mentorship, and community I needed to succeed in tech.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">9</div>
              <div class="metric-label">Months to Job</div>
            </div>
            <div class="metric">
              <div class="metric-value">165%</div>
              <div class="metric-label">Salary Increase</div>
            </div>
          </div>
          <div class="story-tags">
            <span class="story-tag">Full Stack Course</span>
            <span class="story-tag">Career Changer</span>
            <span class="story-tag">Microsoft Tech</span>
          </div>
          <div class="story-cta">
            <div class="social-links">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <a href="#" class="read-more">Read Full Story</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial Carousel -->
  <section class="container">
    <div class="testimonial-carousel">
      <div class="testimonial-slide">
        <p class="testimonial-quote">"The community aspect of Royal Arm's courses was just as valuable as the technical content. Having a support network of peers and mentors helped me push through challenging concepts and expand my professional network."</p>
        <div class="testimonial-author">
          <img src="/api/placeholder/60/60" alt="David Chen">
          <div class="author-details">
            <h4>David Chen</h4>
            <p>Frontend Developer at Netflix</p>
          </div>
        </div>
      </div>
      <div class="carousel-controls">
        <button class="carousel-control"><i class="fas fa-chevron-left"></i></button>
        <button class="carousel-control"><i class="fas fa-chevron-right"></i></button>
      </div>
      <div class="carousel-dots">
        <div class="carousel-dot active"></div>
        <div class="carousel-dot"></div>
        <div class="carousel-dot"></div>
        <div class="carousel-dot"></div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="container">
    <div class="story-cta-section">
      <h2 class="cta-title">Ready to Write Your <span>Success Story</span>?</h2>
      <p class="cta-description">Join thousands of students who have transformed their careers through our AI-driven courses. Whether you're starting from scratch or upskilling, we have the perfect path for you.</p>
      <div class="cta-buttons">
        <a href="enroll.php" class="cta-button">Explore Courses</a>
        <a href="index.php#contact" class="cta-button">Contact Us</a>
      </div>
    </div>
  </section>

  <!-- Alumni Spotlight -->
  <section class="container">
    <div class="section-title">
      <h3>Alumni Spotlight</h3>
      <p>Meet the exceptional graduates who are making waves in the tech industry after completing our courses.</p>
    </div>

    <div class="stories-grid">
      <!-- Alumni 1 -->
      <div class="story-card">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Carlos Mendez" class="story-avatar">
          <div class="story-person">
            <h3>Carlos Mendez</h3>
            <p>CTO at TechNova Startup</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">The Full Stack curriculum gave me the confidence to not just join a company, but to start my own. Two years after graduating, I launched a startup that has now raised $2.5M in funding.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">2</div>
              <div class="metric-label">Years to Startup</div>
            </div>
            <div class="metric">
              <div class="metric-value">$2.5M</div>
              <div class="metric-label">Funding Raised</div>
            </div>
          </div>
          <div class="story-tags">
            <span class="story-tag">Full Stack Graduate</span>
            <span class="story-tag">Entrepreneur</span>
            <span class="story-tag">Class of 2023</span>
          </div>
          <div class="story-cta">
            <div class="social-links">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fas fa-globe"></i></a>
            </div>
            <a href="#" class="read-more">Read Full Story</a>
          </div>
        </div>
      </div>

      <!-- Alumni 2 -->
      <div class="story-card">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Emma Zhang" class="story-avatar">
          <div class="story-person">
            <h3>Emma Zhang</h3>
            <p>Developer Advocate at Twitter</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">Beyond technical skills, Royal Arm taught me how to build a personal brand and community. This opened doors to speaking at conferences, which led to my dream role as a Developer Advocate.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">15</div>
              <div class="metric-label">Conference Talks</div>
            </div>
            <div class="metric">
              <div class="metric-value">25K+</div>
              <div class="metric-label">Twitter Followers</div>
            </div>
          </div>
          <div class="story-tags">
            <span class="story-tag">Front End Graduate</span>
            <span class="story-tag">Community Builder</span>
            <span class="story-tag">Class of 2022</span>
          </div>
          <div class="story-cta">
            <div class="social-links">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <a href="#" class="read-more">Read Full Story</a>
          </div>
        </div>
      </div>

      <!-- Alumni 3 -->
      <div class="story-card">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Jamal Thomas" class="story-avatar">
          <div class="story-person">
            <h3>Jamal Thomas</h3>
            <p>Lead Developer at Stripe</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">The mentorship didn't end with graduation. Royal Arm's network continues to support my growth, helping me navigate from junior developer to team lead in just three years.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">3</div>
              <div class="metric-label">Years to Lead</div>
            </div>
            <div class="metric">
              <div class="metric-value">8</div>
              <div class="metric-label">Team Members</div>
            </div>
          </div>
          <div class="story-tags">
            <span class="story-tag">Backend Graduate</span>
            <span class="story-tag">Leadership Path</span>
            <span class="story-tag">Class of 2021</span>
          </div>
          <div class="story-cta">
            <div class="social-links">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
              <a href="#"><i class="fab fa-medium"></i></a>
            </div>
            <a href="#" class="read-more">Read Full Story</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Employer Testimonials -->
  <section class="container" style="margin-bottom: 80px;">
    <div class="section-title">
      <h3>What Employers Say</h3>
      <p>Hear from companies that have hired Royal Arm graduates and seen the difference in their technical capabilities.</p>
    </div>

    <div class="stories-grid">
      <!-- Employer 1 -->
      <div class="story-card">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Sarah Johnson" class="story-avatar">
          <div class="story-person">
            <h3>Sarah Johnson</h3>
            <p>Tech Recruiter at Google</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">Royal Arm graduates consistently demonstrate not just technical skills, but also problem-solving abilities and collaboration that make them stand out in our interview process.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">12</div>
              <div class="metric-label">Graduates Hired</div>
            </div>
            <div class="metric">
              <div class="metric-value">92%</div>
              <div class="metric-label">Retention Rate</div>
            </div>
          </div>
          <a href="#" class="read-more">Read Full Testimonial</a>
        </div>
      </div>

      <!-- Employer 2 -->
      <div class="story-card">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Mark Davis" class="story-avatar">
          <div class="story-person">
            <h3>Mark Davis</h3>
            <p>Engineering Manager at Meta</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">What sets Royal Arm graduates apart is their understanding of AI integration within modern development workflows. They bring innovative thinking that adds immediate value to our teams.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">8</div>
              <div class="metric-label">Graduates Hired</div>
            </div>
            <div class="metric">
              <div class="metric-value">3</div>
              <div class="metric-label">Promotions</div>
            </div>
          </div>
          <a href="#" class="read-more">Read Full Testimonial</a>
        </div>
      </div>

      <!-- Employer 3 -->
      <div class="story-card">
        <div class="story-header">
          <img src="/api/placeholder/70/70" alt="Amira Hassan" class="story-avatar">
          <div class="story-person">
            <h3>Amira Hassan</h3>
            <p>CTO at FinTech Startup</p>
          </div>
        </div>
        <div class="story-content">
          <p class="story-quote">As a startup, we need developers who can adapt quickly and handle multiple aspects of our stack. Royal Arm graduates have the versatility and initiative we rely on to innovate rapidly.</p>
          <div class="story-metrics">
            <div class="metric">
              <div class="metric-value">5</div>
              <div class="metric-label">Graduates Hired</div>
            </div>
            <div class="metric">
              <div class="metric-value">40%</div>
              <div class="metric-label">of Engineering Team</div>
            </div>
          </div>
          <a href="#" class="read-more">Read Full Testimonial</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <script>
    // Filter functionality
    document.addEventListener('DOMContentLoaded', function() {
      const filterButtons = document.querySelectorAll('.filter-btn');
      const storyCards = document.querySelectorAll('.story-card');

      filterButtons.forEach(button => {
        button.addEventListener('click', function() {
          // Remove active class from all buttons
          filterButtons.forEach(btn => btn.classList.remove('active'));

          // Add active class to clicked button
          this.classList.add('active');

          const filter = this.getAttribute('data-filter');

          storyCards.forEach(card => {
            if (filter === 'all') {
              card.style.display = 'block';
            } else {
              const categories = card.getAttribute('data-category').split(' ');
              if (categories.includes(filter)) {
                card.style.display = 'block';
              } else {
                card.style.display = 'none';
              }
            }
          });
        });
      });

      // Testimonial carousel functionality
      let currentSlide = 0;
      const dots = document.querySelectorAll('.carousel-dot');
      const prevBtn = document.querySelector('.carousel-control:first-child');
      const nextBtn = document.querySelector('.carousel-control:last-child');

      // For a real implementation, you would have multiple slides
      // and implement proper carousel functionality

      if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', function() {
          // Navigate to previous slide logic
          currentSlide = (currentSlide - 1 + dots.length) % dots.length;
          updateCarousel();
        });

        nextBtn.addEventListener('click', function() {
          // Navigate to next slide logic
          currentSlide = (currentSlide + 1) % dots.length;
          updateCarousel();
        });

        dots.forEach((dot, index) => {
          dot.addEventListener('click', function() {
            currentSlide = index;
            updateCarousel();
          });
        });
      }

      function updateCarousel() {
        // Update active dot
        dots.forEach((dot, index) => {
          if (index === currentSlide) {
            dot.classList.add('active');
          } else {
            dot.classList.remove('active');
          }
        });

        // In a real implementation, you would update the visible slide here
      }
    });

    // Menu toggle functionality
    const menuToggle = document.querySelector('.menu-toggle');
    if (menuToggle) {
      menuToggle.addEventListener('click', () => {
        document.querySelector('nav').classList.toggle('active');
      });
    }

    // Animate elements on scroll
    function animateOnScroll() {
      const elements = document.querySelectorAll('.story-card, .stat-card, .featured-story');

      elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;

        if (elementPosition < screenPosition) {
          element.style.opacity = 1;
          element.style.transform = 'translateY(0)';
        }
      });
    }

    // Initial styles for animation
    document.addEventListener('DOMContentLoaded', function() {
      const elements = document.querySelectorAll('.story-card, .stat-card, .featured-story');

      elements.forEach(element => {
        element.style.opacity = 0;
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      });

      // Trigger initial animation
      setTimeout(animateOnScroll, 300);
    });

    // Listen for scroll events
    window.addEventListener('scroll', animateOnScroll);
  </script>
</body>

</html>