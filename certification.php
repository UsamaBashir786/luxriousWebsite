<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Certifications | Royal Arm Software Company</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/img/web-app-manifest-512x512.png" type="image/x-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<style>
  /* Certifications Section */
  .certifications {
    padding: 100px 0;
    background-color: var(--dark);
  }

  .certification-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
  }

  .certification-item {
    background-color: rgba(26, 26, 26, 0.8);
    padding: 30px;
    text-align: center;
    border: 1px solid rgba(200, 164, 92, 0.2);
    transition: transform 0.3s, border 0.3s;
  }

  .certification-item:hover {
    transform: translateY(-10px);
    border: 1px solid var(--secondary);
  }

  .certification-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    margin-bottom: 20px;
  }

  .certification-item h4 {
    font-size: 24px;
    color: var(--secondary);
    margin-bottom: 15px;
    font-weight: 400;
  }

  .certification-item p {
    color: rgba(245, 245, 245, 0.7);
    margin-bottom: 20px;
  }

  .status {
    font-size: 18px;
    color: var(--light);
    margin-bottom: 20px;
    font-weight: 500;
  }
</style>

<body>
  <!-- Header -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Certifications Section -->
  <section class="certifications" id="certifications">
    <div class="container">
      <div class="section-title" style="padding: 20px;">
        <h3>Certification Tests</h3>
        <p>Earn industry-recognized certifications in various programming languages and technologies. Explore the available tests below and take the next step in validating your skills.</p>
      </div>
      <div class="certification-grid">
        <div class="certification-item">
          <img src="assets/img/html-certification.png" alt="HTML Certification">
          <h4>HTML</h4>
          <p>Test your knowledge of HTML5, semantic markup, and accessibility standards. Perfect for beginners and intermediate developers.</p>
          <div class="status">Test Available</div>
          <button class="cta-button" onclick="window.location.href='enroll.php'">Take Test</button>
        </div>
        <div class="certification-item">
          <img src="assets/img/css-certification.png" alt="CSS Certification">
          <h4>CSS</h4>
          <p>Validate your skills in CSS3, including Flexbox, Grid, animations, and responsive design with Tailwind CSS.</p>
          <div class="status">Test Available</div>
          <button class="cta-button" onclick="window.location.href='enroll.php'">Take Test</button>
        </div>
        <div class="certification-item">
          <img src="assets/img/javascript-certification.png" alt="JavaScript Certification">
          <h4>JavaScript</h4>
          <p>Assess your proficiency in ES6+, DOM manipulation, asynchronous programming, and frameworks like React.</p>
          <div class="status">Test Available</div>
          <button class="cta-button" onclick="window.location.href='enroll.php'">Take Test</button>
        </div>
        <div class="certification-item">
          <img src="assets/img/python-certification.png" alt="Python Certification">
          <h4>Python</h4>
          <p>Demonstrate expertise in Python fundamentals, data structures, and AI-driven applications like ML basics.</p>
          <div class="status">Test Available</div>
          <button class="cta-button" onclick="window.location.href='enroll.php'">Take Test</button>
        </div>
        <div class="certification-item">
          <img src="assets/img/nodejs-certification.png" alt="Node.js Certification">
          <h4>Node.js</h4>
          <p>Prove your ability to build scalable RESTful APIs and server-side applications with Node.js and Express.js.</p>
          <div class="status">Test Available</div>
          <button class="cta-button" onclick="window.location.href='enroll.php'">Take Test</button>
        </div>
        <div class="certification-item">
          <img src="assets/img/react-certification.png" alt="React Certification">
          <h4>React</h4>
          <p>Showcase your skills in building dynamic, component-based UIs with React, including hooks and state management.</p>
          <div class="status">Test Available</div>
          <button class="cta-button" onclick="window.location.href='enroll.php'">Take Test</button>
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