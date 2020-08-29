<?php include("../server.php"); 

if(!isset($_SESSION['nic'])){
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
            <h2>Tailor Dashboard</h2>
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

        <?php if(isset($_SESSION['nic'])): ?>
            <p>
                Welcome <strong><?php echo $_SESSION['nic']; ?></strong>
            </p>
            <div align="right"><a href="index.php?logout='1'" style="color:red;">Logout</a></div>

        <?php endif ?>    
        </div>
        <div>
          <h3>Hello Tailor! what are you going to do today?</h3>
        </div>
        <div>
          <p><br>
            <a href="inventory_list.php">Inventory Manage</a></p>
          <p><a href="order_list.php">Orders Manage</a></p>
        </div>
    </body>
</html>