<?php
include_once "conexao.php";

$nome = $_POST['nome_servico'];
$valor = $_POST['valor_servico'];

$sql = "INSERT INTO `servico`(`nome_servico`, `valor_servico`) VALUES ('$nome','$valor')";

 if (mysqli_query($conn, $sql) ){
       header('Location: admConfSer.php');
 }else{
      echo "Deu ruim";
 }

?>