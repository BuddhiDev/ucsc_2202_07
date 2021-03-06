
<?php
require("../server.php");
?>

<?php

if (isset($_POST['update_fd'])) {

  $f_id =  $_SESSION['nic'];

  $nic = mysqli_real_escape_string($db, $_POST['nic']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $password1 = mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['cpassword']);
  $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);
  
  $filename = $_FILES["profilepic"]["name"];
  $tempname = $_FILES["profilepic"]["tmp_name"];
  $folder = "profile_pictures/".$filename;

  if ($password1 != $password2){
      array_push($errors, "Passwords do not match");
  }
  else{
      $password = md5($password1);
      $sql = "UPDATE users SET fname='$fname',lname='$lname',contactno='$contactno',password='$password',address='$address',postalcode='$postalcode',image ='$filename' WHERE nic='$nic'";
      $result=mysqli_query($db, $sql);

      if (move_uploaded_file($tempname, $folder))
      {
          echo "<script>alert('Image Has Been Uploaded')</script>";
      }
      else
      {
          echo "<script>alert('Image Does Not Uploaded')</script>";
      }

  }

  $filename1 = $_FILES["addpic1"]["name"];
  $tempname1 = $_FILES["addpic1"]["tmp_name"];
  $folder1 = "sample_images/".$filename1;

      $sql1 = "UPDATE fashion_designer SET  image1='$filename1' WHERE nic='$nic'";
      $result1=mysqli_query($db, $sql1);

      if (move_uploaded_file($tempname1, $folder1))
      {
          echo "<script>alert('Image Has Been Uploaded')</script>";
      }
      else
      {
          echo "<script>alert('Image Does Not Uploaded')</script>";
      }

     //design2
      $filename2 = $_FILES["addpic2"]["name"];
      $tempname2 = $_FILES["addpic2"]["tmp_name"];
      $folder2 = "sample_images/".$filename2;
  
     
     
      $sql2 = "UPDATE fashion_designer SET  image2='$filename2' WHERE nic='$nic'";
          $result2=mysqli_query($db, $sql2);
  
          if (move_uploaded_file($tempname2, $folder2))
          {
              echo "<script>alert('Image Has Been Uploaded')</script>";
          }
          else
          {
              echo "<script>alert('Image Does Not Uploaded')</script>";
          }


          //design3

          $filename3 = $_FILES["addpic3"]["name"];
          $tempname3 = $_FILES["addpic3"]["tmp_name"];
          $folder3 = "sample_images/".$filename3;
      
          $sql3 = "UPDATE fashion_designer SET  image3='$filename3' WHERE nic='$nic'";
          $result3=mysqli_query($db, $sql3);
  
         
              if (move_uploaded_file($tempname3, $folder3))
              {
                  echo "<script>alert('Image Has Been Uploaded')</script>";
              }
              else
              {
                  echo "<script>alert('Image Does Not Uploaded')</script>";
              }


}
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
<body>
  <header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="../logo.png" alt="logo" class="img-box">
      </div>
      <div class="nav-item-middle">
        <ul class="nav-area">
          <li><a href="tailor-dashboard.php">Home</a></li>
          <li class="dropdown">
            <a href="#">Women</a>
            <div class="row">
              <ul class="menu-area">
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Casual Wear</li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">T shirts</a></li>
                    <li><a href="#">Blouse</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="#">Pants</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Formal Wear</li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Blouse</a></li>
                    <li><a href="#">Skirts</a></li>
                    <li><a href="workwear_gents.php">Pants</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Ethnic wear</li>
                    <li><a href="#">Kurthas</a></li>
                    <li><a href="#">Shlwas</a></li>
                    <li><a href="#">Sarees</a></li>
                  </ul>
                </div>
              </ul>
            </div>
              
            
          </li>
          <li class="dropdown">
            <a href="#">Men</a>
            <div class="row">
              <ul class="menu-area">
                <div class="col-6">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Casual Wear</li>
                    <li><a href="#">T shirts</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="index.php?dcategory=trouser">Trousers</a></li>
                    <li><a href="#">Sarong</a></li>
                    <li><a href="#">Shorts</a></li>
                  </ul>  
                </div>
                <div class="col-6">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Formal Wear</li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Trousers</a></li>
                    <li><a href="#">Blazers</a></li>
                  </ul>
                </div> 
              </ul>
            </div>            
          </li>
          <li class="dropdown">
            <a href="#">Kids</a>
            <div class="row">
            <ul class="menu-area">
              <div class=col-6>
                <ul class="inner-menu">
                  <li class="inner-list-header">Boys</li>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Tank Tops</a></li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Sleepware</a></li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="inner-menu">
                  <li class="inner-list-header">Girls</li>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Sleepware</a></li>
                </ul>
              </div>             
            </ul>
              

            </div>
            
          </li>

          <li><a href="hire_tailor.php">Explore Tailors</a></li>
          <li><a href="hire_fashion_designer.php">Explore Fashion Designers</a></li>
          <li>
          
          </li>
        </ul>
      </div>
      
      <!-- </div> -->
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                  <li><a href="edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                  <li><a href="index.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                  <li><a href="fd-manage-orders.php"><i class="fas fa-money"></i>Purchases</a></li>
                  <li><a href="#"><i class="fas fa-heart"></i>Favourites</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>
              </div>
            </li>
            <li><i class="fas fa-envelope"></i></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


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
