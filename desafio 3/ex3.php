<?php

$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = $peso / ($altura * $altura);

echo "👤 Paciente: $nome";
echo "<br>";
echo "⚖️ Peso: $peso";
echo "<br>";
echo "📏 Altura: $altura";
echo "<br>";
echo "📊 IMC: $imc";
echo "<br>";

if($imc < 18.5){
    echo "ℹ️Classificação: Abaixo do peso!";
}

elseif($imc >= 18.5 && $imc <= 24.9 ){
    echo "ℹ️Classificação: Peso normal!";
}

elseif($imc >= 25 && $imc <= 29.9 ){
    echo "ℹ️Classificação: Sobrepeso!";
}

elseif($imc >= 30 ){
    echo "ℹ️Classificação: Obesidade!";
}

?>