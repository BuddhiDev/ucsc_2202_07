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
    <!-- <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css"> -->
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/lightslider.css">
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
          <li><a href="customer/hire_fashion_designer.php">Explore Fashion Designers</a></li>
          <li><a href="contact_us.php">Contact Us</a></li>
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
  <div class="container-box">
      <div class="row">
        <div class="col-8">
            <form action="contact_us.php" method="post">

                <!-- errors display -->
                <?php include("errors.php");
                ?>

                <div class="contact-us-container">
                    <div class="form-field-inline">
                    <label for="uname" class="field-label-inline">What is Your Issue</label>
                    <input type="text" class="field-value-inline" name="issue" required>
                    </div>

                    <div class="form-field-inline">
                    <label for="fname" class="field-label-inline"><b>Your Name</b></label>
                    <input type="text" class="field-value-inline" name="cust_name" required>
                    </div>

                    <div class="form-field-inline">
                    <label for="email" class="field-label-inline"><b>Email Address</b></label>
                    <input type="text" class="field-value-inline" name="email" required>
                    </div>

                    <div class="form-field-inline">
                    <label for="contactno" class="field-label-inline"><b>Phone Number</b></label>
                    <input type="text" class="field-value-inline" name="contactno">
                    </div>

                    <div class="form-field-inline">
                    <label for="address" class="field-label-inline"><b>Message</b></label>
                    <textarea name="c_msg" rows="5" cols="50" placeholder="" class="txt-area2"></textarea>
                    </div>

                    <div class="btn-panel-center">
                        <!-- <input type="button" onclick="sendEmail()" value="Send" class="loginbutton btn-full-w" name="message_send"> -->
                    <button class="loginbutton btn-full-w" type="submit" name="message_send">Send</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-4">
            <div class="contact-detail-box">
                <div>
                    <div class="contact-text1">Customer Care Hotline</div>
                    <div class="contact-text2">+9477123456</div>
                    <div class="contact-text1">Address</div>
                    <div></div>
                </div>
                
                
            </div>
            <div></div>
        </div>

        </div>
  
  </div>

    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        function sendEmail(){
            var issue = $(#issue);
            var cust_name = $(#cust_name);
            var email = $(#email);
            var contactno = $(#contactno);
            var c_msg = $(#c_msg);
        }
    </script>
 

  <!-- add a footer -->
  <?php require("footer.php")?>

  
</body>
</html>
