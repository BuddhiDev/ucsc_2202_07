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
  <title>Andum.lk - Dress Showcase</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
</head>

<body>
  <div class="box">
    <header>
      <img class="logo" src="/ucsc_2202_07/andum.lk/logo.png" alt="logo">
      <nav>
        <ul class="nav-area">
          <li><a href="index.php">Home</a></li>
          <li><a href="dress_showcase.php">Dress Showcase</a></li>
          <li><a href="hired_list.php">Hired Tailors</a></li>
          <li><a href="purchases.php">Purchases</a></li>
        </ul>
      </nav>
      <div>
        <a class="cta" href="/ucsc_2202_07/andum.lk"><button class="loginbutton btn-full-w" s>Sign Out</button></a>
      </div>
    </header>
  </div>
  <!-- <div class="wrapper">
        <aside class="bg-gra-200 border-r border-gray-300">Left</aside>
        <main>Right</main>
    </div> -->
  <div class="search-container">
    <div class="form-field-inline">
      <label for="uname" class="field-label-inline">Search by category</label>
      <input type="text" class="field-value-inline" name="uname" required>
    </div>
  </div>

  <div class="btn-panel-center">
    <!-- <button class="facebookbutton btn-full-w" type="submit">SIGN UP WITH FACEBOOK </button>
            <button class="googlebutton btn-full-w" type="submit">SIGN UP WITH GOOGLE </button> -->
    <button class="loginbutton btn-full-w" type="submit">All</button>
  </div>

  <!-- <section class="products">
        <div class="product-container">
            <h1>ALL</h1>
            <div class="row">
                <div class="col-md-3">
                     <div class="img-box"></div>
                     <img src="product1.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </section> -->

  <!-- <div class="card">
  <img src="product1.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Tailored Jeans</h1> -->
  <!-- <p class="price">$19.99</p>
  <p>Some text about the jeans..</p>
  <p><button>Add to Cart</button></p> -->
  <!-- </div> -->
  <div class="sliderbox-wrap">

    <?php
    $nic = $_SESSION['nic'];
    $sql = "SELECT * FROM dress_showcase";
    $result = mysqli_query($db, $sql);

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>

    <div>
      <div class="f1"></div>
    </div>
        <div class="slider-box">
          <form method="post" action="dress_showcase.php" class="tailor-form">
            <table>
              <tr>
                <td>
                  <img src="product1.jpg" alt="Avatar" style="width:200px">
                </td>
                <td>
                  <h4><b>
                      <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
                      <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                      Category: <?php echo $row["category"] ?> <br />
                      Title: <?php echo $row["title"] ?> <br />
                      Items in stock: <?php echo $row["amount"] ?>

                    </b></h4>

                  <div>
                    <button class="loginbutton btn-full-w" name="addTocart" <?php if ($item_added =='true'){ ?> disabled <?php   } ?>><?php if ($item_added =='true'){echo "Added To Cart";}else{echo"Add To Cart";}?></button>
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

 <a href="cart.php"><button class="loginbutton btn-full-w" >View Cart</button></a>

  </div>



<?php require("footer.php")?>

</body>

</html>
