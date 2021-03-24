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
  
        <h2 class="size-guide-p">SIZE GUIDE<h2>
        <br>
        <h3><p class="size-guide-p">Andum.lk own buy sizes are designed to fit the following body measurements.<br>Some product's may vary from these measurements but you can still use them as a guide.</p></h3>
        <br>
        <h3><p class="size-guide-p">Measurement :: IN</p> <h3>
        <br>
        <div class="container-box">
          <div class="size-guide-table"><center>
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
  </center>
          </div>

          <div>
          <h3 class="size-guide-p">HOW TO MEASURE</h3>

          <div class="input-container">
            <form method="post" action="get-measured.php" style="max-width:1024px;margin:auto">
                
                <div class="d-flex">
                  <div class="size-f1">
                    <div class="measure-card">
                      <div class="measure-card-img">
                          <img src="/ucsc_2202_07/andum.lk/images/neck-01.png" class="body-img">
                      </div>
                      <div class="measure-card-value">
                        <h3 class="size-guide-h3">Neck</h3>
                        <p class="size-guide-p2">Measure around the base of the neck  (slightly loose; donot take this too tight).</p>
                        
                      </div>                             
                    </div>     
                  </div>
                  <div class="size-f1">
                    <div class="measure-card">
                      <div class="measure-card-img">
                        <img src="/ucsc_2202_07/andum.lk/images/chest-01.png" class="body-img">
                      </div>
                      <div class="measure-card-value">
                      <h3 class="size-guide-h3">Chest</h3>
                      <p class="size-guide-p2">Measure and wrap it under your armpits at the fullest part of your chest. Stand straight and don't puff out your chest. Keep the tape measure taut, but not constricting. It shouldn't be squeezing down your chest, just resting.</p>
                        
                      </div>                             
                    </div>
                  </div>
                </div>

                <div class="d-flex">
                  <div class="size-f1">
                    <div class="measure-card">
                      <div class="measure-card-img">
                        <img src="/ucsc_2202_07/andum.lk/images/waist-01.png" class="body-img">
                      </div>
                      <div class="measure-card-value">
                      <h3 class="size-guide-h3">Waist</h3>
                      <p class="size-guide-p2">Wrap the measuring tape around the smallest part of your torso at the waist ( about an inch above).</p>
                        
                      </div>                             
                    </div>
                  </div>
                  <div class="size-f1">
                    <div class="measure-card">
                      <div class="measure-card-img">
                        <img src="/ucsc_2202_07/andum.lk/images/realhip-01.png" class="body-img">
                      </div>
                      <div class="measure-card-value">
                      <h3 class="size-guide-h3">Seat</h3>
                      <p class="size-guide-p2">Measurement around the widest part of your hips.</p>
                        
                      </div>                             
                    </div>
                  </div>
                </div>

                <div class="d-flex">
                  <div class="size-f1">
                    <div class="measure-card">
                      <div class="measure-card-img">
                        <img src="/ucsc_2202_07/andum.lk/images/shirtl-01.png" class="body-img">
                      </div>
                      <div class="measure-card-value">
                      <h3 class="size-guide-h3">Shirt Length</h3>
                      <p class="size-guide-p2">Measured from the shoulder (close to the neck, where it is highest) to where you want the garment hemline. Tape should go over the fullest part of the bust. If it is a pant or skirt, measure from where you want it to be tied at the waist, to the hemline you want. </p>
                        
                      </div>                             
                    </div>
                  </div>
                  <div class="size-f1">
                    <div class="measure-card">
                      <div class="measure-card-img">
                        <img src="/ucsc_2202_07/andum.lk/images/back-01.png" class="body-img">
                      </div>
                      <div class="measure-card-value">
                      <h3 class="size-guide-h3">Shoulder Width</h3>
                      <p class="size-guide-p2">This is measured from shoulder bone on one side to the other side shoulder bone.</p>
                        
                      </div>                             
                    </div>
                  </div>
                </div>

                <div class="d-flex">
                  <div class="size-f1">
                    <div class="measure-card">
                      <div class="measure-card-img">
                        <img src="/ucsc_2202_07/andum.lk/images/arm-01.png" class="body-img">
                      </div>
                      <div class="measure-card-value">
                      <h3 class="size-guide-h3">Arm Length</h3>
                      <p class="size-guide-p2">This is according to your preference . Where your sleeve should end. If the sleeve length is past the elbow you should bend the arm slightly when taking the measurement.</p>
                        
                      </div>                             
                    </div>
                  </div>
                  <div class="size-f1">
                    <div class="measure-card">
                      <div class="measure-card-img">
                        <img src="/ucsc_2202_07/andum.lk/images/cuff-01.png" class="body-img">
                      </div>
                      <div class="measure-card-value">
                      <h3 class="size-guide-h3">Wrist</h3>
                      <p class="size-guide-p2">Measure around the arms where the sleeve should end.</p>
                        
                      </div>                             
                    </div>
                  </div>
                </div>

                <div class="d-flex">
                  <div class="size-f1">
                    <div class="measure-card">
                      <div class="measure-card-img">
                        <img src="/ucsc_2202_07/andum.lk/images/bicep-01.png" class="body-img">
                      </div>
                      <div class="measure-card-value">
                      <h3 class="size-guide-h3">Biceps</h3>
                      <p class="size-guide-p2">Measure at the thickest part of both biceps. Wrap a tape measure around both your biceps at their thickest point, near your armpit. </p>
                        
                      </div>                             
                    </div>
                  </div>
                  <div class="size-f1">
                    <div class="measure-card">
                      <div class="measure-card-img">
                        <img src="/ucsc_2202_07/andum.lk/images/hip-01.png" class="body-img">
                      </div>
                      <div class="measure-card-value">
                      <h3 class="size-guide-h3">Hip</h3>
                      <p class="size-guide-p2">Measure around the hips.</p>
                      </div>                             
                    </div>
                  </div>
                </div>
            </form>
          </div>
    

          </div>
          
        </div>
    
<?php require("../footer.php")?>

</body>
</html>