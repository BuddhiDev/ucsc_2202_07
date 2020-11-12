<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Customer</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="../logo.png" alt="logo" class="img-box">
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

          <li><a href="hire_tailor.php">Hire a Tailor</a></li>
          <li><a href="hire_fashion_designer.php">Hire a Fashion Designer</a></li>
        </ul>
      </div>
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                  <li><a href="cust_edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                  <li><a href="hired_list.php"><i class="fas fa-users"></i>Hired Tailors</a></li>
                  <li><a href="#"><i class="fas fa-users"></i>Hired Fashion Designers</a></li>
                  <li><a href="purchases.php"><i class="fas fa-money"></i>Purchases</a></li>
                  <li><a href="#"><i class="fas fa-heart"></i>Favourites</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>

            <li><i class="fas fa-envelope"></i></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
        </div>
        </ul>
      </div>
      </div>
    </nav>
  </header>

    <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
    function(){
      this.classList.toggle("active");
    })
  </script>

    <div class="container-box">
  <h2>Dresses</h2>
  <div class="row">
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
              <a href="product.php"><img src="/ucsc_2202_07/andum.lk/images/d-01.jpg" alt="Avatar" style="width:100%"></a>
              </div>
              <div class="card-content">
                <!-- <div class="card-title">Andrea Perera</div> -->
                <div class="card-description">
                  Casual Summer Dress
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
                <img src="/ucsc_2202_07/andum.lk/images/d-01.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <!-- <div class="card-title">Andrea Perera</div> -->
                <div class="card-description">
                    Casual Summer Dress
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
                <img src="/ucsc_2202_07/andum.lk/images/d-01.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <!-- <div class="card-title">SUMMER DRESS</div> -->
                <div class="card-description">
                    Casual Summer Dress
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
        
  </div>
</div>

    <!--footer-->
    <?php require("../footer.php")?>
</body>
</html>