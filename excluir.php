<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "UPDATE `pet` SET `desabilitar_pet` = '1' WHERE `id_pet` = $id";

if (mysqli_query($conn, $sql) ){
    header('Location: perfil2.php');
}else{
    echo "Erro";
}

?>