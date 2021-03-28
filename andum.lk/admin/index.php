<?php include("../server.php");

//if (!isset($_SESSION['nic'])) {
 // header("location:../login.php");
//  exit();
//}

?>  

<?php include("../errors.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Admin</title>
  <link rel="shortcut icon" href="../logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>



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
                  <li><a href="index.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>
              </div>
            </li>
            <li><i class="fas fa-envelope"></i></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <body>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

  <div class="fd-container-box">
<?php

//get total orders sql
$sqlu = "SELECT COUNT(nic) FROM users";
$resultu = mysqli_query($db, $sqlu);
$rowu = mysqli_fetch_array($resultu);
$total_users = $rowu[0];

$sqlt = "SELECT COUNT(nic) FROM users WHERE type='0'";
$resultt = mysqli_query($db, $sqlt);
$rowt = mysqli_fetch_array($resultt);
$total_tailors = $rowt[0];

$sql = "SELECT COUNT(nic) FROM users WHERE type='1'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$total_customers = $row[0];

$sql = "SELECT COUNT(nic) FROM users WHERE type='2'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$total_fdesigners = $row[0];

$sql = "SELECT COUNT(nic) FROM banned_users";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$total_banned_users = $row[0];

  
?>
    <div class="side-bar-wrapper">
      <ul class="sidebar">
        <li class="sidebar-item">
          <a class="sidebar-link" href="manage_customer.php">
          <div class="sidebar-icon">
            <i class="fas fa-users"></i>
            <span class="sidebar-text">Customer List</span>
            </div>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="manage_tailor.php">
          <div class="sidebar-icon">
            <i class="fas fa-users"></i>
            <span class="sidebar-text">Tailor List</span>
            </div>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="manage_fdesigner.php">
          <div class="sidebar-icon">
            <i class="fas fa-users"></i>
            <span class="sidebar-text">Fashion Designer List</span>
            </div>
          </a>
        </li>
        <!-- <li class="sidebar-item">
          <a class="sidebar-link" href="index.php">
          <div class="sidebar-icon">
            <i class="fas fa-comments"></i>
            <span class="sidebar-text">Feedback</span>
            </div>
          </a>
        </li> -->
        <!-- <li class="sidebar-item">
          <a class="sidebar-link" href="index.php">
          <div class="sidebar-icon">
          <i class="fas fa-bell"></i>
            <span class="sidebar-text">Notifications</span>
          </div>
          </a>
        </li> -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="deleted_users.php">
          <div class="sidebar-icon">
            <i class="fas fa-users"></i>
            <span class="sidebar-text">Banned Users</span>
          </div>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="review_dress.php">
          <div class="sidebar-icon">
            <i class="fas fa-tshirt"></i>
            <span class="sidebar-text">Review Dresses</span>
          </div>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="admin_payments.php">
          <div class="sidebar-icon">
            <i class="fas fa-money"></i>
            <span class="sidebar-text">Payments</span>
          </div>
          </a>
        </li>


        <li class="sidebar-item">
          <a class="sidebar-link" href="index.php">
          <!--<div class="sidebar-icon">
            <i class="fas fa-download"></i>
            <span class="sidebar-text">Download User List</span>
          </div>-->
          </a>
        </li>
      </ul>
    </div>
    
    <div class="fd-content-wrapper">
      <div class=row>
        <div class=col-3>
          <div class="fd-block-3">
          <h3 class="fd-block-font-size"><?php echo $total_users ?></h3>
            <Br>
            <h3>Total Users</h3>
          </div>
        </div>
        <div class=col-3>
          <div class="fd-block-2">
          <h3 class="fd-block-font-size"><?php echo $total_tailors ?></h3>
            <Br>
            <h3>Tailors</h3>
          </div>
        </div>
        <div class=col-3>
          <div class="fd-block-2">
          <h3 class="fd-block-font-size"><?php echo $total_customers ?></h3>
            <Br>
            <h3>Customers</h3>
          </div>
        </div>
        <div class=col-3>
          <div class="fd-block-2">
          <h3 class="fd-block-font-size"><?php echo $total_fdesigners ?></h3>
            <Br>
            <h3>Fashion designers</h3>
          </div>
        </div>
        <!-- <div class=col-3>
          <div class="fd-block-1">
          <h3 class="fd-block-font-size">24</h3>
            <Br>
            <h3>Notifications</h3>
          </div>
        </div> -->
        <div class=col-3>
          <div class="fd-block-4">
          <h3 class="fd-block-font-size"><?php echo $total_banned_users ?></h3>
            <Br>
            <h3>Deleted Users</h3>
          </div>
        </div>
      </div>
      <div calss="row">
    </div>
    </div>

    
  </div>

  <?php require("../footer.php")?>

</body>
</html>
