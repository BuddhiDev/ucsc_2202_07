<?php include("../server.php"); 

if(!isset($_SESSION['username'])){
	header("location:../login.php");
	exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tailor - Orders</title>
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        </head>
    <body>
        <div class="header">
            <h2>Tailor Orders</h2>
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
		
			<?php 
	
			$username = $_SESSION['username'];
			$sql = "SELECT * FROM orders WHERE t_username='$username'";
            $result=mysqli_query($db,$sql);

            if(mysqli_num_rows($result)>0)
            {
                echo "You have orders";
            }
			else
			{
				echo "You have no active orders";
			}

				?>
                

		</div>

    </body>
</html>