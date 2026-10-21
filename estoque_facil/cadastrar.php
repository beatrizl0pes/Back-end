<?php
include "config/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$qtd = $_POST["quantidade"];

$sql = "INSERT INTO tb_produtos(nome, qtd, preco, categoria)
        VALUES ('$nome', '$qtd', '$preco', '$categoria')";

if($conexao->query($sql)){
    echo "Produto cadastrado com sucesso";
}

else{
    echo "Erro ao cadastrar produto, chame o TI";
}
?>