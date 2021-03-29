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
    $selected_cus_id = $_SESSION['selected_cus_id'];
    $nic = $_SESSION['selected_cus_id'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $sql = "SELECT * FROM users WHERE nic='$selected_cus_id' ";
    $result = mysqli_query($db, $sql);
    if ($result) {
      $row = mysqli_fetch_assoc($result);
      
    ?>

    <div class="row">
      <div class="col-6">
        <div class="card-img">
          <img src="/ucsc_2202_07/andum.lk/customer/profile_pictures/<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%;">
        </div>
      </div>

      <div class="col-6">
        <div class="inside">
          <div>
            <form method="post">
              <br>
              <p style="color: black; font-size: 20px; margin-top:10px"><?php echo $row["fname"]." ".$row["lname"] ?></p>
              <br>
              <div>
                <div>
                  Activities of Customer
                  <br>
                  <br>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="admin-status-btn-container">
        <button class="admin-status-button" onclick="myFunctiona1()">Bought Readymade Dresses</button>
        <button class="admin-status-button" onclick="myFunctiona2()">Bought Customize Dresses</button>
        <button class="admin-status-button" onclick="myFunctiona3()">Hired Fashion Designers' details of the customer</button>
      </div>

    <div id="adminc-div1">
      <center><h2 class="admin-para">Bought Readymade Dresses</h2></center>
      <div class="admin-table">
          <table>
            <tr>
            
            <th>Dress Id</th>
            <th>Quantity</th>
            <th>Price</th>
              
              <th>Date</th>
              <th>Status</th>
              
            </tr>
            <tr>

              <?php

              $selected_cus_id = $_SESSION['selected_cus_id'];
              $nic = $_SESSION['selected_cus_id'];
              $sql2 = "SELECT * FROM dress_sales  WHERE c_nic='$selected_cus_id'";
              $result2 = mysqli_query($db, $sql2);


              if (mysqli_num_rows($result2) > 0) {

                while ($row = mysqli_fetch_assoc($result2)) {
              ?>

                  <td><?php echo $row["dress_id"] ?></td>
                  <td><?php echo $row["quantity"] ?></td>
                  <td><?php echo $row["total_price"] ?></td>
                
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

    <div id="adminc-div2">
      <center><h2 class="admin-para">Bought Customize Dresses</h2></center>
      <div class="admin-table">
        <table>
          <tr>
            <th>Tailor Name</th>
            <th>Category</th>
            <th>Status</th>
            

          </tr>
          <tr>
            <?php

            $selected_cus_id = $_SESSION['selected_cus_id'];
            $nic = $_SESSION['selected_cus_id'];
            $sql1 = "SELECT * FROM t_orders WHERE c_nic='$nic'";
            $result1 = mysqli_query($db, $sql1);

            if (mysqli_num_rows($result1) > 0) {

              while ($row = mysqli_fetch_assoc($result1)) {
            ?>

                <td><?php echo $row["t_fname"]." ".$row["t_lname"] ?></td>
                <td><?php echo $row["category"] ?></td>
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

    <div id="adminc-div3">
      <center><h2 class="admin-para">Hired Fashion Designers' details of the customer</h2></center>
      <div class="admin-table">
        <table>
          <tr>
            <th>Fashion Designer Name</th>
            <th>Price</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
          <tr>
            <?php

            $nic = $_SESSION['selected_cus_id'];
            $sql2 = "SELECT * FROM fd_orders WHERE c_nic='$nic'";
            $result2 = mysqli_query($db, $sql2);

            if (mysqli_num_rows($result2) > 0) {

              while ($row = mysqli_fetch_assoc($result2)) {
            ?>

                <td><?php echo $row["fd_fname"]." ".$row["fd_lname"] ?></td>
                <td><?php echo $row["price"] ?></td>
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

      <?php } ?>

    <script>
      function myFunctiona1() 
      {
        var x = document.getElementById("adminc-div1");
        var y = document.getElementById("adminc-div2");
        var c = document.getElementById("adminc-div3");
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

      function myFunctiona2() 
      {
        var x = document.getElementById("adminc-div1");
        var y = document.getElementById("adminc-div2");
        var c = document.getElementById("adminc-div3");
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

      function myFunctiona3() 
      {
        var x = document.getElementById("adminc-div1");
        var y = document.getElementById("adminc-div2");
        var c = document.getElementById("adminc-div3");
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