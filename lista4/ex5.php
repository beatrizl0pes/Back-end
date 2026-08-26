<?php

echo "Bem vindo a JP BET <br>";
echo "Acerte o número de 0 a 20 e ganhe o triplo <br>";

$aposta = 10;
$numero_escolhido = 5;

if($numero_escolhido == $numero_escolhido+1){
    echo "Você ganhou ", $aposta*3;
}
else{
    echo "Quase lá... Seu número: $numero_escolhido <br>";
    echo "Número sorteado: ", $numero_escolhido + 1;
}
?>