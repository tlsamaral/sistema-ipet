<?php
include "conexao.php";

$id = $_GET['id'];


$sql = "UPDATE `consulta` SET `status_con`='Aceita' WHERE `id_con` = $id";

if (mysqli_query($conn, $sql) ){
   
}else{
    echo "Erro";
}


header('Location: admConPendentes.php');

?>