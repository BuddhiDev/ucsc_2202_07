<!DOCTYPE html>
<html>
<head>
  <title>Andum.lk - Add a dress</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
<style>
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.option{
  background-color: #EB2188;
  padding: 8px 10px;
  border-radius: 25px;
}

</style>

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
  <form action="/action_page.php" style="max-width:800px;margin:auto;padding:10px">
      <h2>Add Product</h2>

      <div class="row">
        <div class="col-25">
          <lable for="type" class="field-label-inline">Category:</label>
        </div>
        <div class="col-75">
          <select class="option" name="Unit" id="unit">
            <optgroup label="Women">
              <option value="1">blouse</option>
              <option value="2">skirt</option>
              <option value="3">frock</option>
            </optgroup>
            <optgroup label="Men">
              <option value="4">shirt</option>
              <option value="5">trouser</option>
            </optgroup>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="dname" class="field-label-inline"><b>Dress Name</b></label>
        </div>
        <div class="col-75">
          <input type="text" class="field-value-inline" placeholder="Name" name="dname">
        </div>
      </div>



    <div class="row">
      <div class="col-25">
        <lable for="price" class="field-label-inline">Price: </label>
      </div>
      <div class="col-75">
        <input class="field-label-inline" type="text"  placeholder="Price" name="price">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <lable for="type" class="field-label-inline">Size:</label>
      </div>
      <div class="col-75">
        <select class="option" name="Size" id="size">
          <option value="1">M</option>
          <option value="2">L</option>
          <option value="3">XL</option>
          <option value="4">XXL</option>
          <option value="5">XXXL</option>
        </select>
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
    <div> <center>
<button class="loginbutton btn-full-w" type="submit"> Upload</button> </center></div>
  </form>
</div>


  <div class="footer">
    <div class="footer-content">
      <div class="footer-section about">
        <img class="footer-logo" src="/ucsc_2202_07/andum.lk/logo.png" alt="logo"><h1 class="logo-txt"><span></span></h1>
        <div class="socials">
          <a href="#"><i class="fas fa-facebook"></i></a>
          <a href="#"><i class="fas fa-instagram"></i></a>
          <a href="#"><i class="fas fa- google+"></i></a>
        </div>
      </div>
      <div class="footer-section links">
        <ul>
          <a href="#"><li>HIRE A TAILOR</li></a>
          <a href="#"><li>HIRE A FASHION DESIGNER</li></a>
          <a href="#"><li>SHIPPING AND RETURNS</li></a>
        </ul>
      </div>
      <div class="footer-section links2 ">
        <ul>
          <a href="#"><li>HIRE A TAILOR</li></a>
          <a href="#"><li>HIRE A FASHION DESIGNER</li></a>
          <a href="#"><li>SHIPPING AND RETURNS</li></a>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
          &copy; andum.lk
    </div>
  </div>
  </body>
  </html>
