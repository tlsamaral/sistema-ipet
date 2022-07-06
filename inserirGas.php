<?php
session_start();
include "conexao.php";

$nome = $_POST['nome_gas'];
$valor = $_POST['valor_gas'];

$sql = "INSERT INTO `gasto`(`nome_gas`, `valor_gas`) VALUES ('$nome','$valor')";

if (mysqli_query($conn, $sql) ){
    header('Location: admFinGastos.php');
}else{
    echo "Deu ruim";
}


?>