<?php include "cabecalho.php"; ?>

<?php
$imagem="filme.png";
echo "<center><img src=$imagem></center>";
?>

<center><form action="index.php" method="POST">
    Nome do filme:<input type="text" name="filme"><br>
    Gênero:<input type="text" name="genero"><br>
    <button type="submit">Enviar</button>
</form></center>

<?php
$filme=isset($_POST['filme']) ? $_POST['filme'] : "NomeDoFilme";
$genero=isset($_POST['genero']) ? $_POST['genero'] : "Gênero";
echo "<center><p>Filme cadastrado: $filme ($genero)</p></center>";
if($genero== "terror"){
    echo "<center><p style= 'color: red;'>Atenção! Filme de Terror cadastrado.</p></center>";
};
if($genero=="comédia"){
    echo "<center><p style= 'color: green;'>Esse filme promete boas risadas!</p></center>";
}
?>


<?php include "rodape.php"; ?>