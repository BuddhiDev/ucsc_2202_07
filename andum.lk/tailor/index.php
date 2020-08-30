<?php include("../server.php"); 

if(!isset($_SESSION['nic'])){
	header("location:../login.php");
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk - Tailor</title>
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
</head>
<body>
    <div class="box">
      <header>
        <img class="logo" src="../logo.png" alt="logo">
        <nav>
          <ul class="nav-area">
          <li><a href="#">Home</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">Hire a Fashion Designer</a></li>
            <li><a href="dress-showcase.php">Dress Showcase</a></li>
            <li><a href="Manage_order.php">Manage order</a></li>
          </ul>
        </nav>
        <div>
        <a class="cta" href="index.php?logout='1'"><button name="logout" class="loginbutton btn-full-w">Sign Out</button></a>
        </div>
      </header>
    </div>
</body>
</html>
