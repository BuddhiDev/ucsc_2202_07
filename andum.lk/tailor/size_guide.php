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
  <title>Andum.lk - Hire a Tailor</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 65%;
      border: 1px solid #ddd;
    }

    th,
    td {
      text-align: left;
      padding: 10px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }

  </style>
</head> 
<body>
<header>
 <nav class="navbar-main">
      <div class="navbar-logo">
        <img class="logo" src="../logo.png" alt="logo" class="img-box">
      </div>
      <div class="box">
        <div class="nav_right">
          <ul>
            <li><i class="fas fa-user-circle"></i>
              <div class="dd_right">
                <ul>
                <li><a href="index.php"><i class="fas fa-chart-line"></i>Dashboad</a></li>
                  <li><a href="manage_tailor.php"><i class="fas fa-users"></i>Manage Tailor</a></li>
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
    <br>
  
        <h2><b><CENTER>SIZE GUIDE</CENTER></b><h2>
        <br>
        <h3><p >Andum.lk own buy sizes are designed to fit the following body measurements.<br>Some product's may vary from these measurements but you can still use them as a guide.</p></h3>
        <br>
        <h3><p>Measurement :: IN</p> <h3>
        <br>
        <div class="container-box">
            <table>
            <tr>
                <th>SIZE</th>
                <th>CHEST</th>
                <th>WAIST</th>
                <th>HIP</th>

            </tr>
            <tr>
                <td>XS / UK6</td>
                <td>31</td>
                <td>24</td>
                <td>34.5</td>
            
            </tr>
            <tr>
                <td>S / UK8</td>
                <td>32.5</td>
                <td>25.5</td>
                <td>36</td>
                
            </tr>
            <tr>
                
                <td>M / UK10</td>
                <td>34</td>
                <td>27</td>
                <td>37.5</td>
            </tr>
            <tr>
                
                <td>L / UK12</td>
                <td>36</td>
                <td>29</td>
                <td>39.5</td>
            </tr>
            <tr>
                <td>XL / UK14</td>
                <td>38</td>
                <td>31</td>
                <td>41.5</td>
            </tr>
            <tr>
                <td>XXL / UK16</td>
                <td>40</td>
                <td>33</td>
                <td>43.5</td>
            </tr>

        </table>
    </div>
    <h3>How to Measure</h3>
    <p><b>CHEST</b> -Measure around the fullest part, place the tape close under the arms and make sure the tape is flat across the back.</p>
    <p><b>WAIST</b> - Measure around natural waistline.</p>
    <p><b>HIP</b> - Measure 20cm down from the natural waistline.</p>
<?php require("../footer.php")?>

</body>
</html>