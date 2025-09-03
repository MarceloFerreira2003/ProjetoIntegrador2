<center><form action="item01.php" method="post">
    Insira um número:<input type="text" name="numero"><br>
    <button type="submit">Enviar</button>
</form></center>

<?php
$numero = isset($_POST['numero'])? $_POST['numero'] : "";
if ($numero!=""){
    for ($i=1 ;$i<=10 ;$i++){
        $produto = $i * $numero;
        echo "<center>$i x $numero = $produto </center><br>";
}
}
?>