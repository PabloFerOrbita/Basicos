<?php
$algas = "Comer algas es realmente sano";
echo $algas . '<br>';
echo (strpos($algas, "algas") + 1) . '<br>';
echo str_replace(['Comer', 'realmente'], 'muy', $algas) . '<br>';
if (strpos($algas, "anacardo") !== false){
    echo 'true' . "<br>";
}else{
    echo 'false' . "<br>";
}
$algasRevertida = explode(' ', $algas);
$algasRevertida = array_reverse($algasRevertida);
$algasRevertida = join(' ', $algasRevertida);
echo $algasRevertida . '<br>';
$algasArray = str_split($algas);
$numeroE = array_count_values($algasArray);
echo $numeroE['e'];

?>