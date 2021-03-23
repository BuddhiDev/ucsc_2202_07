<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>  

<?php include("../errors.php");
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Tailor</title>
  <link rel="shortcut icon" href="../logo.png">
  <link rel="stylesheet" href="ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/customerstyles.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
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

  <!--  <div class="search-container">
        <form method="post">
          <div class="form-field-inline">
            <input type="text" class="field-value-inline" name="q" placeholder="Search...">
            <button type="submit" class="search-input-group-btn" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </form>
    </div>-->

<div class="fd-container-box">

<?php
    
    $nic = $_SESSION['nic'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $sql = "SELECT * FROM users u INNER JOIN fashion_designer fd WHERE u.nic=fd.nic AND u.nic= '$nic'";
    $result = mysqli_query($db, $sql);
    if ($result) {
      $row = mysqli_fetch_assoc($result)
    
    ?>

<div class="row">
      <div class="fd-title">
        <div class="fd-card-img">
          <img src="/ucsc_2202_07/andum.lk/fashion_designer/profile_pictures/<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%" class="proDisp">
        </div>
        <div class="fd-rightside">
            <div  class="fd-title-box">
              <form method="post">
                <p style="color: black; font-size: 20px; margin-top:10px"><?php echo $row["fname"]." ".$row["lname"] ?></p>
                  <div class="fd-title-box">
                    Please explore below Featured images to get Idea about me..!
                </div>
              </form>
            </div>
        </div>
      </div>       
    </div> 

  <!-- <div class=fd-profile-row>
    <div class="profile-pic">
        <div class="pic">
            <img src="/ucsc_2202_07/andum.lk/images/profile/photo1.png" id="profileDisplay" name="profileDisplay" onclick="triggerClick()" alt="" class="proDisp">
        </div>        
        <label for="profile_pictures"></label>
        <input type="file" name="profilepic" value="" onchange="displayImage(this)" id="profilepic" class="fd-profile-pic-control">
        <div>
            <label for="">Thashwini</label>
        </div>
    </div>
  </div> -->

  <center>
      <!-- <div class=row>    -->
        <h3 class="fashion-designer-headding">My Featured Images</h3>
      <!-- </div> -->
    </center>
    
    <div class=fd-profile-row2>
      <div class="col-4">
        <form method="get" action="index.php" class="dress-showcase">
          <div class="fd-featured-card-item">
              <div class="card-img">
              <a href=""><img src="/ucsc_2202_07/andum.lk/fashion_designer/sample_images/<?php echo $row["image1"]; ?>" alt="Avatar" style="width:100%"></a>
              </div>
              <div class="card-content">
              <div class="card-title"></div>
              <div class="card-description"></div>
              </div>
          </div>
        </form>
      </div>
      <div class="col-4">
        <form method="get" action="index.php" class="dress-showcase">
          <div class="fd-featured-card-item">
            <div class="card-img">
              <a href=""><img src="/ucsc_2202_07/andum.lk/fashion_designer/sample_images/<?php echo $row["image2"]; ?>" alt="Avatar" style="width:100%"></a>
            </div>
            <div class="card-content">
            <div class="card-title"></div>
            <div class="card-description"></div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-4">
        <form method="get" action="index.php" class="dress-showcase">
          <div class="cfd-featured-card-item">
              <div class="card-img">
              <a href=""> <img src="/ucsc_2202_07/andum.lk/fashion_designer/sample_images/<?php echo $row["image3"]; ?>" alt="Avatar" style="width:100%"></a>
              </div>
              <div class="card-content">
              <div class="card-title"></div>
              <div class="card-description"></div>
              </div>
          </div>
        </form>
      </div>
     
      
      <?php } ?>
    </div>
    
  </div>


  <?php require("../footer.php")?>

</body>
</html>
