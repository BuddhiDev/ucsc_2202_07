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
          <select class="option" name="Unit" id="unit" style="color:white;">
            <optgroup label="Ladies wear">
              <option value="1">Blouse</option>
              <option value="2">skirt</option>
              <option value="3">frock</option>
              <option value="4">Short</option>
              <option value="5">Trouser</option>
              <option value="6">T-Shirt</option>
              <option value="7">Party Frock</option>
              <option value="8">Saree</option>
              <option value="9">Bridal Dress</option>
            </optgroup>
            <optgroup label="Gents wear">
              <option value="10">Shirt</option>
              <option value="11">T-shirt</option>
              <option value="12">Denim</option>
              <option value="13">Trouser</option>
              <option value="14">Groom Dress</option>
            </optgroup>
            <optgroup label="Kids wear">
              <option value="15">School Uni Forms</option>
              <option value="16">T-shirt</option>
              <option value="17">Trouser</option>
              <option value="18">Frocks</option>
              <option value="19">skirts</option>
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
        <select class="option" name="Size" id="size" style="color:white;">
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
