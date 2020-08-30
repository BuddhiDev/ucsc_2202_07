<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>andum.lk</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">




</head>
<body>
    <div class="box">
    <header>


            <img class="logo" src="logo.png" alt="logo">
            <nav>
                <ul class="nav-area">
                    <li><a href="#">Explore</a></li>
                    <li><a href="#">Hire a Tailor</a></li>
                    <li><a href="#">Hire a Fashion Designer</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </nav>
            <div>
                <a class="cta" href="/ucsc_2202_07/andum.lk/login.php"><button class="loginbutton btn-full-w">Sign In</button></a>
                <a class="cta" href="/ucsc_2202_07/andum.lk/signup.php"><button class="loginbutton btn-full-w">Sign Up</button></a>

            </div>


    </header>
</div>

<!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/pexels-artem-beliaikin-1100790.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/pexels-cottonbro-4621921.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/pexels-leticia-ribeiro-2249290.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<!-- add a footer -->
<div class="footer">
  <div class="footer-content">
    <div class="footer-section about">
      <img class="logo" src="logo.png" alt="logo"><h1 class="logo-txt"><span></span></h1>
      <div class="contact">
        <span><i class="fas fa-phone"></i> &nbsp; 1234567891</span>
        <span><i class="fas fa-envelope"></i> &nbsp; andum.lk</span>
      </div>
      <div class="socials">
        <a href="#"><i class="fas fa-facebook"></i></a>
        <a href="#"><i class="fas fa-instagram"></i></a>
        <a href="#"><i class="fas fa- google+"></i></a>
      </div>
    </div>
    <div class="footer-section links">
      <ul>
        <a href="#"><li>HIRE A TAILOR</li></a>
        <a href="#"><li>HIRE A FASHION DESIGNER</li></a>
        <a href="#"><li>SHIPPING AND RETURNS</li></a>
      </ul>
    </div>
    <div class="footer-section links2 ">
      <ul>
        <a href="#"><li>HIRE A TAILOR</li></a>
        <a href="#"><li>HIRE A FASHION DESIGNER</li></a>
        <a href="#"><li>SHIPPING AND RETURNS</li></a>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
        &copy; andum.lk
  </div>
</div>
</body>
</html>
