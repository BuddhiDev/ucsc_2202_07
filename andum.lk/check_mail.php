
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="box">
  <header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="logo.png" alt="logo" class="img-box">
      </div>
      <div class="nav-item-middle">
        <ul class="nav-area" id="MenuItems">
          <li><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a href="#">Women</a>
            <div class="row">
              <ul class="menu-area">
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Casual Wear</li>
                    <li><a href="/ucsc_2202_07/andum.lk/customer/dresses.php">Dresses</a></li>
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
      <div>
        <label id="icon">
          <i class="fas fa-bars" onclick="menutoggle()"></i>
        </label>
      </div>
    </nav>
  </header>
  </div>

<div class="container-box">
<div class="send-email-row">
<center>
    <h3 class="admin-para">Thank You for registering. We have sent a verification email to the address provided.</h3>
    <i class="far fa-envelope" style="font-size:200px"></i>
<center>
</div>
</div>
</body>

</html>