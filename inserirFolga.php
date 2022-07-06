<?php
include "conexao.php";

$folga = $_POST['folga_des'];



$sql = "UPDATE `design` SET `folga_des`='$folga'";

if (mysqli_query($conn, $sql) ){
   
}else{
    echo "Erro";

}

header('Location: admConfExp.php');

?>