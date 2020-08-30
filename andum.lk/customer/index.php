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
    <title>Andum.lk - Customer</title>
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">

</head>
<body>
    <div class="box">
    <header>


            <img class="logo" src="../logo.png" alt="logo" class="img-box">
            <nav>
                <ul class="nav-area">
                    <li><a href="#">Explore</a></li>
                    <li><a href="/ucsc_2202_07/andum.lk/customer/hired_list.php">Hired Tailors</a></li>
                    <li><a href="#">Hired Fashion Designer</a></li>
                    <li><a href="#">My orders</a></li>
                </ul>
            </nav>

            <div>
          <a class="cta" href="index.php?logout='1'"><button name="logout" class="loginbutton btn-full-w">Sign Out</button></a>
        </div>
            <!-- <div>
                <a class="cta" href="/ucsc_2202_07/andum.lk/login.php"><button>Sign In</button></a>
                <a class="cta" href="/ucsc_2202_07/andum.lk/signup.php"><button>Sign Up</button></a>

            </div> -->

        </div>



    </header>
</div>
<center>
    <br/>

<!-- <div class="main">
  <div class="columns">
    <div class ="row"> -->

<div class="sliderbox-wrap">
  

      <?php
      $nic = $_SESSION['nic'];
      $fname = $_SESSION['fname'];
      $lname = $_SESSION['lname'];
      $t_type="0";
			$sql = "SELECT * FROM users WHERE type='$t_type'";
      $result=mysqli_query($db,$sql);

      if($result)
		   {
			   while ($row = mysqli_fetch_assoc($result)) {
        		$t_nic = $row["nic"];
            ?>
            <div slider-box>
            <form method="post" action="index.php">
        <img src="../tailor1.jfif" alt="Avatar" style="width:200px">
        <h4><b>
         <input type="hidden" value="<?php echo $row["nic"] ?> " name="t_nic">
         <input type="hidden" value="<?php echo $row["fname"] ?> " name="t_fname">
         <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
         <input type="hidden" value="<?php echo $fname ?> " name="c_fname">

         <?php echo $row["nic"] ?>  
        </b></h4>
        <b>
         <?php echo $row["fname"] ?>	&nbsp;<?php echo $row["lname"] ?>  
        </b></h4>
        <p>Tailor</p>

        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>

        <div>
          <a class="cta"><button name="hireT" class="loginbutton btn-full-w">Hire</button></a>  
        </div>
        </form>
            </div>
        
        <br />

        <?php
               }
            }
		   ?>

  </div>
<!-- </div>
</div>
</div> -->
</center>
</body>
</html>