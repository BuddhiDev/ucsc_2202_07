<?php



 if(isset($_GET['nic']) ){
    $selected_c_id = mysqli_real_escape_string($db, $_GET['nic']);
    $_SESSION['selected_c_id']=$selected_c_id;
    header('location: customer_view.php');
}

if(isset($_GET['nic']) ){
    $selected_tailor_id = mysqli_real_escape_string($db, $_GET['nic']);
    $_SESSION['selected_tailor_id']=$selected_tailor_id;
    header('location: tailor_view.php');
}

if(isset($_GET['nic']) ){
    $selected_fdesigner_id = mysqli_real_escape_string($db, $_GET['nic']);
    $_SESSION['selected_fdesigner_id']=$selected_fdesigner_id;
    header('location: fdesigner_view.php');
}
 
 /*   
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send_mail'])){
    $name = $_POST['aname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
   
    $mail = new PHPMailer();

        $mail->isSMTP();

        $mail->Host = "smtp.gmail.com";

        $mail->SMTPAuth = "true";

        $mail->SMTPSecure = "tls";

        $mail->Port = "587";

        $mail->Username = "nimeshikalakmali960@gmail.com";

        $mail->Password = "123456";

        $mail->isHTML(true);

        $mail->Subject = "$subject";

        $mail->setFrom("nimeshikalakmali960@gmail.com");

        $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $body</h3>";

        $mail->addAddress("nimeshikalakmali960@gmail.com");

        if($mail->Send()){
            echo "Email sent";
        }
        else{
            "Error";
        }

        $mail->smtpClose();
    }
*/


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
        $mail->addAddress('upadhiviveka@gmail.com');

        $mail->isSMTP(true);
        $mail->Subject = "$subject";
        $mail->Body =$body;

        if($mail->Send()){
            echo "Email sent";
        }
        else{
            "Error";
        }
    }  
?>
                           













