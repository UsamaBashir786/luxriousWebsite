<!-- Scroll to Top Button HTML -->
<button id="scrollToTopBtn" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</button>

<!-- CSS for the Scroll to Top Button -->
<style>
  #scrollToTopBtn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: var(--secondary);
    color: var(--dark);
    border: none;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.3s ease;
    z-index: 999;
  }

  #scrollToTopBtn:hover {
    background-color: var(--light);
  }

  #scrollToTopBtn.visible {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  /* For mobile devices */
  @media (max-width: 768px) {
    #scrollToTopBtn {
      width: 40px;
      height: 40px;
      bottom: 20px;
      right: 20px;
      font-size: 16px;
    }
  }
</style>

<!-- JavaScript for the Scroll to Top Button -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Show/hide button based on scroll position
    window.addEventListener("scroll", function() {
      if (window.pageYOffset > 300) {
        scrollToTopBtn.classList.add("visible");
      } else {
        scrollToTopBtn.classList.remove("visible");
      }
    });

    // Scroll to top with smooth behavior when button is clicked
    scrollToTopBtn.addEventListener("click", function() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });
  });
</script>