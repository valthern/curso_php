<html>
<body>
<h1>resultado</h1>
<?php
  define("salto", "<br>\n");
// Eliminamos los car�cteres "\" introducidos durante la recuperaci�n de los par�metros enviados.
  $HTTP_POST_VARS['expresion'] = ereg_replace("\\\\\\\\", "\\", $HTTP_POST_VARS['expresion']);
  $HTTP_POST_VARS['cadena'] = ereg_replace("\\\\\\\\", "\\", $HTTP_POST_VARS['cadena']); 
  $correcto = ereg($HTTP_POST_VARS['expresion'], $HTTP_POST_VARS['cadena']);
  echo ("La cadena: <b>$HTTP_POST_VARS[cadena]</b>".salto);
  echo ("y la expresion: <b>$HTTP_POST_VARS[expresion]</b>".salto);
  if ($correcto){
    echo ("<font color=blue><b>CONCUERDAN</b></font>".salto);
  }else{
    echo ("<font color=red><b>NO CONCUERDAN</b></font>".salto);
  }
?>
</body>
</html>
