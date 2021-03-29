<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>
<?php include("admin_controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andum.lk - Admin</title>
  <link rel="shortcut icon" href="../logo.png">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/loginstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/tailorstyle.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/styles/fashion-designer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/dc4ee3e80e.js" crossorigin="anonymous"></script>
  <style>
    table {
      border-spacing: 10px;
    width: 100%;
    }

    th,
    td {
      text-align: center;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }
  </style>


</head>

<body>


  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>

  <?php include("../errors.php");?>
  
  <div class="container-box">
    <div class="fd-container-box">
 <div style="overflow-x:auto;">
 <table>
   <tr>
     <th>Nic</th>
     <th>Name</th>
     <th>Email</th>
     <th>Phone</th>
     <th>Profile</th>
     <th></th>
   </tr>
   <tr>
   
     <?php

       $sql = "SELECT * FROM users WHERE  fname LIKE '%$keyword%'";
       $result = mysqli_query($db, $sql);

       if (mysqli_num_rows($result) > 0) {

         while ($row = mysqli_fetch_assoc($result)) {
       ?>

     <td><?php echo $row["nic"] ?></td>
     <td><?php echo $row["fname"]. " " .$row["lname"] ?></td>
     <td><?php echo $row["email"] ?></td>
     <td><?php echo $row["contactno"] ?></td>
     <td>
       <div>
         <a href="manage_customer.php?c_nic=<?php echo $row["nic"]?>"><button class="admin-button" name="view_user" >View</button></a>
        
        

       </div>
     </td>
     <td>
       <div>
       <a href="manage_customer.php?d_cnic=<?php echo $row["nic"]?>"><button class="admin-button" name="delete_user">Suspend</button></a>
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
      
     

    <!--footer-->
    <?php require("../footer.php") ?>
</body>

</html>
