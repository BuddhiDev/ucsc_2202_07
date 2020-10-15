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
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
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
          <li><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a href="#">Women</a>
            <ul class="menu-area">
              <ul class="inner-menu">
                <li class="inner-list-header">Casual Wear</li>
                <li><a href="#">T shirts</a></li>
                <!-- <li><a href="workware_ladies.php">Blouse</a></li> -->
                <!-- <li><a href="#">Shirts</a></li>
                <li><a href="#">Jeans</a></li>
                <li><a href="#">Pants</a></li>
                <li><a href="dresses.php">Dresses</a></li> -->
              </ul>
              <ul class="inner-menu">
                <li class="inner-list-header">Formal Wear</li>
                <li><a href="#">Blouse</a></li>
                <li><a href="#">Skirts</a></li>
                <li><a href="workwear_gents.php">Pants</a></li>
                <li><a href="#">Dresses</a></li>
              </ul>
              <ul class="inner-menu">
                <li class="inner-list-header">Ethnic wear</li>
                <li><a href="#">Kurthas</a></li>
                <li><a href="#">Shawls</a></li>
                <li><a href="#">Sarees</a></li>
              </ul>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#">Men</a>
            <ul class="menu-area">
              <ul class="inner-menu">
                <li class="inner-list-header">Casual Wear</li>
                <li><a href="#">T shirts</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Jeans</a></li>
                <li><a href="index.php?dcategory=trouser">Trousers</a></li>
                <li><a href="#">Bottoms</a></li>
                <li><a href="#">Sarongs</a></li>
              </ul>
              <ul class="inner-menu">
                <li class="inner-list-header">Formal Wear</li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Trousers</a></li>
                <li><a href="#">Blazers</a></li>
              </ul>
              <ul class="inner-menu">
                <li class="inner-list-header">Inner Wear</li>
                <li><a href="#">Brief</a></li>
                <li><a href="#">Trunks</a></li>
                <li><a href="#">Vests</a></li>
              </ul>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#">Kids</a>
            <ul class="menu-area">
              <ul class="inner-menu">
                <li class="inner-list-header">Girls</li>
                <li><a href="#">T shirts</a></li>
                <li><a href="#">Tank Tops</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Pants</a></li>
                <li><a href="#">Sleepware</a></li>
              </ul>
              <ul class="inner-menu">
                <li class="inner-list-header">Boys</li>
                <li><a href="#">T shirts</a></li>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Kurta</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Sleepware</a></li>
              </ul>
            </ul>
          </li>

          <li><a href="hire_tailor.php">Hire a Tailor</a></li>
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

  <br />

  <div class="search-container">
    <form method="post">
      <div class="form-field-inline">
        <label for="searchname" class="field-label-inline">Search by Category</label>
        <input type="text" class="field-value-inline" name="q">
        <button type="submit" class="search-btn" name="search"><i class="fa fa-search" aria-hidden="true"></i></abutton>
      </div>
    </form>
  </div>

  <?php include("../errors.php");
  ?>
  <div class="sliderbox-wrap">

    <!-- </div>  -->
    <div class="container">
      <h2>New Arrivals</h2>
      <div class="row">
        <?php
        $nic = $_SESSION['nic'];

        // Check condition if this is search request or not
        if ($search != true) {

          // Read all dressess
          $sql = "SELECT * FROM dress_showcase";
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
                      <a href="index.php?dress_id=<?php echo $row["dress_id"] ?>"> <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%"></a>
                    </div>
                    <div class="card-content">
                      <div class="card-title"><?php echo $row["title"] ?></div>
                      <!-- <div class="card-description">
                      Auto-layout for flexbox grid columns also means you can set the width of one column
                      and have the sibling columns automatically resize around it.
                    </div>-->
                      <div class="card-description"><?php echo $row["price"] ?></div>
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
            $sql = "SELECT * FROM dress_showcase WHERE title LIKE '%$keyword%'";
            $result = mysqli_query($db, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) { ?>

                <!-- Dress box start -->
                <div class="col-4">
                  <form method="post" action="index.php" class="dress-showcase">
                    <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
                    <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                    <div class="card-item">
                      <div class="card-img">
                      <a href="index.php?dress_id=<?php echo $row["dress_id"] ?>"> <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%"></a>
                      </div>
                      <div class="card-content">
                        <div class="card-title"><?php echo $row["title"] ?></div>
                        <!-- <div class="card-description">
                      Auto-layout for flexbox grid columns also means you can set the width of one column
                      and have the sibling columns automatically resize around it.
                      </div> -->
                        <div class="card-description">LKR 2,500.00</div>
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
            $sql = "SELECT * FROM dress_showcase WHERE category LIKE '%$selected_dress_category%'";
            $result = mysqli_query($db, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) { ?>

                <!-- Dress box start -->
                <div class="col-4">
                  <form method="post" action="index.php" class="dress-showcase">
                    <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
                    <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                    <div class="card-item">
                      <div class="card-img">
                      <a href="index.php?dress_id=<?php echo $row["dress_id"] ?>"> <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%"></a>
                      </div>
                      <div class="card-content">
                        <div class="card-title"><?php echo $row["title"] ?></div>
                        <!-- <div class="card-description">
            Auto-layout for flexbox grid columns also means you can set the width of one column
            and have the sibling columns automatically resize around it.
            </div> -->
                        <div class="card-description">LKR 2,500.00</div>
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

    <!--footer-->
    <?php require("../footer.php") ?>
</body>

</html>