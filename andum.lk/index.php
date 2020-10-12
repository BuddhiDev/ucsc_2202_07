<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>andum.lk</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/dropdown.css">
</head>
<body>
  <div class="box">
    <header>
      <img class="logo" src="logo.png" alt="logo">

      <nav>
        <ul class="nav-area">


          <li class="dropdown">
          <a href="#">Shop Now</a>
          <ul class="menu-area">
            <ul>
              <h4>Ladies wear</h4>
              <li><a href="#">Casual Wear</a></li>
              <li><a href="#">Formal Wear</a></li>
              <li><a href="#">Wedding dresses</a></li>
            </ul>
            <ul>
              <h4>Gents wear</h4>
              <li><a href="#">Top Wear</a></li>
              <li><a href="#">Bottom Wear</a></li>
              <li><a href="#">Sports Wear</a></li>
            </ul>
            <ul>
              <h4>Kids wear</h4>
              <li><a href="#">Girl's Collection</a></li>
              <li><a href="#">Boy's Collection</a></li>
              <li><a href="#">Baby's Collection</a></li>
            </ul>
          </ul>


        </li>
            <!-- <li><a href="/ucsc_2202_07/andum.lk/explore.php">Explore</a></li> -->
            <!-- <li class="dropdown">
              <a href="#">Shop Now</a>
              <ul class="menu-area">
                <ul>
                  <h4>Ladies wear</h4>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Dresses</a></li>
                </ul>
                <ul>
                  <h4>Gents wear</h4>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Dresses</a></li>
                </ul>
                <ul>
                  <h4>Kids wear</h4>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Dresses</a></li>
                </ul>
              </ul>
            </li> -->
            <li><a href="/ucsc_2202_07/andum.lk/unregistered_user_hire_tailor.php">Hire a Tailor</a></li>
            <li><a href="#">Hire a Fashion Designer</a></li>
            <li><a href="/ucsc_2202_07/andum.lk/about_us.php">About Us</a></li>

            <!-- <li class="dropdown">
            <a href="#">Shop Now</a>
            <ul class="menu-area">
              <ul>
                <h4>Ladies wear</h4>
                <li><a href="#">Casual Wear</a></li>
                <li><a href="#">Formal Wear</a></li>
                <li><a href="#">Wedding dresses</a></li>
              </ul>
              <ul>
                <h4>Gents wear</h4>
                <li><a href="#">Top Wear</a></li>
                <li><a href="#">Bottom Wear</a></li>
                <li><a href="#">Sports Wear</a></li>
              </ul>
              <ul>
                <h4>Kids wear</h4>
                <li><a href="#">Girl's Collection</a></li>
                <li><a href="#">Boy's Collection</a></li>
                <li><a href="#">Baby's Collection</a></li>
              </ul>
            </ul>


          </li> -->



        </ul>
      </nav>
      <div>
        <a class="cta" href="/ucsc_2202_07/andum.lk/login.php"><button class="loginbutton btn-full-w">Sign In</button></a>
        <a class="cta" href="/ucsc_2202_07/andum.lk/signup.php"><button class="loginbutton btn-full-w">Sign Up</button></a>
      </div>
    </header>
  </div>



<div class="d-flex align-c">
    <div class="f1">
      <div class="landing-text-content">
        <div class="title-lg">Are you looking for a unique dress ?</div>
        <div class="title-lg-light">Andum.lk is a platform for all fashion designers and Tailors</div>
        <div class="landing-btn-section">
          <a class="cta" href=""><button class="loginbutton btn-full-w">Find a Tailor</button></a>
          <a class="cta" href=""><button class="loginbutton btn-full-w">Find a Fashion Designer</button></a>
        </div>

      </div>
    </div>
    <div class="f1">
        <!-- Slideshow container -->
        <div class="slideshow-container">
          <div class="mySlides fade">
            <img src="images/img22.jpg">
          </div>
          <div class="mySlides fade">
            <img src="images/img55.jpg">
          </div>
          <div class="mySlides fade">
            <img src="images/img66.jpg">
          </div>
          <div class="mySlides fade">
            <img src="images/img33.jpg">
          </div>
          <div class="mySlides fade">
            <img src="images/img11.jpg">
          </div>
          <!-- <div class="mySlides fade">
            <img src="images/pexels-ray-piedra-1478477.jpg" style="width:100%">
          </div>

          <div class="mySlides fade">
            <img src="images/pexels-artem-beliaikin-1100790.jpg" style="width:100%">
          </div>
          <div class="mySlides fade">
            <img src="images/pexels-cottonbro-4621921.jpg" style="width:100%">
          </div> -->
        </div>
    </div>
</div>

<br>

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
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

<div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Catering</h1><br>
      <h5 class="w3-center">Tradition since 1889</h5>
      <p class="w3-large">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>

<!-- add a footer -->
<?php require("footer.php")?>
</body>
</html>
