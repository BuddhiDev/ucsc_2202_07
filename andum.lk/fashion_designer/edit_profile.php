


<?php
require("fd_controller.php");
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

    <!-- <style>
      img {
        border-radius: 50%;
      }
</style> -->

</head>

<?php require("fd-header.php") ?>

<body>
  


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


        $nic = $_SESSION['nic'];
        $sql= "SELECT * FROM users WHERE nic='$nic' ";
        // $sql = "SELECT nic, email,fname,lname,password,contactno FROM users";
        $result = mysqli_query($db, $sql);

        if ($result) {
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

          <div class="form-field-inline">
            <label for="fname" class="field-label-inline"><b>First Name</b></label>
            <input type="text" value="<?php echo $row["fname"]?>" class="field-value-inline" name="fname" required>
          </div>

          <div class="form-field-inline">
            <label for="lname" class="field-label-inline"><b>Last Name</b></label>
            <input type="text" value="<?php echo $row["lname"]?>" class="field-value-inline" name="lname" required>
          </div>

          <div class="form-field-inline">
            <label for="password" class="field-label-inline"><b>Password</b></label>
            <input type="password" class="field-value-inline" name="password" required>
          </div>

          <div class="form-field-inline">
            <label for="cpassword" class="field-label-inline"><b>Confirm Password</b></label>
            <input type="password" class="field-value-inline" name="cpassword" required>
          </div>

          <div class="form-field-inline">
            <label for="contactno" class="field-label-inline"><b>Phone Number</b></label>
            <input type="text" value="<?php echo $row["contactno"]?>" class="field-value-inline" name="contactno">
          </div>

          <div class="form-field-inline">
            <label for="address" class="field-label-inline"><b>Address</b></label>
            <input type="text" value="<?php echo $row["address"]?>" class="field-value-inline" name="address">
          </div>

          <div class="form-field-inline">
            <label for="postalcode" class="field-label-inline"><b>Postal Code</b></label>
            <input type="text" value="<?php echo $row["postalcode"]?>" class="field-value-inline" name="postalcode">
          </div>

          <div class="form-field-inline">
            <label for="ac_no" class="field-label-inline"><b> Bank Account Number</b></label>
            <input type="text"  class="field-value-inline" name="ac_no">
          </div>

          <div class="form-field-inline">
            <label for="bank" class="field-label-inline"><b>Bank</b></label>
            <input type="text"  class="field-value-inline" name="bank">
          </div>  

          <div class="row">
                <div class="col-4">
                  <div class="add-design-pic">
                    <div class="design-pic">
                      <img src="/ucsc_2202_07/andum.lk/images/profile/photo3.jpg" id="profileDisplay1" name="profileDisplay1" onclick="triggerClick1()" alt="" class="designDisp">
                    </div>
                    <input type="file" name="addpic1" value="" onchange="displayImage1(this)" id="addpic1" class="fd-profile-pic-control">
                  </div>
                </div>
                <div class="col-4">
                  <div class="add-design-pic">
                    <div class="design-pic">
                      <img src="/ucsc_2202_07/andum.lk/images/profile/photo3.jpg" id="profileDisplay2" name="profileDisplay2" onclick="triggerClick2()" alt="" class="designDisp">
                    </div>
                    <input type="file" name="addpic2" value="" onchange="displayImage2(this)" id="addpic2" class="fd-profile-pic-control">
                  </div>
                </div>
                <div class="col-4">
                  <div class="add-design-pic">
                    <div class="design-pic">
                      <img src="/ucsc_2202_07/andum.lk/images/profile/photo3.jpg" id="profileDisplay3" name="profileDisplay3" onclick="triggerClick3()" alt="" class="designDisp">
                    </div>
                    <input type="file" name="addpic3" value="" onchange="displayImage3(this)" id="addpic3" class="fd-profile-pic-control">
                  </div>
                </div>
                <!-- <div class="add-design-row">
                  <button class="loginbutton btn-full-w" type="submit" name="upload_design">Upload</button>
                </div> -->

              </div>
    

          <div class="row">
      <!-- <div class="col-75">
        <input type="file" id="myimage" name="myimage" value=""> <br/>
      </div> -->
    </div>

    













          <div class="btn-panel-center">
            <!-- <button class="facebookbutton btn-full-w" type="submit">SIGN UP WITH FACEBOOK </button>
            <button class="googlebutton btn-full-w" type="submit">SIGN UP WITH GOOGLE </button> -->
            <button class="loginbutton btn-full-w" type="submit" name="update_fd">Save Data</button>
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
