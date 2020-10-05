<?php
require("server.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk - Sign Up</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dropdown.css">
    <style>
    .option{
      background-color: #EB2188;
      padding: 15px 50px;
      border-radius: 50px;

    }
    </style>
</head>
<body>
  <div class="box">
    <header>


      <img class="logo" src="logo.png" alt="logo">
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
                      <div class="column">
                              <h3>Kids wear</h3>
                              <a href="#">School Uni Forms</a>
                              <a href="#">T-shirt</a>
                              <a href="#">Trousers</a>
                              <a href="#">Frocks</a>
                              <a href="#">skirts</a>
                      </div>
                  </div>
              </div>
           </div>
        </div>

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

  <form action="signup.php" method="post">
        <!-- errors display -->
            <?php include("errors.php");
            ?>
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
            <label for="address" class="field-label-inline"><b>Address</b></label>
            <input type="text" class="field-value-inline" name="address">
          </div>

          <div class="form-field-inline">
            <label for="postal" class="field-label-inline"><b>Postal Code</b></label>
            <input type="text" class="field-value-inline" name="postal">
          </div>

          <div class="form-field-inline">
            <label for="utype" class="field-label-inline"><b>User Type</b></label>
            <!-- <input type="text" class="field-value-inline" name="utype" required> -->

            <select class="option" name="Usertype" id="user" style="color:white;">
              <option>Customer</option>
              <option>Tailor</option>
              <option>Fashion designer</option>
            </select>

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

<?php require("footer.php")?>
</body>
</html>
