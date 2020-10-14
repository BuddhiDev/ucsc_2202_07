<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk</title>
    <!-- Page-icon -->
    <link rel="shortcut icon" href="logo.png">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/dropdown.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/lightslider.css">
    <script type="text/javascript" src="/ucsc_2202_07/andum.lk/jquery.js"></script>
    <script type="text/javascript" src="/ucsc_2202_07/andum.lk/lightslider.js"></script>
    
</head>
<body>
  <header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="logo.png" alt="logo" class="img-box">
      </div>
      <div class="nav-item-middle">
        <ul class="nav-area">
          <li class="dropdown">
            <a href="#">Shop Now</a>
            <ul class="menu-area">
              <ul>
                <h4>Ladies wear</h4>
                <li><a href="/ucsc_2202_07/andum.lk/customer/dresses.php">Dresses</a></li>
                <li><a href="workware_ladies.php">Work Wear</a></li>
                <li><a href="#">Denims</a></li>
                <li><a href="#">Tops</a></li>
                <li><a href="#">T Shirts</a></li>
                <li><a href="#">All Categories</a></li>
              </ul>
              <ul>
                <h4>Gents wear</h4>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Denims</a></li>
                <li><a href="workwear_gents.php">Work Wear</a></li>
                <li><a href="#">T Shirts</a></li>
                <li><a href="#">All Categories</a></li>
              </ul>
              <ul>
                <h4>Kids wear</h4>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">T shirsts</a></li>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">All Categories</a></li>
              </ul>
            </ul>
          </li>
          <li><a href="index.php">Hire a Tailor</a></li>
          <li><a href="index.php">Hire a Fashion Designer</a></li>
        </ul>
      </div>
      <div class="box">
        <div class="nav_right">
          <li><a class="cta" href="/ucsc_2202_07/andum.lk/login.php"><button class="loginbutton btn-full-w">Sign In</button></a></li>
          <li><a class="cta" href="/ucsc_2202_07/andum.lk/signup.php"><button class="loginbutton btn-full-w">Sign Up</button></a></li>
        </div>
      </div>
    </nav>
  </header>
  
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
      </div>
    </div>
  </div>


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



  <!-- Tailor Slider-->


  
  <div class="tslider">
    
    <ul id="autoWidth" class="cs-hidden">
      <li class="item-a">
        <div class="tslider-box">
          <!-- model -->
          <div class="slide-img">
              <img src="product1.jpg" alt="1">   
          </div>
          <!-- details -->
          <div class="details">
            <!-- character details -->
            <p>ttt</p>
          </div>
        </div>
      </li>
      <li class="item-b">
        <div class="tslider-box">
          <!-- model -->
          <div class="slide-img">
            <img src="/ucsc_2202_07/andum.lk/images/d-01.jpg" alt="1">   
          </div>
          <!-- details -->
          <div class="details">
            <!-- character details -->
            <p>ttt</p>
          </div>
        </div>
      </li>
      <li class="item-c">
        <div class="tslider-box">
          <!-- model -->
          <div class="slide-img">
            <img src="product1.jpg" alt="1">   
          </div>
          <!-- details -->
          <div class="details">
            <!-- character details -->
            <p>ttt</p>
          </div>
        </div>
      </li>
      <li class="item-d">
        <div class="tslider-box">
          <!-- model -->
          <div class="slide-img">
            <img src="product1.jpg" alt="1">   
          </div>
          <!-- details -->
          <div class="details">
            <!-- character details -->
            <p>ttt</p>
          </div>
        </div>
      </li>
      <li class="item-e">
        <div class="tslider-box">
          <!-- model -->
          <div class="slide-img">
            <img src="/ucsc_2202_07/andum.lk/images/d-01.jpg" alt="1">   
          </div>
          <!-- details -->
          <div class="details">
            <!-- character details -->
            <p>ttt</p>
          </div>
        </div>
      </li>
    </ul>
  </div>


  

  

  <!-- Tailor Slider Ends-->

  <!-- add a footer -->
  <?php require("footer.php")?>

  <script type="text/javascript" src="script.js"></script>
</body>
</html>
