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
  <title>Andum.lk - Order</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
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
      color: white;
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

  <div class="container-box">
    <?php
      $selected_o_id = $_SESSION['selected_o_id'];
      $nic = $_SESSION['nic'];
      $sql = "SELECT * FROM t_orders WHERE id=$selected_o_id";
      $result = mysqli_query($db, $sql);
      if ($result) 
      {
        $row = mysqli_fetch_assoc($result)
        ?>

      <div class="order-detail-box">
        <h2>ORDER DETAILS</h2>
        <div>
          <form method="post">
            <p style="color: black; font-size: 20px; margin-top:10px">Tailor Name | &nbsp <?php echo $row["t_fname"]." ".$row["t_lname"] ?></p>
            <p style="color: black; font-size: 20px; margin-top:10px">Status &nbsp &nbsp &nbsp &nbsp &nbsp | &nbsp <?php echo $row["status"]?></p>
          </form>
        </div>
      </div>


  <!--measurement form-->
  
  <button class="cart-button" onclick="myFunction()">My Conversation</button>
  <button class="cart-button" onclick="myFunction2()">My Measurements</button>
  <div class="order-input-container" id="div-1">
    <form action="order.php" id=form-1>
      <h2 class="order-measure-headding">Measurements</h2>
      <div class="d-flex">
        <div class="f1">
          <lable for="type" >Category:</label>
          <img src="" class="image">
              <!-- </div>
              <div class="f1"> -->
          <select class="option" name="Unit" id="unit" value="<?php echo $row["category"]?>" disabled >
          <optgroup label="Ladies wear">
              <option value="l-blouse">Blouse</option>
              <option value="l-skirt">skirt</option>
              <option value="l-frock">frock</option>
              <option value="l-short">Short</option>
              <option value="l-trouser">Trouser</option>
              <option value="l-tshirt">T-Shirt</option>
              <option value="l-partyfrock">Party Frock</option>
              <option value="l-saree">Saree</option>
              <option value="l-bridaldress">Bridal Dress</option>
            </optgroup>
          </select>
        </div>

        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Material" name="material" value="<?php echo $row["material"]?>" disabled >
            </div>                             
          </div>
        </div>
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Color" name="color" value="<?php echo $row["color"]?>" disabled >
            </div>                             
          </div>
        </div>
      </div> 

      <div class="d-flex">
        <div class="f1">
          <div class="measure-card-img">
            <img src="/ucsc_2202_07/andum.lk/images/neck-01.png" class="body-img">
          </div>
          <div class="measure-card-value">
            <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
            <input class="input-field" type="text" placeholder="Neck" name="neck" value="<?php echo $row["neck"]?>" disabled >
            <select class="option" name="Unit" id="unit" style="" disabled>
              <option>in</option>
              <option>cm</option>
            </select>
          </div>
        </div>
        <div class="f1">
          <div class="measure-card-img">
            <img src="/ucsc_2202_07/andum.lk/images/chest-01.png" class="body-img">
          </div>
          <div class="measure-card-value">
            <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
            <input class="input-field" type="text" placeholder="Chest" name="chest" value="<?php echo $row["chest"]?>" disabled >
            <select class="option" name="Unit" id="unit" style="" disabled>
            <option>in</option>
              <option>cm</option>
            </select>
          </div>
        </div>
      </div>
                        
      <div class="d-flex">
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-img">
              <img src="/ucsc_2202_07/andum.lk/images/waist-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Waist" name="waist" value="<?php echo $row["waist"]?>" disabled >
              <select class="option" name="Unit" id="unit" style="" disabled>
                <option>in</option>
                <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-img">
              <img src="/ucsc_2202_07/andum.lk/images/realhip-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Seat" name="seat" value="<?php echo $row["seat"]?>" disabled >
              <select class="option" name="Unit" id="unit" style="" disabled>
              <option>in</option>
              <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
      </div>

      <div class="d-flex">
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-img">
              <img src="/ucsc_2202_07/andum.lk/images/shirtl-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Shirt Length" name="shirt_length" value="<?php echo $row["shirt_length"]?>" disabled >
              <select class="option" name="Unit" id="unit" style="" disabled>
              <option>in</option>
              <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-img">
              <img src="/ucsc_2202_07/andum.lk/images/back-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Shoulder Width" name="shoulder_width" value="<?php echo $row["shoulder_width"]?>" disabled >
              <select class="option" name="Unit" id="unit" style="" disabled> 
              <option>in</option>
              <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
      </div>

      <div class="d-flex">
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-img">
              <img src="/ucsc_2202_07/andum.lk/images/arm-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Arm Length" name="arm_length" value="<?php echo $row["arm_length"]?>" disabled >
              <select class="option" name="Unit" id="unit" style="" disabled>
              <option>in</option>
              <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-img">
              <img src="/ucsc_2202_07/andum.lk/images/cuff-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Wrist" name="wrist" value="<?php echo $row["wrist"]?>" disabled >
              <select class="option" name="Unit" id="unit" style=""disabled>
              <option>in</option>
              <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
      </div>

      <div class="d-flex">
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-img">
              <img src="/ucsc_2202_07/andum.lk/images/bicep-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Biceps" name="biceps" value="<?php echo $row["biceps"]?>" disabled >
              <select class="option" name="Unit" id="unit" style="" disabled>
              <option>in</option>
              <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-img">
              <img src="/ucsc_2202_07/andum.lk/images/hip-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Hip" name="hip" value="<?php echo $row["hip"]?>" disabled >
              <select class="option" name="Unit" id="unit" style="" disabled>
              <option>in</option>
              <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
      </div>

      <div class="d-flex">
        <!-- <lable for="other" style="">Other:</label> -->
        <textarea name="message" rows="20" cols="50" placeholder="Other" class="txt-area" value="<?php echo $row["other"]?>" disabled ></textarea>
      </div>
      <div>
        <button class="cart-button" type="submit">Make Payment</button>
      </div>
      
    </form>
  </div>

  <div id=div-2>
    

    <!-- <div id="conversation-list">
      <div class="conversation active">
        <img src="" alt="">
        <div class="title-text">
          Thashwini Wattuhewa
        </div>
        <div class="created-date">
         December 3
        </div>
        <div class="conversation-message">
          AHi
        </div>
      </div>
    </div> -->

    <!-- <div id="new-message-cotainer">
      <a href="#">+</a>
    </div> -->

    <!-- <div class="chat-row">
      <div class="chat-name">
        <span>Thashwini Wattuhewa</span>
      </div>
      
      <div class="chat-right">
        <div id="chat-search-container">
          <input type="text" placeholder="Search" />
        </div>
        <img src="../images/icons/delete.svg" alt="Delete Conversation" class="delete-image">
      </div>
      
    </div> -->

    <!-- <div id="chat-message-list">
      <div class="message-row you-message">
        <div class="message-content">
        <img src="" alt="">
        <div class="message-text">Ok</div>
        <div class="message-time">December 3</div>
        </div>      
      </div>
      <div class="message-row other-message">
        <div class="message-content">
        <div class="message-text">Yeah</div>
        <div class="message-time">December 3</div>
        </div>
        
      </div>

    </div>
    
    <div id="chat-form">
    </div> -->

  </div>

  


  <script>
function myFunction() {
  var x = document.getElementById("div-1");
  var y = document.getElementById("div-2");
  if (x.style.display === "none") {
    y.style.display = "block";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}

function myFunction2() {
  var x = document.getElementById("div-1");
  var y = document.getElementById("div-2");
  if (y.style.display === "none") {
    x.style.display = "block";
  } else {
    y.style.display = "none";
    x.style.display = "block";
  }
}

</script>

  <?php } ?>

  </div>






  



  <?php require("../footer.php") ?>
</body>

</html>