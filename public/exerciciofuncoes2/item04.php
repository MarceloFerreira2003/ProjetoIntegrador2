<?php
function calcularMedia($nota1, $nota2, $nota3){
    $media = ($nota1 + $nota2 + $nota3)/3;
    return $media;
};
$mediaFinal = calcularMedia(8, 9.5, 8);
echo "A média do aluno é: $mediaFinal";
?>