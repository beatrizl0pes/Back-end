
<?php

include "config/conexao.php";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Acesso inválido.");
}

// Recebe os dados
$nome = $_POST["nome"] ?? "";
$categoria = $_POST["categoria"] ?? "";
$preco = $_POST["preco"] ?? "";
$qtd = $_POST["quantidade"] ?? "";

// Verifica se o arquivo chegou ao PHP
if (!isset($_FILES["imagem"])) {
    die("O PHP não recebeu a imagem. Verifique o limite de upload do XAMPP.");
}

// Verifica erros do upload
if ($_FILES["imagem"]["error"] !== UPLOAD_ERR_OK) {

    switch ($_FILES["imagem"]["error"]) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            die("A imagem ultrapassou o limite permitido pelo PHP.");

        case UPLOAD_ERR_PARTIAL:
            die("A imagem foi enviada parcialmente.");

        case UPLOAD_ERR_NO_FILE:
            die("Nenhuma imagem foi selecionada.");

        default:
            die("Erro no upload. Código: " . $_FILES["imagem"]["error"]);
    }
}

// Verifica tamanho máximo de 2 MB
if ($_FILES["imagem"]["size"] > 2 * 1024 * 1024) {
    die("Imagem muito grande! Limite de 2 MB.");
}

// Verifica se é realmente uma imagem
$arquivoTemporario = $_FILES["imagem"]["tmp_name"];

$infoImagem = getimagesize($arquivoTemporario);

if ($infoImagem === false) {
    die("O arquivo enviado não é uma imagem válida.");
}

// Verifica o tipo real da imagem
$tiposPermitidos = [
    "image/jpeg" => "jpg",
    "image/png" => "png",
    "image/webp" => "webp"
];

$mime = $infoImagem["mime"];

if (!isset($tiposPermitidos[$mime])) {
    die("Formato não permitido. Utilize JPG, PNG ou WEBP.");
}

$extensao = $tiposPermitidos[$mime];

// Define a pasta uploads
$pastaUploads = __DIR__ . "/uploads/";

// Cria a pasta caso não exista
if (!is_dir($pastaUploads)) {

    if (!mkdir($pastaUploads, 0755, true)) {
        die("Não foi possível criar a pasta uploads.");
    }
}

// Verifica permissão da pasta
if (!is_writable($pastaUploads)) {
    die("A pasta uploads não possui permissão de escrita.");
}

// Gera nome único
$nomeImagem = uniqid("produto_") . "." . $extensao;

// Move a imagem para uploads
$caminhoImagem = $pastaUploads . $nomeImagem;

if (!move_uploaded_file($arquivoTemporario, $caminhoImagem)) {
    die("Não foi possível salvar a imagem na pasta uploads.");
}

// Cadastro no banco usando PDO
$sql = "INSERT INTO tb_produtos
(nome, qtd, preco, categoria, imagem)
VALUES
(:nome, :qtd, :preco, :categoria, :imagem)";

try {

    $stmt = $conexao->prepare($sql);

    $stmt->execute([
        ":nome" => $nome,
        ":qtd" => $qtd,
        ":preco" => $preco,
        ":categoria" => $categoria,
        ":imagem" => $nomeImagem
    ]);

    echo "Produto cadastrado com sucesso!<br>";
    echo "Imagem salva com sucesso!<br>";
    echo "Nome do arquivo: " . htmlspecialchars($nomeImagem);

} catch (PDOException $e) {

    // Remove a imagem se o cadastro no banco falhar
    if (file_exists($caminhoImagem)) {
        unlink($caminhoImagem);
    }

    echo "Erro ao cadastrar produto no banco: " . $e->getMessage();

}

?>
