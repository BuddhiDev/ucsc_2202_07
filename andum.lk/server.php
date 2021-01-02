<?php

//session start
session_start();

//initialize global variables
$nic = "";
$email = "";
$errors = array();
$search=false;
$category_filter=false;

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'andum');

//register
if (isset($_POST['register'])) {
    $nic = mysqli_real_escape_string($db, $_POST['nic']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['c_password']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
    $utype = mysqli_real_escape_string($db, $_POST['Usertype']);
    $addres = mysqli_real_escape_string($db, $_POST['address']);
    $postal = mysqli_real_escape_string($db, $_POST['postal']);

    if ($password1 != $password2) {
        array_push($errors, "Passwords do not match");
    }
    if (count($errors) == 0) {
        $password = md5($password1);
        // inser to user table
        $sql = "INSERT INTO users (nic, fname, email, lname, contactno, password, type, address, postalcode) VALUES ('$nic','$fname','$email','$lname','$contactno','$password','$utype','$addres','$postal')";
        mysqli_query($db, $sql);

        // insert user if tailor
        if ($utype == 0) {
            $sql1 = "INSERT INTO tailors (nic) VALUES ('$nic')";
            mysqli_query($db, $sql1);
        }

        // insert user if customer
        else if ($utype == 1) {
            $sql1 = "INSERT INTO customers (nic) VALUES ('$nic')";
            mysqli_query($db, $sql1);
        }

        // insert user if fashion designer
        else if ($utype == 2) {
            $sql1 = "INSERT INTO fashion_designer (nic) VALUES ('$nic')";
            mysqli_query($db, $sql1);
        }

        //save session cache
        $_SESSION['nic'] = $nic;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['success'] = "You are now logged in";
        $_SESSION['utype'] = "$utype";

        if ($_SESSION['utype'] == 0) {
            header('location: tailor/tailor-dashboard.php');
        }
        else if ($_SESSION['utype'] == 1) {
            header('location: customer/index.php');
        }
        else if ($_SESSION['utype'] == 2) {
            header('location: fashion_designer/index.php');
        }
    }
}

//login
if (isset($_POST['login'])) {

    $nic = mysqli_real_escape_string($db, $_POST['nic']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);

    if (count($errors) == 0) {
        $password = md5($password1);
        $sql = "SELECT * FROM users WHERE nic='$nic' AND password='$password'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['nic'] = $nic;
            $_SESSION['success'] = "You are now logged in";
            if ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
            }


            $sql = "SELECT type FROM users WHERE nic='$nic' AND password='$password'";
            $result = mysqli_query($db, $sql);

            if ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['utype'] = $row['type'];
            }


            if ($_SESSION['utype'] == 0)
            {
                header('location: tailor/tailor-dashboard.php');
            }
            else if ($_SESSION['utype'] == 1) {
                header('location: customer/index.php');
            }
            else if ($_SESSION['utype'] == 2) {
                header('location: fashion_designer/index.php');
            }
        }
         else {
            array_push($errors, "Wrong username/ password combination");
            //header('location: login.php');
        }
    }
}

//reset password

if(isset($_POST['resetpwd'])){
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $sql = "SELECT * from users WHERE email='$email'";
    $run = mysqli_query($db,$sql);
    if(mysqli_num_rows($run)>0)
    {
        $row = mysqli_fetch_array($run);
        $db_email = $row['email'];
        $db_nic = $row['nic'];
        $token = uniqid(md5(time())); //Random Token
        $sql = "INSERT INTO password_reset (id,email,token) VALUES (NULL,'$email','$token')";
        if(mysqli_query($db,$sql))
        {
            $to = $db_email;
            $subject = "Password reset link";
            $message = "Click <a href='http://localhost/ucsc_2202_07/andum.lk/reset.php?token=$token'>here</a> to reset your password.";
            require 'admin/phpmailer/PHPMailerAutoload.php';

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = "true";
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";
            $mail->Username = 'andumdotlk@gmail.com';
            $mail->Password = 'Admin@123';
            $mail->isHTML(true);
            $mail->Subject = "$subject";

            $mail->setFrom('andumdotlk@gmail.com');
            $mail->addAddress($to);

            $mail->Body = "<h3>Message : $message</h3>";

            if($mail->Send()){
                echo "Password link has been send to the email";
            }
            else{
                "User Not Found";
            }

            $mail->smtpClose();
                //mail($to,$subject,$message);
        }
    }
}

//logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['nic']);
    header('location: ../login.php');
}


//hire a tailor
if (isset($_POST['hireT'])) {
    echo "fuck";
    $t_nic = mysqli_real_escape_string($db, $_POST['t_nic']);
    $t_fname = mysqli_real_escape_string($db, $_POST['t_fname']);
    $t_lname = mysqli_real_escape_string($db, $_POST['t_lname']);
    $c_nic = mysqli_real_escape_string($db, $_POST['c_nic']);
    $c_fname = mysqli_real_escape_string($db, $_POST['c_fname']);
    $c_lname = mysqli_real_escape_string($db, $_POST['c_lname']);
    $category = mysqli_real_escape_string($db, $_POST['category']);
    $material = mysqli_real_escape_string($db, $_POST['material']);
    $color = mysqli_real_escape_string($db, $_POST['color']);
    $neck = mysqli_real_escape_string($db, $_POST['neck']);
    $chest = mysqli_real_escape_string($db, $_POST['chest']);
    $waist = mysqli_real_escape_string($db, $_POST['waist']);
    $seat = mysqli_real_escape_string($db, $_POST['seat']);
    $shirt_length = mysqli_real_escape_string($db, $_POST['shirt_length']);
    $shoulder_width = mysqli_real_escape_string($db, $_POST['shoulder_width']);
    $arm_length = mysqli_real_escape_string($db, $_POST['arm_length']);
    $wrist = mysqli_real_escape_string($db, $_POST['wrist']);
    $biceps = mysqli_real_escape_string($db, $_POST['biceps']);
    $hips = mysqli_real_escape_string($db, $_POST['hips']);
    $other = mysqli_real_escape_string($db, $_POST['other']);
    $date = date('m');

    echo $t_nic,$t_fname,$chest;
    $sql = "INSERT INTO t_orders (c_nic, c_fname, c_lname, t_nic, t_fname, t_lname, status, category, material, color, neck, chest, waist, seat, shirt_length, shoulder_width, arm_length, wrist, biceps, hip, other, date)
    VALUES ('$c_nic','$c_fname','$c_lname','$t_nic','$t_fname','$t_lname','Pending','$category','$material','$color','$neck','$chest','$waist','$seat','$shirt_length','$shoulder_width','$arm_length','$wrist','$biceps','$hips','$other','$date')";
    $result = mysqli_query($db, $sql);
    if ($result) {
        header('location: hired_list.php');
    } else {
        array_push($errors, "Hire a tailor failed, try again later");
    }
}

//hire a fashion designer
if (isset($_POST['hireFD'])) {
    $fd_nic = mysqli_real_escape_string($db, $_POST['fd_nic']);
    $fd_fname = mysqli_real_escape_string($db, $_POST['fd_fname']);
    $fd_lname = mysqli_real_escape_string($db, $_POST['fd_lname']);
    $c_nic = mysqli_real_escape_string($db, $_POST['c_nic']);
    $c_fname = mysqli_real_escape_string($db, $_POST['c_fname']);
    $c_lname = mysqli_real_escape_string($db, $_POST['c_lname']);
    $other = mysqli_real_escape_string($db, $_POST['other']);
    $date = date('m');

    echo $fd_nic,$fd_fname;
    $sql = "INSERT INTO fd_orders (c_nic, c_fname, c_lname, fd_nic, fd_fname, fd_lname, status, other, date) VALUES ('$c_nic','$c_fname','$c_lname','$fd_nic','$fd_fname','$fd_lname','Pending','$other','$date')";
    $result = mysqli_query($db, $sql);
    if ($result) {
        header('location: hired_fd_list.php');
    } else {
        array_push($errors, "Hire a fashion designer failed, try again later");
    }
}

$item_added = "false";

//select a dress
if(isset($_GET['dress_id']) ){
    $selected_dress_id = mysqli_real_escape_string($db, $_GET['dress_id']);
    $_SESSION['selected_dress_id']=$selected_dress_id;
    header('location: product.php');
}

//select a tailor
if(isset($_GET['t_nic']) ){
    $selected_t_nic = mysqli_real_escape_string($db, $_GET['t_nic']);
    $_SESSION['selected_t_nic']=$selected_t_nic;
    header('location: tailor.php');
}
//select a fashion designer
if(isset($_GET['f_id']) ){
    $selected_f_id = mysqli_real_escape_string($db, $_GET['f_id']);
    $_SESSION['selected_f_id']=$selected_f_id;
    header('location: fd.php');
}

//select a customer order from tailor
if(isset($_GET['order_id']) ){
    $selected_o_id = mysqli_real_escape_string($db, $_GET['order_id']);
    $_SESSION['selected_o_id']=$selected_o_id;
    header('location: order.php');
}

//select a sale from tailor
if(isset($_GET['sale_id']) ){
    $selected_s_id = mysqli_real_escape_string($db, $_GET['sale_id']);
    $_SESSION['selected_s_id']=$selected_s_id;
    header('location: sale.php');
}

//select a purchase from customer
if(isset($_GET['purchase_id']) ){
    $selected_p_id = mysqli_real_escape_string($db, $_GET['purchase_id']);
    $_SESSION['selected_p_id']=$selected_p_id;
    header('location: purchase.php');
}

//select a customer order from fashion designer
if(isset($_GET['fd_order_id']) ){
    $selected_o_id = mysqli_real_escape_string($db, $_GET['fd_order_id']);
    $_SESSION['selected_o_id']=$selected_o_id;
    header('location: fdesigner-order.php');
}

if(isset($_GET['f_order_id']) ){
    $selected_o_id = mysqli_real_escape_string($db, $_GET['f_order_id']);
    $_SESSION['selected_o_id']=$selected_o_id;
    header('location: order.php');
}
//select admin customer
// if(isset($_GET['nic']) ){
//     $selected_c_id = mysqli_real_escape_string($db, $_GET['nic']);
//     $_SESSION['selected_c_id']=$selected_c_id;
//     header('location: customer_view.php');
// }

//add to cart a dress
if (isset($_POST['addTocart'])) {
    $c_nic = mysqli_real_escape_string($db, $_POST['c_nic']);
    $dress_id = mysqli_real_escape_string($db, $_POST['dress_id']);
    $quantity1 = mysqli_real_escape_string($db, $_POST['quant']);


    $sql = "INSERT INTO cart (c_nic, dress_id, quantity) VALUES ('$c_nic','$dress_id','$quantity1')";
    $result = mysqli_query($db, $sql);
    if ($result) {
        $item_added = "true";
    } else {
        array_push($errors, "Add to cart failed, try again later");
    }
}

//add chat message on conversations
if (isset($_POST['chatBtn'])) {
    $s_nic = mysqli_real_escape_string($db, $_POST['s_nic']);
    $r_nic = mysqli_real_escape_string($db, $_POST['r_nic']);
    $msg = mysqli_real_escape_string($db, $_POST['msg']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO conversations (sender_nic, reciever_nic, message, type, date) VALUES ('$s_nic','$$r_nic','$msg','$type','$date')";
    $result = mysqli_query($db, $sql);
    if ($result) {
    } else {
        array_push($errors, "Message send failed, try again later");
    }
}

//update quantity
if (isset($_GET['oid'])) {
    $order_id = $_GET['oid'];
    $quantity2 = $_GET['quantity2'];

    $sql = "UPDATE cart SET quantity='$quantity2' WHERE order_id=$order_id";
    $result = mysqli_query($db, $sql);
    if ($result) {
        $item_added = "true";
    } else {
        array_push($errors, "Update cart failed, try again later");
    }
}

//delete a cart item
if (isset($_GET['odid'])) {
    $order_id = $_GET['odid'];
    $sql = "DELETE FROM cart WHERE order_id=$order_id";
    $result = mysqli_query($db, $sql);
    if ($result) {
        $item_added = "true";
    } else {
        array_push($errors, "Delete cart failed, try again later");
    }
}


//checkout from cart
if (isset($_POST['Checkout'])) {
    $c_nic =  $_SESSION['nic'];

    $sql = "SELECT cart.order_id, cart.quantity, dress_showcase.dress_id, dress_showcase.category, dress_showcase.title, dress_showcase.amount, dress_showcase.price FROM cart INNER JOIN dress_showcase ON cart.c_nic='$c_nic' AND cart.dress_id=dress_showcase.dress_id";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $dress_id = $row["dress_id"];
            $date = date('Y-m-d H:i:s');
            $quantity = $row["quantity"];
            $tot = $row["price"];
            $sql_ = "INSERT INTO dress_sales (c_nic,dress_id,quantity,total_price,date,status) VALUES('$c_nic','$dress_id','$quantity','$tot','$date','Paid' )";
            $result_ = mysqli_query($db, $sql_);

            $new_amount = $row["amount"] - $row["quantity"];

            $order_id = $row["order_id"];
            $sql1 = "UPDATE dress_showcase SET amount=$new_amount WHERE dress_id=$dress_id";
            $result1 = mysqli_query($db, $sql1);
            $sql1 = "DELETE FROM cart WHERE order_id=$order_id";
            $result1 = mysqli_query($db, $sql1);

        }


        header('location: purchases.php');

    } else {
        array_push($errors, "Add to cart failed, try again later");
    }
}


//update user data
if (isset($_POST['update_user'])) {

    $nic = mysqli_real_escape_string($db, $_POST['nic']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['cpassword']);
    $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);

    $filename = $_FILES["profilepic"]["name"];
    $tempname = $_FILES["profilepic"]["tmp_name"];
    $folder = "profile_pictures/".$filename;

    if ($password1 != $password2){
        array_push($errors, "Passwords do not match");
    }
    else{
    $password = md5($password1);
    $sql = "UPDATE users SET fname='$fname',lname='$lname',contactno='$contactno',password='$password',address='$address',postalcode='$postalcode' , image = '$filename' WHERE nic='$nic'";
    $result=mysqli_query($db, $sql);

    if (move_uploaded_file($tempname, $folder))
    {
        echo "<script>alert('Image Has Been Uploaded')</script>";
    }
    else
    {
        echo "<script>alert('Image Does Not Uploaded')</script>";
    }

    }
}
//

// if (isset($_POST['save_user'])) {

//     $nic = mysqli_real_escape_string($db, $_POST['nic']);
//     $email = mysqli_real_escape_string($db, $_POST['email']);
//     $fname = mysqli_real_escape_string($db, $_POST['fname']);
//     $lname = mysqli_real_escape_string($db, $_POST['lname']);
//     $password1 = mysqli_real_escape_string($db, $_POST['password']);
//     $password2 = mysqli_real_escape_string($db, $_POST['cpassword']);
//     $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
//     $address = mysqli_real_escape_string($db, $_POST['address']);
//     $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);

//     $filename = $_FILES["myimage"]["name"];
//     $tempname = $_FILES["myimage"]["tmp_name"];
//     $folder = "profile_pictures/".$filename;

//     if ($password1 != $password2){
//         array_push($errors, "Passwords do not match");
//     }
//     else{
//     $password = md5($password1);
//     $sql = "UPDATE users SET fname='$fname',lname='$lname',contactno='$contactno',password='$password',address='$address',postalcode='$postalcode' , image = '$filename'WHERE nic='$nic'";
//     $result=mysqli_query($db, $sql);
//     }
// }

//add a new dress
if(isset($_POST['add_product']))
{

  $t_nic =  $_SESSION['nic'];
  $category = mysqli_real_escape_string($db, $_POST['Unit']);
  $dressname = mysqli_real_escape_string($db, $_POST['dname']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
//  $size = mysqli_real_escape_string($db, $_POST['size']);
  $size1 = $_POST['size'];
  $schk="";
  foreach($size1 as $schk1)
     {
        $schk.= $schk1.",";
     }

  $colors1 = $_POST['color'];
  $clchk="";
  foreach($colors1 as $clchk1)
     {
        $clchk.= $clchk1.",";
     }
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $filename = $_FILES["myimage"]["name"];
  $tempname = $_FILES["myimage"]["tmp_name"];
  $folder = "products/".$filename;

  if($category!="" && $dressname!="" && $price!="" && $schk!="" && $amount!="")
  {

    $sql = " INSERT INTO dress_showcase (category, title, price, size, color, amount, image, permission, t_nic) VALUES ('$category', '$dressname','$price', '$schk', '$clchk', '$amount', '$filename', '1', '$t_nic')";
    $result = mysqli_query($db,$sql);

    if (move_uploaded_file($tempname, $folder))
    {
        echo "<script>alert('Image Has Been Uploaded')</script>";
    }
    else
    {
        echo "<script>alert('Image Does Not Uploaded')</script>";
    }
  }
}

// by a keyword
if(isset($_POST['search'])){
 $search=true;
 $keyword= mysqli_real_escape_string($db, $_POST['q']);

}

//search by dress category
if(isset($_GET['dcategory']) ){
    $search=true;
    $category_filter=true;
    $selected_dress_category = mysqli_real_escape_string($db, $_GET['dcategory']);
}

//update tailor order statues as accepted
if (isset($_POST['order-accept'])) {

    $order_id = mysqli_real_escape_string($db, $_POST['order_id']);
    $sql = "UPDATE t_orders SET status='Accepted' WHERE id='$order_id'";
    $result=mysqli_query($db, $sql);

}

//update tailor order statues as paid
if (isset($_POST['order-paid'])) {

    $order_id = mysqli_real_escape_string($db, $_POST['order_id']);
    $sql = "UPDATE t_orders SET status='Paid' WHERE id='$order_id'";
    $result=mysqli_query($db, $sql);

}

//update tailor order statues as Ongoing
if (isset($_POST['order-ongoing'])) {

    $order_id = mysqli_real_escape_string($db, $_POST['order_id']);
    $sql = "UPDATE t_orders SET status='Ongoing' WHERE id='$order_id'";
    $result=mysqli_query($db, $sql);

}

//update tailor order statues as DELIVERED
if (isset($_POST['order-deliver'])) {

    $order_id = mysqli_real_escape_string($db, $_POST['order_id']);
    $sql = "UPDATE t_orders SET status='Delivered' WHERE id='$order_id'";
    $result=mysqli_query($db, $sql);

}

//update tailor order statues as completed
if (isset($_POST['order-complete'])) {

    $order_id = mysqli_real_escape_string($db, $_POST['order_id']);
    $sql = "UPDATE t_orders SET status='Completed' WHERE id='$order_id'";
    $result=mysqli_query($db, $sql);

}

//update fashion designer order statues as accepted
if (isset($_POST['fd-order-accept'])) {

    $order_id = mysqli_real_escape_string($db, $_POST['fd_order_id']);
    $sql = "UPDATE fd_orders SET status='Accepted' WHERE id='$order_id'";
    $result=mysqli_query($db, $sql);

}

//send message

// use PHPMailer\PHPMailer\PHPMailer\PHPMailer\;

// if(isset($_POST['message_send'])){
    // $issue = $_POST['issue'];
    // $name = $_POST['cust_name'];
    // $email = $_POST['email'];
    // $contactno = $_POST['contactno'];
    // $c_msg = $_POST['c_msg'];

    // require_once "PHPMailer/PHPMailer.php";
    // require_once "PHPMailer/SMTP.php";
    // require_once "PHPMailer/Exception.php";

    // $mail = new PHPMailer();

    // //smtp settings

    // $mail->isSMTP();
    // $mail->Host = " "


    // $mailTo = "thashwiniwattuhewa@gmail.com";
    // $headers = "From: ".$email;
    // $txt = "You have received an e-mail from ".$name.".\n\n".$c_msg;

    // mail($mailTo, $issue, $txt, $headers);
    // header("Location: index.php?mailsend");

        // use PHPMailer\PHPMailer\PHPMailer;
        // use PHPMailer\PHPMailer\SMTP;
        // use PHPMailer\PHPMailer\Exception;

        // Load Composer's autoloader
        // require 'vendor/autoload.php';

        // Instantiation and passing `true` enables exceptions
        // $mail = new PHPMailer(true);

        // try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            // $mail->isSMTP();                                            // Send using SMTP
            // $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
            // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            // $mail->Username   = 'thashwiniwattuhewa@gmail.com';                     // SMTP username
            // $mail->Password   = 'imdabest';                               // SMTP password
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            // $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            // $mail->setFrom('thashwiniwattuhewa@gmail.com', 'Mailer');
            // $mail->addAddress('thashwiniwattuhewa@gmail.com', 'Joe User');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
        //     $mail->isHTML(true);                                  // Set email format to HTML
        //     $mail->Subject = 'Here is the subject';
        //     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        //     $mail->send();
        //     echo 'Message has been sent';
        // } catch (Exception $e) {
        //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        // }
    //}


    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        if(isset($_POST['message_send'])){

        $issue = $_POST['issue'];
        $name = $_POST['cust_name'];
        $email = $_POST['email'];
        $contactno = $_POST['contactno'];
        $c_msg = $_POST['c_msg'];

        // Load Composer's autoloader
        // require 'vendor/autoload.php';

        // Instantiation and passing `true` enables exceptions

        $mail = new PHPMailer();

        $mail->isSMTP();

        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";

        $mail->Username = 'andumdotlk@gmail.com';
        $mail->Password = 'Admin@123';

        $mail->isHTML(true);

        $mail->Subject = "$issue";

        $mail->setFrom('andumdotlk@gmail.com');
        $mail->addAddress('andumdotlk@gmail.com');

        $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $c_msg</h3>";

        

        if($mail->Send()){
            echo "Email sent";
        }
        else{
            "Error";
        }

        $mail->smtpClose();
    }


 ?>