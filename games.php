<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<style>
body {
margin: 0;
font-family: 'Arial', sans-serif;
}

.navbar {
display: flex;
align-items: center;
justify-content: space-between;
padding: 20px 30px; /* Increased padding for a thicker navbar */
background: linear-gradient(135deg, #d33535, #f7b7a3);
position: sticky; /* Makes the navbar sticky */
top: 0; /* Sticks the navbar to the top of the viewport */
z-index: 1000; /* Ensures the navbar stays above other content */
}

.navbar-logo {
display: flex;
align-items: center;
}

.navbar-logo img {
height: 40px; /* Increased height of the logo */
margin-right: 15px;
}

.navbar-logo span {
font-size: 28px; /* Increased font size */
color: #ffffff;
font-weight: bold;
font-family: 'Bebas Neue', sans-serif; /* Bebas Neue font */
}

.navbar-links {
display: flex;
align-items: center;
transition: max-height 0.3s ease;
overflow: hidden;
}

.navbar-links a {
margin: 0 20px; /* Increased spacing between links */
text-decoration: none;
color: #ffffff;
font-size: 18px; /* Increased font size */
font-family: 'Bebas Neue', sans-serif; /* Bebas Neue font */
position: relative;
}

.navbar-links a::after {
content: '';
position: absolute;
width: 0;
height: 2px; /* Thickness of the line */
background-color: #333;
bottom: 50%; /* Position the line at the center */
left: 0;
right: 0;
margin: auto;
transition: width 0.3s ease;
}

.navbar-links a:hover::after {
width: 100%; /* Full width of the text on hover */
}

.navbar-button {
background: white; /* White background */
color: #333; /* Text color */
padding: 12px 25px; /* Increased padding */
border-radius: 5px;
border: 2px solid #333; /* #333 border */
cursor: pointer;
font-size: 18px; /* Increased font size */
font-family: 'Bebas Neue', sans-serif; /* Bebas Neue font */
transition: background 0.3s ease, color 0.3s ease;
}

.navbar-button:hover {
background: #333; /* Background changes to #333 on hover */
color: white; /* Text color changes to white on hover */
}

.navbar-toggle {
display: none;
background: none;
border: none;
color: #ffffff;
font-size: 28px; /* Increased font size */
cursor: pointer;
}

/* Responsive Styles */
@media (max-width: 768px) {
.navbar-links {
flex-direction: column;
position: absolute;
top: 80px; /* Adjusted position to accommodate thicker navbar */
left: 0;
width: 100%;
background-color: #cd3f3f;
padding: 0;
max-height: 0;
z-index: 9999; /* Ensures it appears above other content */
overflow: hidden; /* Hide content when not active */
}


.navbar-toggle {
margin-left: 200px;
}

.navbar-links a {
margin: 15px 0; /* Increased margin between links */
text-align: center;
padding: 15px 0;
border-top: 1px solid #ffffff;
}

.navbar-toggle {
display: block;
}

.navbar-links.active {
max-height: 350px;
}

.navbar-button {
display: none;
}
}


</style>

<link rel="icon" type="image/x-icon" href="/images/lugo.png">

<nav class="navbar">
<div class="navbar-logo">
<img src="images/lugo.png" alt="Logo">
<span>CODEQUEST</span>
</div>
<button class="navbar-toggle" onclick="toggleNavbar()">☰</button>
<div class="navbar-links">
<a href="/index">Home</a>
<a href="/about">About</a>
<a href="/games">Game</a>
<a href="#">Contact</a>
</div>
<a href="/login">
  <button class="navbar-button">START NOW</button>
</a>

</nav>

<script>
function toggleNavbar() {
const navbarLinks = document.querySelector('.navbar-links');
navbarLinks.classList.toggle('active');
}
</script>

<style>
    .promo-section {
    position: relative;
    width: 100%; /* Full width */
    height: 40vh; /* Adjust the height to your preference */
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
    padding: 20px;
    overflow: hidden;
    
    
    }
    
    .promo-section video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1; /* Ensure the video is behind the content */
    }
    
    .promo-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 2; /* Ensure the overlay is above the video */
    }
    
    .promo-content {
    position: relative;
    z-index: 3; /* Ensure the content is above the video and overlay */
    }
    
    .promo-content h1 {
    font-size: 2.2em;
    margin-bottom: 10px;
    font-family: 'Bebas Neue', sans-serif;
    }
    
    .promo-content p {
    font-size: 1em;
    color: #ccc;
    }
    
    .play-button {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px auto;
    transition: background 0.3s ease;
    }
    
    .play-button:hover {
    background: rgba(255, 255, 255, 0.4);
    }
    
    .play-button::before {
    content: "";
    border-style: solid;
    border-width: 15px 0 15px 22px;
    border-color: transparent transparent transparent #fff;
    display: inline-block;
    margin-left: 5px;
    }
    </style>
    
    <div class="promo-section">
    <video src="your-video-path.mp4" autoplay muted loop></video>
    <div class="promo-content">
    <div class="play-button"></div>
    <h1>VIDEO</h1>
    </div>
    </div>
    
    
    
    
    <style>
    /* Promo Section with Video */
    .promo-section {
    position: relative;
    width: 100%;
    height: 40vh; /* Adjust height as needed */
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
    padding: 20px;
    overflow: hidden;
    margin-bottom: 20px; /* Add space between sections */
    font-family: 'Bebas Neue', sans-serif;
    }
    
    .promo-section video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1; /* Ensure the video is behind the content */
    }
    
    .promo-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 2; /* Ensure the overlay is above the video */
    }
    
    .promo-content {
    position: relative;
    z-index: 3; /* Ensure the content is above the video and overlay */
    }
    
    .promo-content h1 {
    font-size: 2.2em;
    margin-bottom: 10px;
    }
    
    .promo-content p {
    font-size: 1em;
    color: #ccc;
    
    }
    
    .play-button {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px auto;
    transition: background 0.3s ease;
    }
    
    .play-button:hover {
    background: rgba(255, 255, 255, 0.4);
    }
    
    .play-button::before {
    content: "";
    border-style: solid;
    border-width: 15px 0 15px 22px;
    border-color: transparent transparent transparent #fff;
    display: inline-block;
    margin-left: 5px;
    }
    
    /* Promo Container with Image and Text */
    .promo-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    min-height: 50vh;
    padding: 20px;
    box-sizing: border-box;
    }
    
    .promo-image {
    width: 50%;
    height: auto; /* Ensure the image height adjusts according to content */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }
    
    .promo-text {
    width: 45%;
    color: #000;
    padding-left: 20px;
    }
    
    .promo-text h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
    font-weight: bold;
    color: #000;
    font-family: 'Bebas Neue', sans-serif;
    }
    
    .promo-text p {
    font-size: 1em;
    margin-bottom: 20px;
    line-height: 1.6;
    font-family: 'Bebas Neue', sans-serif;
    }
    
    .promo-text a {
    text-decoration: none;
    color: #d33535;
    font-weight: bold;
    font-family: "Bebas Neue", sans-serif;
    }
    
    .promo-text a:hover {
    text-decoration: underline;
    }
    
    @media screen and (max-width: 768px) {
    .promo-container {
    flex-direction: column;
    }
    
    .promo-image, .promo-text {
    width: 100%;
    margin-bottom: 20px;
    }
    
    .promo-text {
    padding-left: 0;
    }
    }
    
    </style>
    
    
    <div class="promo-container">
    <div class="promo-image">
    <img src="images/games.png" alt="Game Promo Image" style="width: 100%; height: auto;">
    </div>
    <div class="promo-text">
    <span style="color: #888; font-size: 0.9em;">11.11.18 / in Games</span>
    <h1>The game you’ve been waiting for is out now</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
    <a href="#">READ MORE</a>
    </div>
    </div>
    
    
    <hr>
    
    <br>
    <!-- Fighter Image and Countdown -->
    <div class="fighter-container">
    <h1 class="main-title">CODE QUEST</h1>
    <img src="images/back1.png" alt="Dark Dragon" class="fighter-image">
    <div class="overlay">

    </div>
    </div>
    
    <style>
    
    hr {
    border: 0; /* Remove the default border */
    border-top: 2px solid #ddd; /* Thin solid line */
    width: 90%; /* Adjust width as needed */
    margin: 20px auto; /* Center the line horizontally and add vertical spacing */
    }
    .main-title {
        font-family: 'Bebas Neue', sans-serif;
    font-size: 3vw; /* Relative to viewport width */
    margin: 20px 0;
    text-align: center;
    color: #1a1a1a; /* Optional: Set text color for contrast */
    }
    
    .fighter-container {
    position: relative;
    width: 100vw; /* Full viewport width */
    height: 100vh; /* Full viewport height */
    overflow: hidden; /* Hide overflow to ensure full-screen effect */
    font-family: 'Bebas Neue', sans-serif;
    }
    
    .fighter-image {
    width: 100%;
    height: auto;
    aspect-ratio: 16/9; /* O anumang ratio na nais mo */
    object-fit: cover;
}

    .overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
    padding: 10px;
    }
    
    .fighter-name {
    font-size: 5vw; /* Relative to viewport width */
    margin: 0;
    }
    
    .countdown {
    font-size: 3vw; /* Relative to viewport width */
    margin: 0;
    }
    
    /* Media query for tablets */
    @media (max-width: 768px) {
    .main-title {
    font-size: 10vw;
    }
    .fighter-name {
    font-size: 7vw;
    }
    .countdown {
    font-size: 5vw;
    }
    }
    
    /* Media query for mobile phones */
    @media (max-width: 480px) {
    .main-title {
    font-size: 5vw;
    }
    .fighter-name {
    font-size: 8vw;
    }
    .countdown {
    font-size: 6vw;
    }
    }
    </style>
    
    
    <br>
    
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
<li><a href="/about">About</a></li>
<li><a href="/games">Game</a></li>
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