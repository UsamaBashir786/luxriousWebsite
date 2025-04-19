<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enroll Now | Royal Arm Software Company</title>
  <link rel="stylesheet" href="assets/css/style.css">
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
            <img src="assets/img/Ai Front End Web Development.png" alt="Web Dev Fundamentals with AI">
            <h5>Beginner</h5>
            <p>Learn HTML, CSS, and JavaScript core concepts with AI-assisted coding. Master DOM manipulation and responsive design principles. Projects: Portfolio websites and interactive widgets.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>

          <div class="course-item">
            <img src="assets/img/Ai Front End Web Development intermediate.png" alt="Bootstrap 5 with AI">
            <h5>Intermediate</h5>
            <p>Build professional websites with HTML, CSS, JS and Bootstrap 5 using AI-powered development tools. Learn grid systems, components and responsive workflows. Projects: Business websites and admin dashboards.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>

          <div class="course-item">
            <img src="assets/img/Ai Front End Web Development expert.png" alt="Tailwind CSS with AI">
            <h5>Expert</h5>
            <p>Master utility-first CSS with Tailwind and advanced JavaScript patterns using AI coding assistants. Implement animations and optimize performance. Projects: SaaS platforms and custom design systems.</p>
            <div class="price">5000 PKR</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="assets/img/react.png" alt="Expert React.js Development">
            <h5>Basic | Intermediate | Expert</h5>
            <p>Master advanced React.js concepts including hooks, context API, and state management. Learn to build scalable applications with React Router, Redux Toolkit, and performance optimization techniques. Projects: E-commerce platforms and real-time dashboards.</p>
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
            <img src="assets/img/ai backend basic.png" alt="PHP/MySQL Basics with AI">
            <h5>Beginner</h5>
            <p>Learn PHP and MySQL fundamentals with AI-assisted coding. Master database design, queries, and basic server-side scripting. Projects: Contact form processors and user registration systems.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="assets/img/ai backend intermediate.png" alt="Website Backend Development">
            <h5>Intermediate</h5>
            <p>Build complete website backends with PHP and MySQL using AI-powered tools. Implement authentication, sessions, and form handling. Projects: Blog systems with admin panels.</p>
            <div class="price">Free</div>
            <button class="cta-button">Start Course</button>
          </div>
          <div class="course-item">
            <img src="assets/img/ai backend expert.png" alt="Advanced PHP/MySQL">
            <h5>Expert</h5>
            <p>Master professional PHP/MySQL development with AI code optimization. Create secure CRUD operations, RESTful APIs, and payment integrations. Projects: E-commerce backends with inventory management.</p>
            <div class="price">5000 PKR</div>
            <button class="cta-button">Start Course</button>
          </div>
        </div>
      </div>

      <!-- AI Mern Stack Development -->
      <div class="course-category">
        <h4>AI Mern Stack Development</h4>
        <div class="courses-grid">
          <div class="course-item">
            <img src="assets/img/mern basic.png" alt="Beginner AI Full Stack">
            <h5>Beginner</h5>
            <p>Learn the basics of Node.js, Express, and MongoDB with AI-driven tools. Understand server-side development and database integration. Projects: AI-enhanced task management apps.</p>
            <div class="price">Free</div>
            <button class="cta-button" onclick="window.location.href='enroll.php'">Start Course</button>
          </div>
          <div class="course-item">
            <img src="assets/img/mern intermediate.png" alt="Intermediate AI Full Stack">
            <h5>Intermediate</h5>
            <p>Build MERN stack applications with basic CRUD operations using AI-driven features. Learn to create RESTful APIs and manage data flow. Projects: AI-powered CRUD dashboards.</p>
            <div class="price">Free</div>
            <button class="cta-button" onclick="window.location.href='enroll.php'">Start Course</button>
          </div>
          <div class="course-item">
            <img src="assets/img/mern expert.png" alt="Expert AI Full Stack">
            <h5>Expert</h5>
            <p>Develop real-time MERN applications with AI integration using Next.js, GraphQL, and WebSocket. Focus on scalability and real-time features. Projects: AI-driven real-time chat platforms.</p>
            <div class="price">5000 PKR</div>
            <button class="cta-button" onclick="window.location.href='enroll.php'">Start Course</button>
          </div>
        </div>
      </div>

      <!-- AI Python Programming -->
      <div class="course-category">
        <h4>AI Python Programming</h4>
        <div class="courses-grid">
          <div class="course-item">
            <img src="assets/img/python basic.png" alt="Beginner Python">
            <h5>Beginner</h5>
            <p>Learn Python fundamentals using AI-driven tools. Master variables, loops, functions, and basic scripting. Projects: AI-assisted code generators, simple automation scripts.</p>
            <div class="price">Free</div>
            <button class="cta-button" onclick="window.location.href='enroll.php'">Start Course</button>
          </div>
          <div class="course-item">
            <img src="assets/img/python intermediate.png" alt="Intermediate Python">
            <h5>Intermediate</h5>
            <p>Explore data structures, file handling, and intermediate Python concepts with AI assistance. Build efficient programs. Projects: AI-enhanced data processing scripts, basic applications.</p>
            <div class="price">Free</div>
            <button class="cta-button" onclick="window.location.href='enroll.php'">Start Course</button>
          </div>
          <div class="course-item">
            <img src="assets/img/python expert.png" alt="Expert Python">
            <h5>Expert</h5>
            <p>Master advanced Python with AI-driven development tools. Learn concurrency, optimization, and scalable applications. Projects: AI-assisted real-time data pipelines, complex automation systems.</p>
            <div class="price">5000 PKR</div>
            <button class="cta-button" onclick="window.location.href='enroll.php'">Start Course</button>
          </div>
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