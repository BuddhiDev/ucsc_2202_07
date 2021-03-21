<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>  

<?php include("../errors.php");
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Promote</title>
  <link rel="shortcut icon" href="../logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>

<?php require("header.php")?>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>
  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("notify-myDropdown").classList.toggle("notify-show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.notify-dropbtn')) {
  var myDropdown = document.getElementById("notify-myDropdown");
    if (myDropdown.classList.contains('notify-show')) {
      myDropdown.classList.remove('notify-show');
    }
  }
}
</script>



<!-- retrieve order data -->
<?php
$nic=$_SESSION['nic'];


?>
  <div class="fd-container-box">
    
    
    
  <div>
    <div class="">

<?php //generate order random number and hash it
    $_SESSION['secret_order_key']=md5(rand(10,1000000));
    $secret_order_key = $_SESSION['secret_order_key'];?>

    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
      <!-- Checkout button click begin-->
    <input type="hidden" name="merchant_id" value="1216354">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://localhost/ucsc_2202_07/andum.lk/tailor/advertAuth.php">
    <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
    <input type="hidden" name="notify_url" value="http://sample.com/notify">  
    <!--<br><br>Item Details<br>-->
    <input type="hidden" name="order_id" value=<?php echo $secret_order_key ?>>
    <input type="hidden" name="items" value=<?php echo "1monthad-T" ?>><br>
    <input type="hidden" name="currency" value="LKR">
    <input type="hidden" name="amount" value="5000">  
    <!-- <br><br>Customer Details<br>-->
    <input type="hidden" name="first_name" value="Saman">
    <input type="hidden" name="last_name" value="Perera"><br>
    <input type="hidden" name="email" value="samanp@gmail.com">
    <input type="hidden" name="phone" value="0771234567"><br>
    <input type="hidden" name="address" value="No.1, Galle Road">
    <input type="hidden" name="city" value="Colombo">
    <input type="hidden" name="country" value="Sri Lanka"><br><br> 




      <!-- Checkout button click end-->
      1 Month Promoting Package <br/>
      <center><button class="loginbutton btn-full-w" type="submit" name="Checkout">SUBSCRIBE</button></center>

      </form>


      
    </div>
    
  </div>
    

  

    
  </div>

  <?php require("../footer.php")?>

</body>
</html>
