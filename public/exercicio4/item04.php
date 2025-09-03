<?php
$alunos=[
    "Ana" => 9,
    "João" => 7,
    "Maria" => 6,
    "Pedro" => 10,
    "Lucas" => 4
];
$notaTotal = 0;
$totalAlunos = 0;
foreach($alunos as $aluno => $nota){
    if ($nota >= 7){
        echo "<center>Aluno $aluno tirou nota $nota - Situação : <span style='color:blue'>APROVADO</span></center></br>";
    }else{
        echo "<center>Aluno $aluno tirou nota $nota - Situação : <span style='color:red'>REPROVADO</span></center><br>";
    }
    $notaTotal += $nota;
    $totalAlunos += 1;
}
$mediaGeral = $notaTotal / $totalAlunos;
echo "<center>Média da turma: $mediaGeral</center><br>";
?>