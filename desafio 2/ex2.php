<?php

$nome_motorista = $_POST["nome"];
$tipo_veiculo = $_POST["tipo"];
$horas = $_POST["horas"];

if($tipo_veiculo == "Moto"){
    echo "Total:" ,  $horas * 5.00;
    echo "<br>";
}

elseif($tipo_veiculo == "Carro"){
    echo "Total:" ,  $horas * 8.00;
    echo "<br>";
}

elseif($tipo_veiculo == "Caminhonete"){
    echo "Total:" ,  $horas * 12.00;
    echo "<br>";
}

echo "Motorista: $nome_motorista";
echo "<br>";

echo "Tempo: $horas";
echo "<br>";

?>
