<?php
require("fd_controller.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk - Edit Profile</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/checkbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>

    <style>
      img {
        border-radius: 50%;
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
                <li><a href="#">Trousers</a></li>
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
    function(){
      this.classList.toggle("active");
    })
  </script>


<!-- edit profile form-->

      <form action="cust_edit_profile.php" method="post">
        <?php

       include("../errors.php");


        $nic = $_SESSION['nic'];
        $sql= "SELECT * FROM users WHERE nic=$nic";
        // $sql = "SELECT nic, email,fname,lname,password,contactno FROM users";
        $result = mysqli_query($db, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>


        <div class="login-container">
          <h1>Edit Profile</h1>
          <center>
          <div class="avatar"></div>
          <!-- <img src=" " alt="Jeny" style="width:25%"; > -->
        </center>
          <div class="form-field-inline">
            <label for="uname" class="field-label-inline">NIC Number</label>
            <input type="text" value="<?php echo $row["nic"]?>" class="field-value-inline" name="nic" required>
          </div>

          <div class="form-field-inline">
            <label for="email" class="field-label-inline"><b>Email Address</b></label>
            <input type="text" value="<?php echo $row["email"]?>" class="field-value-inline" name="email" required>
          </div>

          <div class="form-field-inline">
            <label for="fname" class="field-label-inline"><b>First Name</b></label>
            <input type="text" value="<?php echo $row["fname"]?>" class="field-value-inline" name="fname" required>
          </div>

          <div class="form-field-inline">
            <label for="lname" class="field-label-inline"><b>Last Name</b></label>
            <input type="text" value="<?php echo $row["lname"]?>" class="field-value-inline" name="lname" required>
          </div>

          <div class="form-field-inline">
            <label for="password" class="field-label-inline"><b>Password</b></label>
            <input type="password" class="field-value-inline" name="password" required>
          </div>

          <div class="form-field-inline">
            <label for="cpassword" class="field-label-inline"><b>Confirm Password</b></label>
            <input type="password" class="field-value-inline" name="cpassword" required>
          </div>

          <div class="form-field-inline">
            <label for="contactno" class="field-label-inline"><b>Phone Number</b></label>
            <input type="text" value="<?php echo $row["contactno"]?>" class="field-value-inline" name="contactno">
          </div>

          <div class="form-field-inline">
            <label for="address" class="field-label-inline"><b>Address</b></label>
            <input type="text" value="<?php echo $row["address"]?>" class="field-value-inline" name="address">
          </div>

          <div class="form-field-inline">
            <label for="postalcode" class="field-label-inline"><b>Postal Code</b></label>
            <input type="text" value="<?php echo $row["postalcode"]?>" class="field-value-inline" name="postalcode">
          </div>


              <!--<h2>SewingCategories</h2>-->



          <div class="btn-panel-center">

            <button class="loginbutton btn-full-w" type="submit" name="update_user">Save Data</button>
          </div>

          <?php
            }
          }
          ?>


        </div>
      </form>

      <!--footer-->
      <?php require("../footer.php")?>

</body>
</html>
