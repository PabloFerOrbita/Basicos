<?php
$cadena = "a-a-r-e-f-a";
echo str_replace('a', 'tortuga', $cadena) . '<br>';
$array = explode('-', $cadena);
echo print_r($array, true);
?>