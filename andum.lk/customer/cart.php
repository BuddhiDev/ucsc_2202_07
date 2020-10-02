<?php include("../server.php");

if (!isset($_SESSION['nic'])) {
  header("location:../login.php");
  exit();
}

?>


<?php if (isset($_POST['Add To Cart']))

	$t_nic = mysqli_real_escape_string($db,$_POST['t_nic']);
  $category = mysqli_real_escape_string($db,$_POST['category']);
  $title = mysqli_real_escape_string($db,$_POST['title']);
  $amount = mysqli_real_escape_string($db,$_POST['amount']);
  $t_nic = mysqli_real_escape_string($db,$_POST['permission']);

  echo "upa";


?>






<?php
$nic = $_SESSION['nic'];
$sql = "SELECT * FROM products";
$result = mysqli_query($db, $sql);

if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
