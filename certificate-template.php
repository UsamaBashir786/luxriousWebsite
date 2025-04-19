<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Certificate | Royal Arm Software Company</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/img/web-app-manifest-512x512.png" type="image/x-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Certificate Section -->
  <section class="certificate" id="certificate">
    <div class="container">
      <div class="section-title">
        <h3>Your Certificate of Achievement</h3>
        <p>Congratulations on completing your certification with Royal Arm Software Company. Download your certificate below to showcase your skills.</p>
      </div>
      <div class="certificate-wrapper">
        <div class="certificate-container">
          <div class="certificate-content">
            <div class="certificate-header">
              <img src="assets/img/logo-1.png" alt="Royal Arm Logo" class="certificate-logo">
              <h2>Royal Arm Software Company</h2>
              <h3>Certificate of Completion</h3>
            </div>
            <div class="certificate-body">
              <p>This is to certify that</p>
              <h4>[Student Name]</h4>
              <p>has successfully completed the</p>
              <h5>[Course Name] Certification</h5>
              <p>on</p>
              <p class="certificate-date">[Completion Date]</p>
            </div>
            <div class="certificate-footer">
              <div class="signature">
                <img src="assets/img/signature.png" alt="Signature">
                <p>Usama Bashir</p>
                <p>Director of Education</p>
              </div>
              <div class="certificate-seal">
                <img src="assets/img/seal.png" alt="Official Seal">
              </div>
            </div>
          </div>
        </div>
        <div class="certificate-actions">
          <button class="cta-button" onclick="downloadCertificate()">Download Certificate</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <script>
    // Toggle mobile menu
    document.querySelector('.menu-toggle').addEventListener('click', () => {
      document.querySelector('nav').classList.toggle('active');
    });

    // Function to trigger certificate download (placeholder)
    function downloadCertificate() {
      // In a real implementation, this would generate a PDF or image
      alert('Downloading your certificate...');
      // Example: Use html2canvas and jsPDF for actual download
      /*
      html2canvas(document.querySelector('.certificate-container')).then(canvas => {
        const imgData = canvas.toDataURL('image/png');
        const pdf = new jsPDF();
        pdf.addImage(imgData, 'PNG', 10, 10, 190, 0);
        pdf.save('certificate.pdf');
      });
      */
    }
  </script>
  <style>
    /* Certificate Section */
    .certificate {
      padding: 100px 0;
      background-color: var(--dark);
    }

    .certificate-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 40px;
    }

    .certificate-container {
      background-color: var(--light);
      color: var(--dark);
      width: 100%;
      max-width: 800px;
      padding: 40px;
      border: 4px solid var(--secondary);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
      position: relative;
      overflow: hidden;
    }

    .certificate-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, rgba(200, 164, 92, 0.1), transparent);
      z-index: 0;
      pointer-events: none;
    }

    .certificate-content {
      position: relative;
      z-index: 1;
      text-align: center;
    }

    .certificate-header {
      margin-bottom: 40px;
    }

    .certificate-logo {
      height: 80px;
      margin-bottom: 20px;
    }

    .certificate-header h2 {
      font-size: 36px;
      color: var(--primary);
      font-weight: 700;
      letter-spacing: 2px;
    }

    .certificate-header h3 {
      font-size: 28px;
      color: var(--secondary);
      font-weight: 400;
      margin-top: 10px;
    }

    .certificate-body {
      margin-bottom: 40px;
    }

    .certificate-body p {
      font-size: 18px;
      color: var(--dark);
      margin: 10px 0;
    }

    .certificate-body h4 {
      font-size: 32px;
      color: var(--secondary);
      font-weight: 700;
      margin: 15px 0;
      text-transform: uppercase;
    }

    .certificate-body h5 {
      font-size: 28px;
      color: var(--primary);
      font-weight: 500;
      margin: 15px 0;
    }

    .certificate-date {
      font-size: 18px;
      font-style: italic;
      color: var(--dark);
    }

    .certificate-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 40px;
    }

    .signature {
      text-align: left;
    }

    .signature img {
      width: 120px;
      margin-bottom: 10px;
    }

    .signature p {
      font-size: 16px;
      color: var(--dark);
      margin: 5px 0;
    }

    .certificate-seal img {
      width: 100px;
      opacity: 0.9;
    }

    .certificate-actions {
      text-align: center;
    }

    .certificate-actions .cta-button {
      padding: 12px 30px;
      font-size: 18px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .certificate-container {
        padding: 30px;
      }

      .certificate-header h2 {
        font-size: 28px;
      }

      .certificate-header h3 {
        font-size: 24px;
      }

      .certificate-body h4 {
        font-size: 28px;
      }

      .certificate-body h5 {
        font-size: 24px;
      }

      .certificate-footer {
        flex-direction: column;
        gap: 20px;
      }

      .signature {
        text-align: center;
      }
    }

    @media (max-width: 576px) {
      .certificate-container {
        padding: 20px;
      }

      .certificate-logo {
        height: 60px;
      }

      .certificate-header h2 {
        font-size: 24px;
      }

      .certificate-header h3 {
        font-size: 20px;
      }

      .certificate-body p {
        font-size: 16px;
      }

      .certificate-body h4 {
        font-size: 24px;
      }

      .certificate-body h5 {
        font-size: 20px;
      }

      .signature img {
        width: 100px;
      }

      .certificate-seal img {
        width: 80px;
      }
    }
  </style>
</body>

</html>