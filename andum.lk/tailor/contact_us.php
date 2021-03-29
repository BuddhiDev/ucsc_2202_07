<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andum.lk</title>
    <!-- Page-icon -->
    <link rel="shortcut icon" href="logo.png">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
    <!-- <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css"> -->
    <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/lightslider.css">
    <script type="text/javascript" src="/ucsc_2202_07/andum.lk/jquery.js"></script>
    <script type="text/javascript" src="/ucsc_2202_07/andum.lk/lightslider.js"></script>
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
    <?php
$nic = $_SESSION['nic'];
  $sql = "SELECT * FROM users WHERE nic='$nic' ";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="container-box">
      <div class="row">
        <div class="col-8">
            <form action="contact_us.php" method="post">

                <!-- errors display -->
                <?php include("../errors.php");
                ?>

                <div class="contact-us-container">
                    <div class="form-field-inline">
                    <label for="uname" class="field-label-inline">What is Your Issue</label>
                    <input type="text" class="field-value-inline" name="issue" required>
                    </div>

                    <div class="form-field-inline">
                    <label for="uname" class="field-label-inline">Order Id</label>
                    <input type="text" class="field-value-inline" name="oid" placeholder="If you have any complain regards to an order, please insert order id here">
                    </div>

                    <div class="form-field-inline">
                    <label for="fname" class="field-label-inline"><b>Your Name</b></label>
                    <input type="text" class="field-value-inline" name="cust_name" value=<?php echo $row["fname"]." ".$row["lname"]?> required>
                    </div>

                    <div class="form-field-inline">
                    <label for="email" class="field-label-inline"><b>Email Address</b></label>
                    <input type="text" class="field-value-inline" name="email" value=<?php echo $row["email"]?> required>
                    </div>

                    <div class="form-field-inline">
                    <label for="contactno" class="field-label-inline"><b>Phone Number</b></label>
                    <input type="text" class="field-value-inline" name="contactno" value=<?php echo $row["contactno"]?>>
                    </div>

                    <div class="form-field-inline">
                    <label for="address" class="field-label-inline"><b>Message</b></label>
                    <textarea name="c_msg" rows="5" cols="50" placeholder="" class="txt-area2"></textarea>
                    </div>

                    <div class="btn-panel-center">
                        <!-- <input type="button" onclick="sendEmail()" value="Send" class="loginbutton btn-full-w" name="message_send"> -->
                    <button class="loginbutton btn-full-w" type="submit" name="message_send">Send</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-4">
            <div class="contact-detail-box">
                <div>
                    <div class="contact-text1">Customer Care Hotline</div>
                    <div class="contact-text2">+9477123456</div>
                    <div class="contact-text1">Address</div>
                    <div class="contact-text2">101/2, Bangalawatta, Kothalawala, Kaduwela.</div>
                    <div></div>
                </div>
                
                
            </div>
            <div></div>
        </div>

        </div>
  
  </div>

    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        function sendEmail(){
            var issue = $(#issue);
            var cust_name = $(#cust_name);
            var email = $(#email);
            var contactno = $(#contactno);
            var c_msg = $(#c_msg);
        }
    </script>
 

  <!-- add a footer -->
  <?php require("footer.php")?>

  
</body>
</html>
