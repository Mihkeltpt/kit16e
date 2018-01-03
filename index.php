<?php

// Tekstimuutuja
$tervitus = 'Hello';
# Täisarvuline muutuja
$nr = 1;
// Kümnendmurd
$nr = 10.0121;
// Tõeväärtusmuutja
$bool = False;
/*
Massiiv (php ja JS - array, python - list)
Üherealine kommentaar on // ja #
*/
$massiiv = array('Nimi',1974,10.81,'Perenimi' );

echo "$tervitus World!<br>";
echo '$tervitus World!<br>';
echo $massiiv[0];

// Tingimuslause
if ($bool == False){
  print_r ($massiiv);
} else { echo "Tõeväärtus ei vasta nõutule"; }

?>
