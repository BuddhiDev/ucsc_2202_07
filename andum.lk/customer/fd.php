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
  <title>Andum.lk - Hire a Fashion Designer</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/customerstyles.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
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
    $selected_f_id = $_SESSION['selected_f_id'];
    $nic = $_SESSION['nic'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $sql = "SELECT * FROM users u INNER JOIN fashion_designer fd WHERE u.nic=fd.nic AND u.nic= '$selected_f_id'";
    $result = mysqli_query($db, $sql);
    if ($result) {
      $row = mysqli_fetch_assoc($result)
    
    ?>
        
    <div class="row">
      <div class="fd-title">
        <div class="fd-card-img">
          <img src="/ucsc_2202_07/andum.lk/fashion_designer/profile_pictures/<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%" class="proDisp">
        </div>
        <div class="fd-rightside">
            <div  class="fd-title-box">
              <form method="post">
                <p style="color: black; font-size: 20px; margin-top:10px"><?php echo $row["fname"]." ".$row["lname"] ?></p>
                  <div class="fd-title-box">
                    Please explore below Featured images to get Idea about me..!
                </div>
              </form>
            </div>
        </div>
      </div>       
    </div> 
    
    <center>
      <!-- <div class=row>    -->
        <h3 class="fashion-designer-headding">My Featured Images</h3>
      <!-- </div> -->
    </center>
    
    <div class=fd-profile-row2>
      <div class="col-4">
        <form method="get" action="index.php" class="dress-showcase">
          <div class="fd-featured-card-item">
              <div class="card-img">
              <a href=""><img src="/ucsc_2202_07/andum.lk/fashion_designer/sample_images/<?php echo $row["image1"]; ?>" alt="Avatar" style="width:100%"></a>
              </div>
              <div class="card-content">
              <div class="card-title"></div>
              <div class="card-description"></div>
              </div>
          </div>
        </form>
      </div>
      <div class="col-4">
        <form method="get" action="index.php" class="dress-showcase">
          <div class="fd-featured-card-item">
            <div class="card-img">
              <a href=""><img src="/ucsc_2202_07/andum.lk/fashion_designer/sample_images/<?php echo $row["image2"]; ?>" alt="Avatar" style="width:100%"></a>
            </div>
            <div class="card-content">
            <div class="card-title"></div>
            <div class="card-description"></div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-4">
        <form method="get" action="index.php" class="dress-showcase">
          <div class="cfd-featured-card-item">
              <div class="card-img">
              <a href=""> <img src="/ucsc_2202_07/andum.lk/fashion_designer/sample_images/<?php echo $row["image3"]; ?>" alt="Avatar" style="width:100%"></a>
              </div>
              <div class="card-content">
              <div class="card-title"></div>
              <div class="card-description"></div>
              </div>
          </div>
        </form>
      </div>
      <form method="post" action="fd.php" style="width:100%">
        <div class="d-flex">
          <!-- <lable for="other" style="">Other:</label> -->
          <textarea name="other" rows="20" cols="50" placeholder="Your message to Fashion Designer" class="txt-area"></textarea>
        </div>
        <input type="hidden" value=<?php echo $row["nic"]; ?> name="fd_nic">
        <input type="hidden" value=<?php echo $row["fname"]; ?> name="fd_fname">
        <input type="hidden" value=<?php echo $row["lname"]; ?> name="fd_lname">
        <input type="hidden" value=<?php echo $nic; ?> name="c_nic">
        <input type="hidden" value=<?php echo $fname; ?> name="c_fname">
        <input type="hidden" value=<?php echo $lname; ?> name="c_lname">
        <button type="submit" class="casual-btn" name="hireFD">Send</button>
      </form>
      
      <?php } ?>
    </div>
    
  </div>
  
  <?php require("../footer.php") ?>
</body>

</html>