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
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }
  </style>
</head>

<body>
  <div class="box">
  <?php require("header.php") ?>
  </div>
  <div class="container-box">
    <div style="overflow-x:auto;">
      <table>
        <tr>
          <th>Order Id</th>
          <th>Customer NIC</th>
          <th>Tailor First Name</th>
          <th>Status</th>
        </tr>
        <tr>

          <?php

          $nic = $_SESSION['nic'];
          $sql = "SELECT * FROM t_orders WHERE t_nic='$nic'";
          $result = mysqli_query($db, $sql);

          if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
          ?>


              <td><?php echo $row["id"] ?></td>
              <td><?php echo $row["t_nic"] ?></td>
              <td><?php echo $row["t_fname"] ?></td>
              <td><?php echo $row["status"] ?></td>
              <td>
                <div>
                  <a class="cta" href="#"><button>View</button></a>
                </div>
              </td>
        </tr>
        <?php
                }
              } else {
              }

        ?>
      </table>
    </div>
  </div>
  
<?php require("footer.php")?>

</body>

</html>
