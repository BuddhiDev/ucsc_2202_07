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
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>

<?php require("header.php")?>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

  <div>
    <div class="add-new-position">
      <a class="cta" href="add_product.php"><button class="loginbutton btn-full-w">ADD NEW</button></a>
    </div>

    
  </div>

<!-- retrieve order data -->
<?php
$nic=$_SESSION['nic'];

//get total orders sql
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$total_orders = $row[0];

//get pending orders sql
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' AND status='Pending' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$pending_orders = $row[0];

//get ongoing orders sql
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' AND status='Ongoing' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$ongoing_orders = $row[0];

//get completed orders sql
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' AND status='Completed' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$completed_orders = $row[0];

//get delivered orders sql
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' AND status='Delivered' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$delivered_orders = $row[0];

?>
  <div class="fd-container-box">
    <div class="side-bar-wrapper">
      <ul class="sidebar">
        <li class="sidebar-item">
          <a class="sidebar-link" href="tailor-dashboard.php">
            <div class="sidebar-icon">
              <i class="fas fa-columns"></i>
              <span class="sidebar-text">Dashboard</span>
            </div>           
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="my_showcase.php">
          <div class="sidebar-icon">
            <i class="fas fa-tshirt"></i>
            <span class="sidebar-text">My Dress Showcase</span>
            </div>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="pending_dresses.php">
          <div class="sidebar-icon">
            <i class="fas fa-tshirt"></i>
            <span class="sidebar-text">Pending Dresses</span>
            </div>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="Manage_order.php">
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
    </div>
    
    <div class="fd-content-wrapper">
      <div class=row>
        <div class=col-4>
          <div class="fd-block-1">
            <h3 class="fd-block-font-size"><?php echo $total_orders; ?></h3>
            <Br>
            <h3>Total Orders</h3>
          </div>
        </div>
        <div class=col-4>
          <div class="fd-block-2">
          <h3 class="fd-block-font-size">0</h3>
            <Br>
            <h3>Profile Rate</h3>
          </div>
        </div>
        <div class=col-4>
          <div class="fd-block-3">
          <h3 class="fd-block-font-size">0</h3>
            <Br>
            <h3>Total Feedbacks</h3>
          </div>
        </div>
      </div>
      <div class=row>
        <div class=col-3>
          <div class="fd-block-3">
          <h3 class="fd-block-font-size"><?php echo $pending_orders; ?></h3>
            <Br>
            <h3>Pending</h3>
          </div>
        </div>
        <div class=col-3>
          <div class="fd-block-2">
          <h3 class="fd-block-font-size"><?php echo $ongoing_orders; ?></h3>
            <Br>
            <h3>On Going</h3>
          </div>
        </div>
        <div class=col-3>
          <div class="fd-block-1">
          <h3 class="fd-block-font-size"><?php echo $completed_orders; ?></h3>
            <Br>
            <h3>Completed</h3>
          </div>
        </div>
        <div class=col-3>
          <div class="fd-block-4">
          <h3 class="fd-block-font-size"><?php echo $delivered_orders; ?></h3>
            <Br>
            <h3>Delivered</h3>
          </div>
        </div>
      </div>

      <!-- order chart -->
<?php
//initialize previouse 6 months
  for ($i = 0; $i <= 6; $i++) 
  {
    $months[] = date("m", strtotime( date( 'Y-m-01' )." -$i months"));
  }
  $year = date('Y');
  $year=$year-1;
//sql to get last month order count
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' AND date='$months[0]' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$mon1=$row[0];

//sql to get last 2 month order count
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' AND date='$months[1]' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$mon2=$row[0];

//sql to get last 3month order count
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' AND date='$months[2]' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$mon3=$row[0];

//sql to get last 4month order count
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' AND date='$months[3]' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$mon4=$row[0];

//sql to get last 5month order count
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' AND date='$months[4]' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$mon5=$row[0];

//sql to get last 6month order count
$sql = "SELECT COUNT(id) FROM t_orders WHERE t_nic='$nic' AND date='$months[5]' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$mon6=$row[0];

?>
<br />

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Total Orders From Past 6 Months"
	},
  axisX:{  
  //Try Changing to MMMM
  title: "Month",
  interval: 1,
  intervalType: "month",
  },
  axisY:{
  title: "Total Orders",
  interval: 1,
  },
  data: [
  {        
  type: "line",
  lineThickness: 2,
  dataPoints: [
  { x: new Date(<?php echo $year ?>,<?php echo $months[1]?>), y:<?php echo $mon1?> },
  { x: new Date(<?php echo $year ?>,<?php echo $months[2]?>), y:<?php echo $mon2?> },
  { x: new Date(<?php echo $year ?>,<?php echo $months[3]?>), y:<?php echo $mon3?> },
  { x: new Date(<?php echo $year ?>,<?php echo $months[4]?>), y:<?php echo $mon4?> },
  { x: new Date(<?php echo $year ?>,<?php echo $months[5]?>), y:<?php echo $mon5?> },
  { x: new Date(<?php echo $year ?>,<?php echo $months[6]?>), y:<?php echo $mon6?> },
    ]
      }    
      ]
});
chart.render();
 
}
</script>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


    </div>

    

  

    <!-- </div> -->
    
  </div>

  <?php require("../footer.php")?>

</body>
</html>
