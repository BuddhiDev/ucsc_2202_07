<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Andum.lk - Purchases</title>
  <link rel="shortcut icon" href="logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
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

<header>
      <nav class="navbar-main">
        <div class="navbar-logo">
          <img class="logo" src="../logo.png" alt="logo" class="img-box">
        </div>
        <div class="nav-item-middle">
          <ul class="nav-area">
          <li><a href="index.php">Explore</a></li>
            <li class="dropdown">
              <a href="#">Women</a>
              <ul class="menu-area">
                <ul>
                  <h4>Casual Wear</h4>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="workware_ladies.php">Blouse</a></li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Jeans</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="dresses.php">Dresses</a></li>
                </ul>
                <ul>
                  <h4>Formal Wear</h4>
                  <li><a href="#">Blouse</a></li>
                  <li><a href="#">Skirts</a></li>
                  <li><a href="workwear_gents.php">Pants</a></li>
                  <li><a href="#">Dresses</a></li>
                </ul>
                <ul>
                  <h4>Ethnic wear</h4>
                  <li><a href="#">Kurthas</a></li>
                  <li><a href="#">Shawls</a></li>
                  <li><a href="#">Sarees</a></li>
                </ul>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#">Men</a>
              <ul class="menu-area">
                <ul>
                  <h4>Casual Wear</h4>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Jeans</a></li>
                  <li><a href="#">Trousers</a></li>
                  <li><a href="#">Bottoms</a></li>
                  <li><a href="#">Sarongs</a></li>
                </ul>
                <ul>
                <h4>Formal Wear</h4>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Trousers</a></li>
                  <li><a href="#">Blazers</a></li>
                </ul>
                <ul>
                  <h4>Inner Wear</h4>
                  <li><a href="#">Brief</a></li>
                  <li><a href="#">Trunks</a></li>
                  <li><a href="#">Vests</a></li>
                </ul>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#">Kids</a>
              <ul class="menu-area">
                <ul>
                  <h4>Girls</h4>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Tank Tops</a></li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Sleepware</a></li>
                </ul>
                <ul>
                  <h4>Boys</h4>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Kurta</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Sleepware</a></li>
                </ul>
              </ul>
            </li>
            
            <li><a href="index.php">Hire a Tailor</a></li>
            <li><a href="index.php">Hire a Fashion Designer</a></li>
          </ul>
        </div>
        <div class="box">
          <div class="nav_right">
            <ul>
              <li><i class="fas fa-user-circle"></i>
                <div class="dd_right">
                  <ul>
                    <li><a href="cust_edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                    <li><a href="hired_list.php"><i class="fas fa-users"></i>Hired Tailors</a></li>
                    <li><a href="#"><i class="fas fa-users"></i>Hired Fashion Designers</a></li>
                    <li><a href="purchases.php"><i class="fas fa-money"></i>Purchases</a></li>
                    <li><a href="#"><i class="fas fa-heart"></i>Favourites</a></li>
                    <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                  </ul>
                </div>
              <li class="nr_li"><i class="fas fa-envelope"></i></li>
              <a href="cart.php"><li class="nr_li"><i class="fas fa-shopping-cart"></i></li></a>
            </ul>   
          </div>
        </div>
      </nav>
    </header>


  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
    function(){
      this.classList.toggle("active");
    })
  </script>

  <div>
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
        $sql = "SELECT * FROM t_orders WHERE c_nic='$nic'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
        ?>


            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["t_nic"] ?></td>
            <td><?php echo $row["c_fname"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td>
              <div>
                <center><a class="cta" href="#"><button class="loginbutton btn-full-w">View</button></a></center>
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

  <?php require("footer.php")?>
</body>

</html>
