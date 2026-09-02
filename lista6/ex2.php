<?php
//simulando vc discando opção 2 no celular
$opcao = 2;
switch($opcao){
    case 1:
        echo "Segundo via a fatura";
        break;
    case 2:
        echo "Upgrade no plano";
        break;
    case 3:
        echo "Fala com um atendente";
        break;
    default:
        echo "Opção invalida!";
        break;
}

?>