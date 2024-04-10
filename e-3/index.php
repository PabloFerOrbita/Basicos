<?php
$cadena = "a-a-r-e-f-a";
echo $cadena . '<br>';
$cadena = str_replace('a', 'tortuga', $cadena);
echo $cadena  . '<br>';
$array = explode('-', $cadena);
echo print_r($array, true) . '<br>';
rsort($array);
echo print_r($array, true) . '<br>';
$arrayFiltrado = array_filter($array, function($v){ return !str_contains($v, 'a');});
echo print_r($arrayFiltrado, true) . '<br>';
?>