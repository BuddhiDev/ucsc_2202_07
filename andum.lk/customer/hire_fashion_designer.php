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
  <title>Andum.lk - Hire a fashion designer</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fonts.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/customerstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>
    .search-btn {
      background-color: white;
      color: #EB2188;
    }
    .checked {
  color: orange;
}
  </style>


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

  <?php include("../errors.php");
  ?>

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

      <div class="customer-cover">
        <div class="row">
          <h2 class="fashion-designer-headding">Our Fashion Designers</h2>
        </div>
        <div class="row">
          <?php
            $nic = $_SESSION['nic'];
            // Check condition if this is search request or not
            if ($search != true) {
              // Read all dressess
              $sql = "SELECT * FROM users WHERE type='2'";
              $result = mysqli_query($db, $sql);

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                //retrieve fd table data
                $loop_nic=$row["nic"];
                $fd_sql="SELECT * FROM fashion_designer WHERE nic='$loop_nic' ";
                $fd_res=mysqli_query($db, $fd_sql);
                $t_row=mysqli_fetch_assoc($fd_res);
          ?>
          <!-- Dress box start -->
          <div class="col-4">
            <div class="designer-box">
              <form method="get" action="hire_fashion_designer.php" class="fd-showcase">
                <input type="hidden" value="<?php echo $nic ?> " name="f_id">
                <div class="fd-card-item">
                  <div class="fd-card-img">               
                    <a href="hire_fashion_designer.php?f_id=<?php echo $row["nic"] ?>"><img src="/ucsc_2202_07/andum.lk/fashion_designer/profile_pictures/<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%" class="proDisp"></a>
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
                  
                  //retrieve fd table data
                  $loop_nic=$row["nic"];
                  $fd_sql="SELECT * FROM fashion_designer WHERE nic='$loop_nic' ";
                  $fd_res=mysqli_query($db, $fd_sql);
                  $t_row=mysqli_fetch_assoc($fd_res);
          ?>

          <!-- Dress box start -->
          <div class="col-4">
            <form method="get" action="hire_fashion_designer.php" class="design-showcase">
              <input type="hidden" value="<?php echo $nic ?> " name="f_id">
              <div class="fd-card-item">
              <div class="fd-card-img">               
                    <a href="hire_fashion_designer.php?f_id=<?php echo $row["nic"] ?>"><img src="/ucsc_2202_07/andum.lk/fashion_designer/profile_pictures/<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%" class="proDisp"></a>
                  </div>
                <div class="card-content">
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
          <!-- Dress box end-->
          
          <?php }
              }
            }
          ?>
        </div>
      </div>
      
    </div>

    <!--footer-->
    <?php require("../footer.php") ?>
</body>

</html>
