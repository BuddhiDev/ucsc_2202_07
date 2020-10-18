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
  <title>Andum.lk - Product</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/dropdown.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <title>ADD TO CART</title>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    .main {
      width: 880px;
      height: 500px;
      margin-top: 86px;
      margin-left: 270px;
      /* background: #fafafafa; */
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px #fff;
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
      <div class="nav-item-middle">
        <ul class="nav-area">
        <li><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a href="#">Women</a>
            <ul class="menu-area">
              <ul class="inner-menu">
                <li class="inner-list-header">Casual Wear</li>
                <li><a href="#">T shirts</a></li>
                <!-- <li><a href="workware_ladies.php">Blouse</a></li> -->
                <!-- <li><a href="#">Shirts</a></li>
                <li><a href="#">Jeans</a></li>
                <li><a href="#">Pants</a></li>
                <li><a href="dresses.php">Dresses</a></li> -->
              </ul>
              <ul class="inner-menu">
                <li class="inner-list-header">Formal Wear</li>
                <li><a href="#">Blouse</a></li>
                <li><a href="#">Skirts</a></li>
                <li><a href="workwear_gents.php">Pants</a></li>
                <li><a href="#">Dresses</a></li>
              </ul>
              <ul class="inner-menu">
                <li class="inner-list-header">Ethnic wear</li>
                <li><a href="#">Kurthas</a></li>
                <li><a href="#">Shawls</a></li>
                <li><a href="#">Sarees</a></li>
              </ul>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#">Men</a>
            <ul class="menu-area">
              <ul class="inner-menu">
                <li class="inner-list-header">Casual Wear</li>
                <li><a href="#">T shirts</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Jeans</a></li>
                <li><a href="#">Trousers</a></li>
                <li><a href="#">Bottoms</a></li>
                <li><a href="#">Sarongs</a></li>
              </ul>
              <ul class="inner-menu">
                <li class="inner-list-header">Formal Wear</li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Trousers</a></li>
                <li><a href="#">Blazers</a></li>
              </ul>
              <ul class="inner-menu">
                <li class="inner-list-header">Inner Wear</li>
                <li><a href="#">Brief</a></li>
                <li><a href="#">Trunks</a></li>
                <li><a href="#">Vests</a></li>
              </ul>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#">Kids</a>
            <ul class="menu-area">
              <ul class="inner-menu">
                <li class="inner-list-header">Girls</li>
                <li><a href="#">T shirts</a></li>
                <li><a href="#">Tank Tops</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Pants</a></li>
                <li><a href="#">Sleepware</a></li>
              </ul>
              <ul class="inner-menu">
                <li class="inner-list-header">Boys</li>
                <li><a href="#">T shirts</a></li>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Kurta</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Sleepware</a></li>
              </ul>
            </ul>
          </li>

          <li><a href="hire_tailor.php">Hire a Tailor</a></li>
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

  <?php
  $selected_dress_id = $_SESSION['selected_dress_id'];
  $nic = $_SESSION['nic'];
  $sql = "SELECT * FROM dress_showcase WHERE dress_id=$selected_dress_id";
  $result = mysqli_query($db, $sql);
  if ($result) {
    $row = mysqli_fetch_assoc($result)
  ?>

  <div class="container">
    <div class="main">
      <div class="leftside">
        <div class="card-img">
        <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%">
        </div>
      </div>
      <div class="rightside">
        <div class="inside">
          <div>
            <form method="post">
              <br>
              <p style="color: black; font-size: 20px; margin-top:10px"><?php echo $row["title"] ?></p>
              <br>
              <h4 style="color: black; margin-top:10px">LKR <?php echo $row["price"] ?>.00</h4>
              <br>
                <h4 style="color: black; margin-top:10px">Available in stock: <?php if($item_added=="true"){echo $row["amount"]-1;}else{echo $row["amount"];} ?></h4>
              <br>
              <div>
                <p style="color: black; font-size: 15px; margin-top:10px">Color</p>
                <div>
                  <a href="#">
                    <div class="on"></div>
                  </a>
                  <a href="#">
                    <div class="on1"></div>
                  </a>
                  <a href="#">
                    <div class="on2">
                      <p background-color="pink"></p>
                    </div>
                  </a>
                  <a href="#">
                    <div class="on3">
                      <p background-color="pink"></p>
                    </div>
                  </a>
                  <a href="#">
                    <div class="on4">
                      <p background-color="pink"></p>
                    </div>
                  </a>
                  <a href="#">
                    <div class="on5">
                      <p background-color="pink"></p>
                    </div>
                  </a>
                </div>
                <br>
                <div>
                  <p style="color: black; font-size: 15px; margin-top:10px">Size</p>
                  <div>
                    <a href="#">
                      <div class="onee">
                        <p class="text">UK8</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="onee">
                        <p class="text">UK10</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="onee">
                        <p class="text">UK12</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="onee">
                        <p class="text">UK14</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="onee">
                        <p class="text">UK16</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="onee">
                        <p class="text">UK18</p>
                      </div>
                    </a>
                  </div>
                </div>
                <br>

                <div class="quantity">
                  <input type="number" value="1" class="quentity-input">
                </div>
                <div>
                  <br>
                  <br>
                  <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
                  <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                  <button class="cart-button" type="submit" name="addTocart" <?php if($item_added=="true") echo "disabled"?>><?php if($item_added=="false"){?> ADD TO CART<?php } else {?>ADDED TO CART<?php }?></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>

  
  <?php require("../footer.php") ?>
</body>

</html>