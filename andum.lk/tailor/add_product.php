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

</head>

<body>
  <!--nav bar-->
  <div class="box">
    <header>
      <img class="logo" src="/ucsc_2202_07/andum.lk/logo.png" alt="logo">
      <nav>
        <ul class="nav-area">
        <li><a href="index.php">Home</a></li>
          <li><a href="dress_showcase.php">Dress Showcase</a></li>
          <li><a href="Manage_order.php">Manage Orders</a></li>
          <li><a href="#">Manage Sales</a></li>
        </ul>
      </nav>

    </header>
  </div>


<!--add new product form-->
<div class="sliderbox-wrap">

<center><img src="product1.jpg" alt="Avatar" style="width:200px;margin-top:10px"></center> <br/>
  <form method="post" action="add_product.php" style="max-width:800px;margin:auto;padding:10px">
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
          <label for="dname" class="field-label-inline"><b>Dress Name</b></label>
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
        <select class="option" name="size" id="size">
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
          <option value="XXL">XXL</option>
          <option value="XXXL">XXXL</option>
        </select>
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
        <input type="file" id="myFile" name="filename"> <br/>
      </div>
    </div>
    <div>
      <button class="loginbutton btn-full-w" type="submit" name="upload"> Upload</button>
    </div>
    <div> <center>
      <button class="loginbutton btn-full-w" type="submit" name="add_product"> Submit</button> </center></div>
  </form>
</div>


  <?php require("footer.php")?>
</body>
</html>
