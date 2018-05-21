<?php

require dirname(dirname(__FILE__)).'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
//$orientation = 'P',
//        $format = 'A4',
//        $lang = 'fr',
//        $unicode = true,
//        $encoding = 'UTF-8',
//        $margins = array(5, 5, 5, 8),
//        $pdfa = false
$html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', array(13,10,13,0),false);
ob_start();
require_once(__DIR__ . '/res/taxlist.php');
$html = ob_get_clean();
$html2pdf->setDefaultFont('simhei');
//$html2pdf->setDefaultFont('Microsoft YaHei UI');
//$html2pdf->setDefaultFont('Mcrosoft YaHei');
//$html2pdf->addFont($family, $style, $file);
$html2pdf->writeHTML($html);

$html2pdf->output();