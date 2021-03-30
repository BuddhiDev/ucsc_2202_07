<?php include("../server.php");


if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>
<?php include("admin_controller.php"); ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Admin</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/customerstyles.css">
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
    $selected_fdesigner_id = $_SESSION['selected_fdesigner_id'];
    $nic = $_SESSION['selected_fdesigner_id'];
    $sql = "SELECT * FROM users WHERE nic='$selected_fdesigner_id' ";
    $result = mysqli_query($db, $sql);
    if ($result) {
      $row = mysqli_fetch_assoc($result);
    ?>

    <div class="row">
      <div class="col-6">
        <div class="admin-card-item">
        <div class="card-img">
          <img src="/ucsc_2202_07/andum.lk/fashion_designer/profile_pictures/<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%;">
        </div>

        </div>
        
      </div>

      <div class="col-6">
        <div class="inside">
          <div>
            <form method="post">
              <br>
              <p class="admin-para"><?php echo $row["fname"]." ".$row["lname"] ?></p>
              <p class="admin-para"><?php echo $row["nic"]?></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <center><h2 class="admin-header">Activities of Fashion Designer</h2></center>

    <div class="admin-status-btn-container">
        <button class="admin-status-button" onclick="myFunctionaf1()">Uploaded Designs</button>
        <button class="admin-status-button" onclick="myFunctionaf2()">Fashion Designer's Order details</button>
      </div>

  <div id="adminf-div1">
    <center><h2>Uploaded Designs</h2></center>
      <?php
    
      $nic = $_SESSION['selected_fdesigner_id'];
      
      $sql2 = "SELECT * FROM fashion_designer WHERE nic='$selected_fdesigner_id' ";
      $result2 = mysqli_query($db, $sql2);
      if ($result2) {
      while( $row = mysqli_fetch_assoc($result2)){
    ?>

      <div class=fd-profile-row2>
          <div class="col-4">
            <form method="get" action="index.php" class="dress-showcase">
              <div class="fd-featured-card-item">
                  <div class="card-img">
                  <a href=""><img src="/ucsc_2202_07/andum.lk/fashion_designer/sample_images/<?php echo $row["image1"]; ?>" alt="Avatar" style="width:100%"></a>
                  </div>
                  <div class="card-content">
                  <div class="card-title"></div>
                  <div class="card-description"></div>
                  </div>
              </div>
            </form>
          </div>
          <div class="col-4">
            <form method="get" action="index.php" class="dress-showcase">
              <div class="fd-featured-card-item">
                <div class="card-img">
                  <a href=""><img src="/ucsc_2202_07/andum.lk/fashion_designer/sample_images/<?php echo $row["image2"]; ?>" alt="Avatar" style="width:100%"></a>
                </div>
                <div class="card-content">
                <div class="card-title"></div>
                <div class="card-description"></div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-4">
            <form method="get" action="index.php" class="dress-showcase">
              <div class="cfd-featured-card-item">
                  <div class="card-img">
                  <a href=""> <img src="/ucsc_2202_07/andum.lk/fashion_designer/sample_images/<?php echo $row["image3"]; ?>" alt="Avatar" style="width:100%"></a>
                  </div>
                  <div class="card-content">
                  <div class="card-title"></div>
                  <div class="card-description"></div>
                  </div>
              </div>
            </form>
          </div>

        <?php

          }
          }

        ?>
      </div>


        <?php
        }
      ?>

  </div>

  

  <div id="adminf-div2">
  <center><h2>Fashion Designer's Order details</h2></center>
    <div class="admin-table">
      <table>
        <tr>
          <th>Customer Name</th>
          <th>Order ID</th>
          <th>Price</th>
          <th>Invoice</th>
          <th>Date</th>
          <th>Status</th>
        
        </tr>
        <tr>

          <?php

          $nic = $_SESSION['selected_fdesigner_id'];
          $sql1 = "SELECT * FROM fd_orders WHERE fd_nic='$nic'";
          $result1 = mysqli_query($db, $sql1);
          

          if (mysqli_num_rows($result1) > 0) {

            while ($row = mysqli_fetch_assoc($result1)) {
          ?>

              <td><?php echo $row["c_fname"]." ".$row["c_lname"] ?></td>
              <td><?php echo $row["id"] ?></td>
              <td><?php echo $row["price"] ?></td>
              <td><?php echo($row["price"]*0.05)?></td>
              <td><?php echo $row["date"] ?></td>
              <td><?php echo $row["status"] ?></td>
              
            
        </tr>
        <?php
                }
              } else {
              }

        ?>


      </table>
    </div>

  </div>

  <script>
      function myFunctionaf1() 
      {
        var x = document.getElementById("adminf-div1");
        var y = document.getElementById("adminf-div2");
        if (y.style.display === "none") 
        {
          x.style.display = "block";
        } 
        else 
        {
          y.style.display = "none";
          x.style.display = "block";
        }
      }

      function myFunctionaf2() 
      {
        var x = document.getElementById("adminf-div1");
        var y = document.getElementById("adminf-div2");
        if (x.style.display === "none") 
        {
          y.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
          y.style.display = "block";
        }
      }
    </script>

    
    

  </div>



  
  <?php require("../footer.php") ?>
</body>

</html>