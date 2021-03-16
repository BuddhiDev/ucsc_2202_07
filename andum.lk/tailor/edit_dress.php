<?php
require("../server.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk - Edit Profile</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles//checkbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>

    <style>
      img {
        border-radius: 50%;
      }
</style>

</head>
<body>
  
<?php require("header.php")?>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>



<!-- edit profile form-->

<form method="post" action="my_showcase.php" enctype="multipart/form-data" style="max-width:800px;margin:auto;padding:10px">
        <?php

      include("../errors.php");

      $selected_dress_id1 = $_SESSION['selected_dress_id'];
      $nic = $_SESSION['nic'];
    
      $sqle = "SELECT*FROM dress_showcase WHERE dress_id='$selected_dress_id1' ";
      $resulte=mysqli_query($db, $sqle);
       
    

        if ($resulte) {
          while ($row = mysqli_fetch_assoc($resulte)) {
        ?>


        <div class="login-container">
          <h1>Edit Dress</h1>
            <div class="fd-form-container-block1">
              <div class="profile-pic">
                <div class="pic">
                  <img src="icon.png" id="profileDisplay" name="profileDisplay" onclick="triggerClick()" alt="" class="proDisp">
                </div>        
                <label for="dress_pictures"></label>
                <input type="file" name="dresspic" value="" onchange="displayImage(this)" id="dresspic" class="fd-profile-pic-control">
              </div>
            </div>
            <div class="row">
        <div class="col-25"><br>
          <lable for="type" class="field-label-inline">Category:</label>
        </div>
        <div class="col-75">
            <input type="text" value="<?php echo $row["category"]?>" class="field-value-inline" name="Unit"></div>
          </div>
          <div class="row">
          <div class="col-25"><br>
            <label for="dname" class="field-label-inline"><b>Dress Name: </b></label></div>
            <div class="col-75">
            <input type="text" value="<?php echo $row["title"]?>" class="field-value-inline" name="dname"></div>
          </div>

          <div class="row">
          <div class="col-25"><br>
            <lable for="price" class="field-label-inline"><b>Price: </b></label></div>
            <div class="col-75">
            <input type="text" value="<?php echo $row["price"]?>" class="field-value-inline" name="price"></div>
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
        </div>
      </div>
        <div class="row">
            <div class="col-25"><br>
            <label for="amount" class="field-value-inline"><b>Amount: </b></label></div>
            <div class="col-75">
            <input type="text" value="<?php echo $row["amount"]?>" class="field-value-inline" name="amount"></div>
        </div>
  
        <div class="btn-panel-center">
            <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
            <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
            <a href="my_dhowcase.php"><button class="loginbutton btn-full-w" type="submit" name="update_dress">Save</button></a>
          </div>
              
         
          <?php
            }
          }
          ?>

          <!-- fdgfsas<label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
          
         
         

    </div>
  </form>
      
      <script src="../script.js"></script> 

      <!--footer-->
        <?php require("../footer.php")?>

</body>
</html>