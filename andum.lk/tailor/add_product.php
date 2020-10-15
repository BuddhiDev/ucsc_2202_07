<?php
require("../server.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Andum.lk - Add a dress</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
<link rel="stylesheet" href="checkbox.css">

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

          <li><a href="add_product.php">Add a New Dress</a></li>
          
        </ul>
      </div>
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                  <li><a href="edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                  <li><a href="Manage_order.php"><i class="fas fa-users"></i>Customer Orders</a></li>
                  <li><a href="purchases.php"><i class="fas fa-money"></i>Sales</a></li>
                  <li><a href="#"><i class="fas fa-heart"></i>Favourites</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>

                <li><i class="fas fa-envelope"></i></li>
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


<!--add new product form-->
<div class="sliderbox-wrap">

<center><img src="product1.jpg" alt="Avatar" style="width:200px;margin-top:10px"></center> <br/>
  <form method="post" action="add_product.php" enctype="multipart/form-data" style="max-width:800px;margin:auto;padding:10px">
      <h2>Add Product</h2>

      <div class="row">
        <div class="col-25"><br>
          <lable for="type" class="field-label-inline">Category:</label>
        </div>
        <div class="col-75">
          <select class="option" name="Unit" id="unit">
            <optgroup label="Ladies wear">
              <option value="casual_wear">Casual wear</option>
              <option value="fomal wear">Fomal wear</option>
              <option value="wedding_dresses">Wedding dresses</option>
            </optgroup>
            <optgroup label="Gents wear">
              <option value="Top wear">Top wear</option>
              <option value="bottom wear">Bottom wear</option>
              <option value="sports wear">Sports wear</option>
            </optgroup>
            <optgroup label="Kids wear">
              <option value="girl's_collection">Girl's collection</option>
              <option value="boy's_collection">Boy's collection</option>
              <option value="baby's_collection">Baby's collection</option>
            </optgroup>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-25"><br>
          <label for="dname" class="field-label-inline">Dress Name: </label>
        </div>
        <div class="col-75">
          <input type="text" class="field-value-inline" placeholder="Name" name="dname">
        </div>
      </div>



    <div class="row">
      <div class="col-25"><br>
        <lable for="price" class="field-label-inline">Price: </label>
      </div>
      <div class="col-75">
        <input class="field-label-inline" type="text"  placeholder="Price" name="price">
      </div>
    </div>

    <div class="row">
      <div class="col-25"><br>
        <lable for="type" class="field-label-inline">Size:</label>
      </div>
      <div class="col-75">
        <label class="checkbox_container">S
          <input type="checkbox" name="size[]" value="s">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">M
          <input type="checkbox" name="size[]" value="m">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">L
          <input type="checkbox" name="size[]" value="l">
          <span class="checkmark"></span>
        </label>

        <label class="checkbox_container">XL
          <input type="checkbox" name="size[]" value="xl">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">XXL
          <input type="checkbox" name="size[]" value="xxl">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">XXXL
          <input type="checkbox" name="size[]" value="xxxl">
          <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="col-25"><br>
        <lable for="type" class="field-label-inline">Colors:</label>
      </div>

      <div class="col-75">
      <!--  <div class="column">-->
        <label class="checkbox_container">Red
          <input type="checkbox" name="color[]" value="#ff0000">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">Black
          <input type="checkbox" name="color[]" value="#000000">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">White
          <input type="checkbox" name="color[]" value="#ffffff">
          <span class="checkmark"></span>
        </label>
      <!--  </div>
        <div class="column">-->
        <label class="checkbox_container">Blue
          <input type="checkbox" name="color[]" value="#0000ff">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">Pink
          <input type="checkbox" name="color[]" value="#ffc0cb">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">Other
          <input type="checkbox" name="color[]" value="#">
          <span class="checkmark"></span>
        </label>
      <!--  </div>-->
      </div>
    </div>
    <div class="row">
      <div class="col-25"><br>
        <lable for="amount" class="field-label-inline">Amount: </label>
      </div>
      <div class="col-75">
        <input class="field-label-inline" type="text"  placeholder="Amount" name="amount">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <lable for="type" class="field-label-inline">Upload Dress image:</label>
      </div>
      <div class="col-75">
        <input type="file" id="file" name="myimage" value=""> <br/>
      </div>
    </div>
    <div> <center>
      <button class="loginbutton btn-full-w" type="submit" name="add_product"> Upload</button> </center></div>
  </form>
</div>


  <?php require("footer.php")?>
</body>
</html>
