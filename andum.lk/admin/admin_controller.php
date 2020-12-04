<?php include("../server.php"); ?>

<?php

if(isset($_GET['nic']) ){
    $selected_c_id = mysqli_real_escape_string($db, $_GET['nic']);
    $_SESSION['selected_c_id']=$selected_c_id;
    header('location: customer_view.php');
}




















?>