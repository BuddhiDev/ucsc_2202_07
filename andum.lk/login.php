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
  <link rel="stylesheet" href="dropdown.css">
</head>

<body>
  <div class="box">
    <header>
      <img class="logo" src="logo.png" alt="logo">
      <?php require("navbar_category.php")?>
      <nav>
        <ul class="nav-area">
          <li><a href="#">Explore</a></li>
          <li><a href="#">Hire a Tailor</a></li>
          <li><a href="#">Hire a Fashion Designer</a></li>
          <li><a href="/ucsc_2202_07/andum.lk/about_us.php">About Us</a></li>
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
<?php require("footer.php")?>
</body>

</html>
