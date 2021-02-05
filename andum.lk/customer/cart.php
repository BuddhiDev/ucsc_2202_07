<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Andum.lk - Cart</title>
  <link rel="shortcut icon" href="logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }
  </style>
</head>

<body>
  <?php require("header.php") ?>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
    function(){
      this.classList.toggle("active");
    })
  </script>

  <div class="container-box">
    <h2>Cart</h2>
    <table>
      <tr>
        <th>Order No</th>
        <th>Description</th>
        <th>Quantity</th>
        <th> Unit Price</th>
        <th>Total Price</th>
        <th>Remove</th>
      </tr>
      <tr>
        <?php
        $nic = $_SESSION['nic'];
        $total = 0;
        $sql = "SELECT cart.order_id, cart.quantity, dress_showcase.category, dress_showcase.title, dress_showcase.price, dress_showcase.amount FROM cart INNER JOIN dress_showcase ON cart.c_nic='$nic' AND cart.dress_id=dress_showcase.dress_id";
        $result = mysqli_query($db, $sql);
        
    //generate order random number and hash it
    $_SESSION['secret_order_key']=md5(rand(10,1000000));
    $secret_order_key = $_SESSION['secret_order_key'];


        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <td><?php echo $row["order_id"] ?></td>
        <td><?php echo $row["title"] ?></td>
        <td>
        <form action="cart.php" method='GET'>
          <input type="number" value="<?php echo $row["quantity"]?>" name="quantity2" class="submit-quantity">
          <input type="hidden" value="<?php echo $row["order_id"]?>" name="oid">
          <input type="submit" value="Confirm Quantity" class="submit-button">
        </form>
        </td>            
        <td><?php echo $row["price"] ?></td>
        <td><?php echo number_format($row["quantity"]*$row["price"],2);?></td>
        <td>              
          <form action="cart.php" method='GET'>
            <input type="hidden" value="<?php echo $row["order_id"]?>" name="odid">
            <input type="submit" value="Remove" class="submit-button">
          </form>
        </td>
      </tr>
      
      <?php
      $total = $total + ($row["quantity"]*$row["price"]);
      }
      ?>
      <tr>
              <td colspan="4" align="right">Total</td>
              <td align="right"><?php echo number_format($total,2);?></td>
      </tr>
    <?php
          
        } else {
        }

    ?>
    </table>
    <div class="checkout-box">
      <div class="checkout-box-block">
        <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
      <!-- Checkout button click begin-->
    <input type="hidden" name="merchant_id" value="1216354">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://localhost/ucsc_2202_07/andum.lk/customer/cart.php">
    <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
    <input type="hidden" name="notify_url" value="http://sample.com/notify">  
    <!--<br><br>Item Details<br>-->
    <input type="hidden" name="order_id" value=<?php echo $secret_order_key ?>>
    <input type="hidden" name="items" value="Door bell wireless"><br>
    <input type="hidden" name="currency" value="LKR">
    <input type="hidden" name="amount" value="1000">  
    <!-- <br><br>Customer Details<br>-->
    <input type="hidden" name="first_name" value="Saman">
    <input type="hidden" name="last_name" value="Perera"><br>
    <input type="hidden" name="email" value="samanp@gmail.com">
    <input type="hidden" name="phone" value="0771234567"><br>
    <input type="hidden" name="address" value="No.1, Galle Road">
    <input type="hidden" name="city" value="Colombo">
    <input type="hidden" name="country" value="Sri Lanka"><br><br> 




      <!-- Checkout button click end-->
      <?php if (mysqli_num_rows($result) > 0) { ?>
      <center><button class="loginbutton btn-full-w" type="submit" name="Checkout">Checkout</button></center>
      <?php }  else {?>
      <center> No Items in the cart</center> <?php } ?>
      </form>
      </div>
      <div class="checkout-box-block">
        <a href="index.php"><button class="loginbutton btn-full-w">Continue Shopping</button></a>
      </div>

    </div>

    
  </div>

  



<?php require("../footer.php")?>


</body>

</html>
