<?php

session_start();

//tailor order authentication
if (isset($_GET['order_id'])) {

    if($_SESSION['secret_order_key']==$_GET['order_id']){
        //echo "buy";

    $order_id = $_SESSION['tailor_oid_auth'];
    $sql = "UPDATE t_orders SET status='Paid' WHERE id='$order_id'";
    $result=mysqli_query($db, $sql);

    }

    header('location: order.php');
}else{
    echo "Payment verification failed";

}

?>