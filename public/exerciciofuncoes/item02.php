<?php
function paridade($numero){
    if ($numero % 2==0){
        echo "$numero é par<br>";
    }else{
        echo "$numero é ímpar<br>";
    }
}
paridade(3);
paridade(6);
?>