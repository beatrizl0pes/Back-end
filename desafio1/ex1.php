<?php

$tipo = $_POST["tipo"];
$litros = $_POST["litros"];


if($tipo == "Gasolina"){
    
    echo "Seu valor final é " , 6.20 * $litros;
}

elseif($tipo == "Etanol"){
    
    echo "Seu valor final é " , 4.20 * $litros;
}

elseif($tipo == "Diesel"){
    echo "Seu valor final é " , 6.00 * $litros;
}

else{
    echo "Operação inválida";
}

?>