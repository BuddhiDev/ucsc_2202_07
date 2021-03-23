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
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/stlylesloginstyle.css">
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

<div class="container-box">

  <div class="fd-dropdown">
    <button class="fd-dropbtn">All</button>
    <div class="fd-dropdown-content">
      <a href="#">Casual Dresses Designs</a>
      <a href="#">Kids Designs</a>
      <a href="#">Pant Designs</a>
    </div>
  </div>
  <!-- <select class="fd-dropdown">
    <option class="fd-dropdown-option">All</option>
    <option class="fd-dropdown-option">Casual Dresses</option>
    <option class="fd-dropdown-option">Pants</option>
  </select> -->
  
  <div class="row">
    <div class="col-4">
      <form method="post" action="index.php" class="dress-showcase">
        <div class="card-item">
          <div class="card-img">
            <img src="/ucsc_2202_07/andum.lk/images/DesignSamples/design1.jpg" alt="Avatar" class="card-img-style">
          </div>
          <div class="card-content">
            <div class="card-title">Summer casual top</div>
            <div class="card-description">
                <span>LKR 1,500.00</span>
            </div>
            <div class="">
              <a class="" href=""><button name="logout" class="btn-primary-sm">ADD TO CART</button></a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-4">
      <form method="post" action="index.php" class="dress-showcase">
        <div class="card-item">
          <div class="card-img">
            <img src="/ucsc_2202_07/andum.lk/images/DesignSamples/design2.jpg" class="card-img-style" alt="Avatar">
          </div>
          <div class="card-content">
            <div class="card-title">Andrea Perera</div>
            <div class="card-description">
                
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-4">
      <form method="post" action="index.php" class="dress-showcase">
        <div class="card-item">
          <div class="card-img">
            <img src="/ucsc_2202_07/andum.lk/images/DesignSamples/design1.jpg" alt="Avatar" class="card-img-style">
          </div>
          <div class="card-content">
            <div class="card-title">Andrea Perera</div>
            <div class="card-description">
                Auto
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-4">
      <form method="post" action="index.php" class="dress-showcase">
        <div class="card-item">
          <div class="card-img">
            <img src="/ucsc_2202_07/andum.lk/images/DesignSamples/design1.jpg" alt="Avatar" class="card-img-style">
          </div>
          <div class="card-content">
            <div class="card-title">Andrea Perera</div>
            <div class="card-description">
                
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

  <?php require("../footer.php")?>

</body>
</html>