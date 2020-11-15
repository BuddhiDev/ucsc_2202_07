<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>  

<?php include("../errors.php");
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Tailor</title>
  <link rel="shortcut icon" href="../logo.png">
  <link rel="stylesheet" href="ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/customerstyles.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
</head>

<body>

  <header>
    <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="../logo.png" alt="logo" class="img-box">
      </div>
      <div class="nav-item-middle">
        <ul class="nav-area">
          <li><a href="tailor-dashboard.php">Home</a></li>
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

          <li><a href="hire_tailor.php">Explore Tailors</a></li>
          <li><a href="hire_fashion_designer.php">Explore Fashion Designers</a></li>
          <li>
          
          </li>
        </ul>
      </div>
      
      <!-- </div> -->
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                  <li><a href="edit_profile.php"><i class="fas fa-edit"></i>Edit Profile</a></li>
                  <li><a href="index.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                  <li><a href=".php"><i class="fas fa-money"></i>sells</a></li>
                  <li><a href="#"><i class="fas fa-heart"></i>Favourites</a></li>
                  <li><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt" name="logout"></i>Sign Out</a></li>
                </ul>
              </div>
            </li>
            <li><i class="fas fa-envelope"></i></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

    <div class="search-container">
        <form method="post">
          <div class="form-field-inline">
            <input type="text" class="field-value-inline" name="q" placeholder="Search...">
            <button type="submit" class="search-input-group-btn" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </form>
    </div>

<div class="fd-container-box">

  <div class=fd-profile-row>
    <div class="profile-pic">
        <div class="pic">
            <img src="/ucsc_2202_07/andum.lk/images/profile/photo1.png" id="profileDisplay" name="profileDisplay" onclick="triggerClick()" alt="" class="proDisp">
        </div>        
        <label for="profile_pictures"></label>
        <input type="file" name="profilepic" value="" onchange="displayImage(this)" id="profilepic" class="fd-profile-pic-control">
        <div>
            <label for="">Thashwini</label>
        </div>
    </div>
  </div>

  <div class=fd-profile-row>
       <h3 class=tailor-headding>My Designs</h3>
  </div>

   <div class=fd-profile-row2>
    <div class="col-4">
        <form method="get" action="index.php" class="dress-showcase">
        <div class="card-item">
            <div class="card-img">
            <a href=""> <img src="/ucsc_2202_07/andum.lk/images/tailors//t6.jpg" alt="Avatar" style="width:100%"></a>
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
        <div class="card-item">
            <div class="card-img">
            <a href=""> <img src="/ucsc_2202_07/andum.lk/images/tailors//t6.jpg" alt="Avatar" style="width:100%"></a>
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
        <div class="card-item">
            <div class="card-img">
            <a href=""> <img src="/ucsc_2202_07/andum.lk/images/tailors//t6.jpg" alt="Avatar" style="width:100%"></a>
            </div>
            <div class="card-content">
            <div class="card-title"></div>
            <div class="card-description"></div>
            </div>
        </div>
        </form>
    </div>
        
        
    
    </div>

</div>

  <?php require("../footer.php")?>

</body>
</html>
