<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Fashion Designer Order</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/wizard-styles.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php require("header.php") ?>

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

  <div class="container-box">
    <?php
      $selected_o_id = $_SESSION['selected_o_id'];
      $nic = $_SESSION['nic'];
      $sql = "SELECT * FROM fd_orders WHERE id=$selected_o_id";
      $result = mysqli_query($db, $sql);
      if ($result) 
      {
        $row = mysqli_fetch_assoc($result);
        $status=$row["status"];
        ?>

      <!--  <div class="order-detail-box">
          <h2>ORDER DETAILS</h2>
          <div>
            <form method="post">
              <p style="color: black; font-size: 20px; margin-top:10px">Fashion Designer Name | &nbsp <?php echo $row["fd_fname"]." ".$row["fd_lname"] ?></p>
              <p style="color: black; font-size: 20px; margin-top:10px">Status &nbsp &nbsp &nbsp &nbsp &nbsp | &nbsp <?php echo $row["status"]?></p>
            </form>
            <br/> <br/>
      <?php if($row["status"]=="Delivered"){?><button class="cart-button">Delivery Retreived! Complete Order</button><?php } ?>
          </div>
        </div>
      -->

      <div class="container">
        <h2>Order Details</h2>
        <form method="post">
          <div>
            <div class="title-n">
              <p style="font-weight:bold">Fashion Designer Name</p>
            </div>
            <div class="cust-n">
              <p ><?php echo $row["fd_fname"]." ".$row["fd_lname"] ?></p>
            </div>
          </div>
          <?php if($status!="Pending"){ ?>
          <br/><br/>
          <div>
            <div class="title-n">
              <p style="font-weight:bold">Order Price</p>
            </div>
            <div class="cust-n">
              <p >Rs. 1000.00</p>
            </div>
          </div>
          <?php } ?> 
          
        </form>

        <div class="progress-bar">
          <div class="step">
              <p>Pending</p>
              <div class="bullet">
                  <span>1</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
          <div class="step">
              <p>Accepted</p>
              <div class="bullet">
                  <span>2</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
          <div class="step">
              <p>Paid</p>
              <div class="bullet">
                  <span>3</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
          <div class="step">
              <p>Ongoing</p>
              <div class="bullet">
                  <span>4</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
          <div class="step">
              <p>Delivered</p>
              <div class="bullet">
                  <span>5</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
          <div class="step">
              <p>Completed</p>
              <div class="bullet">
                  <span>6</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
        </div>
        <div class="form-outer">
          <form action="#">
            <div class="page slide-page">
                <div class="field">
                  <button class="firstNext next">Pending</button>
                </div>
            </div>
            <div class="page slide-page">
              <div class="field">
                <!-- <button class="prev-1 prev">Pending</button> -->
                <button class="firstNext next">Accepted</button>
              </div>
            </div>
            <div class="page slide-page">
              <div class="field btns">
                <!-- <button class="prev-1 prev">Pending</button> -->
                <button class="firstNext next">Paid</button>
              </div>
            </div>
            <div class="page slide-page">
              <div class="field btns">
                  <!-- <button class="prev-2 prev">On going</button> -->
                  <button class="">On Going</button>
              </div>
            </div>
            <div class="page slide-page">
              <div class="field btns">
                  <!-- <button class="prev-2 prev">On going</button> -->
                  <button class="">Delivered</button>
              </div>
            </div>
            <div class="page slide-page">
              <div class="field btns">
                  <!-- <button class="prev-3 prev">Complete</button> -->
                  <button class="">Completed</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <script>
    const slidePage = document.querySelector(".slide-page");
    const submitBtn = document.querySelector(".submit");
    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    var status = "<?php echo $status ?>";

    if(status=="Pending"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");
    }
    if(status=="Accepted"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");

    bullet[1].classList.add("active");
    progressCheck[1].classList.add("active");
    progressText[1].classList.add("active");
    slidePage.style.marginLeft = "-25%";
    }
    if(status=="Paid"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");

    bullet[1].classList.add("active");
    progressCheck[1].classList.add("active");
    progressText[1].classList.add("active");

    bullet[2].classList.add("active");
    progressCheck[2].classList.add("active");
    progressText[2].classList.add("active");
    slidePage.style.marginLeft = "-50%";
    }
    if(status=="Ongoing"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");

    bullet[1].classList.add("active");
    progressCheck[1].classList.add("active");
    progressText[1].classList.add("active");

    bullet[2].classList.add("active");
    progressCheck[2].classList.add("active");
    progressText[2].classList.add("active");

    bullet[3].classList.add("active");
    progressCheck[3].classList.add("active");
    progressText[3].classList.add("active");
    slidePage.style.marginLeft = "-75%";
    }
    if(status=="Delivered"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");

    bullet[1].classList.add("active");
    progressCheck[1].classList.add("active");
    progressText[1].classList.add("active");

    bullet[2].classList.add("active");
    progressCheck[2].classList.add("active");
    progressText[2].classList.add("active");

    bullet[3].classList.add("active");
    progressCheck[3].classList.add("active");
    progressText[3].classList.add("active");

    bullet[4].classList.add("active");
    progressCheck[4].classList.add("active");
    progressText[4].classList.add("active");
    slidePage.style.marginLeft = "-100%";
    }
    if(status=="Completed"){
    bullet[0].classList.add("active");
    progressCheck[0].classList.add("active");
    progressText[0].classList.add("active");

    bullet[1].classList.add("active");
    progressCheck[1].classList.add("active");
    progressText[1].classList.add("active");

    bullet[2].classList.add("active");
    progressCheck[2].classList.add("active");
    progressText[2].classList.add("active");

    bullet[3].classList.add("active");
    progressCheck[3].classList.add("active");
    progressText[3].classList.add("active");

    bullet[4].classList.add("active");
    progressCheck[4].classList.add("active");
    progressText[4].classList.add("active");

    bullet[5].classList.add("active");
    progressCheck[5].classList.add("active");
    progressText[5].classList.add("active");
    slidePage.style.marginLeft = "-125%";
    }

  </script>

<?php if($status=="Pending"){ ?>
    <div class="alert">
      <p>Your order has been placed, Please wait until fashion designer accepted and estimate a price</p>
    </div>
<?php } ?>
<?php if($status=="Accepted"){ ?>
    <div class="alert">
      <p>Fashion designer has been accepted and estimated a price for the order, Please make your payment to start</p>
    </div>
<?php } ?>
<?php if($status=="Paid"){ ?>
    <div class="alert">
      <p>You have been paid for this order! Fashion Designer will be responded it as soon</p>
    </div>
<?php } ?>
<?php if($status=="Ongoing"){ ?>
    <div class="alert">
      <p>Fashion Designer is working on it</p>
    </div>
<?php } ?>
<?php if($status=="Delivered"){ ?>
    <div class="alert">
      <form action="fdesigner-order.php" method="post">
      <p>Fashion Designer delivered the order, Did you recieve the delivery?</p> <br/>
      <input type="hidden" name="order_id" value=<?php echo $row["id"]?> >
      <input type="hidden" name="fd_nic" value=<?php echo $row["fd_nic"]?> >
      <div class="card-img">
            <img src="/ucsc_2202_07/andum.lk/orders/fashion/<?php echo $row["doc"]; ?> " alt="delivery" style="width:500px">
      </div>
      <p>Please give your rate <input type="number" name="fd_rate" min="1" max="5"> /5</p> <br />
      <button name="fd-order-complete" class="accept-button">Mark as Completed</button>
    </div>
<?php } ?>
<?php if($status=="Completed"){ ?>
    <div class="alert">
      <p>You marked this order as Completed!</p>
    </div>

<?php } ?>



            <?php if($status=="Accepted"){ ?>
              <form action="https://sandbox.payhere.lk/pay/checkout" method="post">

                <?php //generate order random number and hash it
    $_SESSION['secret_order_key']=md5(rand(10,1000000));
    $secret_order_key = $_SESSION['secret_order_key']; ?>

            <!-- payment gateway info -->
            <input type="hidden" name="merchant_id" value="1216354">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://localhost/ucsc_2202_07/andum.lk/customer/fd-orderAuth.php">
    <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
    <input type="hidden" name="notify_url" value="http://sample.com/notify">  
    <!--<br><br>Item Details<br>-->
    <input type="hidden" name="order_id" value=<?php echo $secret_order_key?>>
    <input type="hidden" name="items" value=<?php echo "FDO-".$row["id"] ?>><br>
    <input type="hidden" name="currency" value="LKR">
    <input type="hidden" name="amount" value=<?php echo $row["price"] ?>>  
    <!-- <br><br>Customer Details<br>-->
    <input type="hidden" name="first_name" value="Saman">
    <input type="hidden" name="last_name" value="Perera"><br>
    <input type="hidden" name="email" value="samanp@gmail.com">
    <input type="hidden" name="phone" value="0771234567"><br>
    <input type="hidden" name="address" value="No.1, Galle Road">
    <input type="hidden" name="city" value="Colombo">
    <input type="hidden" name="country" value="Sri Lanka"><br><br> 


            <div>
            <?php $_SESSION['fd_oid_auth']=$row["id"]?> 
              <button name="fd-order-paid" class="cart-button" type="submit">Make Payment</button>
              <button name="fd-order-appeal" class="cart-button" type="submit">Request for price change</button>
            </div>
            </form>
            <?php } ?>
  
        <div class="d-flex">
            <!-- <lable for="other" style="">Other:</label> -->
            <form method="post" action="fdesigner-order.php">
              <input type="hidden" name="s_nic" value=<?php echo $nic ?>>
              <input type="hidden" name="r_nic" value=<?php echo $row["fd_nic"] ?>>
              <input type="hidden" name="order_id" value=<?php echo $row["id"] ?>>
              <input type="hidden" name="type" value="2">
              <textarea name="msg" rows="5" cols="50" placeholder="" class="txt-area"></textarea>
              <button class="cart-button" type="submit" name="chatBtn">Send</button>
            </form>
          </div>
        

          <?php
      } 
          ?>
      
<!-- retrieve messages from conversations -->
<?php
        $fd_nic=$row["fd_nic"];
        $chat_order_id=$row["id"];
        $sql_chat = "SELECT * FROM conversations c, users u WHERE c.type=2  AND ((c.sender_nic='$nic' AND c.reciever_nic='$fd_nic') OR (c.sender_nic='$fd_nic' AND c.reciever_nic='$nic') )AND c.order_id='$chat_order_id' AND c.sender_nic=u.nic ORDER BY c.date DESC" ;
        $result_chat = mysqli_query($db, $sql_chat);
        if ($result_chat) 
        {
          while($row_chat = mysqli_fetch_assoc($result_chat))
          {
      ?>
            <div id="chat-message-list">
              <div class="message-row you-message">
                <img src="" alt="">
                <div class="message-content">
                  <?php echo $row_chat["fname"]." ".$row_chat["lname"] ?>
                </div>
                <div class="message-content">
                <div class="message-time">
                  <?php echo $row_chat["date"] ?>
                </div>
                <div class="message-text">
                  <?php echo $row_chat["message"] ?>
                </div>
                </div>
                
              </div>
            </div>

            <?php 
          }
        }
            ?>


  </div>






  



  <?php require("../footer.php") ?>
</body>

</html>