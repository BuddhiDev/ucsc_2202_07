<?php include("server.php");

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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="loginstyle.css">

</head>

<body>
  <div class="box">
    <header>
      <img class="logo" src="logo.png" alt="logo" class="img-box">
      <nav>
        <ul class="nav-area">
          <li><a href="#">Explore</a></li>
          <li><a href="#">Hire a Tailor</a></li>
          <li><a href="#">Hire a Fashion Designer</a></li>
          <li><a href="/ucsc_2202_07/andum.lk/about_us.php">About Us</a></li>
        </ul>
      </nav>



  </div>



  </header>
  </div>
  <center>

    <br />
    <?php include("errors.php");
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
          <div class="slider-box">
            <form method="post" action="index.php" class="tailor-form">
              <table>
                <tr>
                  <td>
                    <img src="tailor1.jfif" alt="Avatar" style="width:200px">
                  </td>
                  <td>
                    <h4><b>

                        <input type="hidden" value="<?php echo $row["fname"] ?> " name="t_fname">

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

                    <!-- <div>
                      <button type="submit" name="hireT" class="loginbutton btn-full-w">Hire</button>
                    </div> -->
                  </td>
                </tr>
              </table>

            </form>
          </div>

          <br />

      <?php
        }
      }
      ?>

    </div>

  </center>

  <!--footer-->
  <div class="footer">
    <div class="footer-content">
      <div class="footer-section about">
        <img class="footer-logo" src="/ucsc_2202_07/andum.lk/logo.png" alt="logo">
        <h1 class="logo-txt"><span></span></h1>
        <div class="socials">
          <a href="#"><i class="fas fa-facebook"></i></a>
          <a href="#"><i class="fas fa-instagram"></i></a>
          <a href="#"><i class="fas fa- google+"></i></a>
        </div>
      </div>
      <div class="footer-section links">
        <ul>
          <a href="#">
            <li>HIRE A TAILOR</li>
          </a>
          <a href="#">
            <li>HIRE A FASHION DESIGNER</li>
          </a>
          <a href="#">
            <li>SHIPPING AND RETURNS</li>
          </a>
        </ul>
      </div>
      <div class="footer-section links2 ">
        <ul>
          <a href="#">
            <li>HIRE A TAILOR</li>
          </a>
          <a href="#">
            <li>HIRE A FASHION DESIGNER</li>
          </a>
          <a href="#">
            <li>SHIPPING AND RETURNS</li>
          </a>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; andum.lk
    </div>
  </div>
</body>

</html>
