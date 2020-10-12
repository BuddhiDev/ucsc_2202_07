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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
.checked {
  color: orange;
}
</style>

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
        <a class="cta" href="cust_edit_profile.php"><button name="edit" class="loginbutton btn-full-w">Edit profile</button></a>
      </div>

      <div>
        <a class="cta" href="index.php?logout='1'"><button name="logout" class="loginbutton btn-full-w">Sign Out</button></a>
      </div>


  </div>



  </header>
  </div>


  <!--footer-->
<?php require("footer.php")?>
</body>

</html>