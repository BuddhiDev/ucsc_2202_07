<?php include("../server.php"); 

if(!isset($_SESSION['username'])){
	header("location:../login.php");
	exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tailor - Inventory</title>
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
        </head>
    <body>
        <div class="header">
            <h2>Tailor Inventory</h2>
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
			$sql = "SELECT * FROM products WHERE username='$username'";
            $result=mysqli_query($db,$sql);

            if(mysqli_num_rows($result)>0)
            {
                echo "You have products";
            }

			?>
                <form method="post" action="ineventory_list.php">

            <div class="input-group">
                <label>Product Name:</label><br>
                <input type="text" name="pname" ><br>
            </div>
            <div class="input-group">
                <label>Price:</label><br>
                <input type="text" name="price"><br><br>
            </div>   
			<div class="input-group">
                <label>Category:</label><br>
                <input type="text" name="category"><br><br>
            </div>  
            <div class="input-group">
            <button type="submit" name="add_product" class="btn">Add a Product</button>
            </div> 
            
        </form>

		</div>

    </body>
</html>