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
  <title>Andum.lk - Tailor</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>
    .search-btn {
      background-color: white;
      color: #EB2188;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="../logo.png" alt="logo" class="img-box">
      </div>
      <div class="nav-item-middle">
        <ul class="nav-area">
          <li><a href="tailor-dashboard.php">Home</a></li>
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

          <li><a href="hire_tailor.php">Explore Tailors</a></li>
          <li><a href="hire_fashion_designer.php">Explore Fashion Designers</a></li>
          <li>
          
          </li>
        </ul>
      </div>
      
      <!-- </div> -->
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                  <li><a href="edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                  <li><a href="tailor-dashboard.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                  <li><a href="Manage_order.php"><i class="fas fa-money"></i>Sales</a></li>
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

  <div class="add-new-position">
  <a class="cta" href="add_product.php"><button class="loginbutton btn-full-w">ADD NEW</button></a>
</div>

  <div class="search-container">
        <form method="post">
          <div class="form-field-inline">
            <input type="text" class="field-value-inline" name="q" placeholder="Search...">
            <button type="submit" class="search-input-group-btn" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </form>
      </div>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

  <?php 
    include("../errors.php");
  ?>

<div class="tailor-container-box">
  
  <div class="tailor-cover">
    <div class="row">
      <h2 class="tailor-heading">My Dress showcase</h2>
    </div>
    <div class="row">
      <?php
        $nic = $_SESSION['nic'];

        // Check condition if this is search request or not
        if ($search != true) {

        // Read all dressess
        $sql = "SELECT * FROM dress_showcase WHERE t_nic='$nic'";
        $result = mysqli_query($db, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
      ?>

      <!-- Dress box start -->
      <div class="col-4">
        <form method="get" action="index.php" class="dress-showcase">
          <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
          <input type="hidden" value="<?php echo $nic ?> " name="c_nic">

          <div class="card-item">
            <div class="card-img">
              <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%">
            </div>
            <div class="card-content">
              <div class="card-title"><?php echo $row["title"] ?></div>
              <div class="card-description">LKR <?php echo $row["price"]?>.00</div>
            </div>
          </div>
        </form>
      </div>
      <!-- Dress box end-->

      <?php
            }
          }
        } else {

          //check whether this request is for category filter or keyword search
          if (!$category_filter) {

            //Read using search keyword
            $sql = "SELECT * FROM dress_showcase WHERE t_nic='$nic' && title LIKE '%$keyword%'";
            $result = mysqli_query($db, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
      ?>

      <!-- Dress box start -->
      <div class="col-4">
        <form method="post" action="index.php" class="dress-showcase">
          <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
          <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
          <div class="card-item">
            <div class="card-img">
              <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%">
            </div>
            <div class="card-content">
              <div class="card-title"><?php echo $row["title"] ?></div>
            <div class="card-description">LKR <?php echo $row["price"]?>.00</div>
            </div>
          </div>
        </form>
      </div>
      <!-- Dress box end-->

      <?php
              }
            }
          } else {
            
            //Read using selected category
            $sql = "SELECT * FROM dress_showcase WHERE t_nic='$nic' && category LIKE '%$selected_dress_category%'";
            $result = mysqli_query($db, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) { 
      ?>

      <!-- Dress box start -->
      <div class="col-4">
        <form method="post" action="index.php" class="dress-showcase">
          <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
          <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
          <div class="card-item">
            <div class="card-img">
              <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%">
            </div>
            <div class="card-content">
              <div class="card-title"><?php echo $row["title"] ?></div>
              <div class="card-description">LKR <?php echo $row["price"]?>.00</div>
            </div>
          </div>
        </form>
      </div>
      <!-- Dress box end-->

      <?php

            }
          }
        }
      }
      ?>
    </div>
  </div>
    
</div>


  <?php require("../footer.php")?>
</body>

</html>
