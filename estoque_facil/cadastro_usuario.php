<?php

include "config/conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$sql = "SELECT * FROM tb_usuario WHERE email = '$email'";

$resultado = $conexao->query($sql);

if($resultado->rowCount() > 0){
    echo "Usuário ja existe, use outro!";
}
else{
    
    $sql = "INSERT INTO tb_usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if($conexao->query($sql)){
        echo "Usuário cadastrado com sucesso!";
        echo "<br>";
        echo "<a href='login.html'>Ir para login</a>";
    }
    else{
        echo "Erro ao cadastrar usuário! Tentar novamente.";
    }
}