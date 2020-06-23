<?php

require_once '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//Recoger la vista a imprimir

ob_start();//Inicio el ob_Start
require_once 'pdf_para_generar.php';//Recojo lo que tiene como contenido
$html = ob_get_clean();//Aqui guardo el objeto

$html2pdf->writeHTML($html);
$html2pdf->output("pdf_generado.pdf");