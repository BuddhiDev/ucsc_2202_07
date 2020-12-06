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
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/wizard-styles.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
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

    .alert {
    padding: 20px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px; 
    }

    .accept-button{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
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
          <li><a href="tailor-dashboard.php">Home</a></li>
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

          <li><a href="hire_tailor.php">Explore Tailors</a></li>
          <li><a href="hire_fashion_designer.php">Explore Fashion Designers</a></li>
          <li>
          
          </li>
        </ul>
      </div>
      
      <!-- </div> -->
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                  <li><a href="edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                  <li><a href="tailor-dashboard.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                  <li><a href="fd-manage-orders.php"><i class="fas fa-money"></i>Purchases</a></li>
                  <li><a href="#"><i class="fas fa-heart"></i>Favourites</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>
              </div>
            </li>
            <li><i class="fas fa-envelope"></i></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
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

<div class="add-new-position">
  <a class="cta" href="add_product.php"><button class="loginbutton btn-full-w">ADD NEW</button></a>
</div>

      
  <div class="container-box">
  <?php
  $selected_o_id = $_SESSION['selected_o_id'];
  $nic = $_SESSION['nic'];
  $sql = "SELECT * FROM t_orders WHERE id=$selected_o_id";
  $result = mysqli_query($db, $sql);
  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $status=$row["status"];
  ?>

      <div class="container">
        <header>Order Details</header>
        <form method="post">
          <div>
            <div class="title-n">
              <p style="font-weight:bold">Customer Name</p>
            </div>
            <div class="cust-n">
              <p ><?php echo $row["c_fname"]." ".$row["c_lname"] ?></p>
            </div>
          </div>
          <?php if($status!="Pending"){ ?>
          <br/><br/>
          <div>
            <div class="title-n">
              <p style="font-weight:bold">Order Price</p>
            </div>
            <div class="cust-n">
              <p >Rs. 1000.00</p>
            </div>
          </div>
          <?php } ?> 
          
        </form>

        <div class="progress-bar">
          <div class="step">
              <p>Pending</p>
              <div class="bullet">
                  <span>1</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
          <div class="step">
              <p>Accepted</p>
              <div class="bullet">
                  <span>2</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
          <div class="step">
              <p>Paid</p>
              <div class="bullet">
                  <span>3</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
          <div class="step">
              <p>Ongoing</p>
              <div class="bullet">
                  <span>4</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
          <div class="step">
              <p>Delivered</p>
              <div class="bullet">
                  <span>5</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
          <div class="step">
              <p>Completed</p>
              <div class="bullet">
                  <span>6</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
        </div>
        <div class="form-outer">
          <form action="#">
            <div class="page slide-page">
                <div class="field">
                  <button class="firstNext next">Pending</button>
                </div>
            </div>
            <div class="page">
              <div class="field btns">
                <!-- <button class="prev-1 prev">Pending</button> -->
                <button class="">Accepted</button>
              </div>
            </div>
            <div class="page">
              <div class="field btns">
                <!-- <button class="prev-1 prev">Pending</button> -->
                <button class="">Paid</button>
              </div>
            </div>
            <div class="page">
              <div class="field btns">
                  <!-- <button class="prev-2 prev">On going</button> -->
                  <button class="">On Going</button>
              </div>
            </div>
            <div class="page">
              <div class="field btns">
                  <!-- <button class="prev-2 prev">On going</button> -->
                  <button class="">Delivered</button>
              </div>
            </div>
            <div class="page">
              <div class="field btns">
                  <!-- <button class="prev-3 prev">Complete</button> -->
                  <button class="">Completed</button>
              </div>
            </div>
          </form>
        </div>
      </div>


    <script>
    const slidePage = document.querySelector(".slide-page");
    const submitBtn = document.querySelector(".submit");
    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    var status = "<?php echo $status ?>";
    slidePage.style.marginLeft = "-25%";

    if(status=="Pending"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");
    }
    if(status=="Accepted"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");

    bullet[1].classList.add("active");
    progressCheck[1].classList.add("active");
    progressText[1].classList.add("active");
    }
    if(status=="Ongoing"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");

    bullet[1].classList.add("active");
    progressCheck[1].classList.add("active");
    progressText[1].classList.add("active");

    bullet[2].classList.add("active");
    progressCheck[2].classList.add("active");
    progressText[2].classList.add("active");
    }
    if(status=="Delivered"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");

    bullet[1].classList.add("active");
    progressCheck[1].classList.add("active");
    progressText[1].classList.add("active");

    bullet[2].classList.add("active");
    progressCheck[2].classList.add("active");
    progressText[2].classList.add("active");

    bullet[3].classList.add("active");
    progressCheck[3].classList.add("active");
    progressText[3].classList.add("active");
    }
    if(status=="Completed"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");

    bullet[1].classList.add("active");
    progressCheck[1].classList.add("active");
    progressText[1].classList.add("active");

    bullet[2].classList.add("active");
    progressCheck[2].classList.add("active");
    progressText[2].classList.add("active");

    bullet[3].classList.add("active");
    progressCheck[3].classList.add("active");
    progressText[3].classList.add("active");

    bullet[4].classList.add("active");
    progressCheck[4].classList.add("active");
    progressText[4].classList.add("active");
    }

  </script>

<?php if($status=="Accepted"){ ?>
    <div class="alert">
      <p>You have been estimated a price for this order, waiting for customer's payment.</p>
    </div>
<?php } ?>
<?php if($status=="Paid"){ ?>
    <div class="alert">
      <p>Customer has been paid for this order, Did you start working on it?</p><br/>
      <button class="accept-button">YES</button>
    </div>
<?php } ?>
<?php if($status=="Ongoing"){ ?>
    <div class="alert">
      <p>Did you finish your work? wanna deliver it now?</p> <br />
      <button class="accept-button">YES</button>
    </div>
<?php } ?>
<?php if($status=="Delivered"){ ?>
    <div class="alert">
      <p>You delivered this order, waiting for customer to mark it as completed</p>
    </div>
<?php } ?>
<?php if($status=="Completed"){ ?>
    <div class="alert">
      <p>Customer marked this order as Completed!</p>
    </div>
<?php } ?>
    <button class="toggle-btn" onclick="myFunction()">Conversation</button>
    <button class="toggle-btn" onclick="myFunction2()">Measurements</button>
  <!--measurement form-->
  <div class="input-container" id="div-1">
    <form method="post" action="order.php" style="max-width:1024px;margin:auto">
      <h2 class="measure-headding">Measurements</h2>
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
            <select class="option" name="Unit" id="unit" style=""disabled>
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
              <select class="option" name="Unit" id="unit" style=""disabled>
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
              <img src="/ucsc_2202_07/andum.lk/images/shirtl-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Shirt Length" name="shirt_length" value="<?php echo $row["shirt_length"]?>" disabled >
              <select class="option" name="Unit" id="unit" style=""disabled>
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
              <img src="/ucsc_2202_07/andum.lk/images/arm-01.png" class="body-img">
            </div>
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Arm Length" name="arm_length" value="<?php echo $row["arm_length"]?>" disabled >
              <select class="option" name="Unit" id="unit" style=""disabled>
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
              <select class="option" name="Unit" id="unit" style=""disabled>
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
              <select class="option" name="Unit" id="unit" style=""disabled>
              <option>in</option>
              <option>cm</option>
              </select>
            </div>                             
          </div>
        </div>
      </div>

      <div class="d-flex">
        <!-- <lable for="other" style="">Other:</label> -->
        <textarea name="message" rows="20" cols="50" class="txt-area" value="<?php echo $row["other"]?>" disabled ></textarea>
      </div>

    </form>
  </div>
  <div id="div-3" class="alert">
  <?php if($status=="Pending"){ ?>
      <p>Customer is waiting for your price, Please estimate your price for this order!</p>
      <?php } else { ?> 
      <p>You estimated a price for this order earlier!</p>
      <?php } ?>
        <br/><br />
      <?php if($status=="Pending"){ ?>
      <center><label for="searchname" class="field-label-inline">Estimate Order Price: </label></center>
      <?php } else { ?>
      <center><label for="searchname" class="field-label-inline">Estimated Order Price: </label></center>
      <?php } ?>
      <center><input type="text" style=" width: 50%"  name="" <?php if($row["status"]=="Accepted") echo "disabled"?> ></center>
      <center><input type="hidden" class="field-value-inline" name="order_id" value=<?php echo $row["id"] ?>></center>
      <center><button class="accept-button" type="submit" name="order-accept" <?php if($row["status"]=="Accepted") echo "disabled"?>>Submit</button></center>    
    </div>

  <div id=div-2>
          <div class="d-flex">
            <!-- <lable for="other" style="">Other:</label> -->
            <form method="post" action="order.php">
              <input type="hidden" name="s_nic" value=<?php echo $nic ?>>
              <input type="hidden" name="r_nic" value=<?php echo $row["c_nic"] ?>>
              <input type="hidden" name="type" value="1">
              <textarea name="msg" rows="5" cols="50" placeholder="" class="txt-area"></textarea>
              <button class="cart-button" type="submit" name="chatBtn">Send</button>
            </form>
          </div>

  <?php } ?>
   
      <!-- retrieve messages from conversations -->
      <?php
        $sql_chat = "SELECT * FROM conversations c INNER JOIN users u WHERE c.type=1  AND (c.sender_nic='$nic' OR c.reciever_nic='$nic') AND (c.sender_nic=u.nic)" ;
        $result_chat = mysqli_query($db, $sql_chat);
        if ($result_chat) 
        {
          while($row_chat = mysqli_fetch_assoc($result_chat))
          {
      ?>
            <div id="chat-message-list">
              <div class="message-row you-message">
                <img src="" alt="">
                <div class="message-content">
                  <?php echo $row_chat["fname"]." ".$row_chat["lname"] ?>
                </div>
                <div class="message-content">
                <div class="message-time">
                  <?php echo $row_chat["date"] ?>
                </div>
                <div class="message-text">
                  <?php echo $row_chat["message"] ?>
                </div>
                </div>
                
              </div>
            </div>

            <?php 
          }
        }
            ?>



<!-- toggle panel script -->
<script>
      function myFunction() 
      {
        var x = document.getElementById("div-1");
        var y = document.getElementById("div-2");
        var z = document.getElementById("div-3");
        if (x.style.display === "none") 
        {
          y.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
          y.style.display = "block";
          z.style.display = "none";
        }
      }

      function myFunction2() 
      {
        var x = document.getElementById("div-1");
        var y = document.getElementById("div-2");
        var z = document.getElementById("div-3");
        if (y.style.display === "none") 
        {
          x.style.display = "block";
          z.style.display = "block";
        } 
        else 
        {
          y.style.display = "none";
          x.style.display = "block";
          z.style.display = "block";
        }
      }
    </script>

  </div>

  
  <?php require("../footer.php") ?>
</body>

</html>