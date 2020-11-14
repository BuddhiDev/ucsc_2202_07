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
  <header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="../logo.png" alt="logo" class="img-box">
      </div>
      <div class="nav-item-middle">
        <ul class="nav-area">
          <li><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a href="#">Women</a>
            <div class="row">
              <ul class="menu-area">
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Casual Wear</li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">T shirts</a></li>
                    <li><a href="#">Blouse</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="#">Pants</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Formal Wear</li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Blouse</a></li>
                    <li><a href="#">Skirts</a></li>
                    <li><a href="workwear_gents.php">Pants</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Ethnic wear</li>
                    <li><a href="#">Kurthas</a></li>
                    <li><a href="#">Shlwas</a></li>
                    <li><a href="#">Sarees</a></li>
                  </ul>
                </div>
              </ul>
            </div>
              
            
          </li>
          <li class="dropdown">
            <a href="#">Men</a>
            <div class="row">
              <ul class="menu-area">
                <div class="col-6">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Casual Wear</li>
                    <li><a href="#">T shirts</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="index.php?dcategory=trouser">Trousers</a></li>
                    <li><a href="#">Sarong</a></li>
                    <li><a href="#">Shorts</a></li>
                  </ul>  
                </div>
                <div class="col-6">
                  <ul class="inner-menu">
                    <li class="inner-list-header">Formal Wear</li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Trousers</a></li>
                    <li><a href="#">Blazers</a></li>
                  </ul>
                </div> 
              </ul>
            </div>            
          </li>
          <li class="dropdown">
            <a href="#">Kids</a>
            <div class="row">
            <ul class="menu-area">
              <div class=col-6>
                <ul class="inner-menu">
                  <li class="inner-list-header">Boys</li>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Tank Tops</a></li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Sleepware</a></li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="inner-menu">
                  <li class="inner-list-header">Girls</li>
                  <li><a href="#">T shirts</a></li>
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Sleepware</a></li>
                </ul>
              </div>             
            </ul>
              

            </div>
            
          </li>

          <li><a href="hire_tailor.php">Hire a Tailor</a></li>
          <li><a href="hire_fashion_designer.php">Hire a Fashion Designer</a></li>
        </ul>
      </div>
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                  <li><a href="cust_edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                  <li><a href="hired_list.php"><i class="fas fa-users"></i>Hired Tailors</a></li>
                  <li><a href="#"><i class="fas fa-users"></i>Hired Fashion Designers</a></li>
                  <li><a href="purchases.php"><i class="fas fa-money"></i>Purchases</a></li>
                  <li><a href="#"><i class="fas fa-heart"></i>Favourites</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>

            <li><i class="fas fa-envelope"></i></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
        </div>
        </ul>
      </div>
      </div>
    </nav>
  </header>
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
            <optgroup label="Ladies wear">
              <option value="1">Blouse</option>
              <option value="2">skirt</option>
              <option value="3">frock</option>
              <option value="4">Short</option>
              <option value="5">Trouser</option>
              <option value="6">T-Shirt</option>
              <option value="7">Party Frock</option>
              <option value="8">Saree</option>
              <option value="9">Bridal Dress</option>
            </optgroup>
            <optgroup label="Gents wear">
              <option value="10">Shirt</option>
              <option value="11">T-shirt</option>
              <option value="12">Denim</option>
              <option value="13">Trouser</option>
              <option value="14">Groom Dress</option>
            </optgroup>
            <optgroup label="Casual wear">
              <option value="15">Casual Wear blouse</option>
              <option value="16">Casual wear pants</option>
              <option value="17">Casual wear Denims</option>
              <option value="18">Casual wearShorts</option>
              <option value="19">Casual wear T-shirts</option>
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
