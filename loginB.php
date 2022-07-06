<?php
session_start();
include "conexao.php";

$email = $_POST['email_usu'];
$senha = $_POST['senha_usu'];
$email = mysqli_real_escape_string($conn, $email);
$senha = mysqli_real_escape_string($conn, $senha);
$senha = md5($senha);

$sql = "SELECT * FROM usuario WHERE email_usu = '$email' && senha_usu = '$senha' LIMIT 1";
$result = mysqli_query($conn, $sql);

while($resultado = mysqli_fetch_assoc($result) ){
$tipo = $resultado['tipo_usu'];
}

if( ($email == "") || ($senha == "")){
    $_SESSION['loginErro'] = "Login Vazio";
header("Location: login.php");

}else{
    $result1 = mysqli_query($conn, $sql);
    $resultado1 = mysqli_fetch_assoc($result1);
    
if(empty($resultado1)){
    $_SESSION['loginErro'] = "Login empty $tipo";
header("Location: login.php");
}elseif(isset($resultado1) && $tipo == 0){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header("Location: perfil2.php");
}elseif(isset($resultado1) && $tipo == 1){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header("Location: adm.php");
}else{
    $_SESSION['loginErro'] = "Login else";
    header("Location: login.php");
}

}




?>