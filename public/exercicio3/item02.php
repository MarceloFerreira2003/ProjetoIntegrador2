<?php
$produtos=[
    "Banana" => 15,
    "Maçã" => 12,
    "Laranja" => 13,
    "Pera" => 11,
    "Melancia" => 20
];
$total=0;
foreach($produtos as $produto => $preco){
    echo "<center>Produto: $produto - Preço: $preco</center><br>";
    $total+=$preco;
};
echo "<center>Preço total: $total</center><br>";
?>