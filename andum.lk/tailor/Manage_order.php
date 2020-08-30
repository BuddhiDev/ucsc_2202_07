<?php include("../server.php"); 

if(!isset($_SESSION['nic'])){
	header("location:../login.php");
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk - Manage Orders</title>
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
            <li><a href="#">Explore</a></li>
            <li><a href="#">Hire a Fashion Designer</a></li>
            <li><a href="/ucsc_2202_07/andum.lk/tailor/dress-showcase.php">Dress Showcase</a></li>
            <li><a href="/ucsc_2202_07/andum.lk/tailor/Manage_order.php">Manage order</a></li>
            </ul>  
          </nav>
          <div>
            <a class="cta" href="/ucsc_2202_07/andum.lk"><button class="loginbutton btn-full-w"s>Sign Out</button></a>
          </div>
        </header>
    </div>
    <div style="overflow-x:auto;">
    <table>
      <tr>
        <th>Order Id</th>
        <th>Customer NIC</th>
        <th>Customer First Name</th>
        <th>Status</th>
      </tr>
      <tr>

     <?php 
	
    $nic = $_SESSION['nic'];
    $sql = "SELECT * FROM orders WHERE t_nic='$nic'";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
        {

          while($row = mysqli_fetch_assoc($result)) {
            ?>


      <td><?php echo $row["id"] ?></td>
      <td><?php echo $row["c_nic"] ?></td>
      <td><?php echo $row["c_fname"] ?></td>
      <td><?php echo $row["status"] ?></td>
      <td>
        <div>
          <a class="cta" href="#"><button>View</button></a>
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
