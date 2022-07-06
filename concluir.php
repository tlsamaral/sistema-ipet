<?php
session_start();
include "conexao.php";

$id = $_GET['id'];
$idFun = $_SESSION['id_usu'];


$sql = "UPDATE `consulta` SET `status_con` = 'Concluida' WHERE `id_con` = '$id'; ";
$sql2 = "UPDATE `consulta` SET `id_fun` = '$idFun' WHERE `id_con` = '$id';";
if (mysqli_query($conn, $sql) ){
   
}else{
    echo "Erro";
}
if (mysqli_query($conn, $sql2) ){
   
}else{
    echo "Erro";
}

header('Location: admConAceitas.php');

?>