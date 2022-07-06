<?php
include "conexao.php";

$nome = $_POST['nome_usu'];
$email = $_POST['email_usu'];
$telefone = $_POST['telefone_usu'];
$senha = $_POST['senha_usu'];
$senhaR = $_POST['senhaR_usu'];

$senhaCodificada = md5($senha);



$sql = "INSERT INTO `usuario`(`nome_usu`, `email_usu`, `telefone_usu`, `senha_usu`) VALUES ('$nome','$email','$telefone','$senhaCodificada')";

if (mysqli_query($conn, $sql) ){
    header('Location: admCadasUsu.php');
}else{
    echo "Deu ruim";
}

?>