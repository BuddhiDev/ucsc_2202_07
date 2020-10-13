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
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
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
            <li class="dropdown">
              <a href="#">Shop Now</a>
              <ul class="menu-area">
                <ul>
                  <h4>Ladies wear</h4>
                  <li><a href="dresses.php">Dresses</a></li>
                  <li><a href="workware_ladies.php">Work Wear</a></li>
                  <li><a href="#">Denims</a></li>
                  <li><a href="#">Tops</a></li>
                  <li><a href="#">T Shirts</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
                <ul>
                  <h4>Gents wear</h4>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Denims</a></li>
                  <li><a href="workwear_gents.php">Work Wear</a></li>
                  <li><a href="#">T Shirts</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
                <ul>
                  <h4>Kids wear</h4>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">T shirsts</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
              </ul>
            </li>
            <li><a href="index.php">Hire a Tailor</a></li>
            <li><a href="index.php">Hire a Fashion Designer</a></li>
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
                </div>
              <li class="nr_li"><i class="fas fa-envelope"></i></li>
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

    <div class="container">
  <h2>Dresses</h2>
  <div class="row">
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
              <a href="product.php"><img src="/ucsc_2202_07/andum.lk/images/d-01.jpg" alt="Avatar" style="width:100%"></a>
              </div>
              <div class="card-content">
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
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
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
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
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
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
    <?php require("footer.php")?>
</body>
</html>