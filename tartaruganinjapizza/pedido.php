<?php 

$tamanho = $_POST['tamanho'];
$refri = $_POST['refri'];
$sabores = $_POST['sabores'];
$borda = $_POST['borda'];
$cupom = $_POST['cupom'];

$qtd = count($sabores);
if($qtd > 2 || $qtd < 1){
    echo "Escolha no máximo 2 sabores";
    exit;
}
if($tamanho == 'Broto'){
    $total = 49.90;
}else{
    $total = 79.90;
}
if($borda <> 'Nenhuma'){
    $total += 5;
}
if($refri == 'Coca'){
    $total = $total + 14;
}elseif ($refri == 'Fanta 2L'){
    $total = $total + 12;
}elseif ($refri == 'Guarana 2L'){
    $total = $total + 12;
}elseif ($refri == 'Sprite 2L'){
    $total = $total + 12;
}                                    
if ($cupom == "PROMO10"){
    $total = $total - 10;
}                                                   

$texto_sabores = implode(',',$sabores);

//Cria o link do WhatsApp
$msg = "Pedido: Pizza $tamanho ($texto_sabores) + Refri $refri. Total: R$ $total";
$numero = "5514999999999";
$link = "https://api.whatsapp.com/send?phone=". $numero. "&text=".urlencode($msg);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pizzaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <img src="Tartarugas em Disputa pela Pizza (2).png" width=60>
        <h1>Family Pizzaria</h1>
        <img src="Donatello Feliz com a porra da pizza.png" width=60>
        <h3>Resumo do seu pedido:</h3>
        <p>Pizza: <?php echo $tamanho; ?></p>
        <p>Sabores: <?php echo $texto_sabores; ?></p>
        <p>Refrigerante: <?php echo $refri; ?></p>
        <p>Borda: <?php echo $borda; ?></p>
        <p><strong>Total: <?php echo $total; ?></strong></p>
        <a href="<?php echo $link; ?>" class="btn wsp">Pedir no WhatsApp</a>
        <br><br>
        <a class="btn" href="index.html">Voltar</a>
    </div>
</body>
</html>
