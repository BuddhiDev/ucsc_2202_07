<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">


<style>
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

</style>

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

    <h2>Measurement Form</h2>

    <div class="row">
      <div class="col-25">
        <lable for="type" class="input-field">Category:</label>
        <img src="" class="image">
      </div>
      <div class="col-75">
        <select class="option" name="Unit" id="unit" style="color:white;">
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
      <div class="col-25">
        <lable for="neck" class="input-field" style="color:black;">Neck:</label>
        <img src="" class="image">
      </div>

      <div class="col-75">
        <input class="input-field" type="text" placeholder="Neck" name="neck">
        <select class="option" name="Unit" id="unit" style="color:white;">
          <option>in</option>
          <option>cm</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <lable for="chest" class="input-field" style="color:black;">Chest:</label>
        <img src="" class="image">
      </div>

      <div class="col-75">
        <input class="input-field" type="text" placeholder="Chest" name="chest">
        <select class="option" name="Unit" id="unit" style="color:white;">
          <option >in</option>
          <option>cm</option>
        </select>
      </div>
   </div>

    <div class="row">
      <div class="col-25">
          <lable for="waist" class="input-field" style="color:black;">Waist:</label>
          <img src="" class="image">
      </div>
      <div class="col-75">
        <input class="input-field" type="text" placeholder="Waist" name="waist">
        <select class="option" name="Unit" id="unit" style="color:white;">
          <option>in</option>
          <option>cm</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <lable for="seat" class="input-field" style="color:black;">Seat:</label>
        <img src="" class="image">
      </div>
      <div class="col-75">
        <input class="input-field" type="text" placeholder="Seat" name="seat">
        <select class="option" name="Unit" id="unit" style="color:white;">
          <option>in</option>
          <option>cm</option>
        </select>
      </div>
    </div>


    <div >
      <p>other</p>
      <textarea name="message" rows="20" cols="50"></textarea>
    </div>
	  <button type="submit" class="btn" style="color:white;">Submit</button>

  </form>
</div>


<!--footer-->
<?php require("footer.php")?>
</body>
</html>
