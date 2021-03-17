<?php
 include("server.php");
 ?>

 <?php

if(isset($_GET['vkey'])){
    //process verification
    $vkey = $_GET['vkey'];
    $selected_vnic = $_SESSION['verify_nic'];
    $sqlresultset = "SELECT * FROM users WHERE verified=0 AND vkey='$vkey' LIMIT 1 ";
    $resultset = mysqli_query($db, $sqlresultset);

    if ($resultset) {
      while($row = mysqli_fetch_assoc($resultset)){

        //validate the email
        
        $update_vkey="UPDATE users SET verified=1 where nic='$selected_vnic' ";
        $update_res= mysqli_query($db,$update_vkey);

        if ($update_res)
        {
           // echo "Your account has been verified, You can now Login";
            header('location: thankyou.php');
        }
        else
        {
            echo "error";
        }

        }

    }
    else
    {
        echo "This account is invalid or already verified";
    }
}

else
{
    die("something went wrong");
}


?>