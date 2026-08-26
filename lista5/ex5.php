<?php
    $nome = "João";
    $nivel_acesso = 2;

    if($nivel_acesso == 1){
        echo "Acesso básico";
    }elseif($nivel_acesso == 2){
        echo "Acesso intermediário";
    }elseif($nivel_acesso == 3){
        echo "Acesso administrador";
    }else{
        echo "Acesso inválido!";
    }
?>