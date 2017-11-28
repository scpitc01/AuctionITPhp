<?php

//header('Location: Report.php');

require 'DatabaseConnection.php';
require '../FPDF/fpdf.php';
    $year = date("Y");
    $conn = Connect();
    $query = "CALL viewReceipts(".$year.")";
    $result = $conn->query($query);

$pdf = new FPDF();
$running_total = $current_ID = 0;

foreach($result as $row) {
    if($current_ID == 0)
    {
        $pdf->AddPage();
        $running_total = 0;
        $current_ID = $row["BuyerId"];
        $running_total = $row["Value"];
        $pdf->SetFont('Arial','B',15);
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(0,10,"Purchased By ID Number: " . $row["BuyerId"],0,0,'C');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(0, 5,$row["ItemId"] . " " . $row["Description"] . " " . "$" . $row["Value"],0,0,'C');
    }
    else if($row["BuyerId"] != $current_ID)
    {
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(0,10,"Total Due: " . "$" . $running_total,0,0,'C');
        $pdf->AddPage();
        $running_total = 0;
        $current_ID = $row["BuyerId"];
        $running_total = $row["Value"];
        $pdf->SetFont('Arial','B',15);
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(0,10,"Purchased By ID Number: " . $row["BuyerId"],0,0,'C');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(0, 5,$row["ItemId"] . " " . $row["Description"] . " " . "$" . $row["Value"],0,0,'C');
    }
    else 
    {
        $running_total = $running_total + $row["Value"];
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(0, 5,$row["ItemId"] . " " . $row["Description"] . " " . "$" . $row["Value"],0,0,'C');
    }	
        //$pdf->Cell(0, 5,$row["ItemId"] . " " . $row["Description"] . "$" . $row["Value"],0,0,'C');
        //$pdf->Ln();
        //$pdf->Cell(0, 40,"$" . $row["Value"] . " ". $row["Description"],0,0,'C');
        //$pdf->Ln();
        //$pdf->Ln();
        //$pdf->Ln();
        //$pdf->Ln();
        //$pdf->Ln();
        //$pdf->Cell(0,10,"Purchased By:",0,0,'C');
        //$pdf->Ln();
        //$pdf->Cell(0,10, $row["BuyerId"],0,0,'C');
}
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(0,10,"Total Due: " . "$" . $running_total,0,0,'C');
$pdf->Output();
?>