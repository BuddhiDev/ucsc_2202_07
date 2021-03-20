<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>  
<?php include("admin_controller.php"); ?>
<?php include("../errors.php");
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Tailor</title>
  <link rel="shortcut icon" href="../logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>
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
  </style>

</head>



<body>
<header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="../logo.png" alt="logo" class="img-box">
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
              </div>
            </li>
            <li><i class="fas fa-envelope"></i></li>
         <!--<li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>-->
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
    while ($row = mysqli_fetch_assoc($result)) {
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
              <p style="color: blue; font-size: 15px; margin-top:10px"><?php echo $row["email"] ?></p>
              <br>
          
            </form>
          </div>
          <div>
            <li><a class="cta" href="send_mail_fdesigner.php"><button class="admin-button">Warning message</button></a></li>
          </div>
          <div>
          <li><a href="banned_fdesigner.php?delete_nic=<?php echo $row["nic"]?>"><button class="admin-button">Suspend User Account</button></a></li>
          </div>
        </div>
      </div>
    </div>

<br/>
<br/>
  


  <?php } } ?>
  </div>

  
  <?php require("../footer.php") ?>


  
</body>
</html>
