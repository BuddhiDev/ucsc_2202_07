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

  <body>
      <div class="box">
        <header>
          <img class="logo" src="/ucsc_2202_07/andum.lk/logo.png" alt="logo">
          <nav>
            <ul class="nav-area">
              <li><a href="#">Explore</a></li>
              <li><a href="#">Hired fashion designers</a></li>
              <li><a href="#">Dress showcase</a></li>
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
          <th>Tailor NIC</th>
          <th>Tailor Name</th>
          <th>Status</th>

        </tr>
        <tr>
        <?php 
	
    $nic = $_SESSION['nic'];
    $sql = "SELECT * FROM orders WHERE c_nic='$nic'";
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
</body>
</html>
