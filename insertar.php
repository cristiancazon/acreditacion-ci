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
</head>
<body class="subtitulo"> 
<h3>Nueva Persona</h3>
<form method="POST" action="agregar.php" target="central" name="agregar"> 
   <strong>DNI:</strong> <input type="text" name="dni"><br/>
   <strong>Apellido y Nombre:</strong> <input type="text" name="ayn"><br/>
   <strong>Tel&eacute;fono:</strong> <input type="text" name="tel"><br/>
   <strong>E-mail:</strong> <input type="text" name="mail"><br/>
   <strong>Localidad:</strong>
<select name="localidad" id="localidad" onchange=""> 
<?php 
require_once ('includemysql.php');
$result = mysql_query("SELECT * FROM localidad");  
while ( $loc = mysql_fetch_object( $result ) ) 
{ 
?> 
<option value="<?php echo $loc->id_localidad?>"> <?php echo $loc->nom_localidad?></option> 
<?php 
} 
?> 
</select><br/>
   <strong>CUE:</strong> <input type="text" name="cue"><br/>
   <input type="submit" value="Agregar" name="btn_agregar" class="boton"> 
</form> 
</body> 
</html> 