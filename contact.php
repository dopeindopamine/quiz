<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeQuest</title>

  <!-- Link to Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/images/lugo.png">
  <!-- Font Awesome CDN for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Header / Welcome Section -->
  <section class="header-section">
    <h1>Welcome to <span class="brand-highlight">CodeQuest</span>!</h1>
    <p>“Conquer C# control structures with CodeQuest.”</p>
  </section>

  <!-- Contact Us Section -->
  <section class="contact-section">
    <h2>Contact Us</h2>
    <p class="text-box">
      If you have questions, a suggestion, or need technical assistance, our support team is ready to assist you. Contact us using the following platforms:
    </p>
    <div class="contact-details">
      <p><i class="fas fa-envelope"></i> <strong>Email:</strong> For general inquiries or support requests, email us at <a href="mailto:support@codequest.com">support@codequest.com</a>. We aim to respond within 48 hours.</p>
      <p><i class="fas fa-phone-alt"></i> <strong>Phone:</strong> You can reach our customer service team on <a href="tel:+639053738925">09053738925</a> during business hours (Monday to Friday, 9 AM - 5 PM).</p>
      <p><strong>Follow Us:</strong> Stay connected for updates, new features, and learning tips:</p>
      <ul class="social-links">
        <li><i class="fab fa-facebook"></i> <strong>Facebook:</strong> <a href="https://facebook.com/CodeQuest" target="_blank">@CodeQuest</a></li>
        <li><i class="fab fa-twitter"></i> <strong>Twitter:</strong> <a href="https://twitter.com/CodeQuest" target="_blank">@CodeQuest</a></li>
        <li><i class="fab fa-instagram"></i> <strong>Instagram:</strong> <a href="https://instagram.com/CodeQuestLearning" target="_blank">@CodeQuestLearning</a></li>
      </ul>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="cta-section">
    <h2>Start Your Quest Today!</h2>
    <p>Join CodeQuest and take the first step towards mastering C# programming in a fun and interactive way.</p>
    <a href="/index" class="cta-button">BACK</a>
  </section>

</body>
</html>

<style>
  /* Reset and Body Styling */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  /* Body and Font Setup */
  body {
    font-family: 'Bebas Neue', sans-serif;
    color: #333;
    line-height: 1.6;
  }

  /* General Section Styling */
  section {
    padding: 60px 20px;
    text-align: center;
  }

  /* Header Section */
  .header-section {
    background: linear-gradient(135deg, #d33535, #f7b7a3);
    color: #fff;
  }

  .header-section h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
  }

  .header-section p {
    font-size: 1.2em;
  }

  /* Box Styling for Text */
  .text-box {
    background-color: #e0f7fa;
    border: 2px solid #4a90e2;
    border-radius: 8px;
    padding: 20px;
    margin: 20px auto;
    max-width: 600px;
    font-size: 1.1em;
  }

  /* Contact Section Styling */
  .contact-section {
    background-color: #f9f9f9;
    padding: 40px 20px;
  }

  .contact-details {
    text-align: left;
    max-width: 600px;
    margin: 0 auto;
    font-size: 1.1em;
  }

  .contact-details p,
  .contact-details ul {
    margin-bottom: 15px;
  }

  /* Icon Styling */
  .contact-details i {
    color: #4a90e2;
    margin-right: 10px;
  }

  .social-links li {
    list-style-type: none;
    padding: 5px 0;
  }

  .social-links a {
    color: #4a90e2;
    text-decoration: none;
  }

  .social-links a:hover {
    text-decoration: underline;
  }

  /* CTA Section */
  .cta-section {
    background: #1a1a1a;
    color: white;
  }

  .cta-section h2 {
    font-size: 2em;
    margin-bottom: 10px;
  }

  .cta-button {
    display: inline-block;
    background: #ff6f61;
    color: white;
    padding: 15px 30px;
    border-radius: 5px;
    font-size: 1.2em;
    text-decoration: none;
    margin-top: 20px;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .header-section h1 {
      font-size: 2em;
    }

    .cta-button {
      font-size: 1em;
      padding: 12px 25px;
    }
  }
</style>
