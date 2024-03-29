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
  <title>Andum.lk - Tailor</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>
    .search-btn {
      background-color: white;
      color: #EB2188;
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

  <?php 
    include("../errors.php");
  ?>

<div class="tailor-container-box">
  
  <div class="tailor-cover">
    
      <div class="row">
        <div class="search-container">
          <form method="post">
            <div class="form-field-inline">
              <label for="searchname" class="field-label-inline">Search...</label>
              <input type="text" class="field-value-inline" name="q">
              <button type="submit" class="search-btn" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </form>
        </div>
      </div>

      <div class="reject-row">
        <h2 class="admin-header"><b>Rejected Dresses</b></h2><br>
      </div>
      <div class="reject-row">
        <h3><p style="border:3px; border-style:solid; border-color:black; padding: 1em;"> Dresses in this section have been rejected by the administrator. It occurs for one of the following reasons.<br>
        <br>1.If the quantity which has given by tailor is equal to zero.
        <br>2.If the given detailos, such as, dress title is not suitable for a dress
        <br>3.If the given image of the dress is not suitable.</p></h3> 
      </div>

    <div class="row">
      <?php
        $nic = $_SESSION['nic'];

        // Check condition if this is search request or not
        if ($search != true) {

        // Read all dressess
        $sql = "SELECT * FROM rejected_dress WHERE t_nic='$nic'";
        $result = mysqli_query($db, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
      ?>

      <!-- Dress box start -->
      <div class="col-4">
        <form method="get" action="rejected_dress.php" class="dress-showcase">
          <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
          <input type="hidden" value="<?php echo $nic ?> " name="c_nic">

          <div class="card-item">
            <div class="card-img">
            <a href="rejected_dress.php?view_reject_dress_id=<?php echo $row["dress_id"] ?>"><img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%"></a>
            </div>
            <div class="card-content">
              <div class="card-title"><?php echo $row["title"] ?></div>
              <div class="card-description">LKR <?php echo $row["price"]?>.00</div>
            </div>
          </div>
        </form>
      </div>
      <!-- Dress box end-->

      <?php
            }
          }
        } else {

          //check whether this request is for category filter or keyword search
          if (!$category_filter) {

            //Read using search keyword
            $sql = "SELECT * FROM rejected_dress WHERE t_nic='$nic' && title LIKE '%$keyword%'";
            $result = mysqli_query($db, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
      ?>

      <!-- Dress box start -->
      <div class="col-4">
        <form method="post" action="index.php" class="dress-showcase">
          <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
          <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
          <div class="card-item">
            <div class="card-img">
            <a href="rejected_dress.php?view_reject_dress_id=<?php echo $row["dress_id"] ?>"><img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%">
            </div>
            <div class="card-content">
              <div class="card-title"><?php echo $row["title"] ?></div>
              <div class="card-description">LKR <?php echo $row["price"]?>.00</div>
            </div>
          </div>
        </form>
      </div>
      <!-- Dress box end-->

      <?php
              }
            }
          } else {
            
            //Read using selected category
            $sql = "SELECT * FROM rejected_dress WHERE t_nic='$nic' && category LIKE '%$selected_dress_category%'";
            $result = mysqli_query($db, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) { 
      ?>

      <!-- Dress box start -->
      <div class="col-4">
        <form method="post" action="index.php" class="dress-showcase">
          <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
          <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
          <div class="card-item">
            <div class="card-img">
            <a href="rejected_dress.php?view_reject_dress_id=<?php echo $row["dress_id"] ?>"><img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%"></a>
            </div>
            <div class="card-content">
              <div class="card-title"><?php echo $row["title"] ?></div>
              <div class="card-description">LKR <?php echo $row["price"]?>.00 </div> 
            </div>
          </div>
        </form>
      </div>
      <!-- Dress box end-->

      <?php

            }
          }
        }
      }
      ?>
    </div>
  </div>
    
</div>


  <?php require("../footer.php")?>
</body>

</html>