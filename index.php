<?php session_start(); ?>
<html>

<?php require ("header.php");?>

 
<link rel="icon" type="image/x-icon" href="/images/lugo.png">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<nav class="navbar">
  <div class="navbar-logo">
    <img src="assets/img/lugo.png" alt="Logo">
    <span>CODEQUEST</span>
  </div>
  <button class="navbar-toggle" onclick="toggleNavbar()">☰</button>
  <div class="navbar-links">
    <a href="/index.php">Home</a>
    <a href="/about.php">About</a>
    <a href="/games.php">Game</a>
    <a href="/contact.php">Contact</a>

    <!-- Buttons for Student and Teacher -->
    <a href="/student">
      <button class="navbar-button">Student</button>
    </a>
    <a href="/teacher">
      <button class="navbar-button">Teacher</button>
    </a>
  </div>
</nav>

<script>
function toggleNavbar() {
  const navbarLinks = document.querySelector('.navbar-links');
  navbarLinks.classList.toggle('active');
}
</script>

<style>
/* Basic Navbar Styles */
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 30px;
  background: linear-gradient(135deg, #d33535, #f7b7a3);
  position: sticky;
  top: 0;
  z-index: 1000;
}

.navbar-logo {
  display: flex;
  align-items: center;
}

.navbar-logo img {
  height: 40px;
  margin-right: 15px;
}

.navbar-logo span {
  font-size: 28px;
  color: #ffffff;
  font-weight: bold;
  font-family: 'Bebas Neue', sans-serif;
}

.navbar-links {
  display: flex;
  align-items: center;
  transition: max-height 0.3s ease;
  overflow: hidden;
}

.navbar-links a {
  margin: 0 20px;
  text-decoration: none;
  color: #ffffff;
  font-size: 18px;
  font-family: 'Bebas Neue', sans-serif;
  position: relative;
}

.navbar-links a::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  background-color: #333;
  bottom: 50%;
  left: 0;
  right: 0;
  margin: auto;
  transition: width 0.3s ease;
}

.navbar-links a:hover::after {
  width: 100%;
}

.navbar-toggle {
  display: none;
  background: none;
  border: none;
  color: #ffffff;
  font-size: 28px;
  cursor: pointer;
}

/* Button Styles */
.navbar-button {
  background: white;
  color: #333;
  padding: 12px 25px;
  border-radius: 5px;
  border: 2px solid #333;
  cursor: pointer;
  font-size: 18px;
  font-family: 'Bebas Neue', sans-serif;
  transition: background 0.3s ease, color 0.3s ease;
}

.navbar-button:hover {
  background: #333;
  color: white;
}

/* Mobile Navbar Styles */
@media (max-width: 768px) {
  .navbar-links {
    flex-direction: column;
    position: absolute;
    top: 80px;
    left: 0;
    width: 100%;
    background-color: #cd3f3f;
    padding: 0;
    max-height: 0;
    z-index: 9999;
    overflow: hidden;
  }

  .navbar-toggle {
    display: block;
  }

  .navbar-links a {
    margin: 15px 0;
    text-align: center;
    padding: 15px 0;
    border-top: 1px solid #ffffff;
  }

  .navbar-links.active {
    max-height: 350px;
  }
}
</style>



















<div class="banner">
  <div class="banner-overlay"></div>
  <img src="assets/img/banner.png" alt="Banner Image" class="banner-image">
  <div class="banner-content">
    <h1>Welcome to CodeQuest</h1> <!-- Optional: Add a title -->
    <p>Your adventure in coding starts here.</p> <!-- Optional: Add a subtitle or description -->
    <a href="/login">
      <button class="banner-button">GAME</button>
    </a>
  </div>
</div>


<style>

.banner-button {
  background-color: #28a745; /* Green background color */
  color: white; /* White text color */
  border: none; /* No border */
  padding: 12px 24px; /* Vertical and horizontal padding */
  border-radius: 5px; /* Rounded corners */
  cursor: pointer; /* Pointer cursor on hover */
  font-size: 18px; /* Font size */
  transition: background-color 0.3s, transform 0.2s; /* Smooth transition for hover effects */
  margin-top: 20px; /* Space above the button */
  text-decoration: none; /* Remove underline for anchor tags */
  display: inline-block; /* Make the button behave like an inline block */
}

.banner-button:hover {
  background-color: #218838; /* Darker green on hover */
  transform: translateY(-2px); /* Slight lift effect on hover */
}

.banner-button:active {
  transform: translateY(0); /* Return to normal when clicked */
}

.banner {
  position: relative;
  width: 100%;
  height: 400px;
  overflow: hidden;
  font-family: 'Bebas Neue', sans-serif;
}

.banner-content h1 {
  font-size: 3rem;
  margin: 0;
  padding: 0 1rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
}

.banner-content p {
  font-size: 1.5rem;
  margin: 0;
  padding: 0 1rem;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
}

.banner-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.banner-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 0, 0, 0.5);
  z-index: 1;
}

.banner-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
  z-index: 2;
}
</style>

<section class="layout">
  <img src="images/cyber.png" alt="Image" class="layout-image">
  <div class="layout-content">
    <h1>Discover the Best Gaming Experience</h1>
    <br>
    <p>
      Dive into an immersive world of gaming with our latest releases. 
      Experience high-definition graphics, thrilling gameplay, and 
      exciting new features designed to keep you on the edge of your seat. 
      Whether you're a seasoned gamer or just starting out, our games offer 
      something for everyone. Explore new adventures, challenge your skills, 
      and connect with a community of passionate gamers.
    </p>
    <a href="#" class="learn-more-button">Learn More</a>
  </div>
</section>

<style>
.layout {
  margin-top: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  gap: 50px;
  flex-wrap: wrap;
}

.layout h1 {
  text-align: justify;
  font-family: Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  font-size: 30px;
}

.layout p {
  text-align: justify;
  font-family: Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  font-size: 20px;
}

.layout-image {
  max-width: 30%;
  height: auto;
  border-radius: 8px;
  object-fit: cover;
  flex: 1;
}

.layout-content {
  max-width: 500px;
  flex: 1;
}

.learn-more-button {
  display: inline-block;
  background-color: transparent;
  color: #d33535;
  border: 2px solid #d33535;
  text-decoration: none;
  padding: 18px 22px;
  cursor: pointer;
  border-radius: 4px;
  font-family: 'Bebas Neue', sans-serif;
  font-size: 20px;
  text-align: center;
  margin: 20px auto;
  transition: background-color 0.3s, color 0.3s;
}

.learn-more-button:hover {
  background-color: #d33535;
  color: white;
  border-color: #d33535;
}

@media (max-width: 768px) {
  .layout {
    flex-direction: column;
    gap: 20px;
  }

  .layout-image,
  .layout-content {
    max-width: 75%;
  }

  .layout h1 {
    margin-left: 10px;
    font-size: 26px;
  }

  .learn-more-button {
    padding: 12px 16px;
    margin: 20px auto;
    display: block;
  }
}

@media (max-width: 480px) {
  .layout {
    padding: 10px;
    gap: 15px;
  }

  .learn-more-button {
    padding: 12px 16px;
    margin: 20px auto;
  }
}
</style>

<br>
<br>
<br>
<br>
<br>

<hr>



<style>

hr {
  border: 0; /* Remove the default border */
  border-top: 2px solid #ddd; /* Thin solid line */
  width: 90%; /* Adjust width as needed */
  margin: 20px auto; /* Center the line horizontally and add vertical spacing */
}

.card-container {
margin-top: 15vh;
display: flex;
justify-content: space-around;
flex-wrap: wrap;
gap: 20px;
padding: 20px;
font-family: 'Bebas Neue', sans-serif;
}


.card h2{
text-align: center;
}


.card {
  background: #fff;
  border: 2px solid #ddd; /* Add a border with a light gray color */
  border-radius: 7spx; /* Ensure border-radius matches the card's border-radius */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow */
  overflow: hidden;
  width: 100%;
  max-width: 300px;
  text-decoration: none; /* Remove underline from links */
  color: inherit; /* Inherit text color from parent */
  transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition */
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3); /* Darker shadow on hover */
}

.card img {
width: 100%;
height: auto;
}

.card-content {
    padding: 15px;
    text-align: justify;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.card-content h2 {
    margin-top: 0;
    font-size: 1.5rem;
    color: #1a1a1a;
    text-align: center;
}

.card-content p {
    font-size: 1rem;
    color: #1a1a1a;
    text-align: justify;
    font-family: Helvetica, Arial, sans-serif;
}



@media (max-width: 768px) {
.card-container {
flex-direction: column;
align-items: center;
}

.card {
width: 100%;
max-width: none;
margin-bottom: 20px;
}
}


</style>
<div class="card-container">
<a href="link1.html" class="card">
<img src="images/card1.png" alt="Card 1">
<div class="card-content">
<h2>Unlocking Knowledge Through Gaming: A New Era of Learning</h2>
<br>
<p>Explore how educational games make learning exciting and interactive, turning knowledge into an adventure.</p>
</div>
</a>
<a href="link2.html" class="card">
<img src="images/card2.png" alt="Card 2">
<div class="card-content">
<h2>Level Up Your Learning: Educational Gaming</h2>
<br>
<p> It highlights how educational gaming can enhance learning experiences and make education more engaging and interactive.</p>
</div>
</a>
<a href="link3.html" class="card">
<img src="images/card3.png" alt="Card 3">
<div class="card-content">
<h2>Game On: Transforming Education with Interactive Challenges</h2>
<br>
<p>"Discover how interactive games are revolutionizing education, making learning fun and engaging."</p>
</div>
</a>
</div>


<br>
<br>
<br>



<div class="saga-section">
<div class="saga-image">
<img src="images/cartoon.png" alt="Epic Character Image">
</div>
<div class="saga-content">
<h1>Web Game</h1>
<p>Embark on an unforgettable journey through time and space, where the legends of our past shape the heroes of our future. Uncover the secrets that have been hidden in the sands of history.</p>
<div class="saga-buttons">
<a href="#" class="btn-explore">Explore Now</a>
<a href="#" class="btn-guide">Watch Guide</a>
</div>
</div>
</div>

<br>
<style>


.saga-section {
display: flex;
flex-direction: column;
align-items: center;
padding: 20px;
max-width: 100%;
background: #1a1a1a;
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
margin: 0 auto;
font-family: 'Bebas Neue', sans-serif;
}

.saga-image {
width: 100%;
display: flex;
justify-content: center;
align-items: center;
overflow: hidden;
}

.saga-image img {
width: 100%;
height: auto;
}

.saga-content {
padding: 20px;
text-align: center;
}

.saga-content h1 {
font-size: 36px;
margin-bottom: 20px;
letter-spacing: 2px;
text-transform: uppercase;
color: #ff6f61;
}

.saga-content p {
font-size: 20px;
line-height: 1.6;
margin-bottom: 30px;
color: #d3d3d3;
font-family: Helvetica, Arial, sans-serif;

}

.saga-buttons {
display: flex;
flex-direction: column;
gap: 15px;
}

.saga-buttons a {
padding: 10px 30px;
border-radius: 5px;
text-decoration: none;
text-align: center;
transition: transform 0.3s ease, box-shadow 0.3s ease;
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);

}

.btn-explore {
background-color: #d33535;
color: #fff;
}

.btn-explore:hover {
background-color: #ff7f7f;
transform: translateY(-5px);
box-shadow: 0 5px 15px rgba(255, 71, 71, 0.5);
}

.btn-guide {
background-color: #6f47ff;
color: #fff;
}

.btn-guide:hover {
background-color: #9f7fff;
transform: translateY(-5px);
box-shadow: 0 5px 15px rgba(111, 71, 255, 0.5);
}

/* Responsive Design */
@media(min-width: 768px) {
.saga-section {
flex-direction: row;
padding: 30px;
}

.saga-image, .saga-content {
flex: 1;
}

.saga-content {
padding: 40px;
text-align: left;
}

.saga-content h1 {
font-size: 54px;
}

.saga-content p {
font-size: 20px;
margin-bottom: 50px;
}

.saga-buttons {
flex-direction: row;
gap: 25px;
}

.saga-buttons a {
padding: 15px 40px;
}
}
</style>









<style>
.fighter-gallery-container {
padding: 20px;
margin-top: 10vh;
font-family: 'Bebas Neue', sans-serif;
}

.fighter-gallery-title {
font-size: 36px;
margin: 20px 0;
text-align: center;
color: #1a1a1a;
}

.fighter-gallery-grid {
display: grid;
grid-template-columns: repeat(3, 1fr);
grid-gap: 10px;
max-width: 1000px;
margin: 20px auto;
padding: 10px;
}

.fighter-gallery-item {
position: relative;
overflow: hidden;
background-color: #333;
height: 300px; /* Fixed height for all boxes */
}

.fighter-gallery-item img {
width: 100%;
height: 100%;
object-fit: cover; /* Ensures the image covers the box without stretching */
display: block;
}

.fighter-gallery-overlay {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.5);
display: flex;
justify-content: center;
align-items: center;
opacity: 0;
transition: opacity 0.3s ease;
}

.fighter-gallery-item:hover .fighter-gallery-overlay {
opacity: 1;
}

.fighter-gallery-icon {
font-size: 24px;
color: #fff;
}
</style>

<div class="fighter-gallery-container">
<div class="fighter-gallery-grid">
<div class="fighter-gallery-item">
<img src="images/c1.png" alt="Fighter 1">
<div class="fighter-gallery-overlay">
<span class="fighter-gallery-icon">🔍</span>
</div>
</div>
<div class="fighter-gallery-item">
<img src="images/c2.png" alt="Fighter 2">
<div class="fighter-gallery-overlay">
<span class="fighter-gallery-icon">🔍</span>
</div>
</div>
<div class="fighter-gallery-item">
<img src="images/c3.png" alt="Fighter 3">
<div class="fighter-gallery-overlay">
<span class="fighter-gallery-icon">🔍</span>
</div>
</div>
<div class="fighter-gallery-item">
<img src="images/c4.png" alt="Fighter 4">
<div class="fighter-gallery-overlay">
<span class="fighter-gallery-icon">🔍</span>
</div>
</div>
<div class="fighter-gallery-item">
<img src="images/c5.png" alt="Fighter 5">
<div class="fighter-gallery-overlay">
<span class="fighter-gallery-icon">🔍</span>
</div>
</div>
<div class="fighter-gallery-item">
<img src="images/c6.png" alt="Fighter 6">
<div class="fighter-gallery-overlay">
<span class="fighter-gallery-icon">🔍</span>
</div>
</div>
</div>
</div>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<footer class="gaming-footer">
<div class="container">
<div class="footer-content">
<div class="footer-logo">
<a href="#">Codequest</a>
</div>
<div class="footer-links">
<ul>
<li><a href="/index">Home</a></li>
<li><a href="/games">Games</a></li>
<li><a href="/about">About</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
</div>
<div class="footer-social">
<a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
<a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a>
<a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
<a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
</div>
</div>
<div class="footer-bottom">
<p>&copy; 2024 CodeQuest. All rights reserved.</p>
</div>
</div>
</footer>

<style>

/* Basic reset and box-sizing */
* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: "Bebas Neue", sans-serif;
}

/* Footer styling */
.gaming-footer {
background-color: #1a1a1a;
color: #fff;
padding: 20px 0;
}

.container {
width: 90%;
max-width: 1200px;
margin: 0 auto;
}

.footer-content {
display: flex;
justify-content: space-between;
align-items: center;
flex-wrap: wrap;
margin-bottom: 10px;
}

.footer-logo a {
font-family: 'Bebas Neue', sans-serif;
font-size: 24px;
color: #fff;
text-decoration: none;
}

.footer-links ul {
list-style: none;
display: flex;
gap: 20px;
margin: 0;
padding: 0;
}

.footer-links li {
margin: 0;
}

.footer-links a {
color: #fff;
text-decoration: none;
font-size: 16px;
position: relative;
transition: color 0.3s;
}

.footer-links a::before {
content: '';
position: absolute;
left: 0;
right: 0;
top: 50%;  /* Position the line in the middle of the text */
height: 2px;
background-color: #000; /* Black strike-through line */
transform: scaleX(0);
transition: transform 0.3s ease;
}

.footer-links a:hover::before {
transform: scaleX(1);
}

.footer-links a:hover {
color: #fff;
}

.footer-social {
display: flex;
gap: 10px;
}

.social-icon {
color: #fff;
font-size: 20px;
text-decoration: none;
position: relative;
transition: color 0.3s;
}

.social-icon::after {
content: '';
position: absolute;
bottom: -5px;
left: 0;
width: 0;
height: 2px;
background-color: #fff;
transition: width 0.3s;
}

.social-icon:hover::after {
width: 100%;
}

.footer-bottom {
text-align: center;
margin-top: 20px;
}

.footer-bottom p {
font-size: 14px;
color: #a3a3a3;
}

/* Responsive design */
@media (max-width: 768px) {
.footer-content {
flex-direction: column;
align-items: center;
text-align: center;
}

.footer-links ul {
margin-top: 15px;
flex-direction: column;
gap: 10px;
padding: 0;
}

.footer-social {
margin-top: 20px;
}

.footer-bottom p {
font-size: 12px;
}
}

@media (max-width: 480px) {
.footer-logo a {
font-size: 20px;
}

.footer-links a {
font-size: 14px;
}

.social-icon {
font-size: 18px;
}

.footer-bottom p {
font-size: 10px;
}
}

</style>



</div>	
	
</body>

</html>