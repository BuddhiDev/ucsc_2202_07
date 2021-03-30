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
  <title>Andum.lk - Purchase</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/wizard-styles.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    .main {
      width: 880px;
      height: 500px;
      margin-top: 86px;
      margin-left: 270px;
      /* background: #fafafafa; */
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px #fff;
    }

    .leftside {
      position: absolute;
      height: 500px;
      border-radius: 10px;
      width: 300px;
      /* background-image: url('/ucsc_2202_07/andum.lk/images/d-01.jpg'); */
      background-size: cover;
    }

    .p {
      margin-left: 40px;
      margin-top: 420px;
      color: black;
      font-weight: bold;
      font-family: sans-serif;
    }

    .one {
      border: 1px solid black;
      width: 30px;
      height: 30px;
      float: left;
      margin-left: 40px;
      margin-right: 40px;
      text-align: center;
      margin-top: 9px;
    }

    .one:hover {
      border: 2px solid black;
      width: 30px;
      height: 30px;
      float: left;
      text-align: center;
      margin-top: 9px;
    }

    .text {
      color: black;
    }

    .color-box {
      background-color: pink;
    }

    .onee {
      border: 1px solid black;
      width: 42px;
      font-size: 14px;
      height: 22px;
      float: left;
      margin-right: 5px;
      text-align: center;
    }

    .on {
      border: 1px solid black;
      border-radius: 10px;
      border-color: pink;
      width: 30px;
      background-color: pink;
      height: 30px;
      float: left;
      margin-right: 5px;
      text-align: center;
    }

    .on1 {
      border: 1px solid black;
      border-radius: 10px;
      border-color: blue;
      width: 30px;
      background-color: blue;
      height: 30px;
      float: left;
      margin-right: 5px;
      text-align: center;
    }

    .on2 {
      border: 1px solid black;
      border-radius: 10px;
      border-color: black;
      width: 30px;
      background-color: black;
      height: 30px;
      float: left;
      margin-right: 5px;
      text-align: center;
    }

    .onee:hover {
      border: 2px solid black;
      width: 42px;
      height: 22px;
      float: left;
      text-align: center;
    }

    h1 {
      font-weight: bold;
      font-family: sans-serif;
    }

    .rightside {
      width: 385px;
      height: 500px;
      border-radius: 10px;
      float: right;
      background: #fff;
    }

    .inside {
      padding: 18px;
    }

    .cart-button {
      padding: 9px 25px;
      background-color: #EB2188;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s ease 0s;
      text-align: center;
      -webkit-appearance: none;
    }

    .cart-button:hover {
      color: black;
    }

    .second {
      width: 50px;
    }

    .second:hover {
      width: 50px;
      background-color: #fab7cc;
    }

    .alert {
    padding: 20px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px; 
    }

    .accept-button{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
    }
  </style>
</head>

<body>

<?php require("header.php") ?>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

      
  <div class="container-box">
  <?php
  $selected_p_id = $_SESSION['selected_p_id'];
  $nic = $_SESSION['nic'];
  $sql = "SELECT * FROM dress_sales s,dress_showcase d,users u WHERE s.id=$selected_p_id AND (s.dress_id=d.dress_id AND d.t_nic=u.nic)";
  $result = mysqli_query($db, $sql);
  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $status=$row["status"];
  ?>

      <div class="container">
        <header>Sale Details</header>
        <form method="post">
          <div>
            <div class="title-n">
              <p style="font-weight:bold">Tailor Name</p>
            </div>
            <div class="cust-n">
              <p ><?php echo $row["fname"]." ".$row["lname"] ?></p>
            </div>
          </div>
          <?php if($status!="Pending"){ ?>
            <br/><br/>
          <div>
            <div class="title-n">
              <p style="font-weight:bold">Dress Title</p>
            </div>
            <div class="cust-n">
              <p ><?php echo $row["title"] ?></p>
            </div>
          </div>
          <div>
          <br/><br/>
            <div class="title-n">
              <p style="font-weight:bold">Shipping Address</p>
            </div>
            <div class="cust-n">
              <p ><?php echo $row["address"] ?></p>
            </div>
          </div>
          <br/><br/>
          
          <div>
            <div class="title-n">
              <p style="font-weight:bold">Colours</p>
            </div>
            <div class="cust-n">
              <p ><?php echo $row["color"] ?></p>
            </div>
          </div>
          <br/><br/>
          <div>
            <div class="title-n">
              <p style="font-weight:bold">Sizes</p>
            </div>
            <div class="cust-n">
              <p ><?php echo $row["size"] ?></p>
            </div>
          </div>
          <br/><br/>
          <div>
            <div class="title-n">
              <p style="font-weight:bold">Item Price</p>
            </div>
            <div class="cust-n">
              <p >Rs. <?php echo $row["total_price"] ?></p>
            </div>
          </div>
          <br/><br/>
          <div>
            <div class="title-n">
              <p style="font-weight:bold">Quantity</p>
            </div>
            <div class="cust-n">
              <p ><?php echo $row["quantity"] ?></p>
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
    slidePage.style.marginLeft = "-25%";

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

<?php if($status=="Paid"){ ?>
    <div class="alert">
      <p>You have beed paid for this item, Wait until tailor will be delivered it</p><br/>
    </div>
<?php } ?>
    <?php if($status=="Delivered"){ ?>
    <div class="alert">
    <form action="purchase.php" method="post">
      <p>Tailor has been delivered the order, Did you recieve it?</p>
      <input type="hidden" name="sale_id" value=<?php echo $row["id"]?> > <br/>
      <input type="hidden" name="tailor_nic" value=<?php echo $row["t_nic"]?> >
      <p>Please give your rate <input type="number" name="t_rate" min="1" max="5"> /5</p><br/>
      <button name="sale-complete" class="accept-button">Mark as Completed</button>
      </form>
    </div>
    <?php } ?>
    <?php if($status=="Completed"){ ?>
    <div class="alert">
      <p>You marked this order as Completed!</p>
    </div>
    <?php } ?>

    <center>
            <?php
            $clicked_dessID=$row['dress_id'];
            $sql_dress = "SELECT * FROM dress_showcase WHERE dress_id=$clicked_dessID ";
            $res_dress = mysqli_query($db, $sql_dress);
            $row_dress = mysqli_fetch_assoc($res_dress);

            if($row_dress['image']) { ?>
          <div class="card-img">
                      <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row_dress["image"]; ?> " alt="Avatar" style="width:20%">
                      </div></center>
                      <?php } ?> 
  
    <?php } ?>
     <?php require("../footer.php") ?>
    </div>
  </body>

</html>