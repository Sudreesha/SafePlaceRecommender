<?php
require_once './FPDF/fpdf.php';
require_once './connect.php';


if (isset($_POST['submit'])) {

    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage('P');
    $pdf->AliasNbPages('{pages}');
    $pdf->SetAutoPageBreak(true, 10);
    $pdf->SetFont('arial', 'B', '14');

    $pdf->cell('55', '10', 'NAME', '1', '0', 'C');
    $pdf->cell('55', '10', 'FEEDBACK', '1', '0', 'C');
    $pdf->cell('55', '10', 'SUGGESTION', '1', '1', 'C');


    $sqlu = "SELECT * FROM user_feed";
    $resu = mysqli_query($conn, $sqlu);
    $pdf->break;
    $pdf->SetFont('arial', '', '12');
    while ($row = mysqli_fetch_assoc($resu)) {
        $pdf->cell('55', '10', $row['uname'], '1', '0', 'C');
        $pdf->cell('55', '10', $row['feedback'], '1', '0', 'C');
        $pdf->cell('55', '10', $row['suggestion'], '1', '1', 'C');
    }
}
$pdf->Output();
