<?php
    $qtd = $_POST['qtd'];

    if($qtd > 50){
        echo "Você deverá pagar uma multa de R$", ($qtd - 50) * 4, ". Tome cuidado com o limite de 50kg diários!";
    }else{
        echo "Não haverá multas hoje. Continue pescando dentro do limite ;)";
    }