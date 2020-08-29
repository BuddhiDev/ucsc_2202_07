<?php include("../server.php"); 

if(!isset($_SESSION['username'])){
	header("location:../login.php");
	exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Andum.LK - Tailor</title>
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        </head>
<body>
        <div class="header">
            <h2>Customer Dashboard</h2>
        </div>    
        
        <div class="content">

        <?php if(isset($_SESSION['success'])): ?>
                <div class="error success">
                    <h3>
                        <?php
                            echo $_SESSION['success'];
                            unset ($_SESSION['success']);
                        ?>
                    </h3>
                </div>    
        <?php endif ?>

        <?php if(isset($_SESSION['username'])): ?>
            <p>
                Welcome <strong><?php echo $_SESSION['username']; ?></strong>
            </p>
            <div align="right"><a href="index.php?logout='1'" style="color:red;">Logout</a></div>

        <?php endif ?>    
        </div>
        <div>
          <h3>Hello Customer! Checkout our best tailors</h3>
        </div>
        <div>
          <p><br>
          </p>
        </div>
		
	<div>
		<?php
			$username = $_SESSION['username'];
			$t_type="0";
			$sql = "SELECT * FROM users WHERE type='$t_type'";
            $result=mysqli_query($db,$sql);

           if($result)
		   {
			   while ($row = mysqli_fetch_assoc($result)) {
        		$t_name = $row["username"];
				    ?>
			<form method="post" action="index.php">
				   <div class="input-group">
					<input type="text" name="t_name" value="<?php echo $t_name ; ?>" readonly><br> 
            		<button type="submit" name="hireT" class="btn">Hire Tailor</button>
            		</div> 
			</form>
		<?php
			   }
		   }

	
	?>
	
	</div>
</body>
</html>