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
  <title>Andum.lk - Hired Tailors</title>
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




 



  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
    function(){
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

  <div class="container-box">
  <h2 class="tailor-heading">Current Orders</h2>
    <table>
      <tr>
        <th>Tailor Name</th>
        <th>Category</th>
        <th>Status</th>
        <th><center>Action</center></th>

      </tr>
      <tr>
        <?php

        $nic = $_SESSION['nic'];
        $sql = "SELECT * FROM t_orders WHERE c_nic='$nic' AND status <>'Completed' ";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <td><?php echo $row["t_fname"]." ".$row["t_lname"] ?></td>
            <td><?php echo $row["category"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td>
              <div>
                <center><a class="cta" href="hired_list.php?order_id_select=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
              </div>
            </td>
      </tr>
    <?php
          }
        } else {
        }

    ?>
    </table>

    <h2 class="tailor-heading">Completed Orders</h2>
    <table>
      <tr>
        <th>Tailor Name</th>
        <th>Category</th>
        <th>Status</th>
        <th><center>Action</center></th>

      </tr>
      <tr>
        <?php

        $nic = $_SESSION['nic'];
        $sql = "SELECT * FROM t_orders WHERE c_nic='$nic' AND nstatus ='1' ";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <td><?php echo $row["t_fname"]." ".$row["t_lname"] ?></td>
            <td><?php echo $row["category"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td>
              <div>
                <center><a class="cta" href="customer_read_message.php?id_c=<?php echo $row["id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
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

<?php require("../footer.php")?>

</html>
