<!--      //     Conectar Igualdad Jujuy - 2015                            CCCCC  IIIII    JJJJJ -->
<!--      l->                                                              C        I        J   -->
<!--      ll     Autores:                                                  C        I        J   -->
<!--  {   ll            * Roxana Emilce Paco: emilcepaco@gmail.com         C        I        J   -->
<!--  llllll            * Cristian Damián Cazón: cristiancazon@gmail.com   C        I    J   J   -->
<!--  ||  ||     Licencia GPLv3                                            C        I    J   J   -->
<!--  ''  ''                                                               CCCCC  IIIII  JJJJJ   -->

<html> 
<head>
<link href="estilo.css" rel="stylesheet" type="text/css">
<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=acreditar.php"> 
</head>
<body class="subtitulo">
<?php 
$v2 = $_POST['estado'];
$v3 = $_POST['nuevo_estado'];
require_once ('includemysql.php');
$sql = "SELECT * FROM persona WHERE id = $v3"; 
$result = mysql_query($sql);
$sql = "UPDATE persona SET estado='$v2' WHERE id=$v3";
$result = mysql_query($sql); 
?>
<p>Datos Modificados.</p>
<p>Volver&aacute; autom&aacute;ticamente a la P&aacute;gina Principal en 2 segundos.</p>
</body>
</html>