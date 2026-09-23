<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

if($email == "beatrizvflopes@gmail.com" && $senha == "12345678"){
    echo "Login, beem sucedido!!!";
}
else{
    echo "Login ou senha inválido";
}

?>