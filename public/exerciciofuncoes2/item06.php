<?php
function calcularMedia($n1, $n2, $n3){
    $media = ($n1 + $n2 + $n3)/3;
    return $media;
};
function verificarSituacao($media){
    if ($media >= 7){
        return "Aprovado<br>";
    }else{
        return "Reprovado<br>";
    }
};
echo verificarSituacao(calcularMedia(7, 8, 6));
echo verificarSituacao(calcularMedia(5, 4.5, 6));
?>