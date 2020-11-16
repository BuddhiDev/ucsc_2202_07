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
  <title>Andum.lk - Hire a Tailor</title>
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
  $selected_t_nic = $_SESSION['selected_t_nic'];
  $nic = $_SESSION['nic'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $sql = "SELECT * FROM users WHERE nic=$selected_t_nic";
  $result = mysqli_query($db, $sql);
  if ($result) {
    $row = mysqli_fetch_assoc($result)
  ?>

    <div class="main">
      <div class="leftside">
        <div class="card-img">
          <img src="/ucsc_2202_07/andum.lk/tailor/profile_pictures/<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%;">
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
                  Please fill down below application with your dress requirements to hire me.
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
<div></div>
  <!--measurement form-->
  <div class="input-container">
    <form action="/action_page.php" style="max-width:1024px;margin:auto">
      <h2 class="measure-headding">Get Measured</h2>
      <div class="d-flex">
        <div class="f1">
          <lable for="type" >Category:</label>
          <!-- <img src="" class="image"> -->
              <!-- </div>
              <div class="f1"> -->
          <select class="option" name="Unit" id="unit" >
            <optgroup label="WOMEN CASUAL WEAR">
              <option value="1">DRESSES</option>
              <option value="2">T SHIRTS</option>
              <option value="3">BLOUSE</option>
              <option value="4">SHIRTS</option>
              <option value="5">JEANS</option>
              <option value="6">PANTS</option>
              <!-- <option value="7">Party Frock</option>
              <option value="8">Saree</option>
              <option value="9">Bridal Dress</option> -->
            </optgroup>
            <optgroup label="WOMEN FORMAL WEAR">
              <option value="10">DRESSES</option>
              <option value="11">BLOUSE</option>
              <option value="12">SKIRTS</option>
              <option value="13">PANTS</option>
            </optgroup>
            <optgroup label="WOMEN ETHNIC WEAR">
              <option value="14">KURTHAS</option>
              <option value="15">SAWLS</option>
              <option value="16">SAREES</option>
            </optgroup>
            <optgroup label="MEN CASUAL WEAR">
              <option value="17">T SHIRTS</option>
              <option value="18">SHIRTS</option>
              <option value="19">JEANS</option>
              <option value="20">TROUSERSS</option>
              <option value="21">SARONG</option>
              <option value="22">SHORTS</option>
            </optgroup>
            <optgroup label="MEN FORMAL WEAR">
              <option value="23">SHIRTS</option>
              <option value="24">TROUSERSS</option>
              <option value="25">BLAZERS</option>
            </optgroup>
            <optgroup label="KIDS BOYS">
              <option value="26">T SHIRTS</option>
              <option value="27">TANK TOPS</option>
              <option value="28">SHIRTS</option>
              <option value="29">SHORTS</option>
              <option value="30">PANTS</option>
              <option value="31">SLEEP WEAR</option>
            </optgroup>
            <optgroup label="KIDS BOYS">
              <option value="32">T SHIRTS</option>
              <option value="33">DRESSES</option>
              <option value="34">SHORTS</option>
              <option value="35">SLEEP WEAR</option>
            </optgroup>
          </select>
        </div>

        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <!-- <input class="input-field" type="text" placeholder="Material" name="material"> -->
              <input class="input-field" type="text"  placeholder="Material" name="material">
            </div>                             
          </div>
        </div>
        
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Color" name="color">
            </div>                             
          </div>
        </div>
      </div> 

      <!-- <div class="d-flex">
        <div class="f1">
          <div class="measure-card-img">
            <img src="/ucsc_2202_07/andum.lk/images/neck-01.png" class="body-img">
          </div>
          <div class="measure-card-value"> -->
            <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
            <!-- <input class="input-field" type="text" placeholder="Neck" name="neck">
            <select class="option" name="Unit" id="unit" style="">
              <option>in</option>
              <option>cm</option>
            </select>
          </div>
        </div>
        <div class="f1">
          <div class="measure-card-img">
            <img src="/ucsc_2202_07/andum.lk/images/chest-01.png" class="body-img">
          </div>
          <div class="measure-card-value"> -->
            <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
            <!-- <input class="input-field" type="text" placeholder="Chest" name="chest">
            <select class="option" name="Unit" id="unit" style="">
              <option>in</option>
              <option>cm</option>
            </select>
          </div>
        </div>
      </div> -->

      <div class="d-flex">
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-img">
              <img src="/ucsc_2202_07/andum.lk/images/neck-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Neck" name="neck">
              <select class="option" name="Unit" id="unit" style="">
                <option>in</option>
                <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-img">
              <img src="/ucsc_2202_07/andum.lk/images/chest-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Chest" name="chest">
              <select class="option" name="Unit" id="unit" style="">
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
              <img src="/ucsc_2202_07/andum.lk/images/waist-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Waist" name="waist">
              <select class="option" name="Unit" id="unit" style="">
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
              <input class="input-field" type="text" placeholder="Seat" name="seat">
              <select class="option" name="Unit" id="unit" style="">
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
              <input class="input-field" type="text" placeholder="Shirt Length" name="shirtlength">
              <select class="option" name="Unit" id="unit" style="">
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
              <input class="input-field" type="text" placeholder="Shoulder Width" name="shoulderwidth">
              <select class="option" name="Unit" id="unit" style="">
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
              <input class="input-field" type="text" placeholder="Arm Length" name="armlength">
              <select class="option" name="Unit" id="unit" style="">
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
              <input class="input-field" type="text" placeholder="Wrist" name="wrist">
              <select class="option" name="Unit" id="unit" style="">
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
              <input class="input-field" type="text" placeholder="Biceps" name="biceps">
              <select class="option" name="Unit" id="unit" style="">
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
              <input class="input-field" type="text" placeholder="Hip" name="hip">
              <select class="option" name="Unit" id="unit" style="">
                <option>in</option>
                <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
      </div>

      <div class="d-flex">
        <!-- <lable for="other" style="">Other:</label> -->
        <textarea name="message" rows="20" cols="50" placeholder="Other" class="txt-area"></textarea>
      </div>
      <button type="submit" class="casual-btn">Submit</button>
    </form>
  </div>


  <?php } ?>
  </div>

  
  <?php require("../footer.php") ?>
</body>

</html>