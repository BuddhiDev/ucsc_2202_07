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
