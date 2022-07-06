<?php
include "conexao.php";

$sql = "UPDATE design SET `nome_des` = '', `img_des` = '', `logo_des` = '', `icone1_des` = '', `icone2_des` = '', `icone3_des` = '', `texto1_des` = '', `texto2_des` = '', `texto3_des` = '', `titulo1_des` = '',`titulo2_des` = '', `titulo3_des` = ''";

if (mysqli_query($conn, $sql) ){
    header('Location: admconfdesign.php');
}else{
    echo "Erro";
}

?>