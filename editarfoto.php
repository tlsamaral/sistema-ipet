<?php
session_start();
include "conexao.php";

$id = $_SESSION['id_usu'];

$sql = "SELECT * FROM pet WHERE id_usu = '$id'";

$dado = mysqli_query($conn, $sql);

$idp = $_GET['id'];

if(isset($_FILES['foto_pet'])){
    $extensao = strtolower(substr($_FILES['foto_pet']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "perfilpet/" ;
    $file = $_FILES['foto_pet'];
    // $file = move('perfilpet', $novo_nome);

    move_uploaded_file($_FILES['foto_pet']['tmp_name'], $diretorio.$novo_nome);
//     $db = db_connect();
//     $db->query("UPDATE usuario SET foto_pet='$novo_nome' WHERE email_usu='$email'");
//     $db->close();

    $sql = "UPDATE `pet` SET `foto_pet`='$novo_nome' WHERE `id_pet` = $idp";
    if (mysqli_query($conn, $sql) ){
       header('Location: perfil2.php');
       
    }else{
        echo "Deu ruim";
    }

}else{
    header('Location: perfil2.php');
}
?>