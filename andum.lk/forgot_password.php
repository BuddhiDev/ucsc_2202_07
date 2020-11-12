<?php include("server.php");




if (isset($_POST['forgot_password']))
{
    //keep it inside
    $email=$_POST['email'];
    $password = $_GET['passsword'];
 
   
    $query = mysqli_query($con,"SELECT * FROM users WHERE email='$email'")
    or die(mysqli_error($con));
    
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = ""; // Your mail
    $mail->Password = ''; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress(''); // Your mail
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $code= rand(100,999);
    mail($email, "Send Code", $message);
    $mail->Body= $message="You activation link is:http://localhost/ForgotPassword/resetpassword.php?email=code=$code";

    // if (mysqli_num_rows ($query)==1)
    // {
    //     if($mail->send())
    //     {
           
    //     }
    //     $query2 = mysqli_query($con,"UPDATE password SET passsword='$password' WHERE email='$email'")
    //     or die(mysqli_error($con)); 
    //     }
    //     else
    //     {
    //    $errors = '<div class="alert alert-danger" role="alert">Sorry, Your emails does not exists in our record database</div>';
    // }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk - Forgot-Password</title>
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css">
    <style>
    /*.option{
      background-color: #EB2188;
      padding: 15px 50px;
      border-radius: 50px;

    }*/
    </style>
</head>
<body>
  <div class="box">
    <header>


      <img class="logo" src="logo.png" alt="logo">
      <!-- <?php require("navbar_category.php")?> -->
      <nav>
        <ul class="nav-area">

        <li class="dropdown">
              <a href="#">Shop Now</a>
              <ul class="menu-area">
                <ul class="inner-menu">
                  <li class="inner-list-header">Ladies wear</li>
                  <li><a href="dresses.php">Dresses</a></li>
                  <li><a href="workware_ladies.php">Work Wear</a></li>
                  <li><a href="#">Denims</a></li>
                  <li><a href="#">Tops</a></li>
                  <li><a href="#">T Shirts</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
                <ul class="inner-menu"> 
                  <li class="inner-list-header">Gents wear</li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Denims</a></li>
                  <li><a href="workwear_gents.php">Work Wear</a></li>
                  <li><a href="#">T Shirts</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
                <ul class="inner-menu">
                  <li class="inner-list-header">Kids wear</li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">T shirsts</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">All Categories</a></li>
                </ul>
              </ul>


            </li>
          <li><a href="#">Hire a Tailor</a></li>
          <li><a href="#">Hire a Fashion Designer</a></li>
          <li><a href="/ucsc_2202_07/andum.lk/about_us.php">About Us</a></li>

        </ul>
      </nav>
     
    </header>
  </div>

  <form action="forgot_password.php" method="post">
        <!-- errors display -->
            <?php include("errors.php");
            ?>
        <div class="login-container">

          

          <div class="form-field-inline">
            <label for="email" class="field-label-inline"><b>Email Address</b></label>
            <input type="text" class="field-value-inline" name="email" required>
          </div>

         

         

          <!-- <div class="form-field-inline">
            <label for="password" class="field-label-inline"><b>Choose Passsword</b></label>
            <input type="password" class="field-value-inline" name="password" required>
          </div>

          <div class="form-field-inline">
            <label for="c_password" class="field-label-inline"><b>Re-enter Password</b></label>
            <input type="password" class="field-value-inline" name="c_password" required>
          </div> -->

         
        
         






          <div class="btn-panel-center">
            <!-- <button class="facebookbutton btn-full-w" type="submit">SIGN UP WITH FACEBOOK </button>
            <button class="googlebutton btn-full-w" type="submit">SIGN UP WITH GOOGLE </button> -->
            <button class="loginbutton btn-full-w" type="submit" name="save">Send code to email </button>
          </div>

          <!-- <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
        </div>

  </form>

<?php require("footer.php")?>
</body>
</html>
