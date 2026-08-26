<?php
    $usuario = "biaaa_uii";
    $idade = 16;

    if($idade < 13){
        echo "Cadastro não permitido!";
    }elseif($idade >= 13 && $idade < 16){
        echo "Só pode usar com controle dos pais";
    }else{
       echo "Plataforma liberada!!!";
    }

?>