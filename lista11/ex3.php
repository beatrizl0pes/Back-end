<?php
    $num1 = $_POST["n1"];
    $num2 = $_POST["n2"];
    $num3 = $_POST["n3"];
    $media = ($num1 + $num2 + $num3)/3;

    echo "Média: ", $media;

    if($media < 6){
        echo "Situação: REPROVADO";
    }else{
        echo "Situação: APROVADO";

    }