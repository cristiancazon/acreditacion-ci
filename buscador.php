<!--      //     Conectar Igualdad Jujuy - 2015                            CCCCC  IIIII    JJJJJ -->
<!--      l->                                                              C        I        J   -->
<!--      ll     Autores:                                                  C        I        J   -->
<!--  {   ll            * Roxana Emilce Paco: emilcepaco@gmail.com         C        I        J   -->
<!--  llllll            * Cristian Damián Cazón: cristiancazon@gmail.com   C        I    J   J   -->
<!--  ||  ||     Licencia GPLv3                                            C        I    J   J   -->
<!--  ''  ''                                                               CCCCC  IIIII  JJJJJ   -->

<?php
require_once ('includemysql.php');
$v1 = $_POST['dni'];
 $result = mysql_query("SELECT * FROM persona p join establecimiento e, region r, tipo t WHERE id = '$v1' and p.cue=e.cue and e.id_region=r.id_region and e.id_tipo=t.id_tipo");  
if ($row = mysql_fetch_array($result)){ 
      do { 
            $var1 = $row["id"];
            $var2 = $row["nombre"]; 
            $var3 = $row["telefono"]; 
            $var4 = $row["mail"]; 
            $var5 = $row["cue"]; 
            $var6 = $row["nom_establecimiento"]; 
            $var7 = $row["nom_region"]; 
            $var8 = $row["nom_tipo"]; 
            $var_est = $row["estado"];
            $var_est2 = $row["est2"];
            $var_est3 = $row["est3"];
            $var_est4 = $row["est4"];
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
} else { 
echo "No se ha encontrado ninguna persona con el DNI $v1"; 
} 
?>
<html> 
<body> 
<h3>Perfil</h3>
   <strong>DNI:</strong> <label><?php echo $var1 ?></label><br/>
   <strong>Apellido y Nombre:</strong> <label><?php echo $var2 ?></label><br/>
   <strong>Tel&eacute;fono:</strong> <label><?php echo $var3 ?> | </label>
   <strong>E-mail:</strong> <label><?php echo $var4 ?></label><br/>
   <strong>CUE:</strong> <label><?php echo $var5 ?> | </label>
   <strong>Establecimiento:</strong> <label><?php echo $var6 ?></label><br/>
   <strong>Regi&oacute;n:</strong> <label><?php echo $var7 ?> | </label>
   <strong>Tipo:</strong> <label><?php echo $var8 ?></label><br/>
<form method="POST" action="estado.php"> 
   <strong>1er D&iacute;a/Ma&ntilde;ana:</strong> <label><?php echo $var_est ?></label>
   <strong> | </strong>
     <select name="estado">
       <option value="presente">presente</option>
       <option value="ausente">ausente</option>
     </select>
	  <input type="hidden" name="nuevo_estado" value='<?php echo $v1 ; ?>' />
     <input type="submit" value="Cambiar" name="cambiar"> 
</form> 
<form method="POST" action="estado2.php"> 
   <strong>1er D&iacute;a/Tarde:</strong> <label><?php echo $var_est2 ?></label>
   <strong> | </strong>
     <select name="estado2">
       <option value="presente">presente</option>
       <option value="ausente">ausente</option>
     </select>
	  <input type="hidden" name="nuevo_estado2" value='<?php echo $v1 ; ?>' />
     <input type="submit" value="Cambiar" name="cambiar"> 
</form> 
<form method="POST" action="estado3.php"> 
   <strong>2do D&iacute;a/Ma&ntilde;ana:</strong> <label><?php echo $var_est3 ?></label>
   <strong> | </strong>
     <select name="estado3">
       <option value="presente">presente</option>
       <option value="ausente">ausente</option>
     </select>
	  <input type="hidden" name="nuevo_estado3" value='<?php echo $v1 ; ?>' />
     <input type="submit" value="Cambiar" name="cambiar"> 
</form> 
<form method="POST" action="estado4.php"> 
   <strong>2do D&iacute;a/Tarde:</strong> <label><?php echo $var_est4 ?></label>
   <strong> | </strong>
     <select name="estado4">
       <option value="presente">presente</option>
       <option value="ausente">ausente</option>
     </select>
	  <input type="hidden" name="nuevo_estado4" value='<?php echo $v1 ; ?>' />
     <input type="submit" value="Cambiar" name="cambiar"> 
</form> 
</body> 
</html> 