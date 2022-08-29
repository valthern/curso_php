<html>
<body>
<h1><center>Resultado</center></h1>
<?php
  define("salto", "<br>\n");
  if (!isset($HTTP_POST_VARS["cadena"]) || !isset($HTTP_POST_VARS["expresion"])){
    echo "La cadena y la expresión regular deben tener contenido." . salto;
    die ();
  }
// Se eliminan los "\" introducidos al recuperar las variables.
  $HTTP_POST_VARS["expresion"] = ereg_replace("\\\\\\\\", "\\", $HTTP_POST_VARS["expresion"]);
  $HTTP_POST_VARS["cadena"] = ereg_replace("\\\\\\\\", "\\", $HTTP_POST_VARS["cadena"]); 
// Se comprueba si la cadena coincide con la expresión regular, almacenando,
//además, las coincidencias en una matriz, siempre que los patrones coincidentes
//estén entre paréntesis, tal como se explica en el texto.
  $correcto = preg_match($HTTP_POST_VARS["expresion"], $HTTP_POST_VARS["cadena"], $matriz); 
//Se muestran la expresión y la cadena 
  echo ("La cadena: <b>$HTTP_POST_VARS[cadena]</b>".salto);
  echo ("y la expresion: <b>$HTTP_POST_VARS[expresion]</b>".salto);
//Se verifica si ha habido coincidencias.
  if ($correcto) {
// Si las ha habido, se muestra la concordancia y los elementos almacenados en la matriz.
    echo ("<font color=blue><b>CONCUERDAN</b></font>".salto);
	$elementos=count($matriz);
    for ($contador=1; $contador<$elementos; $contador++){
      echo "Elemento $contador: <b>$matriz[$contador]</b>" . salto;
    }
  } else {
//Si no ha habido concordancia, se avisa de ello
    echo ("<font color=red><b>NO CONCUERDAN</b></font>".salto);
  }
?>
</body>
</html>
