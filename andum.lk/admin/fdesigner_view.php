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

<body>

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
                <li><a href="index.php"><i class="fas fa-chart-line"></i>Dashboad</a></li>
                  <li><a href="manage_fdesigner.php"><i class="fas fa-users"></i>Manage Fashion Designers</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>

            <li><i class="fas fa-envelope"></i></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
        </div>
        </ul>
      </div>
      </div>
    </nav>
  </header>

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

    <div class="main">
      <div class="leftside">
        <div class="card-img">
          <img src="/ucsc_2202_07/andum.lk/fashion_designer/profile_pictures/<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%;">
        </div>
      </div>

      <div class="rightside">
        <div class="inside">
          <div>
            <form method="post">
              <br>
              <p style="color: black; font-size: 20px; margin-top:10px"><?php echo $row["fname"]." ".$row["lname"] ?></p>
              <br>
              <div>
                <div>
                  Activities of Fashion Designer
                  <br>
                  <br>
                  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<br/>
<br/> 
    </form>
  </div>

  <center><p> Fashion Designer's Order details</p></center>
 
  <div class="container-box">
  <div style="overflow-x:auto;">
    <table>
      <tr>
        <th>Customer Name</th>
        <th>Status</th>
        <th><center>Action</center></th>
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
            <td><?php echo $row["status"] ?></td>
            <td>
              <div>
                <center><a href="fd_manage_order.php?f_order_id=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
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
  <center><p> Uploaded Designs</p></center>



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
    </div>
      
      
  </div>


  

<center><p> Payments</p></center>

<div class="container-box">

<table>

<tr>
        <th>Customer Name</th>
        <th>Patment Date</th>
        <th>Delivered Status</th>
        <th><center>Action</center></th>

      </tr>
<tr>
<td>Kamala Perera</td>
<td>2020/11/07</td>
<td>Pending</td>
<td>No</td>

</tr>




</table>


</div>




  <?php } ?>
  </div>

  
  <?php require("../footer.php") ?>
</body>

</html>