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
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php require("header.php") ?>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
    function(){
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
  <div class="container-box">
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
              <div class="card-description">LKR 2,500.00</div>
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

 <!--</div>-->

<?php require("footer.php")?>

</body>

</html>
