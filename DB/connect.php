<?php

$hostname = 'localhost';
$username = "root";
$password = '';
$db = 'ecomerce_GLY';

$conn = new mysqli($hostname,$username,$password,$db);

if (!$conn){
    echo 'Erro ao conectar !';
}
else{
    // echo "Conectado com sucesso !";
}

?>