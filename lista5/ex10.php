<?php
    $massa = 69.0;
    $altura = 1.57;
    $imc = $massa / ($altura * $altura);

    if($imc < 19){
        echo "Abaixo do peso ideal!";

    }elseif($imc >= 19 && $imc <= 24){
        echo "Peso ideal";

    }elseif($imc > 24 && $imc <= 29){
        echo "Sobrepeso";

    }elseif($imc > 29 && $imc <= 34){
        echo "Obesidade grau I";

    }elseif($imc > 34 && $imc <= 39){
        echo "Obesidade grau II";

    }else{
        echo "Obesidade grau III";
    }

    echo "<br>", $imc;
    
    ?>