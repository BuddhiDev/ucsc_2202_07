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
  <title>Andum.lk - Inbox</title>
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/customerstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>
    .search-btn {
      background-color: white;
      color: #EB2188;
    }
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
      function() {
        this.classList.toggle("active");
      })
  </script>

  <?php include("../errors.php");
  ?>
  <div class="sliderbox-wrap">
    <div class="customer-container-box">

      
      <div class="customer-cover">

        <div class="row">

        <table>
      <tr>
        <th>User</th>
        <th>Conversation Type</th>
        <th><center>Action</center></th>

      </tr>
      <tr>
        <?php
          $nic = $_SESSION['nic'];

            // Read direct messages
            $sql = "SELECT c.order_id,u.fname,u.lname,c.type FROM conversations c, users u WHERE (c.sender_nic='$nic' AND c.reciever_nic=u.nic) OR (c.reciever_nic='$nic' AND c.sender_nic=u.nic) GROUP BY c.order_id,c.type ORDER BY c.date DESC ";
            $result = mysqli_query($db, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                ?>

            <td><?php echo $row["fname"]." ".$row["lname"]?></td>
            <td><?php if($row["type"]=='1'){echo "Tailor Order";}else{echo "Fashion Design Order";}?></td>
            <td>
              <div>
                <center><a class="cta" href="hired_list.php?order_id=<?php echo $row["order_id"]?>"><button class="loginbutton btn-full-w">View</button></a></center>
              </div>
            </td>
      </tr>
    <?php
              }
        } else{
            echo "You have no messages in inbox";
        }

    ?>
    </table>

      </div>
    </div>
      
      
  </div>

    <!--footer-->
    <?php require("../footer.php") ?>
</body>

</html>
