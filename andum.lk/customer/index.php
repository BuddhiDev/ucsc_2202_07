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
          <form method="post" action="product-view.php">
            <div class="form-field-inline">
              <!-- <label for="searchname" class="field-label-inline">Search...</label> -->
              <input type="text" class="field-value-inline" name="q" placeholder="Search">
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
          if ($search != true) 
          {

            // Read all dressess
            $sql = "SELECT * FROM dress_showcase ORDER BY dress_id DESC LIMIT 0,4";
            $result = mysqli_query($db, $sql);

            if ($result) 
            {
              while ($row = mysqli_fetch_assoc($result)) 
              {
                ?>
                <div class="col-3">
                  <form method="get" action="index.php">
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
          else 
          {

            //check whether this request is for category filter or keyword search
            if (!$category_filter) 
            {

              //Read using search keyword
              $sql = "SELECT * FROM dress_showcase WHERE title LIKE '%$keyword%'";
              $result = mysqli_query($db, $sql);
              if ($result) 
              {
                while ($row = mysqli_fetch_assoc($result)) 
                { 
                  ?>

                  <div class="col-3">
                    <form method="post" action="product-view.php">
                      <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
                      <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                      <div class="card-item">
                        <div class="card-img">
                          <a href="product-view.php?dress_id=<?php echo $row["dress_id"] ?>"> <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%"></a>
                        </div>
                        <div class="card-content">
                          <div class="card-title"><?php echo $row["title"] ?></div>
                          <div class="card-description">LKR <?php echo $row["price"]?>.00</div>
                        </div>
                        </div>
                      </div>
                    </form>
                  </div>

                  <?php
                }
              }
            } 
            else 
            {

              //Read using selected category
              $sql = "SELECT * FROM dress_showcase WHERE category LIKE '%$selected_dress_category%'";
              $result = mysqli_query($db, $sql);
              if ($result) 
              {
                while ($row = mysqli_fetch_assoc($result)) 
                { 
                  ?>

                  <div class="col-3">
                    <form method="post" action="product-view.php">
                      <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
                      <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                      <div class="card-item">
                        <div class="card-img">
                          <a href="product-view.php?dress_id=<?php echo $row["dress_id"] ?>"> <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%"></a>
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
      <div class="text-view-more">
        <a href="new-arrivals.php">view more +</a>
      </div>
    </div>

    <div class="customer-container-box">
      <div class="customer-cover">
        <div class="row">
          <h2 class="customer-heading">Top Rated Tailors</h2>
        </div>
      <div class="row">
        <?php
          $nic = $_SESSION['nic'];


          // Check condition if this is search request or not
          if ($search != true) {
            // Read all dressess
            $s = "SELECT * FROM users WHERE type='0' LIMIT 0,4";
            $res = mysqli_query($db, $s);

            if ($res) {
              while ($row = mysqli_fetch_assoc($res)) {

          //retrieve tailor table data
          $loop_nic=$row["nic"];
          $t_sql="SELECT * FROM tailors WHERE nic='$loop_nic' ORDER BY rate DESC";
          $t_res=mysqli_query($db, $t_sql);
          $t_row=mysqli_fetch_assoc($t_res);

        ?>
        <!-- Dress box start -->
        <div class="col-3">
          <form method="get" action="hire_tailor.php">
            <input type="hidden" value="<?php echo $nic ?> " name="nic">
            <div class="card-item">
              <div class="card-img">
                <a href="hire_tailor.php?t_nic=<?php echo $row["nic"] ?>"><img src="/ucsc_2202_07/andum.lk/tailor/profile_pictures/<?php echo $row["image"]; ?>" alt="Ava" style="width:100%" class="proDisp"></a>    
              </div>
              <div class="card-content">
              
                <div class="card-title"><?php echo $row["fname"]." ".$row["lname"] ?></div>
                <div class="card-description">
                  
                </div>
              </div>
            </div>
          </form>
          
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

        <div class="col-3">
          <form method="get" action="index.php" class="dress-showcase">
            <input type="hidden" value="<?php echo $nic ?> " name="t_nic">
            <div class="fd-card-item">
              <div class="fd-card-img">
              <a href="hire_tailor.php?t_nic=<?php echo $row["nic"] ?>"><img src="/ucsc_2202_07/andum.lk/tailor/profile_pictures/<?php echo $row["image"]; ?>" alt="Ava" style="width:100%" class="proDisp"></a>
              </div>
              <div class="fd-card-content">
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
      <div class="text-view-more">
        <a href="hire_tailor.php">view more +</a>
      </div>
    </div>

    <div class="customer-container-box">
      <div class="customer-cover">
        <div class="row">
          <h2 class="customer-heading">Top Rated Fashion Designers</h2>
        </div>
        <div class="row">
        <?php
          $nic = $_SESSION['nic'];


          // Check condition if this is search request or not
          if ($search != true) {
            // Read all dressess
            $s = "SELECT * FROM users WHERE type='2' LIMIT 0,4";
            $res = mysqli_query($db, $s);

            if ($res) {
              while ($row = mysqli_fetch_assoc($res)) {

          //retrieve tailor table data
          $loop_nic=$row["nic"];
          $t_sql="SELECT * FROM fashion_designer WHERE nic='$loop_nic' ORDER BY rate DESC";
          $t_res=mysqli_query($db, $t_sql);
          $t_row=mysqli_fetch_assoc($t_res);

        ?>
        <!-- Dress box start -->
        <div class="col-3">
          <form method="get" action="hire_fashion_designer.php">
            <input type="hidden" value="<?php echo $nic ?> " name="nic">
            <div class="card-item">
              <div class="card-img">
                <a href="fd.php?t_nic=<?php echo $row["nic"] ?>"><img src="/ucsc_2202_07/andum.lk/fashion_designer/profile_pictures/<?php echo $row["image"]; ?>" alt="Ava" style="width:100%" class="proDisp"></a>    
              </div>
              <div class="card-content">
              
                <div class="card-title"><?php echo $row["fname"]." ".$row["lname"] ?></div>
                <div class="card-description">
                  
                </div>
              </div>
            </div>
          </form>
          
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
          $t_sql="SELECT * FROM fashion_designer WHERE nic='$loop_nic' ";
          $t_res=mysqli_query($db, $t_sql);
          $t_row=mysqli_fetch_assoc($t_res);

        ?>

        <div class="col-3">
          <form method="get" action="index.php" class="dress-showcase">
            <input type="hidden" value="<?php echo $nic ?> " name="t_nic">
            <div class="fd-card-item">
              <div class="fd-card-img">
              <a href="fd.php?t_nic=<?php echo $row["nic"] ?>"><img src="/ucsc_2202_07/andum.lk/fashion_designer/profile_pictures/<?php echo $row["image"]; ?>" alt="Ava" style="width:100%" class="proDisp"></a>
              </div>
              <div class="fd-card-content">
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
        <!-- <div class="row">
          <?php
          $nic = $_SESSION['nic'];

          // Check condition if this is search request or not
          if ($search != true) 
          {

            // Read all dressess
            $sql = "SELECT * FROM dress_showcase ORDER BY dress_id DESC LIMIT 0,4";
            $result = mysqli_query($db, $sql);

            if ($result) 
            {
              while ($row = mysqli_fetch_assoc($result)) 
              {
                ?>
                <div class="col-3">
                  <form method="get" action="index.php">
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
          else 
          {

            //check whether this request is for category filter or keyword search
            if (!$category_filter) 
            {

              //Read using search keyword
              $sql = "SELECT * FROM dress_showcase WHERE title LIKE '%$keyword%'";
              $result = mysqli_query($db, $sql);
              if ($result) 
              {
                while ($row = mysqli_fetch_assoc($result)) 
                { 
                  ?>

                  <div class="col-3">
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
                      </div>
                    </form>
                  </div>

                  <?php
                }
              }
            } 
            else 
            {

              //Read using selected category
              $sql = "SELECT * FROM dress_showcase WHERE category LIKE '%$selected_dress_category%'";
              $result = mysqli_query($db, $sql);
              if ($result) 
              {
                while ($row = mysqli_fetch_assoc($result)) 
                { 
                  ?>

                  <div class="col-3">
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
        </div> -->
      </div>
      <div class="text-view-more">
        <a href="hire_fashion_designer.php">view more +</a>
      </div>
    </div>

  </div>
    <!--footer-->
    <?php require("../footer.php") ?>
</body>

</html>
