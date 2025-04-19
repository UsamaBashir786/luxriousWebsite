<div class="preloader">
  <div class="preloader-content">
    <svg class="preloader-icon" viewBox="0 0 64 64" aria-label="Loading">
      <path fill="var(--secondary)" d="M32 4c-2 0-3.6 1.6-3.6 3.6s1.6 3.6 3.6 3.6 3.6-1.6 3.6-3.6S34 4 32 4zm16 10.4c-1.6 0-2.8 1.2-2.8 2.8s1.2 2.8 2.8 2.8 2.8-1.2 2.8-2.8-1.2-2.8-2.8-2.8zm-32 0c-1.6 0-2.8 1.2-2.8 2.8s1.2 2.8 2.8 2.8 2.8-1.2 2.8-2.8-1.2-2.8-2.8-2.8zm40 16c-1.2 0-2.4.8-2.4 2.4s.8 2.4 2.4 2.4 2.4-.8 2.4-2.4-.8-2.4-2.4-2.4zm-48 0c-1.2 0-2.4.8-2.4 2.4s.8 2.4 2.4 2.4 2.4-.8 2.4-2.4-.8-2.4-2.4-2.4zm40 16c-.8 0-1.6.8-1.6 1.6s.8 1.6 1.6 1.6 1.6-.8 1.6-1.6-.8-1.6-1.6-1.6zm-48 0c-.8 0-1.6.8-1.6 1.6s.8 1.6 1.6 1.6 1.6-.8 1.6-1.6-.8-1.6-1.6-1.6zm32 8c-.4 0-.8.4-.8.8s.4.8.8.8.8-.4.8-.8-.4-.8-.8-.8z" />
    </svg>
    <h3>Royal Arm University</h3>
    <p>Loading...</p>
  </div>
</div>

<style>
  /* Preloader Styles */
  .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--dark);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    opacity: 1;
    transition: opacity 0.5s ease;
  }

  .preloader.hidden {
    opacity: 0;
    pointer-events: none;
  }

  .preloader-content {
    text-align: center;
    color: var(--light);
  }

  .preloader-icon {
    width: 80px;
    height: 80px;
    margin-bottom: 20px;
    animation: pulse 1.5s infinite ease-in-out;
  }

  .preloader-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    color: var(--secondary);
    margin-bottom: 10px;
  }

  .preloader-content p {
    font-size: 18px;
    color: rgba(245, 245, 245, 0.7);
  }

  /* Pulse Animation */
  @keyframes pulse {
    0% {
      transform: scale(1);
      opacity: 1;
    }

    50% {
      transform: scale(1.1);
      opacity: 0.7;
    }

    100% {
      transform: scale(1);
      opacity: 1;
    }
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
    .preloader-icon {
      width: 60px;
      height: 60px;
    }

    .preloader-content h3 {
      font-size: 28px;
    }

    .preloader-content p {
      font-size: 16px;
    }
  }

  @media (max-width: 576px) {
    .preloader-icon {
      width: 50px;
      height: 50px;
    }

    .preloader-content h3 {
      font-size: 24px;
    }

    .preloader-content p {
      font-size: 14px;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.querySelector('.preloader');

    // Hide preloader after 3 seconds
    setTimeout(() => {
      preloader.classList.add('hidden');
      // Remove preloader from DOM after transition
      setTimeout(() => {
        preloader.style.display = 'none';
      }, 200);
    }, 1000);
  });
</script>