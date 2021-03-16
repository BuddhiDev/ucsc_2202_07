<?php
//view fashion designer details
 if(isset($_GET['f_nic']) ){
    $selected_fdesigner_id = mysqli_real_escape_string($db, $_GET['f_nic']);
    $_SESSION['selected_fdesigner_id']=$selected_fdesigner_id;
    header('location: fdesigner_view.php');
 }
 //suspend fashion designer
 if(isset($_GET['d_fnic']) ){
   $selected_fdesigner_id = mysqli_real_escape_string($db, $_GET['d_fnic']);
   $_SESSION['selected_fdesigner_id']=$selected_fdesigner_id;
   header('location: banned_fdesigner.php');
 } 

 //view tailor details
if(isset($_GET['t_nic']) ){
    $selected_tailor_id = mysqli_real_escape_string($db, $_GET['t_nic']);
    $_SESSION['selected_tailor_id']=$selected_tailor_id;
    header('location: tailor_view.php');
}
//suspend tailor
if(isset($_GET['d_tnic']) ){
  $selected_tailor_id = mysqli_real_escape_string($db, $_GET['d_tnic']);
  $_SESSION['selected_tailor_id']=$selected_tailor_id;
  header('location: banned_tailor.php');
}

//view customer details
if(isset($_GET['c_nic']) ){
    $selected_c_id = mysqli_real_escape_string($db, $_GET['nic']);
    $_SESSION['selected_c_id']=$selected_c_id;
    header('location: customer_view.php');
}
//suspend customer
if(isset($_GET['d_cnic']) ){
      $selected_c_id = mysqli_real_escape_string($db, $_GET['d_nic']);
      $_SESSION['selected_c_id']=$selected_c_id;
      header('location: banned_cust.php');
}


//view dress details
if(isset($_GET['vdress_id']) ){
    $selected_dress_id = mysqli_real_escape_string($db, $_GET['vdress_id']);
    $_SESSION['selected_dress_id']=$selected_dress_id;
    header('location: view_product.php');
}

//confirm dress
if(isset($_GET['confirm_dress_id'])){
    
    
     $confirm_dress_id = mysqli_real_escape_string($db, $_GET['confirm_dress_id']);
     $sqlp = "INSERT INTO dress_showcase(dress_id, category, title, price, size, color, amount, image, t_nic) SELECT*FROM review_dress WHERE dress_id='$confirm_dress_id' ";
     $resultp=mysqli_query($db, $sqlp);
     $sqlp = "DELETE FROM review_dress WHERE dress_id='$confirm_dress_id' ";
     $resultp=mysqli_query($db, $sqlp);
 
    if ($resultp) {
 
         echo "<script>alert('CONFIRMATION SUCCESSFULY')</script>";
         header('location: review_dress.php');
    } 
    else {
     array_push($errors, " failed, try again later");
     echo "<script>alert('Sorry! CONFIRMATION UNSUCCESSFULY')</script>";
    }

}

//suspend users account
if(isset($_GET['delete_nic'])) {
    
   $delete_nic = mysqli_real_escape_string($db, $_GET['delete_nic']);
   $sql = "INSERT INTO banned_users(nic, fname, email, lname, contactno, password, type, address, postalcode, image) SELECT*FROM users WHERE nic='$delete_nic' ";
   $result=mysqli_query($db, $sql);
   $sql = "DELETE FROM users WHERE nic='$delete_nic' ";
   $result=mysqli_query($db, $sql);
    
    if ($result) {
    
        echo "Suspend User Account";
        header('location: deleted_users.php');

    } 
    else {
        echo "<script>alert('Sorry! Suspend User Account is Unsuccessful')</script>";
    }
}




//review user
/*
if(isset($_GET['review_user_id'])){
    
    // $t_nic = mysqli_real_escape_string($db, $_POST['c_nic']);
     $review_user_id = mysqli_real_escape_string($db, $_GET['review_user_id']);
     $sql3 = "INSERT INTO users (nic, fname, email, lname, contactno, password, type, address, postalcode) SELECT*FROM review_user WHERE nic='$review_user_id' ";
     $result3=mysqli_query($db, $sql3);
     $sql3 = "DELETE FROM review_user WHERE nic='$review_user_id' ";
    $result3=mysqli_query($db, $sql3);
 
     if ($result3) {
 
         echo "<script>alert('CONFIRMATION SUCCESSFULY')</script>";
         header('location: review_users.php');
     
  } else {
     array_push($errors, " failed, try again later");
     echo "<script>alert('Sorry! CONFIRMATION UNSUCCESSFULY')</script>";
 }

}*/




//send warning email to user
if(isset($_POST['send_mail'])) {

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
        $mail->Password='Admin@bvnt';

        $mail->setFrom('andumdotlk@gmail.com');
        $mail->addAddress($email);

        $mail->isSMTP(true);
        $mail->Subject = "$subject";
        $mail->Body =$body;
        
        if($mail->Send()){
            echo "<script>alert('Email Sent.')</script>";
        }
        else{
            echo "<script>alert(' Email Not Sent!!!')</script>";
        }
}  


   
    
?>
                        
