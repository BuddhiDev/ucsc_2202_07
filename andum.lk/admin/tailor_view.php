<?php include("../server.php");


if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Admin</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    

    .leftside {
      position: absolute;
      height: 500px;
      border-radius: 10px;
      width: 300px;
      /* background-image: url('/ucsc_2202_07/andum.lk/images/d-01.jpg'); */
      background-size: cover;
    }

    .p {
      margin-left: 40px;
      margin-top: 420px;
      color: black;
      font-weight: bold;
      font-family: sans-serif;
    }

    .one {
      border: 1px solid black;
      width: 30px;
      height: 30px;
      float: left;
      margin-left: 40px;
      margin-right: 40px;
      text-align: center;
      margin-top: 9px;
    }

    .one:hover {
      border: 2px solid black;
      width: 30px;
      height: 30px;
      float: left;
      text-align: center;
      margin-top: 9px;
    }

    .text {
      color: black;
    }

    .color-box {
      background-color: pink;
    }

    .onee {
      border: 1px solid black;
      width: 42px;
      font-size: 14px;
      height: 22px;
      float: left;
      margin-right: 5px;
      text-align: center;
    }

    .on {
      border: 1px solid black;
      border-radius: 10px;
      border-color: pink;
      width: 30px;
      background-color: pink;
      height: 30px;
      float: left;
      margin-right: 5px;
      text-align: center;
    }

    .on1 {
      border: 1px solid black;
      border-radius: 10px;
      border-color: blue;
      width: 30px;
      background-color: blue;
      height: 30px;
      float: left;
      margin-right: 5px;
      text-align: center;
    }

    .on2 {
      border: 1px solid black;
      border-radius: 10px;
      border-color: black;
      width: 30px;
      background-color: black;
      height: 30px;
      float: left;
      margin-right: 5px;
      text-align: center;
    }



    .onee:hover {
      border: 2px solid black;
      width: 42px;
      height: 22px;
      float: left;
      text-align: center;
    }

    h1 {
      font-weight: bold;
      font-family: sans-serif;
    }

    .rightside {
      width: 385px;
      height: 500px;
      border-radius: 10px;
      float: right;
      background: #fff;
    }

    .inside {
      padding: 18px;
    }

    .cart-button {
      padding: 9px 25px;
      background-color: #EB2188;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s ease 0s;
      text-align: center;
      -webkit-appearance: none;
    }

    .cart-button:hover {
      color: black;
    }

    .second {
      width: 50px;
    }

    .second:hover {
      width: 50px;
      background-color: #fab7cc;
    }
 

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



<?php require("header.php") ?>

  <body>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>
  
  <div class="container-box">
    <?php
    $selected_tailor_id = $_SESSION['selected_tailor_id'];
    $nic = $_SESSION['selected_tailor_id'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $sql = "SELECT * FROM users WHERE nic='$selected_tailor_id' ";
    $result = mysqli_query($db, $sql);
    if ($result) {
      $row = mysqli_fetch_assoc($result);
    ?>

    <div class="row">
      <div class="col-6">
        <div class="card-img">
          <img src="/ucsc_2202_07/andum.lk/tailor/profile_pictures/<?php echo $row["image"]; ?>" alt="Avatar" style="width:50%;">
        </div>
      </div>

      <div class="col-6">
        <div class="inside">
          <div>
            <form method="post">
              <br>
              <p style="color: black; font-size: 20px; margin-top:10px"><?php echo $row["fname"]." ".$row["lname"] ?></p>
              <br>
              <br>
              <p style="color: black; font-size: 20px; margin-top:10px"><?php echo $row["nic"]?></p>
              <br>
              <div>
                <div>
                  Activities of Tailor
                  <br>
                  <br>
                  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php } ?>

    <div class="admin-status-btn-container">
        <button class="admin-status-button" onclick="myFunctionat1()">Tailor's Dressshowcase</button>
        <button class="admin-status-button" onclick="myFunctionat2()">Readymade Dress Orders</button>
        <button class="admin-status-button" onclick="myFunctionat3()">Customize Dresses Orders</button>
      </div>

    <div id="admint-div1">
      <center><h2 class="admin-para">Tailor's Dressshowcase</h2></center>
      <div class="customer-cover">
        <div class="row">
          <?php
          $selected_tailor_id = $_SESSION['selected_tailor_id'];
          $nic = $_SESSION['selected_tailor_id'];
          $fname = $_SESSION['fname'];
          $lname = $_SESSION['lname'];
          $sql1 = "SELECT * FROM dress_showcase WHERE t_nic='$selected_tailor_id' ";
          $result1 = mysqli_query($db, $sql1);
          if ($result1) {
            while( $row = mysqli_fetch_assoc($result1)){
          ?>

          <div class="col-4">
            <form method="get" action="tailor_view.php" class="dress-showcase">
              <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
              <input type="hidden" value="<?php echo $nic ?> " name="c_nic">

              <div class="card-item">
                <div class="card-img">
                  <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%">
                </div>
                <div class="card-content">
                  <div class="card-title"><?php echo $row["title"] ?></div>
                  <div class="card-description">LKR <?php echo $row["price"]?>.00</div>
                </div>
              </div>
            </form>
          </div>

          <?php

            }
            }

          ?>
        </div>
      </div>
    </div>

    <div id="admint-div2">
      <center><h2 class="admin-para">Readymade Dress Orders</h2></center>

      <div class="admin-table">
        <table>
          <tr>
            <th>Customer Name</th>
            <th>Category</th>
            <th>Status</th>
            <th><center>Action</center></th>
          </tr>
          <tr>

            <?php

            $selected_tailor_id = $_SESSION['selected_tailor_id'];
            $nic = $_SESSION['selected_tailor_id'];
            $sql2 = "SELECT * FROM dress_sales s,dress_showcase d,users u WHERE s.dress_id=d.dress_id AND d.t_nic='$nic' AND s.c_nic=u.nic";
            $result2 = mysqli_query($db, $sql2);


            if (mysqli_num_rows($result2) > 0) {

              while ($row = mysqli_fetch_assoc($result2)) {
            ?>

                <td><?php echo $row["fname"]." ".$row["lname"] ?></td>
                <td><?php echo $row["category"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td>pending</td>
                
          </tr>
          <?php
                  }
                } else {
                }

          ?>


        </table>
      </div>
    </div>

    <div id="admint-div3">
      <center><h2 class="admin-para">Customize Dresses Orders</h2></center>

      <div class="admin-table">
        <table>
          <tr>
            <th>Customer NIC</th>
            
            <th>Dress_id</th>
            <th>Full payment</th>
            <th>Invoice</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
          <tr>
          <?php
              $selected_tailor_id = $_SESSION['selected_tailor_id'];
              $nic = $_SESSION['selected_tailor_id'];
              $sqlc = "SELECT o.c_nic,o.t_nic,o.t_fname,o.t_lname,o.status,o.date,o.price,o.dress_id,t.ac_no,t.bank FROM t_orders AS o INNER JOIN tailors AS t ON o.t_nic = t.nic WHERE nic = '$nic'";
              $resultc = mysqli_query($db, $sqlc); 
              if ($resultc) {
                  while ($row = mysqli_fetch_assoc($resultc)) {
                        
          ?>
          <td><?php echo $row["c_nic"] ?></td>
          
          <td><?php echo $row["dress_id"] ?></td>
          <td><?php echo $row["price"] ?></td>
          <td><?php echo($row["price"]*0.05)?></td>
          <td><?php echo $row["date"] ?></td>
          <td><?php echo $row["status"] ?></td>
          </tr>

          <?php } } ?>
          
        </table>
      </div>
    </div>

    <script>
      function myFunctionat1() 
      {
        var x = document.getElementById("admint-div1");
        var y = document.getElementById("admint-div2");
        var c = document.getElementById("admint-div3");
        if (y.style.display === "none" && c.style.display === "none") 
        {
          x.style.display = "block";
        } 
        else 
        {
          y.style.display = "none";
          c.style.display = "none";
          x.style.display = "block";
        }
      }

      function myFunctionat2() 
      {
        var x = document.getElementById("admint-div1");
        var y = document.getElementById("admint-div2");
        var c = document.getElementById("admint-div3");
        if (x.style.display === "none" && c.style.display === "none") 
        {
          y.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
          c.style.display = "none";
          y.style.display = "block";
        }
      }

      function myFunctionat3() 
      {
        var x = document.getElementById("admint-div1");
        var y = document.getElementById("admint-div2");
        var c = document.getElementById("admint-div3");
        if (x.style.display === "none" && y.style.display === "none") 
        {
          c.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
          y.style.display = "none";
          c.style.display = "block";
        }
      }
    </script>
  </div>



  
  <?php require("../footer.php") ?>
</body>

</html>