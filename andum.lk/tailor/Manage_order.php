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
    <title>andum.lk</title>
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
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
            <li><a href="#"></a>Dress Showcase</li>
          </ul>
        </nav>
        <div>
          <a class="cta" href="index.php?logout='1'"><button name="logout">Sign Out</button></a>
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
        <th>Edit Details</th>
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
          <a class="cta" href="#"><button>Edit</button></a>
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

</body>
</html>
