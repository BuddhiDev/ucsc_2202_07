<?php include("../server.php"); ?> 


<?php

$sql1 = "SELECT sl.id,sl.c_nic,sl.dress_id,sl.quantity,sl.total_price,sl.date,sl.status,ds.t_nic, sl.action FROM dress_sales AS sl INNER JOIN dress_showcase AS ds ON sl.dress_id = ds.dress_id  ";
$result1 = mysqli_query($db, $sql1); 





require("../fpdf181/fpdf.php");

$pdf= new FPDF('p' , 'mm' , 'A4');

$pdf->AddPage();

$pdf->SetFont('Arial', 'B',10);

// $pdf->cell(60, 10, "Dress ID", 1, 0, 'C');
$pdf->cell(20, 10, "Quantity", 1, 0, 'C');
$pdf->cell(40, 10, "Full Payment", 1, 0, 'C');
$pdf->cell(30, 10, "Invoice", 1, 0, 'C');
$pdf->cell(60, 10, "Date", 1, 0, 'C');
$pdf->cell(40, 10, "Status", 1, 1, 'C');


$pdf->SetFont('Arial','', 10);

while ($row = mysqli_fetch_assoc($result1)){
    // $pdf->cell(60,10,$row[["dress_id"]], 1 , 0 , 'C');
    $pdf->cell(20,10,$row["quantity"], 1 , 0 , 'C');
    $pdf->cell(40,10,$row["total_price"], 1 , 0 , 'C');
    $pdf->cell(30,10,$row["total_price"]*0.05, 1 , 0 , 'C');
    $pdf->cell(60,10,$row["date"], 1 , 0 , 'C');
    $pdf->cell(40,10,$row["status"], 1 , 1 , 'C');

}

$pdf->AddPage();
$sqlc = "SELECT o.id,o.c_nic,o.t_nic,o.t_fname,o.t_lname,o.status,o.date,o.price,o.dress_id,o.action,t.ac_no,t.bank FROM t_orders AS o INNER JOIN tailors AS t ON o.t_nic = t.nic ";
$resultc = mysqli_query($db, $sqlc); 

$pdf->cell(40, 10, "Full Name", 1, 0, 'C');
$pdf->cell(30, 10, "Full Payment", 1, 0, 'C');
$pdf->cell(30, 10, "Invoice", 1, 0, 'C');
$pdf->cell(50, 10, "Date", 1, 0, 'C');
$pdf->cell(40, 10, "Status", 1, 1, 'C');

while ($row = mysqli_fetch_assoc($resultc)){
    // $pdf->cell(60,10,$row[["dress_id"]], 1 , 0 , 'C');
    $pdf->cell(40,10,$row["t_fname"]. " " .$row["t_lname"], 1 , 0 , 'C');
    $pdf->cell(30,10,$row["price"], 1 , 0 , 'C');
    $pdf->cell(30,10,$row["price"]*0.05, 1 , 0 , 'C');
    $pdf->cell(50,10,$row["date"], 1 , 0 , 'C');
    $pdf->cell(40,10,$row["status"], 1 , 1 , 'C');

}

$pdf->AddPage();

$sql3 = "SELECT o.id, o.c_nic,o.fd_nic,o.fd_fname,o.fd_lname,o.status,o.date,o.price,o.action,f.ac_no,f.bank FROM fd_orders AS o INNER JOIN fashion_designer AS f ON o.fd_nic = f.nic ";
$result3 = mysqli_query($db, $sql3); 

$pdf->cell(40, 10, "Full Name", 1, 0, 'C');
$pdf->cell(30, 10, "Full Payment", 1, 0, 'C');
$pdf->cell(30, 10, "Invoice", 1, 0, 'C');
$pdf->cell(50, 10, "Date", 1, 0, 'C');
$pdf->cell(40, 10, "Status", 1, 1, 'C');

while ($row = mysqli_fetch_assoc($result3)){
    // $pdf->cell(60,10,$row[["dress_id"]], 1 , 0 , 'C');
    $pdf->cell(40,10,$row["fd_fname"]. " " .$row["fd_lname"], 1 , 0 , 'C');
    $pdf->cell(30,10,$row["price"], 1 , 0 , 'C');
    $pdf->cell(30,10,$row["price"]*0.05, 1 , 0 , 'C');
    $pdf->cell(50,10,$row["date"], 1 , 0 , 'C');
    $pdf->cell(40,10,$row["status"], 1 , 1 , 'C');

}


$pdf->OutPut();




?>