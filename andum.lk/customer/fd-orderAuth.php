<?php

session_start();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'andum');

//fd order authentication
if (isset($_GET['order_id'])) {

    if($_SESSION['secret_order_key']==$_GET['order_id']){
        //echo "buy";

    $order_id = $_SESSION['fd_oid_auth'];
    $sql = "UPDATE fd_orders SET status='Paid',nstatus=0, nmessage='Paid Order' WHERE id='$order_id'";
    $result=mysqli_query($db, $sql);

    }

    header('location: fdesigner-order.php');
}else{
    echo "Payment verification failed";

}

?>