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
<body OnLoad="document.formulario.dni.focus();">
<form method="POST" action="buscador.php" target="central" name="formulario"> 
<strong class="subtitulo">Ingresar DNI:</strong> <input type="text" name="dni"
size="18" pattern="[0-9]{7,8}" title="Ingresar DNI 7 u 8 d&iacute;gitos num&eacute;ricos.">
<br><br> 
<input type="submit" value="Buscar" name="buscar" class="boton"> 
</form> 
</body>
</html>