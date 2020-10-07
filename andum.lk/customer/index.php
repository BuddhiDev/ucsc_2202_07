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
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/dropdown.css">

</head>

<body>
  <div class="box">
    <header>
      <img class="logo" src="../logo.png" alt="logo" class="img-box">
      <?php require("../navbar_category.php")?>
      <nav>
        <ul class="nav-area">
          <li><a href="index.php">Home</a></li>
          <li><a href="dress_showcase.php">Dress Showcase</a></li>
          <li><a href="hired_list.php">Hired Tailors</a></li>
          <li><a href="purchases.php">Purchases</a></li>
        </ul>
      </nav>

      <div>
        <a class="cta" href="index.php?logout='1'"><button name="logout" class="loginbutton btn-full-w">Sign Out</button></a>
      </div>

  </div>



  </header>
  </div>
  <center>

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
          <div class="slider-box">
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

                        <?php echo $row["nic"] ?>
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

          <br />

      <?php
        }
      }
      ?>

    </div>

  </center>

  <!--footer-->
<?php require("footer.php")?>
</body>

</html>
