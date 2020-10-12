<?php
require("../server.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk - Edit Profile</title>
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/tailor/checkbox.css">

    <style>
      img {
        border-radius: 50%;
      }
</style>

</head>
<body>
          <div class="box">
            <header>
              <img class="logo" src="/ucsc_2202_07/andum.lk/logo.png" alt="logo">
              <nav>
                <ul class="nav-area">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#">Hire a Fashion Designer</a></li>
                  <li><a href="dress_showcase.php">Dress Showcase</a></li>
                  <li><a href="/ucsc_2202_07/andum.lk/about_us.php">About Us</a></li>
                </ul>
              </nav>
            </header>
          <div>


<!-- edit profile form-->

      <form>
        <?php
        $nic = $_SESSION['nic'];
        $sql= "SELECT * FROM users WHERE nic=$nic";
        // $sql = "SELECT nic, email,fname,lname,password,contactno FROM users";
        $result = mysqli_query($db, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>


        <div class="login-container">
          <h1>Edit Profile</h1>
          <center>
          <img src="/ucsc_2202_07/andum.lk/images/pexels-joy-deb-1580270.jpg" alt="Jeny" style="width:25%"; >
        </center>
          <div class="form-field-inline">
            <label for="uname" class="field-label-inline">NIC Number</label>
            <input type="text" value="<?php echo $row["nic"]?>" class="field-value-inline" name="nic" required>
          </div>

          <div class="form-field-inline">
            <label for="email" class="field-label-inline"><b>Email Address</b></label>
            <input type="text" value="<?php echo $row["email"]?>" class="field-value-inline" name="email" required>
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
            <label for="password" class="field-label-inline"><b>Passsword</b></label>
            <input type="password" value="<?php echo $row["password"]?>"class="field-value-inline" name="password" required>
          </div>


          <div class="form-field-inline">
            <label for="contactno" class="field-label-inline"><b>Phone Number</b></label>
            <input type="text" value="<?php echo $row["contactno"]?>" class="field-value-inline" name="contactno">
          </div>


              <!--<h2>SewingCategories</h2>-->




          <div class="btn-panel-center">
            <!-- <button class="facebookbutton btn-full-w" type="submit">SIGN UP WITH FACEBOOK </button>
            <button class="googlebutton btn-full-w" type="submit">SIGN UP WITH GOOGLE </button> -->
            <button class="loginbutton btn-full-w" type="submit" name="register">Save</button>
          </div>
          <?php
            }
          }
          ?>

          <!-- <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
        </div>
      </form>

      <!--footer-->
        <?php require("footer.php")?>

</body>
</html>
