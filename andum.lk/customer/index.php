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
    <title>andum.lk</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="box">
    <header>


            <img class="logo" src="../logo.png" alt="logo">
            <nav>
                <ul class="nav-area">
                    <li><a href="#">Explore</a></li>
                    <li><a href="#">Hired Tailors</a></li>
                    <li><a href="#">Hired Fashion Designer</a></li>
                    <li><a href="#">My orders</a></li>
                </ul>
            </nav>
            <!-- <div>
                <a class="cta" href="/ucsc_2202_07/andum.lk/login.php"><button>Sign In</button></a>
                <a class="cta" href="/ucsc_2202_07/andum.lk/signup.php"><button>Sign Up</button></a>

            </div> -->

        </div>



    </header>
</div>
<center>
    <br/>

<div class="main">
  <div class="columns">
    <div class ="row">

      <div class="content">

      <?php
			$username = $_SESSION['nic'];
			$t_type="0";
			$sql = "SELECT * FROM users WHERE type='$t_type'";
            $result=mysqli_query($db,$sql);

           if($result)
		   {
			   while ($row = mysqli_fetch_assoc($result)) {
        		$t_name = $row["nic"];
				    ?>
        <form method="post" action="index.php">
        <img src="../tailor1.jfif" alt="Avatar" style="width:200px">
        <h4><b>
         <label name="t_name">   
        <?php echo $row["fname"] ?> </label>
        </b></h4>
        <p>Tailor</p>

        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>

        <div>
          <a class="cta"><button name="hireT">Hire</button></a>  
        </div>
        </form>
        <br />

        <?php
               }
            }
		   ?>

  </div>
</div>
</div>
</div>
</center>
</body>
</html>