<?php
$array = array(11, 12, 13, 14, 15, 16, 17);
echo print_r($array, true) . '<br>';
foreach($array as $clave => $valor){
    $array[$clave] = $valor + 5;
}
echo print_r($array, true);
?>