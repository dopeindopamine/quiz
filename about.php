<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeQuest</title>
  
  <!-- Link to Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/images/lugo.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Header / Welcome Section -->
  <section class="header-section">
    <h1>Welcome to <span class="brand-highlight">CodeQuest</span>!</h1>
    <p>“Conquer C# control structures with CodeQuest.”</p>
  </section>

  <!-- About Section -->
  <section class="about-section">
    <h2>About CodeQuest</h2>
    <p class="text-box">CodeQuest is a gamified assessment tool designed to enhance students' computational thinking and understanding of C# control structures. By making programming learning both interactive and educational, CodeQuest serves as a supportive platform where students can explore the fundamentals of programming in an engaging and dynamic way.</p>
  </section>

  <!-- Mission Section -->
  <section class="mission-section">
    <h2>Our Mission</h2>
    <p class="text-box">To inspire computational thinking, strengthen problem-solving skills, and build coding confidence in C# programming through interactive, game-based learning. We aim to create an enjoyable educational experience that helps students develop essential coding skills through immersive gameplay.</p>
  </section>

  <!-- Vision Section -->
  <section class="vision-section">
    <h2>Our Vision</h2>
    <p class="text-box">Our vision is to become the leading platform for gamified programming education at Technological University of the Philippines - Manila. We aim to empower ICT students to master coding skills in a way that is fun, accessible, and effective, fostering a generation of confident, creative, and skilled programmers ready to excel in the tech world.</p>
  </section>

  <!-- Call to Action Section -->
  <section class="cta-section">
    <h2>Start Your Quest Today!</h2>
    <p>Join CodeQuest and take the first step towards mastering C# programming in a fun and interactive way.</p>
    <a href="/index" class="cta-button">GO BACK</a>
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
    font-family: 'Bebas Neue', sans-serif; /* Setting Bebas Neue as the default font */
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

  /* About Section */
  .about-section {
    background-color: #f7f7f7;
  }

  .about-section h2 {
    color: #4a90e2;
    margin-bottom: 20px;
  }

  /* Mission Section */
  .mission-section {
    background-color: #fff;
  }

  .mission-section h2 {
    color: #6a5acd;
    margin-bottom: 20px;
  }

  /* Vision Section */
  .vision-section {
    background-color: #f0f4f8;
  }

  .vision-section h2 {
    color: #4a90e2;
    margin-bottom: 20px;
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
