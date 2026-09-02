<?php
    echo "1 - Pizza<br>";
    echo "2 - Hambúrguer<br>";
    echo "3 - Refrigerante<br>";
    echo "4 - Sobremesa<br>";
    echo "5 - Sair<br>";

    $opcao = 4;

    switch($opcao){
        case 1:
            echo "Você escolheu Pizza";
            break;
        case 2: 
            echo "Você escolheu Hambúrguer";
            break;
        case 3:
            echo "Você escolheu Refrigerante";
            break;
        case 4: 
            echo "Você escolheu Sobremesa";
            break;
        case 5:
            echo "Você saiu da sessão";
            break;
    }
?>    

//Exercício 5: Switch/case é mais ideal para fazer várias condições. O if else é mais longo.
