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
</head>

<body>

<?php require("header.php") ?>
<div class="add-new-position">
    <a href="/ucsc_2202_07/andum.lk/tailor/size_guide.php"><button class="loginbutton btn-full-w">Click Here for Size Guide</button></a>
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
                  if ($mycolors!="") {
                    foreach ($mycolors as $my_color){
                      // $data = array();
                      // array_push($data,$my_color);
                      // print_r($data);
                      // $y = sizeof($data);
                      // print_r($data[0]);
                      // for($x=0; $x<sizeof($data); $x++){
                      //   echo $data[$x];
                      ?>   
                      <label for="myRadioId" class="Color-radio">
                        <!-- <input type="radio" name="myRadioField" id="myRadioId" class="radio-input" style="backgroung-color:<?php echo $my_color ?>"> -->
                        <div class="radio-radio" style="background: <?php echo $my_color ?>;">
                        <input type="radio" name="myRadioField" id="myRadioId"    style="margin-top: 24px" value="<?php echo $my_color ?>">
                        </div>
                      </label>
                      <?php
                      // } 
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