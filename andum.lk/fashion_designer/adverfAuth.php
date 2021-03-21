<?php

session_start();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'andum');

//fd order authentication
if (isset($_GET['order_id'])) {

    if($_SESSION['secret_order_key']==$_GET['order_id']){

    $nic=$_SESSION['nic'];
    $sql = "INSERT INTO advert_f (fid) VALUES ('$nic')";
    $result=mysqli_query($db, $sql);

    }

    header('location: index.php');
}else{
    echo "Payment verification failed";

}

?>