<?php
require("fd_controller.php");
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

<?php require("fd-header.php") ?>

<body>



  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>


<!--add new product form-->
<div class="sliderbox-wrap">

<center><img src="design1.jpg" alt="Avatar" style="width:200px;margin-top:10px"></center> <br/>
  <form method="post" action="add_sample_design.php" enctype="multipart/form-data" style="max-width:800px;margin:auto;padding:10px">
      <h2>Add Design</h2>

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
          <label for="dename" class="field-label-inline">Design Name: </label>
        </div>
        <div class="col-75">
          <input type="text" class="field-value-inline" placeholder="Name" name="dename">
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
      <div class="col-25">
        <lable for="type" class="field-label-inline">Upload Design image:</label>
      </div>
      <div class="col-75">
        <input type="file" id="file" name="mydesign" value=""> <br/>
      </div>
    </div>
    <div> <center>
      <button class="loginbutton btn-full-w" type="submit" name="add_design"> Upload</button> </center></div>
  </form>
</div>


  <?php require("footer1.php")?>
</body>
</html>
