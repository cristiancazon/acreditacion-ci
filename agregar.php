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
<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=acreditar.php"> 
</head>
<body class="subtitulo">
<?php 
$v1 = $_POST['dni'];
$v2 = $_POST['ayn'];
$v3 = $_POST['tel'];
$v4 = $_POST['mail'];
$v5 = $_POST['localidad'];
$v6 = $_POST['cue'];
require_once ('includemysql.php');
$sql = "INSERT INTO persona (id,nombre,telefono,mail,id_localidad,cue,estado,est2,est3,est4) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','ausente','ausente','ausente','ausente')"; 
if (mysql_query($sql)) {
    echo "Nueva Persona Agregada";
} else {
    echo "Error -> No se pudo crear la persona.";
};
?>
<p>Volver&aacute; autom&aacute;ticamente a la P&aacute;gina Principal en 3 segundos.</p>
</body>
</html>