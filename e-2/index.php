<?php
$valor = 15;
if(15 % 3 == 0){
    echo 'true' . '<br>';
}else {
    echo 'false' . '<br>';
}
$valorMul = $valor * 21;
echo $valorMul . '<br>';
for($i = 0; $i < 100; $i++){
    $valorMul = $valorMul + 1;
}
echo $valorMul . '<br>';
$valorRaiz = sqrt($valorMul);
echo number_format($valorRaiz, 0);
?>