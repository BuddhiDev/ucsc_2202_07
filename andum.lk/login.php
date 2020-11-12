<?php
require("server.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk</title>
  <!-- Page-icon -->
  <link rel="shortcut icon" href="logo.png">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css">
</head>

<body>
  <div class="box">
    <header>
      <img class="logo" src="logo.png" alt="logo">
      <!-- <?php require("navbar_category.php")?> -->
      <nav>
        <ul class="nav-area">
          <!-- <li><a href="#">Explore</a></li> -->
          <li class="dropdown">
              <a href="#">Shop Now</a>
              <ul class="menu-area">
                <ul class="inner-menu">
                  <li class="inner-list-header">Ladies wear</li>
                  <li><a href="dresses.php">Dresses</a></li>
                  <li><a href="workware_ladies.php">Work Wear</a></li>
                  <li><a href="#">Denims</a></li>
                  <li><a href="#">Tops</a></li>
                  <li><a href="#">T Shirts</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
                <ul class="inner-menu"> 
                  <li class="inner-list-header">Gents wear</li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Denims</a></li>
                  <li><a href="workwear_gents.php">Work Wear</a></li>
                  <li><a href="#">T Shirts</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
                <ul class="inner-menu">
                  <li class="inner-list-header">Kids wear</li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">T shirsts</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
              </ul>


            </li>
          <li><a href="#">Hire a Tailor</a></li>
          <li><a href="#">Hire a Fashion Designer</a></li>
          <li><a href="/ucsc_2202_07/andum.lk/about_us.php">About Us</a></li>
        </ul>
      </nav>
      <div class="login-btn-panel">
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


      <div class="btn-panel-center">
        <!-- <button class="facebookbutton btn-full-w" type="submit">SIGN IN WITH FACEBOOK </button>
        <button class="googlebutton btn-full-w" type="submit">SIGN IN WITH GOOGLE </button> -->
        <button class="loginbutton btn-full-w" type="submit" name="forgot_password">Forgot password</button>
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
<?php require("footer.php")?>
</body>

</html>
