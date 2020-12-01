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
  <title>Andum.lk - Hire a fashion designer</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fonts.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/customerstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>
    .search-btn {
      background-color: white;
      color: #EB2188;
    }
    .checked {
  color: orange;
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
      function() {
        this.classList.toggle("active");
      })
  </script>

  <?php include("../errors.php");
  ?>

  <div class="sliderbox-wrap">
    <div class="container-box">
      <div class="row">
        <div class="search-container">
          <form method="post">
            <div class="form-field-inline">
              <label for="searchname" class="field-label-inline">Search...</label>
              <input type="text" class="field-value-inline" name="q">
              <button type="submit" class="search-btn" name="search"><i class="fa fa-search" aria-hidden="true"></i></abutton>
            </div>
          </form>
        </div>
      </div>

      <div class="customer-cover">
        <div class="row">
          <h2 class="fashion-designer-headding">Our Fashion Designers</h2>
        </div>
        <div class="row">
          <?php
            $nic = $_SESSION['nic'];
            // Check condition if this is search request or not
            if ($search != true) {
              // Read all dressess
              $sql = "SELECT * FROM users WHERE type='2'";
              $result = mysqli_query($db, $sql);

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <!-- Dress box start -->
          <div class="col-4">
            <div class="designer-box">
              <form method="get" action="index.php" class="fd-showcase">
                <input type="hidden" value="<?php echo $nic ?> " name="f_id">
                <div class="fd-card-item">
                  <div class="fd-card-img">               
                    <a href="hire_fashion_designer.php?f_id=<?php echo $row["nic"] ?>"><img src="/ucsc_2202_07/andum.lk/fashion_designer/profile_pictures/<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%" class="proDisp"></a>
                  </div>
                  <div class="fd-card-content">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <div class="card-title"><?php echo $row["fname"]." ".$row["lname"] ?></div>
                    <div class="card-description"></div>
                    <button class="hire-btn">Hire me</button>
                  </div>                 
                </div>
              </form>
            </div>           
          </div>
          <!-- Dress box end-->

          <?php
                }
              }
            } else {

              //Read using search keyword
              $sql = "SELECT * FROM fashion_designer WHERE category LIKE '%$keyword%'";
              $result = mysqli_query($db, $sql);

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) { 
          ?>

          <!-- Dress box start -->
          <div class="col-4">
            <form method="get" action="index.php" class="design-showcase">
              <input type="hidden" value="<?php echo $nic ?> " name="f_id">
              <div class="card-item">
                <div class="card-img">
                <img src="<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%"></a>
                </div>
                <div class="card-content">
                <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
                  <div class="card-title"><?php echo $row["fname"]+" "+$row["lname"] ?></div>
                  <div class="card-description"></div>
                </div>
              </div>
            </form>
          </div>
          <!-- Dress box end-->
          
          <?php }
              }
            }
          ?>
        </div>
      </div>
      
    </div>

    <!--footer-->
    <?php require("../footer.php") ?>
</body>

</html>
