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
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="box">
    <header>
      <img class="logo" src="../logo.png" alt="logo" class="img-box">
      <!-- <?php require("../navbar_category.php")?> -->
      <div class="wrapper">
      <nav>
        <ul class="nav-area">
          <li><a href="index.php">Home</a></li>
          <li><a href="dress_showcase.php">Dress Showcase</a></li>
          <li><a href="hired_list.php">Hired Tailors</a></li>
          <li class="dropdown">
            <a href="#">Shop Now</a>
            <ul class="menu-area">
              <ul>
                <h4>Ladies wear</h4>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Dresses</a></li>
              </ul>
              <ul>
                <h4>Gents wear</h4>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Dresses</a></li>
              </ul>
              <ul>
                <h4>Kids wear</h4>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Dresses</a></li>
              </ul>
            </ul>


          </li>
          <li><a href="purchases.php">Purchases</a></li>
        </ul>
      </nav>
      </div>
      

      <div>
        <a class="cta" href="cust_edit_profile.php"><button name="edit" class="loginbutton btn-full-w">Edit profile</button></a>
      </div>

      <div>
        <a class="cta" href="index.php?logout='1'"><button name="logout" class="loginbutton btn-full-w">Sign Out</button></a>
      </div>


  </div>



  </header>
  </div>
  

    <br />
    <?php include("../errors.php");
              ?>
    <div class="sliderbox-wrap">

      <?php
      $nic = $_SESSION['nic'];
      $fname = $_SESSION['fname'];
      $lname = $_SESSION['lname'];
      $t_type = "0";
      $sql = "SELECT * FROM users WHERE type='$t_type'";
      $result = mysqli_query($db, $sql);

      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $t_nic = $row["nic"];
      ?>
          <!-- <div class="slider-box">
            <form method="post" action="index.php" class="tailor-form">
              <table>
                <tr>
                  <td>
                    <img src="../tailor1.jfif" alt="Avatar" style="width:200px">
                  </td>
                  <td>
                    <h4><b>
                        <input type="hidden" value="<?php echo $row["nic"] ?> " name="t_nic">
                        <input type="hidden" value="<?php echo $row["fname"] ?> " name="t_fname">
                        <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                        <input type="hidden" value="<?php echo $fname ?> " name="c_fname">



                      
                      </b></h4>
                    <b>
                      <?php echo $row["fname"] ?> &nbsp;<?php echo $row["lname"] ?>
                    </b></h4>
                    <p>Tailor</p>

                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>

                    <div>
                      <button type="submit" name="hireT" class="loginbutton btn-full-w">Hire</button>
                    </div>
                  </td>
                </tr>
              </table>

            </form>
          </div>

          <br /> -->

      <?php
        }
      }
      ?>

      <!-- </div>  -->
<div class="container">
<h2>New Arrivels</h2>
  <div class="row">
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
              <a href="product.php"><img src="product1.jpg" alt="Avatar" style="width:100%"></a>
              </div>
              <div class="card-content">
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
                <img src="product1.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
                <img src="product1.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
        
    </div>
  </div>

<div class="container">
<h2>Top Rated Tailors</h2>
  <div class="row">
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
                <img src="product1.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
                <img src="product1.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
                <img src="product1.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>

  <!-- </div>  -->
<div class="container">
<h2>Top Rated fashion Designers</h2>
  <div class="row">
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
                <img src="product1.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
                <img src="product1.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
                <img src="product1.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <div class="card-title">Andrea Perera</div>
                <div class="card-description">
                    Casual Summer Top
                </div>
                <div class="card-description">
                    LKR 2,500
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>

    </div>

 

  <!--footer-->
<?php require("footer.php")?>
</body>

</html>
