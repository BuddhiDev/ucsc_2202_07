<?php
require("server.php");
?>

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
        
    <form action="action_page.php" method="post">
        <!-- <div class="imgcontainer">
          <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div> -->
      
        <div class="login-container">
          
          <div class="form-field-inline">
            <label for="uname" class="field-label-inline">NIC Number</label>
            <input type="text" class="field-value-inline" name="nic" required>
          </div>
          
          <div class="form-field-inline">
            <label for="email" class="field-label-inline"><b>Email Address</b></label>
            <input type="text" class="field-value-inline" name="email" required>
          </div>

          <div class="form-field-inline">
            <label for="fname" class="field-label-inline"><b>First Name</b></label>
            <input type="text" class="field-value-inline" name="fname" required>
          </div>

          <div class="form-field-inline">
            <label for="lname" class="field-label-inline"><b>Last Name</b></label>
            <input type="text" class="field-value-inline" name="lname" required>
          </div>

          <div class="form-field-inline">
            <label for="password" class="field-label-inline"><b>Choose Passsword</b></label>
            <input type="password" class="field-value-inline" name="password" required>
          </div>

          <div class="form-field-inline">
            <label for="c_password" class="field-label-inline"><b>Re-enter Password</b></label>
            <input type="password" class="field-value-inline" name="c_password" required>
          </div>

          <div class="form-field-inline">
            <label for="contactno" class="field-label-inline"><b>Phone Number</b></label>
            <input type="text" class="field-value-inline" name="contactno">
          </div>

          <div class="form-field-inline">
            <label for="utype" class="field-label-inline"><b>User Type</b></label>
            <input type="text" class="field-value-inline" name="utype">
          </div>
          
          

          <div class="btn-panel-center">
            <!-- <button class="facebookbutton btn-full-w" type="submit">SIGN UP WITH FACEBOOK </button>
            <button class="googlebutton btn-full-w" type="submit">SIGN UP WITH GOOGLE </button> -->
            <button class="loginbutton btn-full-w" type="submit" name="register">SIGN UP </button>
          </div>

          

          <!-- <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
        </div>
      
        
      </form>


      <footer>
        <img class="logo" src="logo.png" alt="logo">
        
      </footer>
    
</body>
</html>