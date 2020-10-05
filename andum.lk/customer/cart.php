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
  <title>Andum.lk - Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/style.css">
  <link rel="stylesheet" href="/ucsc_2202_07/andum.lk/loginstyle.css">
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
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
  <div class="box">
    <header>
      <img class="logo" src="/ucsc_2202_07/andum.lk/logo.png" alt="logo">
      <nav>
        <ul class="nav-area">
          <li><a href="index.php">Home</a></li>
          <li><a href="dress_showcase.php">Dress Showcase</a></li>
          <li><a href="hired_list.php">Hired Tailors</a></li>
          <li><a href="purchases.php">Purchases</a></li>
        </ul>
      </nav>
      <div>
        <a class="cta" href="index.php?logout='1'"><button name="logout" class="loginbutton btn-full-w">Sign Out</button></a>
      </div>
    </header>
  </div>
  <div>
    <h2>Cart</h2>
    <table>
      <tr>
        <th>Order Id</th>
        <th>Category</th>
        <th>Title</th>
        <th>Amount</th>

      </tr>
      <tr>
        <?php

        $nic = $_SESSION['nic'];
        $sql = "SELECT cart.order_id, dress_showcase.category, dress_showcase.title, dress_showcase.amount FROM cart INNER JOIN dress_showcase ON cart.c_nic='$nic' AND cart.dress_id=dress_showcase.dress_id";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {


          while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <td><?php echo $row["order_id"] ?></td>
            <td><?php echo $row["category"] ?></td>
            <td><?php echo $row["title"] ?></td>
            <td><?php echo $row["amount"] ?></td>
      </tr>
  <?php
          }
        } else {
        }

  ?>
    </table>
  </div>

  <form method="post">
    <!-- Checkout button click begin-->

    <!-- Checkout button click end-->
    <?php if (mysqli_num_rows($result) > 0) { ?>
    <center><a href="purchases.php"><button class="loginbutton btn-full-w" type="submit" name="Checkout">Checkout</button></a></center>
    <?php }  else {?>
    <center> No Items in the cart</center> <?php } ?>
    </form>


<?php require("footer.php")?>


</body>

</html>
