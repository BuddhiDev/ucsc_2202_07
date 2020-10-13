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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>

<header>
      <nav class="navbar-main">
        <div class="navbar-logo">
          <img class="logo" src="../logo.png" alt="logo" class="img-box">
        </div>
        <div class="nav-item-middle">
          <ul class="nav-area">
            <li><a href="index.php">Explore</a></li>
            <li class="dropdown">
              <a href="dress_showcase.php">Shop Now</a>
              <ul class="menu-area">
                <ul>
                  <h4>Ladies wear</h4>
                  <li><a href="dresses.php">Dresses</a></li>
                  <li><a href="workware_ladies.php">Work Wear</a></li>
                  <li><a href="#">Denims</a></li>
                  <li><a href="#">Tops</a></li>
                  <li><a href="#">T Shirts</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
                <ul>
                  <h4>Gents wear</h4>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Denims</a></li>
                  <li><a href="workwear_gents.php">Work Wear</a></li>
                  <li><a href="#">T Shirts</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
                <ul>
                  <h4>Kids wear</h4>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">T shirsts</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
              </ul>
            </li>
          </ul>
        </div>
        <div class="box">
          <div class="nav_right">
            <ul>
              <li><i class="fas fa-user-circle"></i>
                <div class="dd_right">
                  <ul>
                    <li><a href="cust_edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                    <li><a href="hired_list.php"><i class="fas fa-users"></i>Hired Tailors</a></li>
                    <li><a href="#"><i class="fas fa-users"></i>Hired Fashion Designers</a></li>
                    <li><a href="purchases.php"><i class="fas fa-money"></i>Purchases</a></li>
                    <li><a href="#"><i class="fas fa-heart"></i>Favourites</a></li>
                    <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                  </ul>
                </div>
              <li class="nr_li"><i class="fas fa-envelope"></i></li>
            </ul>   
          </div>
        </div>
      </nav>
    </header>


<script>
  document.querySelector(".nav_right ul li").addEventListener("click",
  function(){
    this.classList.toggle("active");
  })
</script>

    <br />

  <!--<div class="box">
    <header>
      <img class="logo" src="/ucsc_2202_07/andum.lk/logo.png" alt="logo">
      <nav>
        <ul class="nav-area">
          <li><a href="index.php">Home</a></li>
          <li><a href="hired_list.php">Hired Tailors</a></li>
          <li><a href="purchases.php">Purchases</a></li>
        </ul>
      </nav>
      <div>
        <a class="cta" href="/ucsc_2202_07/andum.lk"><button class="loginbutton btn-full-w" s>Sign Out</button></a>
      </div>
    </header>
  </div> -->
  <!-- <div class="wrapper">
        <aside class="bg-gra-200 border-r border-gray-300">Left</aside>
        <main>Right</main>
    </div> -->
  <div class="search-container">
    <div class="form-field-inline">
      <label for="uname" class="field-label-inline">Search by Name</label>
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
  <!--<div class="sliderbox-wrap"> -->
  <div class="container">
<h2>New Arrivels</h2>
  <div class="row">
    <?php
    $nic = $_SESSION['nic'];
    $sql = "SELECT * FROM dress_showcase";
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
                <img src="product1.jpg" alt="Avatar" style="width:100%">
              </div>
              <div class="card-content">
                <div class="card-title"><?php echo $row["title"] ?></div>
                <div class="card-description">
                    Auto-layout for flexbox grid columns also means you can set the width of one column 
                    and have the sibling columns automatically resize around it.
                </div>
              </div>
            </div>
          </form>
        </div>

        <?php
      }
    }
    ?>
    <!-- Dress box end-->
    </div>
  </div>



 <a href="cart.php"><button class="loginbutton btn-full-w" >View Cart</button></a>

 <!--</div>-->



<?php require("footer.php")?>

</body>

</html>
