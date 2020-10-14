<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="loginstyle.css">
  <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/explo.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>
  <div class="box">
    <header>
      <img class="logo" src="logo.png" alt="logo">
      <nav>
        <ul class="nav-area">
            <li><a href="#">Explore</a></li>
            <li><a href="/ucsc_2202_07/andum.lk/unregistered_user_hire_tailor.php">Hire a Tailor</a></li>
            <li><a href="#">Hire a Fashion Designer</a></li>
            <li><a href="/ucsc_2202_07/andum.lk/about_us.php">About Us</a></li>

        </ul>
      </nav>

    </header>
  </div>




<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Create Your Style</h1>
    <p>with</p>
    <h2>Andum.lk</h2>
    <div class="login-btn-panel">
      <a class="cta" href="/ucsc_2202_07/andum.lk/login.php"><button class="loginbutton btn-full-w">Sign In</button></a>
      <a class="cta" href="/ucsc_2202_07/andum.lk/signup.php"><button class="loginbutton btn-full-w">Sign Up</button></a>
    </div>
  </div>
</div>



<?php require("footer.php")?>
</body>

</html>
