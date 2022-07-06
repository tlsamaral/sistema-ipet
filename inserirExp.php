<?php
session_start();
include "conexao.php";

$inicio = $_POST['inicio_exp'];
$fim = $_POST['fim_exp'];

$sql = "INSERT INTO `expediente`(`inicio_exp`, `fim_exp`) VALUES ('$inicio','$fim')";

if (mysqli_query($conn, $sql) ){
    header('Location: admConfExp.php');
}else{
    echo "Deu ruim";
}


?>