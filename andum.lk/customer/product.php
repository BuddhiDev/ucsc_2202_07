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
  <title>Andum.lk - Product</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <title>ADD TO CART</title>
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
  </style>
 
</head>

<body>

<?php require("header.php") ?>
<div class="add-new-position">
    <a href="/ucsc_2202_07/andum.lk/tailor/size_guide.php"><button class="loginbutton btn-full-w">(Click Here for Size Guide)</button></a>
</div>
  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

  <?php
  $selected_dress_id = $_SESSION['selected_dress_id'];
  $nic = $_SESSION['nic'];
  $sql = "SELECT * FROM dress_showcase WHERE dress_id=$selected_dress_id";
  $result = mysqli_query($db, $sql);
  if ($result) {
    $row = mysqli_fetch_assoc($result)
  ?>

  <div class="container-box">
    <div class="row">
      
      <div class="col-6">
        <div  class="img1">
          <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $row["image"]; ?> " alt="Avatar" style="width:100%">         
        </div>
      </div>
      
      <div class="col-6">
        <div class="product-detail-box">
          <form method="post">
            <p style="color: black; font-size: 30px; margin-top:10px"><?php echo $row["title"]?></p>
            
            <h4 style="color: black; margin-top:10px">LKR <?php echo $row["price"] ?>.00</h4>
            
            <!-- <h4 style="color: black; margin-top:10px">Available in stock: <?php if($item_added=="true"){echo $row["amount"]-1;}else{echo $row["amount"];} ?></h4> -->
            
            <div>
              <div>
                <p style="color: black; font-size: 15px; margin-top:10px">Color</p>
              </div>

              <div>
                <?php
                  $selected_dress_id = $_SESSION['selected_dress_id'];
                  $nic = $_SESSION['nic'];
                  $sqlc = "SELECT color FROM dress_showcase WHERE dress_id=$selected_dress_id";
                  $resultc = mysqli_query($db,$sqlc);
                  $rowc = mysqli_fetch_assoc($resultc);
                  $mystring = $rowc['color'];
                  $mycolors = (explode(",",$mystring));
                  if ($mystring) {
                    foreach ($mycolors as $my_color){
                      echo $my_color;
                      echo "<br>";
                    }
                  }
                  ?>              
              </div>

              <!-- <form action="" method="post">
                  HEX <input type="text" name="hex" value="<?php echo(isset($_POST['hex']))?$_POST['hex']:'';?>">
                  <input type="submit" values="Convert To RGB">
              </form> -->
                      
            </div>

            <div class="product-cont">
              <div class="quantity">
                <input type="number"  name="quant" value="1" class="quentity-input">
              </div>
              <div class="product-s">
              <?php
                  $selected_dress_id = $_SESSION['selected_dress_id'];
                  $nic = $_SESSION['nic'];
                  $sqls = "SELECT size FROM dress_showcase WHERE dress_id=$selected_dress_id";
                  $results = mysqli_query($db,$sqls);
                  $rows = mysqli_fetch_assoc($results);
                  $mystring = $rows['size'];
                  $mysizes = (explode(",",$mystring));
                  if ($mystring) {?>
                    <select name="size" id="size" class="option">
                    <?php  foreach ($mysizes as $my_size){
                      ?>  
                        <option value="<?php echo $my_size ?>"><?php echo $my_size ?></option>
                          
                    <?php } ?>
                    </select>
                  <?php } ?>
               
              </div> 
            </div>
            <div class="to-box">
              <div class="customized">
                <input type="hidden" value="<?php echo $row["dress_id"] ?> " name="dress_id">
                <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
                <button class="cart-button" type="submit" name="addTocart" <?php if($item_added=="true") echo "disabled"?>><?php if($item_added=="false"){?> ADD TO CART<?php } else {?>ADDED TO CART<?php }?></button>
              </div>
              <div class="customized">
                <button class="cart-button"><a href="order.php?t_t_nic=<?php echo $row["t_nic"]?>&dress_id=<?php echo $selected_dress_id?>" class="costomize-text">CUSTOMIZE</a></button>
              </div>

            </div>
            
          </form>
        </div>
        
      </div>
    </div>
    <?php } ?>
  </div>

  
  <?php require("../footer.php") ?>
</body>

</html>