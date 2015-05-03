<?php
	require_once('../tcpdf/config/lang/eng.php');
	require_once('../tcpdf/tcpdf.php');
        require_once ('../includemysql.php');
	
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, false, 'ISO8859-1', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('http://www.xerex.com.ar');
$pdf->SetTitle('Certificado');
$pdf->SetSubject('');
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

    $fecha=$_POST['fecha'];
    $lugar=$_POST['lugar'];
    $firma=$_POST['firma'];
    $cargo=$_POST['cargo'];
    $programa=$_POST['programa'];
    $result=mysql_query("SELECT * FROM persona p join establecimiento e WHERE estado='presente' and est2='presente' and p.cue=e.cue ORDER BY nombre");
    while ($row = mysql_fetch_assoc($result)){ 
        //usar una tabla para ordenar
    $html='';
        $html=$html.'<table border="0" align="center"><tr><th><img src="../img/pdf-arriba.jpg" border="0"></th></tr>'
                .'<tr><td></td></tr><h2>'
                .'<tr><td align="center">Se hace constar que '.$row["nombre"].', DNI '.$row["id"].',</td></tr>'
                .'<tr><td align="center">Particip&oacute; del 1er Encuentro de N&uacute;cleo de Jornada Completa.</td></tr>'
                .'<tr><td align="center">El mismo corresponde a la 1er instancia presencial del ciclo</td></tr>'
                .'<tr><td align="center">de formaci&oacute;n del Plan Nacional de Inclusi&oacute;n Digital Educativa.</td></tr>'
                .'<tr><td></td></tr></h2>'
                .'<tr><td width="%90" align="right"><h4>'.$fecha.', '.$lugar.'</h4></td><td></td></tr>'
                .'<tr><td></td><td></td></tr>'
                .'<tr><td></td><td></td></tr>'
                .'<tr><td></td><td></td></tr>'
                .'<tr><td></td><td></td></tr>'
                .'<tr><td width="%50"></td><td align="center"><i>'.$firma.'</i></td></tr>'
                .'<tr><td width="%50"></td><td align="center"><i>'.$cargo.'</i></td></tr>'
                .'<tr><td width="%50"></td><td align="center"><i>'.$programa.'</i></td></tr>'
                .'<tr><td width="%10"></td><td width="%80" align="center"><img src="../img/pdf-abajo.jpg" border="0"></td><td width="%10"></td></tr>'
                . '</table>';
        $pdf->AddPage('L','A4');
        $pdf->writeHTML($html, true, false, true, false, '');
    };
ob_end_clean();//rompimiento de pagina
$pdf->Output('constancia.pdf', 'I');
?>
