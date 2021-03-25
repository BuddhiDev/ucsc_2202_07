<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Hire a Tailor</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fonts.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/customerstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php require("header.php") ?>

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

  <?php include("../errors.php");?>

  <div class="sliderbox-wrap">
    <div class="container-box">
      <div class="row">
        <div class="search-container">
          <form method="post">
            <div class="form-field-inline">
              <label for="searchname" class="field-label-inline">Search...</label>
              <input type="text" class="field-value-inline" name="q">
              <button type="submit" class="search-btn" name="search"><i class="fa fa-search" aria-hidden="true"></i></abutton>
            </div>
          </form>
        </div>
      </div>
      <!-- Sponsered Profiles -->
        <?php

            // Read all sponsered profiles
            $adsql = "SELECT * FROM advert_t LIMIT 3";
            $adres = mysqli_query($db, $adsql);

            if ($adres) {

            ?>
      <div class="customer-cover">
        <div class="row">
          <h2>Sponsored Tailors</h2>
        </div>
                  
        <div class="row">
            <?php

              while ($adrow = mysqli_fetch_assoc($adres)) {

              //retrieve tailor table data
              $loop_nic=$adrow["tid"];
              $t_sql="SELECT * FROM tailors WHERE nic='$loop_nic' ";
              $t_res=mysqli_query($db, $t_sql);
              $t_row=mysqli_fetch_assoc($t_res);

              //retrieve user table data
              $u_sql="SELECT * FROM users WHERE nic='$loop_nic' ";
              $u_res=mysqli_query($db, $u_sql);
              $u_row=mysqli_fetch_assoc($u_res);

            ?>
          <!-- Dress box start -->
          <div class="col-4">
            <div class="designer-box">
              <form method="get" action="hire_tailor.php" class="users">
                <input type="hidden" value="<?php echo $nic ?> " name="nic">
                  <div class="fd-card-item">
                    <div class="fd-card-img">
                      <a href="hire_tailor.php?t_nic=<?php echo $u_row["nic"] ?>"><img src="/ucsc_2202_07/andum.lk/tailor/profile_pictures/<?php echo $u_row["image"]; ?>" alt="Ava" style="width:100%" class="proDisp"></a>    
                    </div>
                    <div class="fd-card-content">
                      <?php if($t_row["rate"]>0) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                      <?php if($t_row["rate"]>1) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                      <?php if($t_row["rate"]>2) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                      <?php if($t_row["rate"]>3) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                      <?php if($t_row["rate"]>4) { ?><span class="fa fa-star checked">(<?php echo $t_row["total_fb"] ?>)</span><?php } else { ?> <span class="fa fa-star">(<?php echo $t_row["total_fb"] ?>)</span><?php } ?>
                      <div class="card-title"><?php echo $u_row["fname"]." ".$u_row["lname"] ?></div>
                      <div class="card-description"></div>
                    </div>
                  </div>
              </form>

            </div>
          
          </div>
          <!-- Dress box end-->

          <?php
                }
              }
            
          ?>
        </div>

      </div>

      <!-- sponsered end -->

      <div class="customer-cover">
        <div class="row">
          <h2>All Categories</h2>
        </div>
      
        <div class="row">
          <?php
            $nic = $_SESSION['nic'];


            // Check condition if this is search request or not
            if ($search != true) {
              // Read all dressess
              $s = "SELECT * FROM users WHERE type='0'";
              $res = mysqli_query($db, $s);

              if ($res) {
                while ($row = mysqli_fetch_assoc($res)) {

            //retrieve tailor table data
            $loop_nic=$row["nic"];
            $t_sql="SELECT * FROM tailors WHERE nic='$loop_nic' ";
            $t_res=mysqli_query($db, $t_sql);
            $t_row=mysqli_fetch_assoc($t_res);
          ?>
          <!-- Dress box start -->
          <div class="col-4">
            <div class="designer-box">
              <form method="get" action="hire_tailor.php" class="users">
                <input type="hidden" value="<?php echo $nic ?> " name="nic">
                <div class="fd-card-item">
                  <div class="fd-card-img">
                    <a href="hire_tailor.php?t_nic=<?php echo $row["nic"] ?>"><img src="/ucsc_2202_07/andum.lk/tailor/profile_pictures/<?php echo $row["image"]; ?>" alt="Ava" style="width:100%" class="proDisp"></a>    
                  </div>
                  <div class="fd-card-content">
                    <?php if($t_row["rate"]>0) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                    <?php if($t_row["rate"]>1) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                    <?php if($t_row["rate"]>2) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                    <?php if($t_row["rate"]>3) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                    <?php if($t_row["rate"]>4) { ?><span class="fa fa-star checked">(<?php echo $t_row["total_fb"] ?>)</span><?php } else { ?> <span class="fa fa-star">(<?php echo $t_row["total_fb"] ?>)</span><?php } ?>
                    <div class="card-title"><?php echo $row["fname"]." ".$row["lname"] ?></div>
                    <div class="card-description"></div>
                  </div>
                </div>
              </form>
            </div>         
          </div>
          <!-- Dress box end-->

          <?php
                }
              }
            } else {

            //Read using search keyword
            $sql = "SELECT * FROM users WHERE fname LIKE '%$keyword%' OR lname LIKE '%$keyword%' ";
            $result = mysqli_query($db, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) { 

                //retrieve tailor table data
            $loop_nic=$row["nic"];
            $t_sql="SELECT * FROM tailors WHERE nic='$loop_nic' ";
            $t_res=mysqli_query($db, $t_sql);
            $t_row=mysqli_fetch_assoc($t_res);

          ?>

          <div class="col-4">
            <form method="get" action="index.php" class="dress-showcase">
              <input type="hidden" value="<?php echo $nic ?> " name="t_nic">
              <div class="fd-card-item">
                <div class="fd-card-img">
                  <a href="hire_tailor.php?t_nic=<?php echo $row["nic"] ?>"><img src="/ucsc_2202_07/andum.lk/tailor/profile_pictures/<?php echo $row["image"]; ?>" alt="Ava" style="width:100%" class="proDisp"></a>
                </div>
                <div class="fd-card-content">
                  <?php if($t_row["rate"]>0) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                  <?php if($t_row["rate"]>1) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                  <?php if($t_row["rate"]>2) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                  <?php if($t_row["rate"]>3) { ?><span class="fa fa-star checked"></span><?php } else { ?> <span class="fa fa-star"></span><?php } ?>
                  <?php if($t_row["rate"]>4) { ?><span class="fa fa-star checked">(<?php echo $t_row["total_fb"] ?>)</span><?php } else { ?> <span class="fa fa-star">(<?php echo $t_row["total_fb"] ?>)</span><?php } ?>
                  <div class="card-title"><?php echo $row["fname"]." ".$row["lname"] ?></div>
                  <div class="card-description"></div>
                </div>
              </div>
            </form>
          </div>

          <?php }
            }
          }
          ?>
        </div>     
      </div>
    </div>
  </div>
    <!--footer-->
    <?php require("../footer.php") ?>
</body>

</html>
