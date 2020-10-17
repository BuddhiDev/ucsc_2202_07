<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Tailor</title>
  <link rel="shortcut icon" href="../logo.png">
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
          <li><a href="index.php">Home</a></li>
          <li><a href="hire_tailor.php">My Orders</a></li>
          <li><a href="hire_tailor.php">My Designs</a></li>
        </ul>
      </div>
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                  <li><a href="cust_edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                  <li><a href="#"><i class="fas fa-chart-line"></i>Dashboard</a></li>
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

  <div class="container">
    <!-- <header>
      <img class="logo" src="../logo.png" alt="logo">
      <nav>
        <ul class="nav-area">
          <li><a href="index.php">Home</a></li>
          <li><a href="dress_showcase.php">Design Showcase</a></li>
          <li><a href="Manage_order.php">Manage Orders</a></li>
          <li><a href="#">Manage Sales</a></li>
        </ul>
      </nav>

      <div>
        <a class="cta" href="edit_profile.php"><button name="edit" class="loginbutton btn-full-w">Edit profile</button></a>
      </div>

      <div>
        <a class="cta" href="index.php?logout='1'"><button name="logout" class="loginbutton btn-full-w">Sign Out</button></a>
      </div>
    </header> -->

    <div class="col-4">
                <form method="get" action="index.php" class="dress-showcase">
                  <input type="hidden"  name="dress_id">
                  <input type="hidden"  name="c_nic">

                  <div class="card-item">
                    <div class="card-img">
                      <img src="../product1.jpg> " alt="Avatar" style="width:100%">
                    </div>
                    <div class="card-content">
                      <div class="card-title"><?php echo $row["title"] ?></div>
                      <!-- <div class="card-description">
                      Auto-layout for flexbox grid columns also means you can set the width of one column
                      and have the sibling columns automatically resize around it.
                    </div>-->
                      <div class="card-description">LKR 25000</div>
                    </div>
                  </div>
                </form>
              </div>

  </div>


  <?php require("../footer.php")?>


</body>




</html>
