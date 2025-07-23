<?php
function esPalindromoCadena($cadena) {
  $cadena = strtolower(preg_replace('/[^a-z0-9]/', '', $cadena));
  return $cadena === strrev($cadena);
}

$palabra1 = "arenera";
$palabra2 = "cristian cristian";

if (esPalindromoCadena($palabra1)) {
  echo "\"$palabra1\" es un palíndromo\n";
} else {
  echo "\"$palabra1\" no es un palíndromo\n";
}

if (esPalindromoCadena($palabra2)) {
  echo "\"$palabra2\" es un palíndromo\n";
} else {
  echo "\"$palabra2\" no es un palíndromo\n";
}
?>