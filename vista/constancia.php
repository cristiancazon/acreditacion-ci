<?php
	require_once('../tcpdf/config/lang/eng.php');
	require_once('../tcpdf/tcpdf.php');
        require_once ('../includemysql.php');
	
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, false, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('http://www.xerex.com.ar');
$pdf->SetTitle('Certificado');
$pdf->SetSubject('Tutirial de reportes en PDF con PHP y MySQL');
$pdf->SetKeywords('Reporte, usuario, php, mysql');

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

$pdf->SetFont('helvetica', '', 12);

// Add a page 
// This method has several options, check the source code documentation for more information.
$pdf->setPrintHeader(false); //no imprime la cabecera ni la linea 
$pdf->setPrintFooter(false); // imprime el pie ni la linea 


 

//Crear html


    $result=mysql_query("SELECT * FROM persona p join establecimiento e WHERE estado='presente' and est2='presente' and p.cue=e.cue");
    while ($row = mysql_fetch_assoc($result)){ 
        //usar una tabla para ordenar
    $html='';
    $html=$html.'
    <div align="center"><img src="../img/logoPNIDE.jpg">
    <br/><br/><br/>CONSTANCIA DE ASISTENCIA AL EVENTO<br/><br/><br/>
    Por medio de la presente CERTIFICO que ';
	$html = $html. $row["nombre"];
	$html = $html.' DNI ';
	$html = $html. $row["id"];
	$html = $html.'<br/>';
	$html = $html. $row["nom_establecimiento"];
	$html = $html.'<br/><br/>';
	$html = $html.' participo del evento PNIDE en San Salvador de Jujuy.</p>';
        $html = $html.'</div><p align="right">Martes 28 de Abril de 2015, San Salvador de Jujuy</p>
        ';
        $pdf->AddPage('L','A4');
        $pdf->writeHTML($html, true, false, true, false, '');
    };
ob_end_clean();//rompimiento de pagina
$pdf->Output('constancia.pdf', 'I');
?>
