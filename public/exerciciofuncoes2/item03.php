<?php
function soma($num1, $num2){
    $soma = $num1 + $num2;
    echo "$num1 + $num2 = $soma<br>";
}
soma(1.5, 3);

function somaRetornaValor($num1, $num2){
    $soma = $num1 + $num2;
    return $soma;
}

$resultadoFinal = somaRetornaValor(2, 5);
echo $resultadoFinal
?>