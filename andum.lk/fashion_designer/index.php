<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>  

<?php include("../errors.php");
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Tailor</title>
  <link rel="shortcut icon" href="../logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/fashion-designer.css">
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
        <!-- <ul class="nav-area">
          <li><a href="index.php">Home</a></li>
          <li><a href="hire_tailor.php">My Orders</a></li>
          <li><a href="hire_tailor.php">My Designs</a></li>
        </ul> -->
        <form class="input-search">
          <div class="search-input-group">
            inputzz

          </div>
        </form>
      </div>
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><a class="cta" href="design_showcase.php"><button class="loginbutton btn-full-w">Add New</button></a></li>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                  <li><a href="cust_edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                  <li><a href="#"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                  <li><a href="purchases.php"><i class="fas fa-money"></i>Purchases</a></li>
                  <li><a href="#"><i class="fas fa-heart"></i>Favourites</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>
              </div>
            </li>
            <li><i class="fas fa-envelope"></i></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

  <div class="container-box">
    <!-- <div class="nav_right"> -->
    <ul class="sidebar">
      <li class="sidebar-item">
        <a class="sidebar-link" href="index.php">
          <div class="sidebar-icon">
            <i class="fas fa-columns"></i>
            <span class="sidebar-text">Dashboard</span>
          </div>
          
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="index.php">
        <div class="sidebar-icon">
          <i class="fas fa-user-circle"></i>
          <span class="sidebar-text">My Profile</span>
          </div>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="index.php">
        <div class="sidebar-icon">
          <i class="fas fa-tshirt"></i>
          <span class="sidebar-text">My Designs</span>
          </div>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="index.php">
        <div class="sidebar-icon">
          <i class="fas fa-shopping-cart"></i>
          <span class="sidebar-text">My Orders</span>
          </div>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="index.php">
        <div class="sidebar-icon">
          <i class="fas fa-comments"></i>
          <span class="sidebar-text">Chat</span>
          </div>
        </a>
      </li>
    </ul>
    <!-- </div> -->
    
  </div>

  <?php require("../footer.php")?>

</body>
</html>
