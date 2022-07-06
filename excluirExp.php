<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "UPDATE `expediente` SET `desabilitar_exp` = 1 WHERE `id_exp` = $id";

if (mysqli_query($conn, $sql) ){
    header('Location: admConfExp.php');
}else{
    echo "Erro";
}

?>