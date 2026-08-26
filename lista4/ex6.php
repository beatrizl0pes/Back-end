<?php

$idade = 20;
$pcd = false;
$gestacao = false;

if($idade >= 60 || $pcd == true || $gestacao == true){
    echo "Atendimento prioritário!";
}
else{
    echo "Atendimento normal";
}
?>