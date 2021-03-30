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
  <title>Andum.lk - Hire a Tailor</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <!-- <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css"> -->
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/dropdown.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fonts.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/customerstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php require("header.php") ?>
  <div class="add-new-position">
      <a href="/ucsc_2202_07/andum.lk/tailor/size_guide.php"><button class="submit-button">Click Here for Size Guide</button></a>
  </div>

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
    $selected_t_nic = $_SESSION['selected_t_nic'];
    $selected_dress_id = $_SESSION['selected_dress_id'];
    $nic = $_SESSION['nic'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $sql = "SELECT * FROM users WHERE nic='$selected_t_nic' ";
    $result = mysqli_query($db, $sql);
    if ($result) {
      $row = mysqli_fetch_assoc($result);

      // get tailors dress
      $d_sql="SELECT * FROM dress_showcase WHERE dress_id='$selected_dress_id' ";
      $d_result = mysqli_query($db, $d_sql);
      $d_row = mysqli_fetch_assoc($d_result);
      //
    ?>

  <!--measurement form-->
  <div class="input-container">
    <form method="post" action="get-measured.php" style="max-width:1024px;margin:auto">
      <input type="hidden" value="<?php echo $d_row["dress_id"] ?> " name="dress_id">
      <input type="hidden" value="<?php echo $nic ?> " name="c_nic">
      <center><div class="card-item">
        <div class="card-img">
        <img src="/ucsc_2202_07/andum.lk/tailor/products/<?php echo $d_row["image"]; ?> " alt="Avatar" style="width:100%">
        </div>
        <div class="card-content">
          <div class="card-title"><?php echo $d_row["title"] ?></div>
        </div>
      </div></center>
    
      <h2 class="measure-headding">Get Measured</h2>
        <div class="d-flex">
          <div class="f1">
            <lable for="type" >Category:</label>
            <select class="option" name="category" id="category" >
              <optgroup label="WOMEN CASUAL WEAR">
              <option value="w-cas-dresses">DRESSES</option>
              <option value="w-cas-tshirts">T SHIRTS</option>
              <option value="w-cas-blouse">BLOUSE</option>
              <option value="w-cas-shirts">SHIRTS</option>
              <option value="w-cas-jeans">JEANS</option>
              <option value="w-cas-pants">PANTS</option>
              </optgroup>
              <optgroup label="WOMEN FORMAL WEAR">
              <option value="w-for-dresses">DRESSES</option>
              <option value="w-for-blouse">BLOUSE</option>
              <option value="w-for-skirts">SKIRTS</option>
              <option value="w-for-pants">PANTS</option>
              </optgroup>
              <optgroup label="WOMEN ETHNIC WEAR">
              <option value="w-eth-kurthas">KURTHAS</option>
              <option value="w-eth-sawls">SAWLS</option>
              <option value="w-eth-sarees">SAREES</option>
              </optgroup>
              <optgroup label="MEN CASUAL WEAR">
              <option value="m-cas-tshirts">T SHIRTS</option>
              <option value="m-cas-shirts">SHIRTS</option>
              <option value="m-cas-jeans">JEANS</option>
              <option value="m-cas-trousers">TROUSERS</option>
              <option value="m-cas-sarong">SARONG</option>
              <option value="m-cas-shorts">SHORTS</option>
              </optgroup>
              <optgroup label="MEN FORMAL WEAR">
              <option value="m-for-shirts">SHIRTS</option>
              <option value="m-for-trousers">TROUSERS</option>
              <option value="m-for-blazers">BLAZERS</option>
              </optgroup>
              <optgroup label="KIDS BOYS">
              <option value="k-b-tshirts">T SHIRTS</option>
              <option value="k-b-tanktops">TANK TOPS</option>
              <option value="k-b-shirts">SHIRTS</option>
              <option value="k-b-shorts">SHORTS</option>
              <option value="k-b-pants">PANTS</option>
              <option value="k-b-romper">Romper</option>
              <option value="k-b-sleepwear">SLEEP WEAR</option>
              </optgroup>
              <optgroup label="KIDS GIRLS">
              <option value="k-g-tshirts">T SHIRTS</option>
              <option value="k-g-dresses">DRESSES</option>
              <option value="k-g-shorts">SHORTS</option>
              <option value="k-g-sleepwear">SLEEP WEAR</option>
              </optgroup>
            </select>
          </div>

          <div class="f1">
              <div class="measure-card">
                  <div class="measure-card-value">
                      <input class="input-field" type="text"  placeholder="Material" name="material">
                  </div>                             
              </div>
          </div>

          <div class="f1">
              <div class="measure-card">
                  <div class="measure-card-value">
                      <input class="input-field" type="text" placeholder="Color" name="color">
                  </div>                             
              </div> 
          </div>            
        </div>
        <div class="d-flex">
          <div class="f1">
            <div class="measure-card">
              <div class="measure-card-img">
                  <img src="/ucsc_2202_07/andum.lk/images/neck-01.png" class="body-img">
              </div>
              <div class="measure-card-value">
                <input class="input-field" type="text" placeholder="Neck" name="neck">
                <select class="option" name="Unit" id="unit" style="">
                  <option>in</option>
                  <option>cm</option>
                </select>
              </div>                             
            </div>     
          </div>
          <div class="f1">
            <div class="measure-card">
              <div class="measure-card-img">
                <img src="/ucsc_2202_07/andum.lk/images/chest-01.png" class="body-img">
              </div>
              <div class="measure-card-value">
                <input class="input-field" type="text" placeholder="Chest" name="chest">
                <select class="option" name="Unit" id="unit" style="">
                  <option>in</option>
                  <option>cm</option>
                </select>
              </div>                             
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="f1">
            <div class="measure-card">
              <div class="measure-card-img">
                <img src="/ucsc_2202_07/andum.lk/images/waist-01.png" class="body-img">
              </div>
              <div class="measure-card-value">
                <input class="input-field" type="text" placeholder="Waist" name="waist">
                <select class="option" name="Unit" id="unit" style="">
                    <option>in</option>
                    <option>cm</option>
                </select>
              </div>                             
            </div>
          </div>
          <div class="f1">
            <div class="measure-card">
              <div class="measure-card-img">
                <img src="/ucsc_2202_07/andum.lk/images/realhip-01.png" class="body-img">
              </div>
              <div class="measure-card-value">
                <input class="input-field" type="text" placeholder="Seat" name="seat">
                <select class="option" name="Unit" id="unit" style="">
                  <option>in</option>
                  <option>cm</option>
                </select>
              </div>                             
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="f1">
            <div class="measure-card">
              <div class="measure-card-img">
                <img src="/ucsc_2202_07/andum.lk/images/shirtl-01.png" class="body-img">
              </div>
              <div class="measure-card-value">
                <input class="input-field" type="text" placeholder="Shirt Length" name="shirtlength">
                <select class="option" name="Unit" id="unit" style="">
                  <option>in</option>
                  <option>cm</option>
                </select>
              </div>                             
            </div>
          </div>
          <div class="f1">
            <div class="measure-card">
              <div class="measure-card-img">
                <img src="/ucsc_2202_07/andum.lk/images/back-01.png" class="body-img">
              </div>
              <div class="measure-card-value">
                <input class="input-field" type="text" placeholder="Shoulder Width" name="shoulderwidth">
                <select class="option" name="Unit" id="unit" style="">
                  <option>in</option>
                  <option>cm</option>
                </select>
              </div>                             
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="f1">
            <div class="measure-card">
              <div class="measure-card-img">
                <img src="/ucsc_2202_07/andum.lk/images/arm-01.png" class="body-img">
              </div>
              <div class="measure-card-value">
                <input class="input-field" type="text" placeholder="Arm Length" name="armlength">
                <select class="option" name="Unit" id="unit" style="">
                  <option>in</option>
                  <option>cm</option>
                </select>
              </div>                             
            </div>
          </div>
          <div class="f1">
            <div class="measure-card">
              <div class="measure-card-img">
                <img src="/ucsc_2202_07/andum.lk/images/cuff-01.png" class="body-img">
              </div>
              <div class="measure-card-value">
                <input class="input-field" type="text" placeholder="Wrist" name="wrist">
                <select class="option" name="Unit" id="unit" style="">
                  <option>in</option>
                  <option>cm</option>
                </select>
              </div>                             
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="f1">
            <div class="measure-card">
              <div class="measure-card-img">
                <img src="/ucsc_2202_07/andum.lk/images/bicep-01.png" class="body-img">
              </div>
              <div class="measure-card-value">
                <input class="input-field" type="text" placeholder="Biceps" name="biceps">
                <select class="option" name="Unit" id="unit" style="">
                  <option>in</option>
                  <option>cm</option>
                </select>
              </div>                             
            </div>
          </div>
          <div class="f1">
            <div class="measure-card">
              <div class="measure-card-img">
                <img src="/ucsc_2202_07/andum.lk/images/hip-01.png" class="body-img">
              </div>
              <div class="measure-card-value">
                <input class="input-field" type="text" placeholder="Hip" name="hip">
                <select class="option" name="Unit" id="unit" style="">
                  <option>in</option>
                  <option>cm</option>
                </select>
              </div>                             
            </div>
          </div>
        </div>
      
        <div class="d-flex">
          <textarea name="other" rows="20" cols="50" placeholder="Your message to tailor" class="txt-area"></textarea>
        </div>

        <div class="d-flex">
          <lable for="type" class="field-label-inline">Upload Sample Image:</label>
          <div class="measure-card-value">
            <input type="file" id="file" name="myimage" value=""> <br/>
          </div>
        </div>
      
        <input type="hidden" value=<?php echo $row["nic"]; ?> name="t_nic">
        <input type="hidden" value=<?php echo $row["fname"]; ?> name="t_fname">
        <input type="hidden" value=<?php echo $row["lname"]; ?> name="t_lname">
        <input type="hidden" value=<?php echo $nic; ?> name="c_nic">
        <input type="hidden" value=<?php echo $fname; ?> name="c_fname">
        <input type="hidden" value=<?php echo $lname; ?> name="c_lname">
        <input type="hidden" value=<?php echo $selected_dress_id; ?> name="selected_dress_id">
        <button type="submit" class="casual-btn" name="hireT">Submit</button>
    </form>
  </div>


  <?php } ?>
  </div>
  </div>
  
  <?php require("../footer.php") ?>
</body>

</html>