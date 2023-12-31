<?php
    require("fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image("Certificate.jpg",0,0,210,140);
    $pdf->Output("test.pdf","F");
?>