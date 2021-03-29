<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Andum.lk - Purchases</title>
  <link rel="shortcut icon" href="logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>

    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 99%;
      border: 1px solid #ddd;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }
  </style>
  
</head>

<body>


<?php require("header.php") ?>
<div class="add-new-position">
      <a class="cta" href="purchases_pdf.php"><button class="loginbutton btn-full-w">Generate PDF</button></a>
    </div>



 



  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
    function(){
      this.classList.toggle("active");
    })
  </script>

  <div class="container-box">
  <div class="btn-container">
        <button class="status-btn" onclick="myFunction1()">Current Orders</button>
        <button class="status-btn" onclick="myFunction2()">Completed Orders</button>
        </div>

  <div id="div-12">
    <h2 class="tailor-heading">Current Orders</h2>
      <table>
        <tr>
          <th>Dress Name</th>
          <th>Tailor Name</th>
          <th>Status</th>
          <th><center>Action</center></th>

        </tr>
        <tr>
          <?php

          $nic = $_SESSION['nic'];
          $sql = "SELECT * FROM dress_sales d,dress_showcase s,users u WHERE d.c_nic='$nic' AND (d.dress_id=s.dress_id AND s.t_nic=u.nic) AND status <>'Completed' ORDER BY date DESC";
          $result = mysqli_query($db, $sql);

          if ($result) {

            while ($row = mysqli_fetch_assoc($result)) {
          ?>

              <td><?php echo $row["title"] ?></td>
              <td><?php echo $row["fname"]." ".$row["lname"] ?></td>
              <td><?php echo $row["status"] ?></td>
              <td>
                <div>
                  <center><a class="cta" href=purchases.php?purchase_id=<?php echo $row["id"]?>><button class="loginbutton btn-full-w">View</button></a></center>
                </div>
              </td>
        </tr>
        <?php
              }
            } else {
            }

        ?>
      </table>

  </div>

  <div id="div-13">
  <h2 class="tailor-heading">Completed Orders</h2>
    <table>
      <tr>
        <th>Dress Name</th>
        <th>Tailor Name</th>
        <th>Status</th>
        <th><center>Action</center></th>

      </tr>
      <tr>
        <?php

        $nic = $_SESSION['nic'];
        $sql = "SELECT * FROM dress_sales d,dress_showcase s,users u WHERE d.c_nic='$nic' AND (d.dress_id=s.dress_id AND s.t_nic=u.nic) AND status ='Completed' ORDER BY cr_date DESC";
        $result = mysqli_query($db, $sql);

        if ($result) {

          while ($row = mysqli_fetch_assoc($result)) {
        ?>

              <td><?php echo $row["title"] ?></td>
              <td><?php echo $row["fname"]." ".$row["lname"] ?></td>
              <td><?php echo $row["status"] ?></td>
            <td>
              <div>
                <center><a class="cta" href=purchases.php?purchase_id=<?php echo $row["id"]?>><button class="loginbutton btn-full-w">View</button></a></center>
              </div>
            </td>
      </tr>
      <?php
            }
          } else {
          }

      ?>
    </table>

  </div>

  <script>
      function myFunction1() 
      {
        var x = document.getElementById("div-12");
        var y = document.getElementById("div-13");
        if (x.style.display === "none") 
        {
          x.style.display = "block";
          y.style.display = "none";
        } 
        else 
        {
          y.style.display = "none";
          x.style.display = "block";
        }
      }

      function myFunction2() 
      {
        var x = document.getElementById("div-12");
        var y = document.getElementById("div-13");
        if (y.style.display === "none") 
        {
          y.style.display = "block";
          x.style.display = "none";
        } 
        else 
        {
          x.style.display = "none";
          y.style.display = "block";
        }
      }
    </script>
    

    
  </div>

<?php require("../footer.php")?>

</html>
