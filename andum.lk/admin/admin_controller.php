<?php



//  if(isset($_GET['nic']) ){
//     $selected_c_id = mysqli_real_escape_string($db, $_GET['nic']);
//     $_SESSION['selected_c_id']=$selected_c_id;
//     header('location: customer_view.php');
// }

// if(isset($_GET['nic']) ){
//     $selected_tailor_id = mysqli_real_escape_string($db, $_GET['nic']);
//     $_SESSION['selected_tailor_id']=$selected_tailor_id;
//     header('location: tailor_view.php');
// }

//if(isset($_GET['nic']) ){
 //   $selected_fdesigner_id = mysqli_real_escape_string($db, $_GET['nic']);
 //   $_SESSION['selected_fdesigner_id']=$selected_fdesigner_id;
 //   header('location: fdesigner_view.php');
//}

if(isset($_GET['delete_nic'])){
    
   $delete_nic = mysqli_real_escape_string($db, $_GET['delete_nic']);
   $sql = "INSERT INTO banned_users(nic, fname, email, lname, contactno, password, type, address, postalcode, image) SELECT*FROM users WHERE nic='$delete_nic' ";
   $result=mysqli_query($db, $sql);
   $sql = "DELETE FROM users WHERE nic='$delete_nic' ";
   $result=mysqli_query($db, $sql);
    //echo "<script>alert('Suspend User Account')</script>";
   // header('location: deleted_user.php');
    //$msg = "<div>Suspend User Account</div>";
    //echo $msg;
if ($result) {
    
        echo "Suspend User Account";
        header('location: deleted_users.php');

    
 } else {
    //array_push($errors, " failed, try again later");
    echo "<script>alert('Sorry! Suspend User Account is Unsuccessful')</script>";
}
}

if(isset($_GET['rdress_id']) ){
    $selected_dress_id = mysqli_real_escape_string($db, $_GET['rdress_id']);
    $_SESSION['selected_dress_id']=$selected_dress_id;
    header('location: view_product.php');
}


if(isset($_POST['send_mail'])){
    $name = $_POST['aname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';

        $mail->Username='andumdotlk@gmail.com';
        $mail->Password='Admin@123';

        $mail->setFrom('andumdotlk@gmail.com');
        $mail->addAddress($email);

        $mail->isSMTP(true);
        $mail->Subject = "$subject";
        $mail->Body =$body;
        
        if($mail->Send()){
            echo "<script>alert('Email Sent.')</script>";
        }
        else{
            echo "<script>alert('### Email Not Sent!')</script>";
        }
    }  


    
?>
                           













