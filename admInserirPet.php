<?php
session_start();
include "conexao.php";

$nome = $_POST['nome_pet'];
$animal = $_POST['animal_pet'];
$raca = $_POST['raca_pet'];
$id = $_POST['id_usu'];

if(isset($_FILES['foto_pet'])){
    $extensao = strtolower(substr($_FILES['foto_pet']['name'], -4));
    if($extensao != ""){
    $novo_nome = md5(time()) . $extensao;
    }
    $diretorio = "perfilpet/" ;
    $file = $_FILES['foto_pet'];
    // $file = move('perfilpet', $novo_nome);

    move_uploaded_file($_FILES['foto_pet']['tmp_name'], $diretorio.$novo_nome);
//     $db = db_connect();
//     $db->query("UPDATE usuario SET foto_pet='$novo_nome' WHERE email_usu='$email'");
//     $db->close();

    $sql = "INSERT INTO `pet`(`nome_pet`, `animal_pet`, `raca_pet`, `foto_pet`, `id_usu`) VALUES ('$nome','$animal','$raca', '$novo_nome','$id')";
    if (mysqli_query($conn, $sql) ){
        header('Location: admCadasPet.php');
       
    }else{
        echo "Deu ruim";
    }


}else{

    $sql = "INSERT INTO `pet`(`nome_pet`, `animal_pet`, `raca_pet`, `id_usu`) VALUES ('$nome','$animal','$raca','$id')";
    if (mysqli_query($conn, $sql) ){
         header('Location: admCadasPet.php');
       
    }else{
        echo "Deu ruim";
    }
}




?>