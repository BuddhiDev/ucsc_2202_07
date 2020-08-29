<?php include("file:///C|/xampp/htdocs/AndumLK/server.php"); 

if(!isset($_SESSION['username'])){
	header("location:../login.php");
	exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Andum.LK - Tailor</title>
        <link rel="stylesheet" type="text/css" href="file:///C|/xampp/htdocs/AndumLK/styles/style.css">
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

        <?php if(isset($_SESSION['username'])): ?>
            <p>
                Welcome <strong><?php echo $_SESSION['username']; ?></strong>
            </p>
            <div align="right"><a href="file:///C|/xampp/htdocs/AndumLK/tailor/index.php?logout='1'" style="color:red;">Logout</a></div>

        <?php endif ?>    
        </div>
        <div>
          <h3>Hello Tailor! what are you going to do today?</h3>
        </div>
        <div>
          <p><br>
            <a href="file:///C|/xampp/htdocs/AndumLK/tailor/inventory_list.php">Inventory Manage</a></p>
          <p><a href="file:///C|/xampp/htdocs/AndumLK/tailor/order_list.php">Orders Manage</a></p>
        </div>
    </body>
</html>