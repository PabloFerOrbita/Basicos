<?php
$algas = "Comer algas es realmente sano";
echo $algas . '<br>';
echo (strpos($algas, "algas") + 1) . '<br>';
echo str_replace(['Comer', 'realmente'], 'muy', $algas) . '<br>';
if (str_contains($algas, "anacardo")){
    echo 'true' . "<br>";
}else{
    echo 'false' . "<br>";
}
echo strrev($algas) . '<br>';
echo substr_count($algas, 'e');

?>