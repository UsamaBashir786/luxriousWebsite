<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Royal Arm Software Company | Web Development Courses</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/img/web-app-manifest-512x512.png" type="image/x-icon">
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
  <section class="courses" id="courses">
    <div class="container">
      <div class="section-title">
        <h3>Our AI-Driven Courses</h3>
        <p>Discover our comprehensive courses integrating AI with modern development frameworks, with free access for Beginner and Intermediate levels and premium Expert courses.</p>
      </div>
      <div class="course-category">
        <div class="courses-grid">
          <div class="course-item">
            <img src="assets/img/Ai Front End Web Development.png" alt="Beginner AI Front End">
            <h5>Beginner</h5>
            <p>Learn HTML, CSS, and JavaScript core concepts with AI-assisted coding. Master DOM manipulation and responsive design principles. Projects: Portfolio websites and interactive widgets.</p>
            <div class="price">Free</div>
            <button class="cta-button" onclick="window.location.href='enroll.php'">Enroll Now</button>
          </div>
          <div class="course-item">
            <img src="assets/img/ai backend basic.png" alt="Beginner AI Back End">
            <h5>Beginner</h5>
            <p>Learn PHP and MySQL fundamentals with AI-assisted coding. Master database design, queries, and basic server-side scripting. Projects: Contact form processors and user registration systems.</p>
            <div class="price">Free</div>
            <button class="cta-button" onclick="window.location.href='enroll.php'">Enroll Now</button>
          </div>
          <div class="course-item">
            <img src="assets/img/react.png" alt="Expert React.js Development">
            <h5>Basic | Intermediate | Expert</h5>
            <p>Master advanced React.js concepts including hooks, context API, and state management. Learn to build scalable applications with React Router, Redux Toolkit, and performance optimization techniques. Projects: E-commerce platforms and real-time dashboards.</p>
            <div class="price">5000 PKR</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="assets/img/mern basic.png" alt="Beginner AI Full Stack">
            <h5>Beginner</h5>
            <p>Learn the basics of Node.js, Express, and MongoDB with AI-driven tools. Understand server-side development and database integration. Projects: AI-enhanced task management apps.</p>
            <div class="price">Free</div>
            <button class="cta-button" onclick="window.location.href='enroll.php'">Start Course</button>
          </div>
          <div class="course-item">
            <img src="assets/img/python basic.png" alt="Beginner AI Python">
            <h5>Beginner</h5>
            <p>Learn Python fundamentals using AI-driven tools. Master variables, loops, functions, and basic scripting. Projects: AI-assisted code generators, simple automation scripts.</p>
            <div class="price">Free</div>
            <button class="cta-button" onclick="window.location.href='enroll.php'">Enroll Now</button>
          </div>
        </div>
      </div>
      <button style="text-align: center;margin: auto;display: block;" class="cta-button" onclick="window.location.href='enroll.php'">View All Courses</button>
    </div>
  </section>
  <!-- components -->
  <section class="components" id="components">
    <div class="container">
      <div class="section-title">
        <h3>Free & Paid Components</h3>
        <p>Enhance your web projects with our meticulously crafted components, available in free and premium tiers, designed for seamless integration with modern frameworks like React, Tailwind CSS, and more.</p>
      </div>
      <div class="collection-grid">
        <div class="collection-item">
          <img src="assets/img/ui components.png" alt="UI Component Kit">
          <h4>UI Component Kit</h4>
          <p>Access a rich library of reusable UI components, including buttons, forms, and modals, optimized for Tailwind CSS and React, available in free and premium versions.</p>
          <div class="price">Free</div>
          <button class="cta-button">Explore Components</button>
        </div>
        <div class="collection-item">
          <img src="assets/img/animation.png" alt="Animation Pack">
          <h4>Animation Pack</h4>
          <p>Elevate your websites with GSAP and AOS-powered animations, including scroll effects and transitions, with free starter packs and premium bundles.</p>
          <div class="price">Free</div>
          <button class="cta-button">Explore Animations</button>
        </div>
        <div class="collection-item">
          <img src="assets/img/website template.png" alt="Website Templates">
          <h4>Website Templates</h4>
          <p>Launch projects faster with our responsive templates for portfolios, e-commerce, and dashboards, compatible with HTML, CSS, and JavaScript frameworks.</p>
          <div class="price">Free</div>
          <button class="cta-button">Explore Templates</button>
        </div>
      </div>
      <button style="text-align: center;margin: auto;display: block;margin-top: 30px;" class="cta-button" onclick="window.location.href='components.php'">View All components</button>
    </div>
  </section>

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
          <img src="assets/img/Unparalleled Development Expertise.avif" alt="Developer at work">
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
              <span>Sahiwal Punjab Pakistan, 57000</span>
            </div>
            <div class="contact-item">
              <i class="fas fa-phone"></i>
              <span>+92 3196977218</span>
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