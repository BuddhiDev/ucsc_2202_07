<?php
require("server.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk - Sign Up</title>
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css">
    <style>
    /*.option{
      background-color: #EB2188;
      padding: 15px 50px;
      border-radius: 50px;

    }*/
    </style>
</head>
<body>
  <div class="box">
  <header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="logo.png" alt="logo" class="img-box">
      </div>
      <div class="nav-item-middle">
        <ul class="nav-area">
          <li><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a href="#">Women</a>
            <div class="row">
              <ul class="menu-area">
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Casual Wear</li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">T shirts</a></li>
                    <li><a href="#">Blouse</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="#">Pants</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Formal Wear</li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Blouse</a></li>
                    <li><a href="#">Skirts</a></li>
                    <li><a href="workwear_gents.php">Pants</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Ethnic wear</li>
                    <li><a href="#">Kurthas</a></li>
                    <li><a href="#">Shlwas</a></li>
                    <li><a href="#">Sarees</a></li>
                  </ul>
                </div>
              </ul>
            </div>
              
            
          </li>
          <li class="dropdown">
            <a href="#">Men</a>
            <div class="row">
              <ul class="menu-area">
                <div class="col-6">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Casual Wear</li>
                    <li><a href="#">T shirts</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="index.php?dcategory=trouser">Trousers</a></li>
                    <li><a href="#">Sarong</a></li>
                    <li><a href="#">Shorts</a></li>
                  </ul>  
                </div>
                <div class="col-6">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Formal Wear</li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Trousers</a></li>
                    <li><a href="#">Blazers</a></li>
                  </ul>
                </div> 
              </ul>
            </div>            
          </li>
          <li class="dropdown">
            <a href="#">Kids</a>
            <div class="row">
            <ul class="menu-area">
              <div class=col-6>
                <ul class="inner-menu">
                  <li class="inner-list-header">Boys</li>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Tank Tops</a></li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Sleepware</a></li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="inner-menu">
                  <li class="inner-list-header">Girls</li>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Sleepware</a></li>
                </ul>
              </div>             
            </ul>
            </div>            
          </li>
          <li><a href="/ucsc_2202_07/andum.lk/customer/hire_tailor.php">Explore Tailors</a></li>
          <li><a href="/ucsc_2202_07/andum.lk/customer/hire_fashion_designer.php">Explore Fashion Designers</a></li>
          <li>
          
          </li>
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

          <div class="user-type-headding">
              <h3>What Brings You to Andum.lk</h3>
            </div>

          <div class="row">
            
            <div class="col-4">
              
              <div class="user-type-box">
              <div class="user-card-img">
                <img src="images/user-type/tailor.png" alt="" style="width:100%">
              </div>
              <center>
                <h4>I'm a Tailor</h4>
              </center>
              <center>
              <div class="radio">
                  <label><input type="radio" name="Usertype"  value="0" required checked></label>
                </div>
              </center>
                
              </div>
            </div>
            <div class="col-4">
              <div class="user-type-box">
              <div class="user-card-img">
                <img src="images/user-type/customer.png" alt="" style="width:100%">
              </div>
              <center>
                <h4>I'm a Customer</h4>
              </center>
              <center>
              <div class="radio">
                  <label><input type="radio" name="Usertype" value="1"></label>
                </div>
                
              </center>
                
              </div>  
            </div>
            <div class="col-4">
              <div class="user-type-box">
              <div class="user-card-img">
                <center>
                <img src="images/user-type/fd.png" alt="" style="width:56%">

                </center>
                
              </div>
              <center>
                <h4>I'm a Fashion Designer</h4>
              </center>
              <center>
              <div class="radio">
                  <label><input type="radio" name="Usertype" value="2"></label>
                </div>

              </center>
                
              </div> 
            </div>
          </div>

          <!-- <div class="form-field-inline">
            <label for="utype" class="field-label-inline"><b>User Type</b></label> -->
            <!-- ------- <input type="text" class="field-value-inline" name="utype" required> ------  -->

            <!-- <select class="option" name="Usertype" id="user">
              <option value="1">Customer</option>
              <option value="0">Tailor</option>
              <option value="2">Fashion designer</option>
            </select>

          </div> -->


        <!-- -->
        <!-- -->
        <!-- -->
          <div class="btn-panel-center">
            <!-- <button class="facebookbutton btn-full-w" type="submit">SIGN UP WITH FACEBOOK </button>
            <button class="googlebutton btn-full-w" type="submit">SIGN UP WITH GOOGLE </button> -->
            <a href="verify_user.php"><button class="loginbutton btn-full-w" type="submit" name="register">SIGN UP </button>
          </div>

          <!-- <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
        </div>

  </form>

<?php require("footer.php")?>
</body>
</html>
