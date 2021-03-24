<?php
require("../server.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk - Edit Dress</title>
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

<!-- edit profile form-->

<form method="post" action="rejected_dress.php" enctype="multipart/form-data" style="max-width:800px;margin:auto;padding:10px">
    <?php
      include("../errors.php");

      $selected_rdress_id = $_SESSION['selected_rdress_id'];
      $nic = $_SESSION['nic'];
    
      $sqle = "SELECT*FROM rejected_dress WHERE dress_id='$selected_rdress_id' ";
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
              <input type="text" value="<?php echo $row["category"]?>" class="field-value-inline" name="Unit">
          </div>
          </div>

          <div class="row">
          <div class="col-25"><br>
            <label for="dname" class="field-label-inline"><b>Dress Name: </b></label>
          </div>
          <div class="col-75">
            <input type="text" value="<?php echo $row["title"]?>" class="field-value-inline" name="dname">
          </div>
          </div>

          <div class="row">
          <div class="col-25"><br>
            <lable for="price" class="field-label-inline"><b>Price: </b></label></div>
          <div class="col-75">
            <input type="text" value="<?php echo $row["price"]?>" class="field-value-inline" name="price">
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
            <label class="checkbox_container">XXXL
              <input type="checkbox" name="size[]" value="XXXL">
              <span class="checkmark"></span>
            </label>
          </div>
          </div>

          <div class="row">
          <div class="col-25"><br>
            <lable for="type" class="field-label-inline">Colors:</label>
          </div>
          <div class="col-75">
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
              <label for="amount" class="field-value-inline"><b>Amount: </b></label>
          </div>
          <div class="col-75">
              <input type="text" value="<?php echo $row["amount"]?>" class="field-value-inline" name="amount">
          </div>
          </div>

          <div class="row">
          <div class="col-25">
            <lable for="type" class="field-label-inline">Upload Dress image:</label>
          </div>
          <div class="col-75">
            <input type="file" id="file" name="myimage" value=""><br/>
          </div>
          </div>

        <div class="btn-panel-center">
            <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
            <input type="hidden" value="<?php echo $nic ?> " name="t_nic">
            <a href="pending_dresses.php"><button class="loginbutton btn-full-w" type="submit" name="update_reject_dress">Save</button></a>
        </div>
              
         
    <?php
      }
    }   ?>


    </div>
  </form>
      
      <script src="../script.js"></script> 

      <!--footer-->
        <?php require("../footer.php")?>

</body>
</html>