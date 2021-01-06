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

      <form action="edit_profile.php" method="post" enctype="multipart/form-data">
        <?php

       include("../errors.php");

       $selected_dress_id = mysqli_real_escape_string($db, $_GET['edit_dress_nic']);
       $_SESSION['edit_dress_id']=$selected_dress_id;
       $sqle = "SELECT*FROM dress_showcase WHERE dress_id='$selected_dress_id' ";
       $resulte=mysqli_query($db, $sqle);
       
    

        if ($resulte) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>


        <div class="login-container">
          <h1>Edit Profile</h1>
          <!-- <center>
          <img src="/ucsc_2202_07/andum.lk/images/pexels-joy-deb-1580270.jpg" alt="Jeny" style="width:25%"; >
        </center> -->
        <div class="fd-form-container-block1">
              <div class="profile-pic">
                <div class="pic">
                  <img src="/ucsc_2202_07/andum.lk/images/profile/photo1.png" id="profileDisplay" name="profileDisplay" onclick="triggerClick()" alt="" class="proDisp">
                </div>        
                <label for="profile_pictures"></label>
                <input type="file" name="profilepic" value="" onchange="displayImage(this)" id="profilepic" class="fd-profile-pic-control">
              </div>
            </div>
          <div class="form-field-inline">
            <label for="uname" class="field-label-inline">NIC Number</label>
            <input type="text" value="<?php echo $row["nic"]?>" class="field-value-inline" name="nic" readonly>
          </div>

          <div class="form-field-inline">
            <label for="email" class="field-label-inline"><b>Email Address</b></label>
            <input type="text" value="<?php echo $row["email"]?>" class="field-value-inline" name="email" readonly>
          </div>

          
          <div class="row">
          </div>
          <div class="btn-panel-center">
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