<?php

require '../config.php';
require DIR."/vendor/autoload.php";
require "../helpers/querys.php";

use Dompdf\Dompdf;
$dompdf = new Dompdf();

$pdfCollection = json_decode(file_get_contents(DIR."/src/json/pdf.json"), true);

$html = "<style>";
$html .= file_get_contents(DIR."/assets/css/pdf.css");
$html .= "</style>";

$html .= "<h2 class='pdf-titulo'>Informe</h2>";

$html .= "<div class='pdf-contenedor'>";

    foreach($pdfCollection as $item){
        $html .= "<h2 class='pdf-question'>".$item['title']."</h2>";
        $html .= tablePorcentaje($_CONEXION, $item['entidad'], $item['where'], $item['values']);
    }

$html .= "</div>";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'vertical');
$dompdf->render();

header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=".time().".pdf");
echo $dompdf->output();
?>