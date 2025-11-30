<?php
function obtenerPrimerosNumeros($n)
{
   $numeros = array();
   for ($i = 1; $i <= $n; $i++) {
      $numeros[] = $i;
   }
   return $numeros;
}
?>