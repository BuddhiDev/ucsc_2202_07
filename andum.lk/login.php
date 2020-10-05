<?php
require("server.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Sign In</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
  <div class="box">
    <header>
      <img class="logo" src="logo.png" alt="logo">
      <nav>
        <ul class="nav-area">
          <li><a href="#">
            <div class="navbardrop">
                  <div class="dropdown">
                  <button class="dropbtn">Categories
                        <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                      <div class="row">
                            <div class="column">
                                    <h3>Ladies wear</h3>
                                    <a href="#">Blouses</a>
                                    <a href="#">Skirts</a>
                                    <a href="#">Tops</a>
                                    <a href="#">Frocks</a>
                                    <a href="#">Shorts</a>
                                    <a href="#">Trouses</a>
                                    <a href="#">T-Shirts</a>
                                    <a href="#">Party Frocks</a>
                                    <a href="#">Sarees</a>
                                    <a href="#">Bridal Dresses</a>
                                    <a href="#"></a>
                            </div>
                            <div class="column">
                                    <h3>Gents wear</h3>
                                    <a href="#">Shirts</a>
                                    <a href="#">Trousers</a>
                                    <a href="#">Denims</a>
                                    <a href="#">Shorts</a>
                                    <a href="#">T-shirts</a>
                                    <a href="#">Groom Dresses</a>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
          </a></li>
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

  <form action="login.php" method="post">
    <?php include("errors.php");
    ?>

    <div class="login-container">
      <div class="form-field-inline">
        <label for="nic" class="field-label-inline">NIC Number</label>
        <input type="text" class="field-value-inline" name="nic" required>
      </div>
      <div class="form-field-inline">
        <label for="password" class="field-label-inline"><b>Password</b></label>
        <input type="password" class="field-value-inline" name="password" required>
      </div>
      <div>
        <span class="psw">Forgot<a href="#">password?</a></span>
      </div>
      <div class="btn-panel-center">
        <!-- <button class="facebookbutton btn-full-w" type="submit">SIGN IN WITH FACEBOOK </button>
        <button class="googlebutton btn-full-w" type="submit">SIGN IN WITH GOOGLE </button> -->
        <button class="loginbutton btn-full-w" type="submit" name="login">SIGN IN </button>
      </div>
      <!-- <div> -->
      <span class="psw">Don't you have an account? <a href="/ucsc_2202_07/andum.lk/signup.php">SIGN UP</a> now!</span>
      <!-- </div> -->
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->
    </div>
  </form>

  <!-- </footer> -->
  <div class="footer">
    <div class="footer-content">
      <div class="footer-section about">
        <img class="footer-logo" src="logo.png" alt="logo">
        <h1 class="logo-txt"><span></span></h1>
        <div class="socials">
          <a href="#"><i class="fas fa-facebook"></i></a>
          <a href="#"><i class="fas fa-instagram"></i></a>
          <a href="#"><i class="fas fa- google+"></i></a>
        </div>
      </div>
      <div class="footer-section links">
        <ul>
          <a href="#">
            <li>HIRE A TAILOR</li>
          </a>
          <a href="#">
            <li>HIRE A FASHION DESIGNER</li>
          </a>
          <a href="#">
            <li>SHIPPING AND RETURNS</li>
          </a>
        </ul>
      </div>
      <div class="footer-section links2 ">
        <ul>
          <a href="#">
            <li>HIRE A TAILOR</li>
          </a>
          <a href="#">
            <li>HIRE A FASHION DESIGNER</li>
          </a>
          <a href="#">
            <li>SHIPPING AND RETURNS</li>
          </a>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; andum.lk
    </div>
  </div>
</body>

</html>
