<?php
include "conexao.php";

$transmissao = $_POST['transmissao_des'];
$sobre = $_POST['sobre_des'];


if(isset($transmissao) && $transmissao != ''){
$sql = "UPDATE `design` SET `transmissao_des`='$transmissao'";

if (mysqli_query($conn, $sql) ){
   
}else{
    echo "Erro";
}
}

if(isset($sobre) && $sobre != ''){
    $sql = "UPDATE `design` SET `sobre_des`='$sobre' ";
    
    if (mysqli_query($conn, $sql) ){
       
    }else{
        echo "Erro";
    }
    }



header('Location: admConfSer.php');

?>