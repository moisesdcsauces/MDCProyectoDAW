<?php

// Variables de cada tipo con una asignacion.
$bRespuesta = true;
$iEdad = 27;
$fSueldo = 3.0050;

// Cadenas de texto que muestra el nombre de la variable, el tipo que es y lo que contiene.
echo "<p>La variable " .'$bRespuesta' ." es de tipo ".gettype($bRespuesta)." y contiene el valor $bRespuesta";
echo "<p>La variable " .'$iEdad' ." es de tipo ".gettype($iEdad)." y contiene el valor $iEdad";
echo "<p>La variable " .'$fSueldo' ." es de tipo ".gettype($fSueldo)." y contiene el valor $fSueldo";
?>

