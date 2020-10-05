<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">

<!-- <style>
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.input-field {
  width: 60%;
  padding: 10px;
  outline: none;
  border-radius: 25px;

}

.input-field:focus {
  border: 2px solid black;
}

.option{
  background-color: #EB2188;
  padding: 8px 10px;
  border-radius: 25px;
}

/* Set a style for the submit button */
button {
    padding: 9px 25px;
    background-color:#EB2188;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
    text-align: center;
}

.button {
    display: flex 2;
    background-color:#F5F3FF;
    color: black;
}

button:hover {
    color: black;
}

</style> -->

</head>

<body>

  <!--nav bar-->
  <div class="box">
    <header>
      <img class="logo" src="logo.png" alt="logo">
      <nav>
        <ul class="nav-area">
          <li><a href="#">Explore</a></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Hire a Tailor</a></li>
          <li><a href="#">Hire a Fashion Designer</a></li>
          <li><a href="/ucsc_2202_07/andum.lk/about_us.php">About Us</a></li>
        </ul>
      </nav>
    </header>
  </div>

<!--measurement form-->
  <div class="input-container">
    <form action="/action_page.php" style="max-width:500px;margin:auto">
    <div class="measuer">
      <h2>Get Measured</h2>
      <div class="row">
        <div class="col-25">
          <lable for="type" class="input-field">Category:</label>
          <img src="" class="image">
        </div>
        <div class="col-75">
          <select class="option" name="Unit" id="unit">
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
            <optgroup label="Kids wear">
              <option value="15">School Uni Forms</option>
              <option value="16">T-shirt</option>
              <option value="17">Trouser</option>
              <option value="18">Frocks</option>
              <option value="19">skirts</option>
            </optgroup>
          </select>
        </div>
  </div>

  <div>
    <div class="row">
      <div>

      </div>
      <div class="col-25">
        <lable for="neck" class="input-field">Neck:</label>
        <img src="" class="image">
      </div>

      <div class="col-75">
        <input class="input-field" type="text" placeholder="Neck" name="neck">
        <select class="option" name="Unit" id="unit">
          <option>in</option>
          <option>cm</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <lable for="chest" class="input-field">Chest:</label>
        <img src="" class="image">
      </div>

      <div class="col-75">
        <input class="input-field" type="text" placeholder="Chest" name="chest">
        <select class="option" name="Unit" id="unit">
          <option>in</option>
          <option>cm</option>
        </select>
      </div>
   </div>

    <div class="row">
      <div class="col-25">
          <lable for="waist" class="input-field">Waist:</label>
          <img src="" class="image">
      </div>
      <div class="col-75">
        <input class="input-field" type="text" placeholder="Waist" name="waist">
        <select class="option" name="Unit" id="unit">
          <option>in</option>
          <option>cm</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <lable for="seat" class="input-field">Seat:</label>
        <img src="" class="image">
      </div>
      <div class="col-75">
        <input class="input-field" type="text" placeholder="Seat" name="seat">
        <select class="option" name="Unit" id="unit">
          <option>in</option>
          <option>cm</option>
        </select>
      </div>
    </div>


    <div >
      <p>other</p>
      <textarea name="message" rows="20" cols="50"></textarea>
    </div>
	  <button type="submit" class="btn">Submit</button>
    </div>
  </form>
</div>


<!--footer-->
<div class="footer">
  <div class="footer-content">
    <div class="footer-section about">
      <img class="footer-logo" src="logo.png" alt="logo"><h1 class="logo-txt"><span></span></h1>
      <div class="socials">
        <a href="#"><i class="fas fa-facebook"></i></a>
        <a href="#"><i class="fas fa-instagram"></i></a>
        <a href="#"><i class="fas fa- google+"></i></a>
      </div>
    </div>
    <div class="footer-section links">
      <ul>
        <a href="#"><li>HIRE A TAILOR</li></a>
        <a href="#"><li>HIRE A FASHION DESIGNER</li></a>
        <a href="#"><li>SHIPPING AND RETURNS</li></a>
      </ul>
    </div>
    <div class="footer-section links2 ">
      <ul>
        <a href="#"><li>HIRE A TAILOR</li></a>
        <a href="#"><li>HIRE A FASHION DESIGNER</li></a>
        <a href="#"><li>SHIPPING AND RETURNS</li></a>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
        &copy; andum.lk
  </div>
</div>
</body>
</html>
