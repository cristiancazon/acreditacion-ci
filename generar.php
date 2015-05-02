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
<form method="POST" action="vista/constancia.php" target=blank name="generar"> 
<strong class="subtitulo">Fecha:</strong> <input type="text" name="fecha" size="50">
<br><br> 
<strong class="subtitulo">Lugar:</strong> <input type="text" name="lugar" size="50">
<br><br> 
<strong class="subtitulo">Firma:</strong> <input type="text" name="firma" size="50">
<br><br> 
<strong class="subtitulo">Cargo:</strong> <input type="text" name="cargo" size="50">
<br><br> 
<input type="submit" value="Imprimir" name="generar" class="boton"> 
</form> 
    <br><br><hr>
    <a href="certificado.php" target="central" class="menu">Exportar a Planilla de C&aacute;lculo</a><br/>
</body>
</html>