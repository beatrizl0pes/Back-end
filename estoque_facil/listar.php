<?php
include "config/conexao.php";
$sql = "SELECT * FROM tb_produtos";
$resultados = $conexao->query($sql);
?>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Lista Produtos</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
        <?php while($produto = $resultados->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <td><?php echo $produto["id_produto"]?></td>
            <td>
                <?php
                if($produto["imagem"]):?>
                    <img class="img-produto"src="uploads/<?= $produto["imagem"]?>">
                <?php else: ?>
                      <span>Sem imagem</span>
                <?php endif; ?>
            </td>
            <td><?php echo $produto["nome"]?></td>
            <td><?php echo $produto["categoria"]?></td>
            <td><?php echo $produto["preco"]?></td>
            <td><?php echo $produto["qtd"]?></td>
            <td>
            <a href="editar.php?id=<?php echo $produto["id_produto"];?>">Editar</a>
            |
            <a href="excluir.php?id=<?php echo $produto["id_produto"];?>">Excluir</a>
        </td>
        </tr>
        <?php } ?>
    </table>
    <button type="submit"><a href="cadastrar.html">Voltar</a></button>
</body>
</html>