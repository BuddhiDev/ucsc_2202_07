<?php
require("../server.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Andum.lk - Add a dress</title>
  <link rel="shortcut icon" href="logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/checkbox.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>

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
                  <li><a href="index.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                  <li><a href=".php"><i class="fas fa-money"></i>sells</a></li>
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


<!--add new product form-->
<div class="sliderbox-wrap">

<center><img src="icon.png" alt="Avatar" style="width:200px;margin-top:10px"></center> <br/>
  <form method="post" action="add_product.php" enctype="multipart/form-data" style="max-width:800px;margin:auto;padding:10px">
      <h2>Add Product</h2>

      <div class="row">
        <div class="col-25"><br>
          <lable for="type" class="field-label-inline">Category:</label>
        </div>
        <div class="col-75">
          <select class="option" name="Unit" id="unit">
            <optgroup label="WOMEN">
              <option value="casual_wear">Casual wear</option>
              <option value="fomal wear">Fomal wear</option>
              <option value="wedding_dresses">Ethnic wear</option>
            </optgroup>
            <optgroup label="MEN">
              <option value="Top wear">Casual wear</option>
              <option value="bottom wear">Fomal wear</option>
              <option value="sports wear">Inner wear</option>
            </optgroup>
            <optgroup label="KIDS">
              <option value="girl's_collection">Girls</option>
              <option value="boy's_collection">Boys</option>
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
          <input type="checkbox" name="color[]" value="red">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">Orange
          <input type="checkbox" name="color[]" value="orange">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">Yellow
          <input type="checkbox" name="color[]" value="yellow">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">Green
          <input type="checkbox" name="color[]" value="green">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">Blue
          <input type="checkbox" name="color[]" value="blue">
          <span class="checkmark"></span>
        </label>
      <!--  </div>
        <div class="column">-->
        
        
        <label class="checkbox_container">Purple
          <input type="checkbox" name="color[]" value="purple">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">Pink
          <input type="checkbox" name="color[]" value="pink">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">Black
          <input type="checkbox" name="color[]" value="black">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">White
          <input type="checkbox" name="color[]" value="white">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">Other
          <input type="checkbox" name="color[]" value="other">
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
    <div> 
    <center>
      <button class="loginbutton btn-full-w" type="submit" name="add_product"> Upload</button>
      </center></div>
  </form>
</div>

<script src="../script.js"></script>

  <?php require("../footer.php")?>
</body>
</html>
