<?php include("../server.php"); ?>
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

<?php require("header.php") ?>

  <body>

  <script>
    document.querySelector(".nav_right ul li").addEventListener("click",
      function() {
        this.classList.toggle("active");
      })
  </script>


  <div class="container-box">
    <div class="admin-container">
      <div class="admin-row">
        <div class="admin-search-container">
          <form method="post" action = "search_tailor.php">
            <div class="form-field-inline">
              <input type="text" class="field-value-inline" name="q" placeholder="Search by tailor name..">
              <button type="submit" class="admin-search-btn" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </form>
        </div>
      </div>
      <div class="add-new-position">
        <a class="cta" href="pdf_tailor.php"><button class="admin-button">Generate PDF</button></a>
      </div>
    </div>
    <div class="admin-table">
      <table>
        <tr>
          
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Profile</th>
          <th></th>
        </tr>
        <tr>
        
          <?php

            $sql = "SELECT * FROM users WHERE type='0'";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {

              while ($row = mysqli_fetch_assoc($result)) {
            ?>

         
          <td><?php echo $row["fname"]. " " .$row["lname"] ?></td>
          <td><?php echo $row["email"] ?></td>
          <td><?php echo $row["contactno"] ?></td>
          <td>
            <div>

            <a href="manage_tailor.php?t_nic=<?php echo $row["nic"]?>"><button class="admin-button" name="view_tailor" >View</button></a>

              <!-- <a href="#"><button class="view-button" >View</button></a> -->
            </div>
          </td>
          <td>
            <div>
              <a href="manage_tailor.php?d_tnic=<?php echo $row["nic"]?>"><button class="admin-suspend-button">Suspend</button></a>
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
      <?php require("../footer.php")?>

</body>
</html>