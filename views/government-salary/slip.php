<?php
use kartik\mpdf\Pdf;
echo '<pre>';
print_r($data);
echo '</pre>';

echo $data['id_gs'];

$pdf = new Pdf();
$mpdf = $pdf->api; // fetches mpdf api
$mpdf->SetHeader('Kartik Header'); // call methods or set any properties
$mpdf->WriteHtml("xxx"); // call mpdf write html
echo $mpdf->Output('filename', 'D'); // call the mpdf api output as needed