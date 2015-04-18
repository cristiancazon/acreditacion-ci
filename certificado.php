<!--      //     Conectar Igualdad Jujuy - 2015                            CCCCC  IIIII    JJJJJ -->
<!--      l->                                                              C        I        J   -->
<!--      ll     Autores:                                                  C        I        J   -->
<!--  {   ll            * Roxana Emilce Paco: emilcepaco@gmail.com         C        I        J   -->
<!--  llllll            * Cristian Damián Cazón: cristiancazon@gmail.com   C        I    J   J   -->
<!--  ||  ||     Licencia GPLv3                                            C        I    J   J   -->
<!--  ''  ''                                                               CCCCC  IIIII  JJJJJ   -->

<?php
require_once ('includemysql.php');
$xls_filename = 'imprimir_certificado.xls';
$result = mysql_query("SELECT id, nombre FROM persona p WHERE p.estado='presente' and p.est2='presente' and p.est3='presente' and p.est4='presente'");  
 
// Header info settings
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$xls_filename");
header("Pragma: no-cache");
header("Expires: 0");
 
/***** Start of Formatting for Excel *****/
// Define separator (defines columns in excel &amp; tabs in word)
$sep = "\t"; // tabbed character
 
// Start of printing column names as names of MySQL fields
for ($i = 0; $i<mysql_num_fields($result); $i++) {
  echo mysql_field_name($result, $i) . "\t";
}
print("\n");
// End of printing column names
 
// Start while loop to get data
while($row = mysql_fetch_row($result))
{
  $schema_insert = "";
  for($j=0; $j<mysql_num_fields($result); $j++)
  {
    if(!isset($row[$j])) {
      $schema_insert .= "NULL".$sep;
    }
    elseif ($row[$j] != "") {
      $schema_insert .= "$row[$j]".$sep;
    }
    else {
      $schema_insert .= "".$sep;
    }
  }
  $schema_insert = str_replace($sep."$", "", $schema_insert);
  $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
  $schema_insert .= "\t";
  print(trim($schema_insert));
  print "\n";
}
?>