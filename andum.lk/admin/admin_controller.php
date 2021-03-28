<?php

//search by a keyword
if(isset($_POST['search'])){
    $search=true;
    $keyword= mysqli_real_escape_string($db, $_POST['q']);
    $_SESSION['q']=$keyword;
}


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

    $selected_cus_id = mysqli_real_escape_string($db, $_GET['c_nic']);
    $_SESSION['selected_cus_id']=$selected_cus_id;

    $selected_c_id = mysqli_real_escape_string($db, $_GET['c_nic']);
    $_SESSION['selected_c_id']=$selected_c_id;

    header('location: customer_view.php');
}
//suspend customer
if(isset($_GET['d_cnic']) ){
      $selected_c_id = mysqli_real_escape_string($db, $_GET['d_cnic']);
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
     $sqlp = "INSERT INTO dress_showcase(dress_id,category, title, price, size, color, amount, image, t_nic) SELECT*FROM review_dress WHERE dress_id='$confirm_dress_id' ";
     $resultp=mysqli_query($db, $sqlp);
     $sqlp = "DELETE FROM review_dress WHERE dress_id='$confirm_dress_id' ";
     $resultp=mysqli_query($db, $sqlp);
 
    if ($resultp) {
 
        header('location: review_dress.php');
    } 
    else {
        array_push($errors, " failed, try again later");
        echo "<script>alert('Sorry! CONFIRMATION UNSUCCESSFULY')</script>";
    }

}

if(isset($_GET['reject_dress_id'])){
     
    $reject_dress_id = mysqli_real_escape_string($db, $_GET['reject_dress_id']);
    $sqlr = "INSERT INTO rejected_dress(dress_id, category, title, price, size, color, amount, image, t_nic) SELECT*FROM review_dress WHERE dress_id='$reject_dress_id' ";
    $resultr=mysqli_query($db, $sqlr);
    $sqlr = "DELETE FROM review_dress WHERE dress_id='$reject_dress_id' ";
    $resultr=mysqli_query($db, $sqlr);

   if ($resultr) {
   
        header('location: review_dress.php');
   } 
   else {
    array_push($errors, " failed, try again later");
    echo "<script>alert('Sorry! REJECTING UNSUCCESSFULY')</script>";
   }

}

//suspend users account
if(isset($_GET['delete_nic'])) {
    
   $delete_nic = mysqli_real_escape_string($db, $_GET['delete_nic']);
   $sql = "INSERT INTO banned_users(nic, fname, email, lname, contactno, password, type, address, postalcode, image,vkey, verified, createdate) SELECT*FROM users WHERE nic='$delete_nic' ";
   $result=mysqli_query($db, $sql);
   $sql = "DELETE FROM users WHERE nic='$delete_nic' ";
   $result=mysqli_query($db, $sql);
    
    if ($result) {
    
        
        header('location: deleted_users.php');

    } 
    else {
        echo "<script>alert('Sorry! Suspend User Account is Unsuccessful')</script>";
    }
}

//restore user
if(isset($_GET['restore_nic'])) {
    
    $restore_nic = mysqli_real_escape_string($db, $_GET['restore_nic']);
    $sql = "INSERT INTO users(nic, fname, email, lname, contactno, password, type, address, postalcode, image, vkey, verified, createdate) SELECT*FROM banned_users WHERE nic='$restore_nic' ";
    $result=mysqli_query($db, $sql);
    $sql = "DELETE FROM banned_users WHERE nic='$restore_nic' ";
    $result=mysqli_query($db, $sql);
     
     if ($result) {
     
         header('location: deleted_users.php');
 
     } 
     else {
         echo "<script>alert('Sorry! Restore User Account is Unsuccessful')</script>";
     }
 }

 //Pay for ready-made dresses payment to tailor
 if(isset($_POST['readymade_dress_pay'])) {
    $id = $_POST['id'];

    $sql = "UPDATE dress_sales SET action='Paid' WHERE id='$id' ";
    $result = mysqli_query($db, $sql);
    if($result)
    {
        echo "<script>alert('status update successful')</script>";
    }
    else{
        echo "<script>alert('Sorry! status update unsuccessful')</script>";
    }
 }
 //Pay for customize dresses payment to tailor
 if(isset($_POST['customize_dress_pay'])) {
    $id = $_POST['id'];

    $sql = "UPDATE t_orders SET action='Paid' WHERE id='$id' ";
    $result = mysqli_query($db, $sql);
    if($result)
    {
        echo "<script>alert('Paid for tailor')</script>";
    }
    else{
        echo "<script>alert('Sorry! action update unsuccessful')</script>";
    }
 }

 //Pay for design payment to fashion designers
 if(isset($_POST['design_pay'])) {
    $id = $_POST['id'];

    $sql = "UPDATE fd_orders SET action='Paid' WHERE id='$id' ";
    $result = mysqli_query($db, $sql);
    if($result)
    {
        echo "<script>alert('Paid for fashion designer')</script>";
    }
    else{
        echo "<script>alert('Sorry! action update unsuccessful')</script>";
    }
 }




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
                        
