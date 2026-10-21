<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ocasiao = $_POST["ocasião"];
    $proximidade = $_POST["proximidade"];
    $relacao = trim($_POST["relacao"]);
    $genero = $_POST["genero"];
    $idade = $_POST["idade"];

    $presente = "";
    $desc = "";

    if ($ocasiao == "Formal" && $proximidade == "0% proximidade" && $genero == "Feminino" && $idade == "Bebê") {

        $presente = "Kit de roupas para bebê";
        $desc = "Um presente útil para o bebê.";

    } elseif ($ocasiao == "Formal" && $proximidade == "0% proximidade" && $genero == "Feminino" && $idade == "Criança") {

        $presente = "Livros infantis/ Brinquedo";
        $desc = "Uma opção segura e divertida.";

    } elseif ($ocasiao == "Formal" && $proximidade == "0% proximidade" && $genero == "Feminino" && $idade == "Adolescente") {

        $presente = "Vale-presente/ Roupa Nova/ Maquiagem";
        $desc = "Uma escolha segura quando você não conhece muito bem os gostos da pessoa.";

    } elseif ($ocasiao == "Formal" && $proximidade == "0% proximidade" && $genero == "Feminino" && $idade == "Adulto") {

        $presente = "Kit de café";
        $desc = "Um presente elegante e neutro.";

    } elseif ($ocasiao == "Formal" && $proximidade == "0% proximidade" && $genero == "Feminino" && $idade == "Idoso") {

        $presente = "Kit de chá/café";
        $desc = "Uma opção elegante e agradável.";

    }

    elseif ($relacao == "Amizade" && $idade == "Criança") {

        $presente = "Jogo de tabuleiro/ Urso de pelúcia/ Brinquedos";
        $desc = "Uma opção divertida para aproveitar com os amigos.";

    } elseif ($relacao == "Amizade" && $idade == "Adolescente") {

        $presente = "Fone de ouvido/ Presente personalizado/ Cesta de chocolate/ Roupa Nova/Figure Hatsune Miku";
        $desc = "Um presente moderno e útil.";

    } elseif ($relacao == "Amizade" && $idade == "Adulto") {

        $presente = "Caneca personalizada/ Pix de 200 reais/ Roupa Nova/ Livro";
        $desc = "Uma lembrança divertida para um amigo.";

    } elseif ($relacao == "Amizade" && $idade == "Idoso") {

        $presente = "Kit caneca";
        $desc = "Uma ótima opção para um amigo especial.";

    }

    elseif ($relacao == "Familiar" && $idade == "Bebê") {

        $presente = "Kit de roupas para bebê";
        $desc = "Uma opção útil e carinhosa para a família.";

    } elseif ($relacao == "Familiar" && $idade == "Criança") {

        $presente = "Brinquedo educativo";
        $desc = "Diversão e aprendizado em um só presente.";

    } elseif ($relacao == "Familiar" && $idade == "Adolescente") {

        $presente = "Roupa nova/ Maquiagem/ Vale-Presente/ 100 reais";
        $desc = "Uma opção versátil para um familiar.";

    } elseif ($relacao == "Familiar" && $idade == "Adulto") {

        $presente = "Pix de 200 reais/ Roupa Nova";
        $desc = "Uma lembrança especial para alguém da família.";

    } elseif ($relacao == "Familiar" && $idade == "Idoso") {

        $presente = "Álbum de fotos personalizado/ Kit café/ Roupas novas";
        $desc = "Uma lembrança afetiva para guardar momentos da família.";

    }

    elseif ($relacao == "Conhecido" && $idade == "Bebê") {

        $presente = "Kit de higiene para bebê/ Roupas para o bebê";
        $desc = "Um presente útil e delicado.";

    } elseif ($relacao == "Conhecido" && $idade == "Criança") {

        $presente = "Livro infantil/ Brinquedo";
        $desc = "Uma escolha simples e divertida.";

    } elseif ($relacao == "Conhecido" && $idade == "Adolescente") {

        $presente = "Vale-presente/ Roupa Nova";
        $desc = "Uma escolha segura para um conhecido.";

    } elseif ($relacao == "Conhecido" && $idade == "Adulto") {

        $presente = "Pix de 200/ Roupa Nova/ Kit de cozinha(pratos, copos, canecas)";
        $desc = "Uma opção neutra e elegante.";

    } elseif ($relacao == "Conhecido" && $idade == "Idoso") {

        $presente = "Kit de chá/café";
        $desc = "Uma lembrança agradável e delicada.";

    }

    elseif ($relacao == "Desconhecido" && $idade == "Bebê") {

        $presente = "Kit de roupas para bebê/Brinquedo educativo";
        $desc = "Um presente útil para o bebê.";

    } elseif ($relacao == "Desconhecido" && $idade == "Criança") {

        $presente = "Livro infantil/ Brinquedo";
        $desc = "Uma escolha segura para uma criança.";

    } elseif ($relacao == "Desconhecido" && $idade == "Adolescente") {

        $presente = "Vale-presente/Roupa Nova";
        $desc = "Uma opção segura quando você não conhece os gostos da pessoa.";

    } elseif ($relacao == "Desconhecido" && $idade == "Adulto") {

        $presente = "Vale-presente/ Roupa Nova";
        $desc = "Uma escolha prática para alguém que você ainda não conhece bem.";

    } elseif ($relacao == "Desconhecido" && $idade == "Idoso") {

        $presente = "Kit de café/caneca";
        $desc = "Uma opção neutra e agradável.";

    }

    elseif ($genero == "Prefiro não dizer/Não sei ❓" && $idade == "Bebê") {

        $presente = "Manta personalizada com o nome/Brinquedo";
        $desc = "Um presente delicado que não depende de gênero.";

    } elseif ($genero == "Prefiro não dizer/Não sei ❓" && $idade == "Criança") {

        $presente = "Jogo de tabuleiro/Brinquedo";
        $desc = "Uma opção divertida para qualquer criança.";

    } elseif ($genero == "Prefiro não dizer/Não sei ❓" && $idade == "Adolescente") {

        $presente = "Fone de ouvido/ Maquiagem/ Roupa Nova";
        $desc = "Uma opção moderna e versátil.";

    } elseif ($genero == "Prefiro não dizer/Não sei ❓" && $idade == "Adulto") {

        $presente = "Vale-presente/ Cesta/ Roupa Nova";
        $desc = "Uma escolha segura e versátil.";

    } elseif ($genero == "Prefiro não dizer/Não sei ❓" && $idade == "Idoso") {

        $presente = "Livro/ Cesta de café da manhã";
        $desc = "Uma opção clássica e agradável.";

    }

    elseif ($genero == "Feminino" && $idade == "Bebê") {

        $presente = "Kit de roupas para bebê";
        $desc = "Uma opção útil e delicada.";

    } elseif ($genero == "Feminino" && $idade == "Criança") {

        $presente = "Kit de pintura";
        $desc = "Uma opção divertida para estimular a criatividade.";

    } elseif ($genero == "Feminino" && $idade == "Adolescente") {

        $presente = "Kit de skincare/ Maquiagem/ Roupa Nova/ Acessório";
        $desc = "Um presente moderno e útil.";

    } elseif ($genero == "Feminino" && $idade == "Adulto") {

        $presente = "Perfume/ Acessório/ Produtos pra pele";
        $desc = "Uma opção clássica e elegante.";

    } elseif ($genero == "Feminino" && $idade == "Idoso") {

        $presente = "Kit de chá ou café/ Produtos pra pele";
        $desc = "Uma opção delicada e agradável.";

    }

    elseif ($genero == "Masculino" && $idade == "Bebê") {

        $presente = "Kit de roupas para bebê";
        $desc = "Uma opção útil para o bebê.";

    } elseif ($genero == "Masculino" && $idade == "Criança") {

        $presente = "LEGO/Brinquedo/Livro";
        $desc = "Uma opção divertida e criativa.";

    } elseif ($genero == "Masculino" && $idade == "Adolescente") {

        $presente = "Fone de ouvido/Roupa baseada no estilo dele (Peça ajuda aos familiares)";
        $desc = "Um presente moderno e útil.";

    } elseif ($genero == "Masculino" && $idade == "Adulto") {

        $presente = "Perfume";
        $desc = "Uma opção clássica e sofisticada.";

    } elseif ($genero == "Masculino" && $idade == "Idoso") {

        $presente = "Kit de café";
        $desc = "Uma opção agradável para momentos tranquilos.";

    }

    else {

        $presente = "Vale-presente";
        $desc = "Uma opção versátil quando não encontramos uma combinação específica.";

    }

} else {

    header("Location: index.html");
    exit;

}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Presentin - Seu presente ideal</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <h1>🎁 Seu Presentin ideal é:</h1>

        <h2>
            <?php echo $presente; ?>
        </h2>

        <p>
            <?php echo $desc; ?>
        </p>

        <br>

        <a href="index.html">
            <button type="button">
                🔄 Fazer novamente
            </button>
        </a>

    </div>

</body>
</html>