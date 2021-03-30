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

<?php require("header.php")?>
<div class="add-new-position">
    <a href="size_guide.php"><button class="loginbutton btn-full-w">(Click Here for Size Guide)</button></a>
</div>  


  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("notify-myDropdown").classList.toggle("notify-show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.notify-dropbtn')) {
  var myDropdown = document.getElementById("notify-myDropdown");
    if (myDropdown.classList.contains('notify-show')) {
      myDropdown.classList.remove('notify-show');
    }
  }
}
</script>


<!--add new product form-->
<div class="sliderbox-wrap">

<center><img src="icon.png" alt="Avatar" style="width:200px;margin-top:10px"></center> <br/>
  <form method="post" action="#" enctype="multipart/form-data" style="max-width:800px;margin:auto;padding:10px">
      <h2>Add Product</h2>

      <div class="row">
        <div class="col-25"><br>
          <lable for="type" class="field-label-inline">Category:</label>
        </div>
        <div class="col-75">
        <select class="option" name="category" id="category" >
              <optgroup label="WOMEN CASUAL WEAR">
              <option value="w-cas-dresses">DRESSES</option>
              <option value="w-cas-tshirts">T SHIRTS</option>
              <option value="w-cas-blouse">BLOUSE</option>
              <option value="w-cas-shirts">SHIRTS</option>
              <option value="w-cas-jeans">JEANS</option>
              <option value="w-cas-pants">PANTS</option>
              </optgroup>
              <optgroup label="WOMEN FORMAL WEAR">
              <option value="w-for-dresses">DRESSES</option>
              <option value="w-for-blouse">BLOUSE</option>
              <option value="w-for-skirts">SKIRTS</option>
              <option value="w-for-pants">PANTS</option>
              </optgroup>
              <optgroup label="WOMEN ETHNIC WEAR">
              <option value="w-eth-kurthas">KURTHAS</option>
              <option value="w-eth-sawls">SAWLS</option>
              <option value="w-eth-sarees">SAREES</option>
              </optgroup>
              <optgroup label="MEN CASUAL WEAR">
              <option value="m-cas-tshirts">T SHIRTS</option>
              <option value="m-cas-shirts">SHIRTS</option>
              <option value="m-cas-jeans">JEANS</option>
              <option value="m-cas-trousers">TROUSERS</option>
              <option value="m-cas-sarong">SARONG</option>
              <option value="m-cas-shorts">SHORTS</option>
              </optgroup>
              <optgroup label="MEN FORMAL WEAR">
              <option value="m-for-shirts">SHIRTS</option>
              <option value="m-for-trousers">TROUSERS</option>
              <option value="m-for-blazers">BLAZERS</option>
              </optgroup>
              <optgroup label="KIDS BOYS">
              <option value="k-b-tshirts">T SHIRTS</option>
              <option value="k-b-tanktops">TANK TOPS</option>
              <option value="k-b-shirts">SHIRTS</option>
              <option value="k-b-shorts">SHORTS</option>
              <option value="k-b-pants">PANTS</option>
              <option value="k-b-romper">Romper</option>
              <option value="k-b-sleepwear">SLEEP WEAR</option>
              </optgroup>
              <optgroup label="KIDS GIRLS">
              <option value="k-g-tshirts">T SHIRTS</option>
              <option value="k-g-dresses">DRESSES</option>
              <option value="k-g-shorts">SHORTS</option>
              <option value="k-g-sleepwear">SLEEP WEAR</option>
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
        <label class="checkbox_container">XS
          <input type="checkbox" name="size[]" value="XS">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">S
          <input type="checkbox" name="size[]" value="S">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">M
          <input type="checkbox" name="size[]" value="M">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">L
          <input type="checkbox" name="size[]" value="L">
          <span class="checkmark"></span>
        </label>

        <label class="checkbox_container">XL
          <input type="checkbox" name="size[]" value="XL">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox_container">XXL
          <input type="checkbox" name="size[]" value="XXL">
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
        
      </div>
    </div>
    <div class="row">
      <div class="col-25"><br>
        <lable for="amount" class="field-label-inline">Available Stock: </label>
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
