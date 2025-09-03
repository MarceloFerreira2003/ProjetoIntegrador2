<?php
$nome=isset($_POST['nome']) ? $_POST['nome'] : "Não foi informado nome";
$email=isset($_POST['email']) ? $_POST['email'] : "Não foi informado E-mail";
if($nome==""){
    $nome="Não foi informado nome";
};
if($email==""){
    $email="Não foi informado E-mail";
};

echo "<center><h2>Cadastro realizado!</h2></center>";
echo "<center><p>Nome: $nome</p></center>";
echo "<center><p>E-mail: $email</p></center>";?>