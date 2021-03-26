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
  <title>Andum.lk - Manage Orders</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
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
  
  <?php require("header.php")?>

  <div class="add-new-position">
      <a class="cta" href="order_pdf.php"><button class="loginbutton btn-full-w">Generate PDF</button></a>
      <a class="cta" href="add_product.php"><button class="loginbutton btn-full-w">ADD NEW</button></a>
    </div>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

  <script>
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("notify-myDropdown").classList.toggle("notify-show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.notify-dropbtn')) {
    var myDropdown = document.getElementById("notify-myDropdown");
      if (myDropdown.classList.contains('notify-show')) {
        myDropdown.classList.remove('notify-show');
      }
    }
  }
  </script>

      <div class="status-btn-container">
        <button class="status-btn" onclick="myFunction2()">Pending Orders</button>
        <button class="status-btn" onclick="myFunction1()">Accepted Orders</button>
        <button class="status-btn" onclick="myFunction3()">Paid Orders</button>
        <button class="status-btn" onclick="myFunction4()">Ongoing Orders</button>
        <button class="status-btn" onclick="myFunction5()">Delivered Orders</button>
        <button class="status-btn" onclick="myFunction6()">Completed Orders</button>
      </div>


  <div class="container-box">
    <div style="overflow-x:auto;">
      <div id="div-3">
        <h2 class="tailor-heading">Pending Orders</h2>
        <table>
          <tr>
            <th>Customer Name</th>
            <th>Category</th>
            <th>Status</th>
            <th><center>Action</center></th>
          </tr>
          <tr>
            <?php
            $nic = $_SESSION['nic'];
            $sql = "SELECT * FROM t_orders WHERE t_nic='$nic' AND status='Pending' ";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <td><?php echo $row["c_fname"]." ".$row["c_lname"] ?></td>
                <td><?php echo $row["category"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td>
                  <div>
                    <center><a href="Manage_order.php?order_id_select=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
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

      <div id="div-4">
        <h2 class="tailor-heading">Accepted Orders</h2>
        <table>
          <tr>
            <th>Customer Name</th>
            <th>Category</th>
            <th>Status</th>
            <th><center>Action</center></th>
          </tr>
          <tr>
            <?php
            $nic = $_SESSION['nic'];
            $sql = "SELECT * FROM t_orders WHERE t_nic='$nic' AND status='Accepted' ";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <td><?php echo $row["c_fname"]." ".$row["c_lname"] ?></td>
                <td><?php echo $row["category"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td>
                  <div>
                    <center><a href="Manage_order.php?order_id_select=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
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

      <div id="div-5">
        <h2 class="tailor-heading">Paid Orders</h2>
        <table>
          <tr>
            <th>Customer Name</th>
            <th>Category</th>
            <th>Status</th>
            <th><center>Action</center></th>
          </tr>
          <tr>
            <?php
            $nic = $_SESSION['nic'];
            $sql = "SELECT * FROM t_orders WHERE t_nic='$nic' AND status='Paid' ";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <td><?php echo $row["c_fname"]." ".$row["c_lname"] ?></td>
                <td><?php echo $row["category"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td>
                  <div>
                    <center><a href="Manage_order.php?order_id_select=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
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
      
      <div id="div-6">
        <h2 class="tailor-heading">Ongoing Orders</h2>
        <table>
          <tr>
            <th>Customer Name</th>
            <th>Category</th>
            <th>Status</th>
            <th><center>Action</center></th>
          </tr>
          <tr>
            <?php
            $nic = $_SESSION['nic'];
            $sql = "SELECT * FROM t_orders WHERE t_nic='$nic' AND status='Ongoing' ";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <td><?php echo $row["c_fname"]." ".$row["c_lname"] ?></td>
                <td><?php echo $row["category"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td>
                  <div>
                    <center><a href="Manage_order.php?order_id_select=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
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

      <div id="div-7">
        <h2 class="tailor-heading">Delivered Orders</h2>
        <table>
          <tr>
            <th>Customer Name</th>
            <th>Category</th>
            <th>Status</th>
            <th><center>Action</center></th>
          </tr>
          <tr>
            <?php
            $nic = $_SESSION['nic'];
            $sql = "SELECT * FROM t_orders WHERE t_nic='$nic' AND status='Delivered' ";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <td><?php echo $row["c_fname"]." ".$row["c_lname"] ?></td>
                <td><?php echo $row["category"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td>
                  <div>
                    <center><a href="Manage_order.php?order_id_select=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
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

      <div id="div-8">
        <h2 class="tailor-heading">Completed Orders</h2>
        <table>
          <tr>
            <th>Customer Name</th>
            <th>Category</th>
            <th>Status</th>
            <th><center>Action</center></th>
          </tr>
          <tr>
            <?php

            $nic = $_SESSION['nic'];
            $sql = "SELECT * FROM t_orders WHERE t_nic='$nic' AND status='Completed' ";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <td><?php echo $row["c_fname"]." ".$row["c_lname"] ?></td>
                <td><?php echo $row["category"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td>
                  <div>
                    <center><a href="Manage_order.php?order_id_select=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
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
    </div>
  </div>

    <script>
      function myFunction1() 
      {
        var x = document.getElementById("div-3");
        var y = document.getElementById("div-4");
        var c = document.getElementById("div-5");
        var d = document.getElementById("div-6");
        var e = document.getElementById("div-7");
        var f = document.getElementById("div-8");
        if (x.style.display === "none" && c.style.display === "none" && d.style.display === "none" && e.style.display === "none" && f.style.display === "none") 
        {
          y.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
          c.style.display = "none";
          d.style.display = "none";
          e.style.display = "none";
          f.style.display = "none";
          y.style.display = "block";
          
        }
      }

      function myFunction2() 
      {
        var x = document.getElementById("div-3");
        var y = document.getElementById("div-4");
        var c = document.getElementById("div-5");
        var d = document.getElementById("div-6");
        var e = document.getElementById("div-7");
        var f = document.getElementById("div-8");
        if (y.style.display === "none" && c.style.display === "none" && d.style.display === "none" && e.style.display === "none" && f.style.display === "none") 
        {
          x.style.display = "block";
        } 
        else 
        {
          y.style.display = "none";
          c.style.display = "none";
          d.style.display = "none";
          e.style.display = "none";
          f.style.display = "none";
          x.style.display = "block";
        }
      }

      function myFunction3() 
      {
        var x = document.getElementById("div-3");
        var y = document.getElementById("div-4");
        var c = document.getElementById("div-5");
        var d = document.getElementById("div-6");
        var e = document.getElementById("div-7");
        var f = document.getElementById("div-8");
        if (x.style.display === "none" && y.style.display === "none" && d.style.display === "none" && e.style.display === "none" && f.style.display === "none") 
        {
          c.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
          y.style.display = "none";
          d.style.display = "none";
          e.style.display = "none";
          f.style.display = "none";
          c.style.display = "block";
        }
      }

      function myFunction4() 
      {
        var x = document.getElementById("div-3");
        var y = document.getElementById("div-4");
        var c = document.getElementById("div-5");
        var d = document.getElementById("div-6");
        var e = document.getElementById("div-7");
        var f = document.getElementById("div-8");
        if (x.style.display === "none" && y.style.display === "none" && c.style.display === "none" && e.style.display === "none" && f.style.display === "none") 
        {
          d.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
          y.style.display = "none";
          c.style.display = "none";
          e.style.display = "none";
          f.style.display = "none";
          d.style.display = "block";
        }
      }

      function myFunction5() 
      {
        var x = document.getElementById("div-3");
        var y = document.getElementById("div-4");
        var c = document.getElementById("div-5");
        var d = document.getElementById("div-6");
        var e = document.getElementById("div-7");
        var f = document.getElementById("div-8");
        if (x.style.display === "none" && y.style.display === "none" && c.style.display === "none" && d.style.display === "none" && f.style.display === "none") 
        {
          e.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
          y.style.display = "none";
          c.style.display = "none"
          d.style.display = "none";
          f.style.display = "none";
          e.style.display = "block";
        }
      }

      function myFunction6() 
      {
        var x = document.getElementById("div-3");
        var y = document.getElementById("div-4");
        var c = document.getElementById("div-5");
        var d = document.getElementById("div-6");
        var e = document.getElementById("div-7");
        var f = document.getElementById("div-8");
        if (x.style.display === "none" && y.style.display === "none" && c.style.display === "none" && d.style.display === "none" && e.style.display === "none") 
        {
          f.style.display = "block";
        } 
        else 
        {
          x.style.display = "none";
          y.style.display = "none";
          c.style.display = "none";
          d.style.display = "none";
          e.style.display = "none";
          f.style.display = "block";
        }
      }
    </script>
  
  <?php require("../footer.php")?>

</body>

</html>
