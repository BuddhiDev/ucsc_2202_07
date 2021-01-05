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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="box">
    <?php require("header.php") ?>
    </div>

    <div class="container-box">
  <h2>WORK WEAR</h2>
  <div class="row">
        <div class="col-4">
          <form method="post" action="index.php" class="dress-showcase">
            <div class="card-item">
              <div class="card-img">
              <a href="product.php"><img src="/ucsc_2202_07/andum.lk/images/wg-01.jpg" alt="Avatar" style="width:100%"></a>
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
                <img src="/ucsc_2202_07/andum.lk/images/wg-01.jpg" alt="Avatar" style="width:100%">
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
                <img src="/ucsc_2202_07/andum.lk/images/wg-01.jpg" alt="Avatar" style="width:100%">
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

    <!--footer-->
    <?php require("../footer.php")?>
</body>
</html>