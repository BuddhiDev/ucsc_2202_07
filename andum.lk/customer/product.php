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
  <title>Andum.lk - Customer</title>
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/dropdown.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>ADD TO CART</title>
<style type="text/css">
	
*{
margin: 0;
padding: 0;
}

.main{
	width: 880px;
	height: 500px;
	margin-top: 86px;
	margin-left: 270px;
	background: #fafafafa;
	border-radius: 10px;
	box-shadow: 0px 0px 10px 0px #fff;
}

.leftside{
		position: absolute;
		height: 500px;
		border-radius: 10px;
		width: 490px;
		background-image: url('product1.jpg');
		background-size: cover;
}

.p{
margin-left: 40px;
margin-top: 420px;
color: black;
font-weight: bold;
font-family: sans-serif;
}

.one{
  border: 1px solid black;
	width: 30px;
	height: 30px;
	float: left;
  margin-left: 40px;
  margin-right: 40px;
	text-align: center;
	margin-top: 9px;
}

.one:hover{
	border: 2px solid black;
	width: 30px;
	height: 30px;
	float: left;
	text-align: center;
	margin-top: 9px;
}

.text{
	color: black;
}

.color-box{
  background-color: pink;
}

.onee{
	border: 1px solid black;
	width: 30px;
	height: 30px;
	float: left;
	margin-right: 5px;
	text-align: center;
}

.on{
	border: 1px solid black;
  width: 30px;
  background-color: pink;
	height: 30px;
	float: left;
	margin-right: 5px;
	text-align: center;
}

.on1{
	border: 1px solid black;
  width: 30px;
  background-color: blue;
	height: 30px;
	float: left;
	margin-right: 5px;
	text-align: center;
}

.on2{
	border: 1px solid black;
  width: 30px;
  background-color: orange;
	height: 30px;
	float: left;
	margin-right: 5px;
	text-align: center;
}

.on3{
	border: 1px solid black;
  width: 30px;
  background-color: green;
	height: 30px;
	float: left;
	margin-right: 5px;
	text-align: center;
}

.on4{
	border: 1px solid black;
  width: 30px;
  background-color: red;
	height: 30px;
	float: left;
	margin-right: 5px;
	text-align: center;
}

.on5{
	border: 1px solid black;
  width: 30px;
  background-color: black;
	height: 30px;
	float: left;
	margin-right: 5px;
	text-align: center;
}

.onee:hover{
	border: 2px solid black;
	width: 30px;
	height: 30px;
	float: left;
	text-align: center;
}

h1{
	font-weight: bold;
  font-family: sans-serif;
}

.rightside{
  width: 385px;
  height: 500px;
  border-radius: 10px;
  float: right;
  background: #fff;
}

.inside{
  padding: 55px;
}

.cart-button{
	padding: 10px;
  margin-top: 10px;
  background-color: #EB2188;
  width: 150px;
}

.cart-button:hover{
	color: white;
	
}

.second{
  width: 50px;
}

.second:hover{
  width: 50px;
  background-color: #fab7cc;
}

</style>

</head>
<body>

<div class="box">
  <header>
    <img class="logo" src="../logo.png" alt="logo" class="img-box">
    <nav>
      <ul class="nav-area">
        <li><a href="index.php">Home</a></li>
        <!-- <li><a href="dress_showcase.php">Dress Showcase</a></li> -->
        <li><a href="hired_list.php">Hired Tailors</a></li>
        <li class="dropdown">
          <a href="#">Shop Now</a>
          <ul class="menu-area">
            <ul>
              <h4>Ladies wear</h4>
              <li><a href="dresses.php">Dresses</a></li>
              <li><a href="workware_ladies.php">Work Wear</a></li>
              <li><a href="#">Denims</a></li>
              <li><a href="#">Tops</a></li>
              <li><a href="#">T Shirts</a></li>
              <li><a href="#">All Categories</a></li>
            </ul>
            <ul>
              <h4>Gents wear</h4>
              <li><a href="#">Shirts</a></li>
              <li><a href="#">Denims</a></li>
              <li><a href="workwear_gents.php">Work Wear</a></li>
              <li><a href="#">T Shirts</a></li>
              <li><a href="#">All Categories</a></li>
            </ul>
            <ul>
              <h4>Kids wear</h4>
              <li><a href="#">Dresses</a></li>
              <li><a href="#">T shirsts</a></li>
              <li><a href="#">Dresses</a></li>
              <li><a href="#">All Categories</a></li>
            </ul>
          </ul>
        </li>
        <li><a href="purchases.php">Purchases</a></li>
      </ul>
    </nav>
    <div>
      <a class="cta" href="index.php?logout='1'"><button name="logout" class="loginbutton btn-full-w">Sign Out</button></a>
    </div>
  </header>
</div>
<div class="main">
  <div class="leftside">
    
  </div>
  <div class="rightside">
    <div class="inside">
      <div>
        <br>
        <p style="color: black; font-size: 20px; margin-top:10px">WOMEN'S RUNNING SHOE</p>
        <br>
        <h4 style="color: black; margin-top:10px">LKR 2,400</h4>
        <br>
        <div>
          <p style="color: black; font-size: 15px; margin-top:10px">Color</p>
          <div>
            <a href="#"><div class="on"></div></a>
            <a href="#"><div class="on1"></div></a>
            <a href="#"><div class="on2"><p background-color="pink"></p></div></a>
            <a href="#"><div class="on3"><p background-color="pink"></p></div></a>
            <a href="#"><div class="on4"><p background-color="pink"></p></div></a>
            <a href="#"><div class="on5"><p background-color="pink"></p></div></a>
          </div>
          <br>
          <div>
            <p style="color: black; font-size: 15px; margin-top:10px">Size</p>
            <div>
              <a href="#"><div class="onee"><p class="text">5</p></div></a>
              <a href="#"><div class="onee"><p class="text">5</p></div></a>
              <a href="#"><div class="onee"><p class="text">5</p></div></a>
              <a href="#"><div class="onee"><p class="text">5</p></div></a>
              <a href="#"><div class="onee"><p class="text">5</p></div></a>
              <a href="#"><div class="onee"><p class="text">5</p></div></a>
            </div>
          </div>
          <br>
          <div>
            <button class="cart-button">ADD TO CART</button>
          </div>
        </div>
      </div>	
    </div>
  </div>
</div>

<?php require("footer.php")?>
</body>
</html>