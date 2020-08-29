<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>andum.lk</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="style.css">
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
        <a class="cta" href="/ucsc_2202_07/andum.lk/login.php"><button>Sign In</button></a>
        <a class="cta" href="/ucsc_2202_07/andum.lk/signup.php"><button>Sign Up</button></a>
      </div>
    </header>
  </div>
        
  <form action="login.php" method="post">
        <!-- <div class="imgcontainer">
          <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div> -->
      
    <div class="login-container">
      <div class="form-field-inline">
        <label for="uname" class="field-label-inline">Username</label>
        <input type="text" class="field-value-inline" name="uname" required>
      </div>
      <div class="form-field-inline">
        <label for="psw" class="field-label-inline"><b>Password</b></label>
        <input type="password" class="field-value-inline" name="psw" required>
      </div>
      <div>
        <span class="psw">Forgot<a href="#">password?</a></span>
      </div>
      <div class="btn-panel-center">
        <!-- <button class="facebookbutton btn-full-w" type="submit">SIGN IN WITH FACEBOOK </button>
        <button class="googlebutton btn-full-w" type="submit">SIGN IN WITH GOOGLE </button> -->
        <button class="loginbutton btn-full-w" type="submit">SIGN IN </button>
      </div>
      <!-- <div> -->
        <span class="psw">Don't you have an account? <a href="/ucsc_2202_07/andum.lk/signup.php">SIGN UP</a> now!</span>
      <!-- </div> -->
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->
      </div>
      <!-- <div class="btn-panel-center" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
      </div> -->
  </form>

  <!-- footer -->
  <!-- <footer>
   <img class="logo" src="logo.png" alt="logo">
  </footer> -->
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