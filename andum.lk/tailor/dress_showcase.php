<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Dress Showcase</title>
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
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
          <div class="search-container">
        <form method="post">
          <div class="form-field-inline">
            <input type="text" class="field-value-inline" name="q" placeholder="Search...">
            <button type="submit" class="search-input-group-btn" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </form>
      </div>
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
                  <li><a href="Manage_sales.php"><i class="fas fa-money"></i>Sales</a></li>
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
  <!-- <div class="wrapper">
        <aside class="bg-gra-200 border-r border-gray-300">Left</aside>
        <main>Right</main>
    </div> -->

    <div class="top-bar">
      <div class="d-flex">
          <div class="search-container">
            <div class="form-field-inline">
              <label for="uname" class="field-label-inline">Search by category</label>
              <input type="text" class="field-value-inline" name="uname" required>
            </div>
          </div>
        </div>
    </div>
 
  <!-- <section class="products">
        <div class="product-container">
            <h1>ALL</h1>
            <div class="row">
                <div class="col-md-3">
                     <div class="img-box"></div>
                     <img src="product1.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </section> -->

  <!-- <div class="card">
  <img src="product1.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Tailored Jeans</h1> -->
  <!-- <p class="price">$19.99</p>
  <p>Some text about the jeans..</p>
  <p><button>Add to Cart</button></p> -->
  <!-- </div> -->
  <!-- <div class="sliderbox-wrap">

    <?php
    $nic = $_SESSION['nic'];
    $sql = "SELECT * FROM dress_showcase";
    $result = mysqli_query($db, $sql);

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="slider-box">
          <form method="post" action="index.php" class="dress-showcase">
            <table>
              <tr>
                <td>
                  <img src="product1.jpg" alt="Avatar" style="width:200px">
                </td>
                <td>
                  <h4><b>
                      <input type="hidden" value="<?php echo $row["category"] ?> " name="category">
                      <input type="hidden" value="<?php echo $row["title"] ?> " name="title">
                      Category: <?php echo $row["category"] ?> <br />
                      Title: <?php echo $row["title"] ?> <br />
                      Items in stock: <?php echo $row["amount"] ?>
                    </b></h4>
                </td>
              </tr>
            </table>
          </form>
        </div>

        <br />

    <?php
      }
    }
    ?>


  </div> -->

  <div class="add-new-position">
  <a class="cta" href="add_product.php"><button class="loginbutton btn-full-w">ADD NEW</button></a>
</div>
<div class="container-box">
  <div class="row">
    <div class="col-4">
      <form method="post" action="index.php" class="dress-showcase">
        <div class="card-item">
          <div class="card-img">
            <img src="product1.jpg" alt="Avatar" style="width:100%">
          </div>
          <div class="card-content">
            <div class="card-title">Summer casual top</div>
            <div class="card-description">
                <span>LKR 1,500.00</span>
            </div>
            <div class="">
              <a class="" href=""><button name="logout" class="btn-primary-sm">ADD TO CART</button></a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-4">
      <form method="post" action="index.php" class="dress-showcase">
        <div class="card-item">
          <div class="card-img">
            <img src="product1.jpg" alt="Avatar" style="width:100%">
          </div>
          <div class="card-content">
            <div class="card-title">Andrea Perera</div>
            <div class="card-description">
                Auto-layout for flexbox grid columns also means you can set the width of one column 
                and have the sibling columns automatically resize around it.
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-4">
      <form method="post" action="index.php" class="dress-showcase">
        <div class="card-item">
          <div class="card-img">
            <img src="product1.jpg" alt="Avatar" style="width:100%">
          </div>
          <div class="card-content">
            <div class="card-title">Andrea Perera</div>
            <div class="card-description">
                Auto-layout for flexbox grid columns also means you can set the width of one column 
                and have the sibling columns automatically resize around it.
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-4">
      <form method="post" action="index.php" class="dress-showcase">
        <div class="card-item">
          <div class="card-img">
            <img src="product1.jpg" alt="Avatar" style="width:100%">
          </div>
          <div class="card-content">
            <div class="card-title">Andrea Perera</div>
            <div class="card-description">
                Auto-layout for flexbox grid columns also means you can set the width of one column 
                and have the sibling columns automatically resize around it.
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require("footer.php")?>

</body>

</html>
