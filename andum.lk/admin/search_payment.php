<?php include("../server.php"); ?>
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



<header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="../logo.png" alt="logo" class="img-box">
      </div>
      <div class="nav-item-middle">
        <ul class="nav-area">
          <li><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a href="#">Women</a>
            <div class="row">
              <ul class="menu-area">
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Casual Wear</li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">T shirts</a></li>
                    <li><a href="#">Blouse</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="#">Pants</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Formal Wear</li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Blouse</a></li>
                    <li><a href="#">Skirts</a></li>
                    <li><a href="workwear_gents.php">Pants</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Ethnic wear</li>
                    <li><a href="#">Kurthas</a></li>
                    <li><a href="#">Shlwas</a></li>
                    <li><a href="#">Sarees</a></li>
                  </ul>
                </div>
              </ul>
            </div>
              
            
          </li>
          <li class="dropdown">
            <a href="#">Men</a>
            <div class="row">
              <ul class="menu-area">
                <div class="col-6">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Casual Wear</li>
                    <li><a href="#">T shirts</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="index.php?dcategory=trouser">Trousers</a></li>
                    <li><a href="#">Sarong</a></li>
                    <li><a href="#">Shorts</a></li>
                  </ul>  
                </div>
                <div class="col-6">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Formal Wear</li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Trousers</a></li>
                    <li><a href="#">Blazers</a></li>
                  </ul>
                </div> 
              </ul>
            </div>            
          </li>
          <li class="dropdown">
            <a href="#">Kids</a>
            <div class="row">
            <ul class="menu-area">
              <div class=col-6>
                <ul class="inner-menu">
                  <li class="inner-list-header">Boys</li>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Tank Tops</a></li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Sleepware</a></li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="inner-menu">
                  <li class="inner-list-header">Girls</li>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Sleepware</a></li>
                </ul>
              </div>             
            </ul>
              

            </div>
            
          </li>

          <li><a href="hire_tailor.php">Hire a Tailor</a></li>
          <li><a href="hire_fashion_designer.php">Hire a Fashion Designer</a></li>
        </ul>
      </div>
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                <li><a href="index.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                  <li><a href="admin_payments.php"><i class="fas fa-money"></i>Payments</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>

            <li><i class="fas fa-envelope"></i></li>
        </div>
        </ul>
      </div>
      </div>
    </nav>
  </header>

  <body>
    <script>
      document.querySelector(".nav_right ul li").addEventListener("click",
        function() {
          this.classList.toggle("active");
        })
    </script>
    <br/>
    <br/> 
    </div>


<?php $keyword=$_SESSION['q'];?>

  <div class="status-btn-container">
    <button class="admin-status-button" onclick="myFunction7()">Readymade dresses orders</button>
    <button class="admin-status-button" onclick="myFunction8()">Customize Orders</button>
    <button class="admin-status-button" onclick="myFunction9()">Fashion designer orders</button>
  </div>

  <div id="div-9">

    <center><p> Readymade dresses orders </p></center>
    <div class="container-box">
      <table>
        <tr>
          <th>Order ID</th>
          <th>Tailor NIC</th>
          <th>Dress ID</th>
          <th>quantity</th>
          <th>Full payment</th>
          <th>Invoice</th>
          <th>Date</th>
          <th>Status</th>
          <th>Action</th>

        </tr>
        <tr>
        <?php
            $sql = "SELECT sl.id,sl.c_nic,sl.dress_id,sl.quantity,sl.total_price,sl.date,sl.status,ds.t_nic, sl.action FROM dress_sales AS sl INNER JOIN dress_showcase AS ds ON sl.dress_id = ds.dress_id WHERE  sl.id LIKE '%$keyword%' ";
            $result = mysqli_query($db, $sql); 
            if ($result) {
              
                while ($row = mysqli_fetch_assoc($result)) {
                  
        ?>
        
        <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["t_nic"] ?></td>
        <td><?php echo $row["dress_id"] ?></td>
        <td><?php echo $row["quantity"] ?></td>
        <td><?php echo $row["total_price"] ?></td>
        <td><?php echo($row["total_price"]*0.05)?></td>
        <td><?php echo $row["date"] ?></td>
        <td><?php echo $row["status"] ?></td>
        <form method="post">
        <input type="hidden" value="<?php echo $row["id"] ?> " name="id">
        <td><button name='readymade_dress_pay' type='submit' class='admin-button' <?php if($row["action"]=="Paid") echo "disabled"?>><?php if($row["action"]=="Not Yet"){?> Not Yet<?php } else {?>Paid<?php }?></button></td>
        </form>
        </tr>

        <?php } } ?>
      </table>
    </div>

  </div>

  <div id="div-10">
    <center><p> <b>Customize Orders </b></p></center>

    <div class="container-box">
      <table>
        <tr>
          <th>Order ID</th>
          <th>Tailor NIC</th>
          <th>Full Name</th>
          <th>Dress_id</th>
          <th>Account No</th>
          <th>bank</th>
          <th>Full payment</th>
          <th>Invoice</th>
          <th>Date</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <tr>
        <?php
            $sqlc = "SELECT o.id,o.c_nic,o.t_nic,o.t_fname,o.t_lname,o.status,o.date,o.price,o.dress_id,o.action,t.ac_no,t.bank FROM t_orders AS o INNER JOIN tailors AS t ON o.t_nic = t.nic WHERE  o.id LIKE '%$keyword%'";
            $resultc = mysqli_query($db, $sqlc); 
            if ($resultc) {
                while ($row = mysqli_fetch_assoc($resultc)) {
                      
        ?>
        <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["t_nic"] ?></td>
        <td><?php echo $row["t_fname"]. " " .$row["t_lname"]?></td>
        <td><?php echo $row["dress_id"] ?></td>
        <td><?php echo $row["ac_no"] ?></td>
        <td><?php echo $row["bank"] ?></td>
        <td><?php echo $row["price"] ?></td>
        <td><?php echo($row["price"]*0.05)?></td>
        <td><?php echo $row["date"] ?></td>
        <td><?php echo $row["status"] ?></td>
        <form method="post">
          <input type="hidden" value="<?php echo $row["id"] ?> " name="id">
          <td><button name='customize_dress_pay' type='submit' class='admin-button' <?php if($row["action"]=="Paid") echo "disabled"?>><?php if($row["action"]=="Not Yet"){?> Not Yet<?php } else {?>Paid<?php }?></button></td>
        </form>
        </tr>

        <?php } } ?>
        
      </table>
    </div>
    
  </div>

  <div id="div-11">
    <center><p>Fashion designer orders</p></center>

    <div class="container-box">

    <table>

      <tr>
            <th>Order ID</th>
            <th>Fashion Designer NIC</th>
            <th>Full Name</th>
            <th>Account No</th>
            <th>bank</th>
            <th>Full payment</th>
            <th>Invoice</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <tr>
          <?php
              $sqlc = "SELECT o.id, o.c_nic,o.fd_nic,o.fd_fname,o.fd_lname,o.status,o.date,o.price,o.action,f.ac_no,f.bank FROM fd_orders AS o INNER JOIN fashion_designer AS f ON o.fd_nic = f.nic  WHERE  o.id LIKE '%$keyword%' ";
              $resultc = mysqli_query($db, $sqlc); 
              if ($resultc) {
                  while ($row = mysqli_fetch_assoc($resultc)) {
                        
          ?>
          <td><?php echo $row["id"] ?></td>
          <td><?php echo $row["fd_nic"] ?></td>
          <td><?php echo $row["fd_fname"]. " " .$row["fd_lname"]?></td>
          <td><?php echo $row["ac_no"] ?></td>
          <td><?php echo $row["bank"] ?></td>
          <td><?php echo $row["price"] ?></td>
          <td><?php echo($row["price"]*0.05)?></td>
          <td><?php echo $row["date"] ?></td>
          <td><?php echo $row["status"] ?></td>
          <form method="post" action='admin_payments.php'>
            <input type="hidden" value="<?php echo $row["id"] ?> " name="id">
            <td><button name='design_pay' type='submit' class='admin-button' <?php if($row["action"]=="Paid") echo "disabled"?>><?php if($row["action"]=="Not Yet"){?> Not Yet<?php } else {?>Paid<?php }?></button></td>
          </form>
          </tr>

          <?php } } ?>



    </table>

    </div>

  </div>

  <script>
      function myFunction7() 
      {
        var x = document.getElementById("div-9");
        var y = document.getElementById("div-10");
        var c = document.getElementById("div-11");
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

      function myFunction8() 
      {
        var x = document.getElementById("div-9");
        var y = document.getElementById("div-10");
        var c = document.getElementById("div-11");
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

      function myFunction9() 
      {
        var x = document.getElementById("div-9");
        var y = document.getElementById("div-10");
        var c = document.getElementById("div-11");
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