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



<?php require("header.php") ?>

  <body>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

  <div class="admin-container-box">
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
    <div class="admin-side-bar-wrapper">
      <ul class="admin-sidebar">
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
    
    <div class="admin-content-wrapper">
      <div class=row>
        
        <div class=col-4>
          <div class="fd-block-2">
          <h3 class="fd-block-font-size"><?php echo $total_tailors ?></h3>
            <Br>
            <h3>Tailors</h3>
          </div>
        </div>
        <div class=col-4>
          <div class="fd-block-2">
          <h3 class="fd-block-font-size"><?php echo $total_customers ?></h3>
            <Br>
            <h3>Customers</h3>
          </div>
        </div>
        <div class=col-4>
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
        <div class=col-6>
          <div class="fd-block-3">
            <h3 class="fd-block-font-size"><?php echo $total_users ?></h3>
            <Br>
            <h3>Total Users</h3>
          </div>
        </div>
        <div class=col-6>
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
