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
  <title>Andum.lk - Manage Sales</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 99%;
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

<?php require("header.php")?>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

<div class="add-new-position">
  <a class="cta" href="add_product.php"><button class="loginbutton btn-full-w">ADD NEW</button></a>
</div>

  





  <div class="container-box">
  <div style="overflow-x:auto;">

  <h2 class="tailor-heading">New Sales</h2>
    <table>
      <tr>
        <th>Customer Name</th>
        <th>Category</th>
        <th>Status</th>
        <th><center>Action</center></th>
      </tr>
      <tr>

        <?php

        $nic = $_SESSION['nic'];
        $sql = "SELECT * FROM dress_sales s,dress_showcase d,users u WHERE s.dress_id=d.dress_id AND d.t_nic='$nic' AND s.c_nic=u.nic AND status='Paid'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <td><?php echo $row["fname"]." ".$row["lname"] ?></td>
            <td><?php echo $row["category"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td>
              <div>
                <center><a href="Manage_sales.php?sale_id=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
              </div>
            </td>
      </tr>
      <?php
              }
            } else {
            }

      ?>


    </table>

    <h2 class="tailor-heading">Delivered Sales</h2>
    <table>
      <tr>
        <th>Customer Name</th>
        <th>Category</th>
        <th>Status</th>
        <th><center>Action</center></th>
      </tr>
      <tr>

        <?php

        $nic = $_SESSION['nic'];
        $sql = "SELECT * FROM dress_sales s,dress_showcase d,users u WHERE s.dress_id=d.dress_id AND d.t_nic='$nic' AND s.c_nic=u.nic AND status='Delivered'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <td><?php echo $row["fname"]." ".$row["lname"] ?></td>
            <td><?php echo $row["category"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td>
              <div>
                <center><a href="Manage_sales.php?sale_id=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
              </div>
            </td>
      </tr>
      <?php
              }
            } else {
            }

      ?>


    </table>

    <h2 class="tailor-heading">Completed Sales</h2>
    <table>
      <tr>
        <th>Customer Name</th>
        <th>Category</th>
        <th>Status</th>
        <th><center>Action</center></th>
      </tr>
      <tr>

        <?php

        $nic = $_SESSION['nic'];
        $sql = "SELECT * FROM dress_sales s,dress_showcase d,users u WHERE s.dress_id=d.dress_id AND d.t_nic='$nic' AND s.c_nic=u.nic AND status='Completed'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <td><?php echo $row["fname"]." ".$row["lname"] ?></td>
            <td><?php echo $row["category"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td>
              <div>
                <center><a href="Manage_sales.php?sale_id=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
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
  

<?php require("../footer.php")?>

</body>

</html>
