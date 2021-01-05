<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fonts.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>

  <!--nav bar-->
  <div class="box">
  <?php require("header.php") ?>
  </div>

  <!--measurement form-->
  <div class="input-container">
    <form action="/action_page.php" style="max-width:1024px;margin:auto">
      <h2 class="measure-headding">Get Measured</h2>
      <div class="d-flex">
        <div class="f1">
          <lable for="type" >Category:</label>
          <img src="" class="image">
              <!-- </div>
              <div class="f1"> -->
          <select class="option" name="Unit" id="unit" >
            <optgroup label="WOMEN CASUAL WEAR">
              <option value="1">DRESSES</option>
              <option value="2">T SHIRTS</option>
              <option value="3">BLOUSE</option>
              <option value="4">SHIRTS</option>
              <option value="5">JEANS</option>
              <option value="6">PANTS</option>
              <!-- <option value="7">Party Frock</option>
              <option value="8">Saree</option>
              <option value="9">Bridal Dress</option> -->
            </optgroup>
            <optgroup label="WOMEN FORMAL WEAR">
              <option value="10">DRESSES</option>
              <option value="11">BLOUSE</option>
              <option value="12">SKIRTS</option>
              <option value="13">PANTS</option>
            </optgroup>
            <optgroup label="WOMEN ETHNIC WEAR">
              <option value="14">KURTHAS</option>
              <option value="15">SAWLS</option>
              <option value="16">SAREES</option>
            </optgroup>
            <optgroup label="MEN CASUAL WEAR">
              <option value="17">T SHIRTS</option>
              <option value="18">SHIRTS</option>
              <option value="19">JEANS</option>
              <option value="20">TROUSERSS</option>
              <option value="21">SARONG</option>
              <option value="22">SHORTS</option>
            </optgroup>
            <optgroup label="MEN FORMAL WEAR">
              <option value="23">SHIRTS</option>
              <option value="24">TROUSERSS</option>
              <option value="25">BLAZERS</option>
            </optgroup>
            <optgroup label="KIDS BOYS">
              <option value="26">T SHIRTS</option>
              <option value="27">TANK TOPS</option>
              <option value="28">SHIRTS</option>
              <option value="29">SHORTS</option>
              <option value="30">PANTS</option>
              <option value="31">SLEEP WEAR</option>
            </optgroup>
            <optgroup label="KIDS BOYS">
              <option value="32">T SHIRTS</option>
              <option value="33">DRESSES</option>
              <option value="34">SHORTS</option>
              <option value="35">SLEEP WEAR</option>
            </optgroup>
          </select>
        </div>

        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Material" name="material">
            </div>                             
          </div>
        </div>
        <div class="f1">
          <div class="measure-card">
            <div class="measure-card-value">
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
              <input class="input-field" type="text" placeholder="Color" name="color">
            </div>                             
          </div>
        </div>
      </div> 

      <div class="d-flex">
        <div class="f1">
          <div class="measure-card-img">
            <img src="/ucsc_2202_07/andum.lk/images/neck-01.png" class="body-img">
          </div>
          <div class="measure-card-value">
            <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
            <input class="input-field" type="text" placeholder="Neck" name="neck">
            <select class="option" name="Unit" id="unit" style="">
              <option>in</option>
              <option>cm</option>
            </select>
          </div>
        </div>
        <div class="f1">
          <div class="measure-card-img">
            <img src="/ucsc_2202_07/andum.lk/images/chest-01.png" class="body-img">
          </div>
          <div class="measure-card-value">
            <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
            <input class="input-field" type="text" placeholder="Chest" name="chest">
            <select class="option" name="Unit" id="unit" style="">
              <option>in</option>
              <option>cm</option>
            </select>
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
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
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
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
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
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
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
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
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
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
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
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
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
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
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
              <!-- <lable for="neck" class="input-field" style="">Neck:</label> -->
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
        <!-- <lable for="other" style="">Other:</label> -->
        <textarea name="message" rows="20" cols="50" placeholder="Other" class="txt-area"></textarea>
      </div>
      <button type="submit" class="casual-btn">Submit</button>
    </form>
  </div>

<!--footer-->
<?php require("footer.php")?>
</body>
</html>
