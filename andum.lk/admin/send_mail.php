<?php  include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>
<?php include("admin_controller.php"); ?> 


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
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>
    * {
        margin: 0; padding: 0;
        font-family: sans-serif;
        box-sizing: border-box;
    }
    .container {
        width: 600px;
        margin: 20px auto;
    }
    h1, p {
        margin-bottom: 15px;
    }
    label {
        display: block;
    }
    input, textarea {
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }
</style>
</head>


<body>
<header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="../logo.png" alt="logo" class="img-box">
      </div>
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                  <!--<li><a href="edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>-->
                  <li><a href="index.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>
              </div>
            </li>
            <!--<li><i class="fas fa-envelope"></i></li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>-->
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

<div class="container">
<?php
  $selected_c_id = $_SESSION['selected_c_id'];
  $nic = $_SESSION['selected_c_id'];
 
  $sql_sm = "SELECT * FROM users WHERE nic='$selected_c_id' ";
  $result = mysqli_query($db, $sql_sm);
  if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
    
		<h1>Warning message</h1>
		<form action="send_mail.php" method="post">
			<p>
				<label for="fullname">From *:</label>
				<input type="text" value="<?php echo "Andum.lk Admin-"?>" class="field-value-inline" name="aname" require>
			</p>

			<p>
				<label for="email">To *:</label>
				<input type="text" value="<?php echo $row["email"]?>" class="field-value-inline" name="email" require>
			</p>

			<p>
				<label for="subject">Subject *:</label>
				<input type="text" name="subject" value="<?php echo "Warning message about suspending your account"?>" id="subject" readonly>
			</p>

			<p>
				<label for="message">Message *: </label>
				<textarea name="message" id="message" cols="30" rows="10" required></textarea>
			</p>
			<p>
            <button type="submit" name="send_mail" class="loginbutton btn-full-w">Send Message</button>
			</p>


		</form>


	</div>
  <?php } } ?>

  <?php require("../footer.php") ?>
</body>
</html>
