<?php include("../server.php"); 

if(!isset($_SESSION['nic'])){
	header("location:../login.php");
	exit();
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Andum.lk - Hired Tailors</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>andum.lk</title>
<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
<style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>

<body>
      <div class="box">
        <header>
          <img class="logo" src="/ucsc_2202_07/andum.lk/logo.png" alt="logo">
          <nav>
            <ul class="nav-area">
            <li><a href="/ucsc_2202_07/andum.lk/customer/index.php">Home</a></li>
            <li><a href="/ucsc_2202_07/andum.lk/customer/dress_showcase.php">Dress Showcase</a></li>
            <li><a href="/ucsc_2202_07/andum.lk/customer/hired_list.php">Hired Tailors</a></li>
            <li><a href="#">Hired Fashion Designer</a></li>
            </ul>
          </nav>
          <div>
            <a class="cta" href="index.php?logout='1'"><button name="logout" class="loginbutton btn-full-w">Sign Out</button></a>
          </div>
        </header>
      </div>
      <div>
      <table>
        <tr>
          <th>Order Id</th>
          <th>Tailor NIC</th>
          <th>Tailor Name</th>
          <th>Status</th>

        </tr>
        <tr>
        <?php 
	
    $nic = $_SESSION['nic'];
    $sql = "SELECT * FROM t_orders WHERE c_nic='$nic'";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
        {

          while($row = mysqli_fetch_assoc($result)) {
            ?>


      <td><?php echo $row["id"] ?></td>
      <td><?php echo $row["t_nic"] ?></td>
      <td><?php echo $row["c_fname"] ?></td>
      <td><?php echo $row["status"] ?></td>
      <td>
        <div>
          <a class="cta" href="#"><button class="loginbutton btn-full-w">View</button></a>
        </div>
      </td>
          </tr>
<?php
          }
        }
      
  else
  {
 
  }

    ?>
      </table>
    </div>

    <div class="footer">
    <div class="footer-content">
      <div class="footer-section about">
        <img class="footer-logo" src="/ucsc_2202_07/andum.lk/logo.png" alt="logo"><h1 class="logo-txt"><span></span></h1>
        <div class="socials">
          <a href="#"><i class="fas fa-facebook"></i></a>
          <a href="#"><i class="fas fa-instagram"></i></a>
          <a href="#"><i class="fas fa- google+"></i></a>
        </div>
      </div>
      <div class="footer-section links">
        <ul>
          <a href="#"><li>HIRE A TAILOR</li></a>
          <a href="#"><li>HIRE A FASHION DESIGNER</li></a>
          <a href="#"><li>SHIPPING AND RETURNS</li></a>
        </ul>
      </div>
      <div class="footer-section links2 ">
        <ul>
          <a href="#"><li>HIRE A TAILOR</li></a>
          <a href="#"><li>HIRE A FASHION DESIGNER</li></a>
          <a href="#"><li>SHIPPING AND RETURNS</li></a>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
          &copy; andum.lk
    </div>
  </div>
</body>
</html>
