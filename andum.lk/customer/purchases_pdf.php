<?php include("../server.php"); ?> 
<?php

$nic = $_SESSION['nic'];
$sql = "SELECT * FROM dress_sales d,dress_showcase s,users u WHERE d.c_nic='$nic' AND (d.dress_id=s.dress_id AND s.t_nic=u.nic)";
$result = mysqli_query($db, $sql);



require("../fpdf181/fpdf.php");

$pdf= new FPDF('p' , 'mm' , 'A4');

$pdf->AddPage();

$pdf->SetFont('Arial', 'B',14);

$pdf->cell(60, 10, "Tailor Name", 1, 0, 'C');
$pdf->cell(70, 10, "Category", 1, 0, 'C');
$pdf->cell(60, 10, "Status", 1, 1, 'C');

$pdf->SetFont('Arial','', 14);

while ($row = mysqli_fetch_assoc($result)){
    $pdf->cell(60,10,$row["fname"]. " " .$row["lname"] , 1 , 0 , 'C');
    $pdf->cell(70,10,$row["category"], 1 , 0 , 'C');
    $pdf->cell(60,10,$row["status"], 1 , 1 , 'C');

}


$pdf->OutPut();




?>