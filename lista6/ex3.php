<?php

echo "Caixa Eletrônico - Itaú <br>";
echo "1- Consulta saldo, 2 - Fazer Saque, 3 - Fazer depósito, 4 - Ver extrato, 5 - Sair <br>";

$opcao = 3;

switch($opcao){
    case 1: 
        echo "Seu saldo é R$ 650,81";
        break;
    case 2:
        echo "Qual valor?";
        break;
}
?>