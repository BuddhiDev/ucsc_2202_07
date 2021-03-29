<?php include("../server.php"); ?> 
<?php

$sql = "SELECT * FROM users WHERE type='1'";
 $result = mysqli_query($db, $sql);


require("../fpdf181/fpdf.php");

$pdf= new FPDF('p' , 'mm' , 'A4');

$pdf->AddPage();

$pdf->SetFont('Arial', 'B',14);

$pdf->cell(50, 10, "Name", 1, 0, 'C');
$pdf->cell(70, 10, "Email", 1, 0, 'C');
$pdf->cell(40, 10, "Contact Number", 1, 1, 'C');

$pdf->SetFont('Arial','', 10);

while ($row = mysqli_fetch_assoc($result)){
    $pdf->cell(50,10,$row["fname"]. " " .$row["lname"] , 1 , 0 , 'C');
    $pdf->cell(70,10,$row["email"], 1 , 0 , 'C');
    $pdf->cell(40,10,$row["contactno"], 1 , 1 , 'C');

}


$pdf->OutPut();




?>