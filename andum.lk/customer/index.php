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
  <title>Andum.lk - Customer</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/customerstyles.css">
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
<!--header-->
<?php require("header.php") ?>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

  <?php include("../errors.php");
  ?>
  <div class="sliderbox-wrap">
    <div class="customer-container-box">
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
      
      <div class="customer-cover">
        <div class="row">
          <h2 class="customer-heading">New Arrivals</h2>
        </div>
        <div class="row">
        <?php
          $nic = $_SESSION['nic'];

          // Check condition if this is search request or not
          if ($search != true) {

            // Read all dressess
            $sql = "SELECT * FROM dress_showcase";
            $result = mysqli_query($db, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-4">
                  <form method="get" action="index.php" class="dress-showcase">
                    <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
                    <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                    
                    <div class="card-item">
                      <div class="card-img">
                        <a href="index.php?dress_id=<?php echo $row["dress_id"] ?>"> <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%"></a>
                      </div>
                      <div class="card-content">
                        <div class="card-title"><?php echo $row["title"] ?></div>
                        <div class="card-description">LKR <?php echo $row["price"]?>.00</div>
                      </div>
                    </div>
                  </form>
                </div>

                <?php
              }
            }
          }
          else {

            //check whether this request is for category filter or keyword search
            if (!$category_filter) {

              //Read using search keyword
              $sql = "SELECT * FROM dress_showcase WHERE title LIKE '%$keyword%'";
              $result = mysqli_query($db, $sql);
              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) { 
                ?>

                <div class="col-4">
                  <form method="post" action="index.php" class="dress-showcase">
                    <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
                    <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                    <div class="card-item">
                      <div class="card-img">
                      <a href="index.php?dress_id=<?php echo $row["dress_id"] ?>"> <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%"></a>
                      </div>
                      <div class="card-content">
                        <div class="card-title"><?php echo $row["title"] ?></div>
                        <div class="card-description">LKR <?php echo $row["price"]?>.00</div>
                      </div>
                    </div>
                  </form>
                </div>

                <?php
                }
              }
            } 
            else {

                //Read using selected category
                $sql = "SELECT * FROM dress_showcase WHERE category LIKE '%$selected_dress_category%'";
                $result = mysqli_query($db, $sql);
                if ($result) {
                      while ($row = mysqli_fetch_assoc($result)) { 
                      ?>

                      <div class="col-4">
                        <form method="post" action="index.php" class="dress-showcase">
                          <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
                          <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                          <div class="card-item">
                            <div class="card-img">
                            <a href="index.php?dress_id=<?php echo $row["dress_id"] ?>"> <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%"></a>
                            </div>
                            <div class="card-content">
                              <div class="card-title"><?php echo $row["title"] ?></div>
                              <div class="card-description">LKR <?php echo $row["price"]?>.00</div>
                            </div>
                          </div>
                        </form>
                      </div>

                      <?php

                      }
                }
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
