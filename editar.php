<?php
include "conexao.php";

$id = $_GET['id'];
$nome = $_POST['nome_pet'];
$animal = $_POST['animal_pet'];
$raca = $_POST['raca_pet'];

if(isset($nome) && $nome != ''){
$sql = "UPDATE `pet` SET `nome_pet`='$nome' WHERE `id_pet` = $id";

if (mysqli_query($conn, $sql) ){
   
}else{
    echo "Erro";
}
}

if(isset($animal) && $animal != ''){
    $sql = "UPDATE `pet` SET `animal_pet`='$animal' WHERE `id_pet` = $id";
    
    if (mysqli_query($conn, $sql) ){
       
    }else{
        echo "Erro";
    }
    }

    if(isset($raca) && $raca != ''){
        $sql = "UPDATE `pet` SET `raca_pet`='$raca' WHERE `id_pet` = $id";
        
        if (mysqli_query($conn, $sql) ){
        
        }else{
            echo "Erro";
        }
        }

header('Location: exibir.php');

?>