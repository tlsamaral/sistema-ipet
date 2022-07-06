<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "UPDATE `servico` SET `desabilitar_servico` = 1 WHERE `id_servico` = $id";

if (mysqli_query($conn, $sql) ){
    header('Location: admConfSer.php');
}else{
    echo "Erro";
}

?>