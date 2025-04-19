<?php include 'includes/scroll-top.php' ?>

<footer>
  <div class="container">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="assets/img/logo-1.png" alt="Royal Arm Software Logo">
      </div>
      <div class="footer-links">
        <a href="index.php#home">Home</a>
        <a href="index.php#courses">Courses</a>
        <a href="components.php">Components</a>
        <a href="index.php#expertise">Expertise</a>
        <a href="success-stories.php">Success Stories</a>
        <a href="index.php#contact">Contact</a>
      </div>
      
      <div class="founder-info">
        <h3>About the Founder</h3>
        <div class="founder-details">
          <div class="founder-image">
            <!-- <img src="/api/placeholder/120/120" alt="Usama Rajput"> -->
          </div>
          <div class="founder-bio">
            <h4>Usama Rajput</h4>
            <p class="founder-title">Founder & CEO</p>
            <p class="founder-description">Full Stack MERN Developer & Business Entrepreneur</p>
            <div class="founder-contact">
              <a href="tel:+923196977218"><i class="fas fa-phone"></i> +92 319 697 7218</a>
              <a href="mailto:contact@royalarmsoftware.com"><i class="fas fa-envelope"></i> contact@royalarmsoftware.com</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="social-links">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
      </div>
      <p class="copyright">© 2025 Royal Arm Software Company. All rights reserved.</p>
    </div>
  </div>
</footer>

<style>
  /* Additional Footer Styles */
  .footer-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  
  .founder-info {
    margin: 30px 0;
    border-top: 1px solid rgba(200, 164, 92, 0.3);
    border-bottom: 1px solid rgba(200, 164, 92, 0.3);
    padding: 30px 0;
    width: 100%;
  }
  
  .founder-info h3 {
    color: var(--secondary);
    font-size: 22px;
    margin-bottom: 20px;
    font-weight: 400;
    letter-spacing: 1px;
  }
  
  .founder-details {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 25px;
    width: 100%;
  }
  
  .founder-image img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--secondary);
  }
  
  .founder-bio {
    text-align: left;
  }
  
  .founder-bio h4 {
    color: var(--light);
    font-size: 20px;
    margin-bottom: 5px;
    font-weight: 500;
  }
  
  .founder-title {
    color: var(--secondary);
    font-size: 16px;
    margin-bottom: 5px;
  }
  
  .founder-description {
    color: var(--light);
    opacity: 0.8;
    font-size: 14px;
    margin-bottom: 10px;
  }
  
  .founder-contact {
    display: flex;
    flex-direction: column;
    gap: 5px;
  }
  
  .founder-contact a {
    color: var(--light);
    font-size: 14px;
    opacity: 0.8;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
  }
  
  .founder-contact a i {
    margin-right: 8px;
    color: var(--secondary);
  }
  
  .founder-contact a:hover {
    color: var(--secondary);
    opacity: 1;
  }
  
  @media (max-width: 768px) {
    .founder-details {
      flex-direction: column;
      text-align: center;
    }
    
    .founder-bio {
      text-align: center;
    }
    
    .founder-contact {
      align-items: center;
    }
  }
</style>